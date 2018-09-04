({
    extendsFrom: 'CreateView',
    initialize: function (options) {
        this._super("initialize", arguments);
    },
    bindDataChange: function() {
        if (this.model) {
            this.model.on('change:m_cams_opportunities_1_name', function() {
                this.handleAccountSelection();
            }, this);
        }
    },
    handleAccountSelection: function () {
        var opp_name = this.model.get('m_cams_opportunities_1_name');
        if(_.isEmpty(opp_name)) {
            this.model.set('account_id', '');
            this.model.set('account_name', '');
        }
    },
})
