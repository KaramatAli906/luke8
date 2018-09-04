({
    extendsFrom: "RowactionField",
    /**
     * @inheritDoc
     */
    events: {
        'click [name=send_to_smart_sheet]': 'syncThisRecord',
    },
    syncThisRecord: function () {

        if (this.model.get('sync_cam_to_smartsheet')) {

            var SyncRecord = app.api.buildURL('synccamrecord');
            app.alert.show('sync-loading-message', {
                level: 'process',
                title: app.lang.get('LBL_LOADING_SYNC_MSG', 'm_CAMS'),
            });


            app.api.call('create', SyncRecord, {'job_number': this.model.get('job_number'),
            'smartsheet_row_id': this.model.get('smartsheet_row_id')}, {
                success: _.bind(function (data) {
                    if(data == true)
                    {
                        app.alert.show('sync-message-id', {
                            level: 'success',
                            messages: app.lang.get('LBL_SUCCESS_SYNC_MSG', 'm_CAMS'),
                            autoClose: true
                        });
                        app.alert.dismiss('sync-loading-message');
                    }else{
                        app.alert.show('sync-message-id', {
                            level: 'error',
                            messages: app.lang.get('LBL_FAILED_SYNC_MSG', 'm_CAMS'),
                            autoClose: true
                        });
                        app.alert.dismiss('sync-loading-message');
                    }

                }, this),
                /*error: _.bind(function () {
                 app.alert.dismiss('sync-loading-message');
                 app.alert.show('sync-message-id', {
                 level: 'error',
                 messages: app.lang.get('LBL_FAILED_SYNC_MSG', 'm_CAMS'),
                 autoClose: true
                 });
                 }, this),*/
                complete: _.bind(function() {
                    this.model.fetch({
                        success: _.bind(function() {
                            this.view.render();
                        }, this)
                    });
                }, this)
            });

        } else {
            app.alert.show('sync-message-id', {
                level: 'error',
                messages: app.lang.get('LBL_FAILED_SYNC_MSG_2', 'm_CAMS'),
                autoClose: true
            });
        }

    },
})
