({
    extendsFrom: 'CreateView',
    initialize: function (options) {
        this._super('initialize', [options]);

    },
    save: function () {

        var field = this.getField("multi_files", this.model);
        App.alert.dismiss('message-id');
        var is_valid_multi_notes = this.validateMultiNotes(field.attachmentCollection);
        if (!is_valid_multi_notes) {
            return false;
        }
        this._super('save');
    },
    getCustomSaveOptions: function (options) {
        var self = this;
        // make copy of original function we are extending
        var origSuccess = options.success;
        // return extended success function with added alert
        return {
            success: _.bind(function () {
                if (_.isFunction(origSuccess)) {
                    origSuccess.apply(this, arguments);
                }
                var field = self.getField("multi_files", self.model);
                var ajaxParams = {
                    temp: true,
                    iframe: true,
                    deleteIfFails: false,
                    htmlJsonFormat: true
                };
                var parent_id = self.model.get('id');
                if (field.attachmentCollection.models.length > 0) {
                    _.each(field.attachmentCollection.models, function (model, index) {
                        if (model.isnew && typeof model.attributes.uploadfile != "undefined") {
                            self.saveAttachments(model, parent_id);
                        }
                    });

                }
            }, this)
        };
    },
    saveAttachments: function (model, parent_id) {
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
                        model.save();
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
})
