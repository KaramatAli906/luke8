<?php
require_once("clients/base/api/RelateRecordApi.php");

class CustomRelateRecordApi extends RelateRecordApi {

   public function updateRelatedLink(ServiceBase $api, array $args) {

        $api->action = 'save';
        $primaryBean = $this->loadBean($api, $args);

        list($linkName, $relatedBean) = $this->checkRelatedSecurity($api, $args, $primaryBean, 'view', 'edit');

        // Make sure the link isn't a readonly link
        if (isset($primaryBean->field_defs[$linkName])) {
            $def = $primaryBean->field_defs[$linkName];
            if (isset($def['type']) && $def['type'] == 'link' && !empty($def['readonly'])) {
                throw new SugarApiExceptionNotAuthorized("Cannot update related records on readonly relationships");
            }
        }

        $relatedBean->retrieve($args['remote_id']);
        if (empty($relatedBean->id)) {
            // Retrieve failed, probably doesn't have permissions
            throw new SugarApiExceptionNotFound('Could not find the related bean');
        }
        BeanFactory::registerBean($relatedBean);

        // updateBean may remove the relationship. see PAT-337 for details
        $this->updateBean($relatedBean, $api, $args);
        $relatedBean->retrieve($args['remote_id']);

        //if a filename guid exists, then use moduleapi to make final move from tmp dir if applicable
        if (isset($args['filename_guid'])) {
            $moduleApi = $this->getModuleApi($api, $linkName);
            $relArgs = array(
                'module' => $relatedBean->module_name,
                'record' => $relatedBean->id,
                'filename_guid' => $args['filename_guid'],
            );


            $moduleApi->updateRecord($api, $relArgs);
        }
        else if (isset($args['uploadfile_guid'])) {
            $moduleApi = $this->getModuleApi($api, $linkName);
            $relArgs = array(
                'module' => $relatedBean->module_name,
                'record' => $relatedBean->id,
                'uploadfile_guid' => $args['uploadfile_guid'],
            );
            $moduleApi->updateRecord($api, $relArgs);
        }

        $relatedArray = array();

        // Make sure there is a related object
        if (!empty($primaryBean->$linkName)) {
            $relObj = $primaryBean->$linkName->getRelationshipObject();
        }

        if (!empty($relObj)) {
            if ($primaryBean->module_name === $relObj->getLHSModule()) {
                $lhsBean = $primaryBean;
                $rhsBean = $relatedBean;
            } else {
                $lhsBean = $relatedBean;
                $rhsBean = $primaryBean;
            }
            // If the relationship still exists, we need to save changes to relationship fields
            if ($relObj->relationship_exists($lhsBean, $rhsBean)) {
                $relatedData = $this->getRelatedFields($api, $args, $primaryBean, $linkName, $relatedBean);
                // This function add() is actually 'addOrUpdate'. Here we use it for update only.
                $primaryBean->$linkName->add(array($relatedBean), $relatedData);

                // BR-2964, related objects are not populated
                $primaryBean->$linkName->refreshRelationshipFields($relatedBean);

                // BR-2937 The edit view cache issue for relate documents of a module
                // nomad still needs this related array

                $relatedArray = $this->formatBean($api, $args, $relatedBean);
            }
            // If the relationship has been removed, we don't need to update the relationship fields
            else {
                // Prepare the ralated bean data for formatNearAndFarRecords() below
                $relatedArray = $this->formatBean($api, $args, $relatedBean);
                // This record is unlinked to primary bean
                $relatedArray['_unlinked'] = true;
            }
        }

        //Clean up any hanging related records.
        SugarRelationship::resaveRelatedBeans();

        // This forces a re-retrieval of the bean from the database
        BeanFactory::unregisterBean($relatedBean);

        return $this->formatNearAndFarRecords($api, $args, $primaryBean, $relatedArray);
    }

}
