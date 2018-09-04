({
    extendsFrom: "MassEmailButtonField",

    _retrieveEmailOptionsFromLink: function() {
        var massCollection = this.context.get('mass_collection'),
            bcc = _.map(massCollection.models, function(model) {
                return {bean: model};
            }, this);
        return {
            bcc: bcc
        };
    }
})
