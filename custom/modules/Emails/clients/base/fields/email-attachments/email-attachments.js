({
    extendsFrom: 'EmailAttachmentsField',
    _uploadFile: function () {
        //reset max upload to 25MB
        app.config.maxAggregateEmailAttachmentsBytes=25000000;
        var $file = this._getFileInput();
        var ajaxParams = {
            temp: true,
            iframe: true,
            deleteIfFails: true,
            htmlJsonFormat: true
        };
        var note;
        var placeholder;
        var val = $file.val();

        if (_.isEmpty(val)) {
            return;
        }

        ajaxParams.files = $file;
        var url = app.api.buildURL('', 'multipleupload');
        placeholder = this._addPlaceholderAttachment(val.split('\\').pop());
        this._requests[placeholder.cid] = app.api.call('create', url, null, {
            success: _.bind(function (response) {
                var _self = this;
                _.each(response, function (key, val) {
                    key.filename = key['filename' + val];
                    _self._handleFileUploadSuccess(key);
                });
            }, this),
            error: _.bind(this._handleFileUploadError, this),
            complete: _.bind(function () {
                $file.val(null);
                this._removePlaceholderAttachment(placeholder);
            }, this)
        }, ajaxParams);
    },
})
