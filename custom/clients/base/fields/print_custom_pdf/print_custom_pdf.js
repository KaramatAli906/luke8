({
    extendsFrom: "RowactionField",
    /**
     * @inheritDoc
     */
    events: {
        'click [name=print_custom_pdf]': 'printRecord',
    },
    printRecord: function () {
        
        var token = app.api.getOAuthToken();
        var case_id=this.model.get('id');     
   	window.location = "rest/v10/customdownloadfile?OAuth-Token="+token+'&id='+case_id;
        
    },
})

