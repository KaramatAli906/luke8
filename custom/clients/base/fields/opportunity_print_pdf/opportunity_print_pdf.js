({
    extendsFrom: "RowactionField",
    /**
     * @inheritDoc
     */
    events: {
        'click [name=opportunity_print_pdf]': 'printOpportunityRecord',
    },
    printOpportunityRecord: function () {
        var token = app.api.getOAuthToken();
        var opportunity_id=this.model.get('id');     
   	window.location = "rest/v10/customOpportunityDownloadFile?OAuth-Token="+token+'&id='+opportunity_id;       
    },
})

