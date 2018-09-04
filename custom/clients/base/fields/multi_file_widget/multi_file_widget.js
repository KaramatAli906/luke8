
({
    extendsFrom: 'BaseField',
    subpanelModule: null,
    attachmentCollection: null,
    columnsMeta: null,
    columns: null,
    subpanelModel: null,
    deletedCBIIds: [],
    events: {
        'click .addFile': 'createRecord',
        'click .deleteFile': 'deleteRecord',
    },
    /**
     * @inheritdoc
     * @param options
     */
    initialize: function (options) {
        var self = this;
        this._super('initialize', [options]);
        self.columns = self.def.columns;
        self.attachmentCollection = new Backbone.Collection();
        self.subpanelModule = self.def.relatedModule;
        self.columnsMeta = self.getColumnsMeta();
        self.fetchRecords();
    },
    /**
     * In edit mode, render phone input fields using the edit-phone-field template.
     * @inheritdoc
     * @private
     */
    _render: function () {
        this._super("_render");
        this.renderSubpanelFields();
    },
    createRecord: function (e) {
        var self = this;
        var model = app.data.createBean(self.subpanelModule, {id: app.utils.generateUUID(), newRecord: true});
        model.setDefault(model.getDefault());
        model.template = 'edit';
        model.isnew = true;
        model.on('change:uploadfile', self.fileSave, this);
        self.attachmentCollection.add(model);
        self._render();
    },
    renderSubpanelFields: function () {
        var self = this;
        $('.cbi-rowcell>span[sfuuid]').each(function () {
            var $this = $(this),
                    sfId = $this.attr('sfuuid');
            var field = self.view.fields[sfId];
            if (field) {
                field.setElement($this || self.$("span[sfuuid='" + sfId + "']"));
                try {
                    field.render();
                } catch (e) {
                    // error
                }
            }
        });
    },
    getColumnsMeta: function () {
        var meta = new Array;
        this.subpanelModel = app.data.createBean(this.subpanelModule);
        for (var index in this.columns) {
            var field = this.columns[index]['name'];
            var type = this.columns[index]['type'] || false;
            var options = this.columns[index]['options'] || false;
            var readonly = this.columns[index]['readonly'] || false;
            var link = this.columns[index]['link'] || false;
            if (this.primary_field && field == this.primary_field) {
                this.primary_field_label = app.lang.get(this.columns[index]['label'], this.subpanelModule);
            }
            var fmeta = this.subpanelModel.fields[field];
            if (type) {
                fmeta['type'] = type;
            }
            if (options) {
                fmeta['options'] = options;
            }
            if (readonly) {
                fmeta['readonly'] = readonly;
            }
            if (link) {
                fmeta['link'] = link;
            }
            meta.push(fmeta);
        }
        return meta;
    },
    /**
     * Listener function for deleting clicked record.
     * @param {Object} e (current event)
     */
    deleteRecord: function (e) {
        var self = this;
        var row = $(e.currentTarget).closest('tr');
        var beanID = $(row).attr('data-id');
        app.alert.show('delete_confirmation', {
            level: 'confirmation',
            messages: app.lang.get('LBL_PRO_DELETE_CONFIRMATION'),
            onConfirm: _.bind(function () {
                var model = self.attachmentCollection.get(beanID);
                if (model.isnew) {
                    self.attachmentCollection.remove(model);
                    self._render();
                } else {

                    this.unlinkRecord(model);
                }
            }, self)
        });
    },
    fileSave: function (model, value) {
        var self = this;
        var ajaxParams = {
            temp: true,
            iframe: true,
            deleteIfFails: false,
            htmlJsonFormat: true
        };
        var fieldName = "uploadfile";
        var field = $('[data-id="' + model.id + '"] :input');
        model.uploadFile(fieldName, field, {
            success: _.bind(self._doValidateFileSuccess, model),
            error: _.bind(function (result) {
                console.log("error " + result);
            }, this),
        }, ajaxParams);

    },
    _doValidateFileSuccess: function (data) {
        var fieldName = "uploadfile";
        var model = this;
        app.alert.dismiss('upload');

        var guid = data.record && data.record.id;
        if (!guid) {
            app.logger.error('Temporary file uploaded has no GUID.');
            return;
        }
        // Add the guid to the list of fields to set on the model.
        if (!model.fields[fieldName + '_guid']) {
            model.fields[fieldName + '_guid'] = {
                type: 'file_temp',
                group: fieldName
            };
        }
        model.set(fieldName + '_guid', guid);
        // Update filename of the model with the value from response,
        // since it may have been modified on the server side
        model.set(fieldName, data.record[fieldName]);
        model.set('document_name', data.record.uploadfile);

    },
    fetchRecords: function () {
        if (!_.isEmpty(this.model.get('id'))) {
            var self = this;
            var collection = app.data.createRelatedCollection(this.model, this.def.linkField);
            collection.fetch({
                relate: true,
                success: function (coll) {
                    //Adding new models to collection
                    for (var i = 0; i < collection.models.length; i++) {
                        collection.models[i].template = "detail";
                        self.attachmentCollection.add(collection.models[i]);
                    }
                    self._render();
                }
            });
        }
    },
    unlinkRecord: function (model) {
        var self = this;
        var parent_id = this.model.get('id');
        var chld_id = model.get('id');
        var url = 'Notes/' + parent_id + '/link/' + this.def.linkField + '/' + chld_id;
        app.api.call(
                'delete',
                app.api.buildURL(url),
                {},
                {
                    success: _.bind(function (result) {
                        self.attachmentCollection.remove(model);
                        self._render();
                    }),
                    error: _.bind(function (err) {
                        console.log(err);
                    }, this),
                    complete: _.bind(function () {
                    }, this)
                }
        );
    },
    setMode: function (name) {
        var self = this;
        if (name === 'edit') {
            if (self.attachmentCollection.models.length == 0) {
                self.createRecord();
            }
        }
        if (name === 'detail') {
            for (var i = 0; i < self.attachmentCollection.models.length; i++) {
                if (typeof self.attachmentCollection.models[i].attributes.uploadfile == "undefined")
                {
                    self.attachmentCollection.remove(self.attachmentCollection.models[i]);
                }
            }
        }
        this._super('setMode', [name]);
    }
})
