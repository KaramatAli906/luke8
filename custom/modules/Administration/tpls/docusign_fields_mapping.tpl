<div id="moduleTitle">
    <h2>{$MOD.LBL_DOCUSIGN_FIELDS_MAPPING}</h2>
    <form id="docuSignFieldsMapping">
        <table width="100%">
            <tbody>
                <tr>
                    <td colspan="2">
                        <div style="padding-top: 2px;">
                            <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" class="button primary" type="submit" name="save" value="{$APP.LBL_SAVE_BUTTON_LABEL}" />
                            &nbsp;
                            <input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}" onclick="document.location.href='index.php?module=Administration&action=index'" class="button" type="button" name="cancel" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" />
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>{$MOD.LBL_SELECT_A_TEMPLATE}</label>
                        <select name="sync_template_list" id="sync_template_list"></select>
                        <input type="hidden" name="docusign_list_name" id="docusign_list_name" />
                    </td>

                </tr>

                <tr>
                    <td colspan="2">
                        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
                            <thead>
                                <tr>
                                    <th align="left" scope="row"><h4>{$MOD.LBL_TEMPLATE_FIELDS}</h4></th>
                                    <th align="left" scope="row"><h4>{$MOD.LBL_CONTACTS}</h4></th>
                                    <th align="left" scope="row"><h4>{$MOD.LBL_ACCOUNTS}</h4></th>
                                </tr>
                            </thead>
                            <tbody id="module_fields"></tbody>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div style="padding-top: 2px;">
                            <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" type="submit" name="save" value="{$APP.LBL_SAVE_BUTTON_LABEL}" class="button primary" />
                            &nbsp;
                            <input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}" onclick="document.location.href='index.php?module=Administration&action=index'" class="button" type="button" name="cancel" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" />
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>     
    </form>
</div>

{literal}
    <script type="text/javascript" src="custom/modules/Administration/js/docusign_fields_mapping.js"></script>
{/literal}
