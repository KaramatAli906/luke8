

({
    extendsFrom: 'EmailsHtmleditable_tinymceField',
    initialize: function (options) {
        //console.log("EmailsHtmleditable_tinymceField Custom");
        this._super('initialize', [options]);
    },
    addCustomButtons: function (editor) {

        console.log("final helloo");
        var self = this;
        var attachmentButtons = [];

        // Attachments can only be added if the user has permission to create
        // Notes records. Only add the attachment button(s) if the user is
        // allowed.
        if (app.acl.hasAccess('create', 'Notes')) {
            attachmentButtons.push({
                text: app.lang.get('LBL_ATTACH_FROM_LOCAL', this.module),
                onclick: _.bind(function (event) {
                    // Track click on the file attachment button.
                    app.analytics.trackEvent('click', 'tinymce_email_attachment_file_button', event);
                    $('input[type=file][name=filename]').prop('multiple', true);
                    $('input[type=file][name=filename]').attr('id', "file-input");
                    $('#file-input').attr('name', "filename[]");
                    $('#file-input').prop('disabled', false);
                    this.view.trigger('email_attachments:file');
                }, this)
            });

            // The user can only select a document to attach if he/she has
            // permission to view Documents records in the selection list.
            // Don't add the Documents button if the user can't view and select
            // documents.
            if (app.acl.hasAccess('view', 'Documents')) {
                attachmentButtons.push({
                    text: app.lang.get('LBL_ATTACH_SUGAR_DOC', this.module),
                    onclick: _.bind(function (event) {
                        // Track click on the document attachment button.
                        app.analytics.trackEvent('click', 'tinymce_email_attachment_doc_button', event);
                        this._selectDocument();
                    }, this)
                });
            }
            if (app.acl.hasAccess('view', 'Documents')) {
                attachmentButtons.push({
                    text: app.lang.get('LBL_SUGAR_ATTACHMENT', this.module),
                    onclick: _.bind(function (event) {
                        // Track click on the document attachment button.
                        app.analytics.trackEvent('click', 'tinymce_email_attachment_data_button', event);
                        this._selectAttachment();
                    }, this)
                });
            }

            editor.addButton('sugarattachment', {
                type: 'menubutton',
                tooltip: app.lang.get('LBL_ATTACHMENT', this.module),
                icon: 'paperclip',
                onclick: function (event) {
                    // Track click on the attachment button.
                    app.analytics.trackEvent('click', 'tinymce_email_attachment_button', event);
                },
                menu: attachmentButtons
            });
        }

        editor.addButton('sugarsignature', {
            type: 'menubutton',
            tooltip: app.lang.get('LBL_SIGNATURE', this.module),
            icon: 'pencil',
            // disable the signature button until they have been loaded
            disabled: true,
            onPostRender: function () {
                self._signatureBtn = this;
                // load the users signatures
                self._getSignatures();
            },
            onclick: function (event) {
                // Track click on the signature button.
                app.analytics.trackEvent('click', 'tinymce_email_signature_button', event);
            },
            // menu is populated from the _getSignatures() response
            menu: []
        });

        if (app.acl.hasAccess('view', 'EmailTemplates')) {
            editor.addButton('sugartemplate', {
                tooltip: app.lang.get('LBL_TEMPLATE', this.module),
                icon: 'file-o',
                onclick: _.bind(function (event) {
                    // Track click on the template button.
                    app.analytics.trackEvent('click', 'tinymce_email_template_button', event);
                    this._selectEmailTemplate();
                }, this)
            });
        }

        // Enable the signature button when the editor is focused and the user
        // has signatures that can be inserted.
        editor.on('focus', _.bind(function (e) {
            this._editorFocused = true;
            this.view.trigger('tinymce:focus');
            // the user has at least 1 signature
            if (this._numSignatures > 0) {
                // enable the signature button
                this._signatureBtn.disabled(false);
            }
        }, this));

        // Disable the signature button when the editor is blurred and the user
        // has signatures. Signatures are inserted at the cursor location. If
        // the button is not disabled when the editor is unfocused, then issues
        // would arise with the user clicking a signature to insert at the
        // cursor without a cursor being present.
        editor.on('blur', _.bind(function (e) {
            this._editorFocused = false;
            this.view.trigger('tinymce:blur');
            // the user has at least 1 signature
            if (this._numSignatures > 0) {
                // disable the signature button
                this._signatureBtn.disabled(true);
            }
        }, this));
    },
    _selectAttachment: function () {
        var def = {
            layout: 'selection-list',
            context: {
                module: 'mv_Attachments'
            }
        };
        //console.log("selectAttachment");

        app.drawer.open(def, _.bind(function (model) {
            var attachment;

            if (model) {
                // `value` is not a real attribute.
                attachment = app.data.createBean('mv_Attachments', _.omit(model, 'value'));
                //console.log("attach");
                //console.log(attachment);
                this.view.trigger('email_attachments:attachment', attachment);
            }
        }, this));
    }
})
