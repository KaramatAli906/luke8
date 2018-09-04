({
    extendsFrom: 'RecordView',
    fieldTag: 'input[type=file]',
    attachmentLength: 0,
    currentAttachment: 0,
    initialize: function (options) {
        this._super('initialize', [options]);
    },
    render: function () {
        this._super('render');
    },
    handleSave: function (e) {
        var self = this;
        var field = self.getField("multi_files", self.model);
        var ajaxParams = {
            temp: true,
            iframe: true,
            deleteIfFails: false,
            htmlJsonFormat: true
        };
        var parent_id = self.model.get('id');
        self.attachmentLength = field.attachmentCollection.models.length;
        App.alert.dismiss('message-id');
        var is_valid_multi_notes = self.validateMultiNotes(field.attachmentCollection);

        if (field.attachmentCollection.models.length > 0 && is_valid_multi_notes) {
            _.each(field.attachmentCollection.models, function (model, index) {

                if (model.isnew && typeof model.attributes.uploadfile != "undefined") {
                    self.saveAttachments(model, parent_id);
                }
            });

        }

        if (!is_valid_multi_notes) {
            return false;
        }
        
        self._super('handleSave');
        this.refresh_specific_subpanel();
        
    },
    saveAttachments: function (model, parent_id) {
        var self = this;
        var url = 'Notes/' + parent_id + '/link/notes_mv_attachments';
        app.api.call(
                'create',
                app.api.buildURL(url),
                {
                    deleted: false,
                    assigned_user_id: app.user.id,
                },
                {
                    success: _.bind(function (result) {
                        model.set('id', result.related_record.id);
                        model.isnew = false;
                        model.save(null,
                                {
                                    success: function () {
                                        if (self.currentAttachment <= self.attachmentLength) {
                                            self.render();
                                        }
                                    },
                                });
                        self.currentAttachment++;

                    }),
                    error: _.bind(function (err) {
                        console.log(err);
                    }, this),
                    complete: _.bind(function () {
                    }, this)
                }
        );
    },
    validateMultiNotes: function (model) {
        var flag = true;
        
        
        _.each(model.models, function (_model, index) {
            if (_.isEmpty(_model.attributes.category_id) && !_.isEmpty(_model.attributes.uploadfile_guid)) {
                flag = false;
            }
        });

        if (!flag) {
            App.alert.show('message-id', {
                level: 'error',
                messages: app.lang.get('LBL_MULTI_NOTES_VALIDATION_MSG', 'Notes'),
                autoClose: false
            });
        }        
        return flag;
    },
    
     refresh_specific_subpanel: function() {
        var linkName = 'notes_mv_attachments';
        var subpanelCollection = this.model.getRelatedCollection(linkName);
        subpanelCollection.fetch({relate: true});
    }
})
