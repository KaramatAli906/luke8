({
    extendsFrom: 'SaveAndSendInvitesButtonField',

    /**
     * @inheritdoc
     *
     * Sets the type to "rowaction" so that the templates are loaded from
     * super.
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.type = 'rowaction';
    },

    /**
     * Setting model event to allow unsetting of send_invites_jobqueue after validation error or data sync completed.
     * @inheritdoc
     */
    bindDataChange: function() {
        if (!this.model) {
            return;
        }

        this.model.on('error:validation data:sync:complete', function() {
            this.model.unset('send_invites_jobqueue');
        }, this);

        this._super('bindDataChange');
    },

    /**
     * @inheritdoc
     *
     * Silently sets `send_invites_jobqueue` to true on the model before saving.
     */
    rowActionSelect: function(event) {
        this.model.set('send_invites_jobqueue', true, {silent: true});
        this._super('rowActionSelect', [event]);
    }
})
