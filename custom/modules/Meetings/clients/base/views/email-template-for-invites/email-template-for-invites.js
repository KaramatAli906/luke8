({
    extendsFrom: 'RecordView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.action = 'edit';
    },

    handleSave: function () {
        var url = app.api.buildURL('Configurator', 'save-value');
        var args = {
            'configData' : {'emailTemplateForInvites' : this.model.get('email_template_id_for_invites')}
        };
        app.api.call('create', url, args, {
            success: _.bind(function (response) {
                if (!response) {
                    app.alert.show('save_config_data_error', {
                        level: 'error',
                        autoClose: true,
                        messages: app.lang.get('LBL_ERROR'),
                    });
                    return;
                }
                app.alert.show('save_config_data_success', {
                    level: 'success',
                    autoClose: true,
                    messages: app.lang.get('LBL_SAVED'),
                });
                App.router.goBack();
            }, this),
            error: function (e) {
                app.alert.show('save_config_data_error', {
                    level: 'error',
                    autoClose: true,
                    messages: e.message,
                });
            }
        });
    },

    /**
     * @override
     * close drawer
     */
    cancelClicked: function() {
        App.router.goBack();
    },
})
