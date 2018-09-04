({
    extendsFrom: 'EnumField',
    dataFetched: false,

    loadEnumOptions: function (fetch, callback) {
        if (!this.dataFetched) {
            this.isFetchingOptions = true;
            this.dataFetched = true;
            this.getEmailTemplatesForInvites();
        }
    },

    /**
     * Function: getEmailTemplatesForInvites
     * @returns {Array}
     */
    getEmailTemplatesForInvites: function() {
        var emailTemplates = App.data.createBeanCollection('EmailTemplates');
        emailTemplates.limit = '-1';
        emailTemplates.fetch({
            success: _.bind(function (items) {
                var keys = {'':''};
                if (!_.isEmpty(items.models)) {
                    _.each(items.models, function(item) {
                        keys[item.get('id')] = item.get('name');
                    });
                }
                this.items = keys;
                this.render();
                if (!_.isEmpty(app.config.emailTemplateForInvites)) {
                    this.model.set(this.name, app.config.emailTemplateForInvites);
                }
            }, this),
            error: function (e) {
                app.alert.show('error', {
                    level: 'error',
                    autoClose: true,
                    messages: e.message,
                });
            }
        });
    }
})
