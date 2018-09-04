/**
 * @class View.Fields.Base.CustomAdminOnlyDateField
 * @alias SUGAR.App.view.fields.BaseCustomAdminOnlyDateField
 * @extends View.Fields.Base.DateField
 */
({
    extendsFrom: 'DateField',
    /**
     * @inheritdoc
     */
    initialize: function(options) {
        if(!_.isEqual(app.user.get('type'), 'admin') )  {
            options.def.readonly = true;
        }
        this._super('initialize', [options]);
    }
})
