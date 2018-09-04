$(function () {
    var address_sub_fields = {
        "addr1": "Street Address",
        "addr2": "Address Line 2",
        "city": "City",
        "state": "State/Prov/Region",
        "zip": "Postal/Zip",
        "country": "Country"
    };
    $('[name="save"],[name="cancel"]').prop('disabled', true);
    app.alert.dismissAll();
    app.alert.show('loading-lists-in-progress', {
        level: 'process',
        title: 'Loading'
    });
    var getUrlObject = function (urlstring) {
        if (urlstring.indexOf("/#bwc/") > -1) { // for BWC modules
            isbwc = true;
            rootURL = urlstring.substring(0, urlstring.indexOf("/#bwc/"));
            var apiRootURL = rootURL + '/rest/v10';
            return apiRootURL;
        } else {
            isbwc = false;
            var rootURL = urlstring.substring(0, urlstring.indexOf("#"));
            rootURL = rootURL.replace('index.php', '');
            var apiRootURL = rootURL + 'rest/v10';
            return apiRootURL;
        }
    };
    var parenturl = window.location.href;
    var auth = app.api.getOAuthToken();
    var apiRootURL = getUrlObject(parenturl); // parsing and creating object of current url.
    var lists_options = '<option value="">Please select</option>';
    $.ajax({
        type: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'OAuth-Token': auth
        },
        url: apiRootURL + '/RT_DocuSign/docuSignTemplates/',
        data: '',
        success: function (data) {
            _.each(data, function (item, index) {
                lists_options += '<option value="' + item.id + '">' + item.name + '</option>';
            });
            $('#sync_template_list').html(lists_options);
        },
        error: function (error) {
            app.alert.show('loading-lists-status', {
                level: 'error',
                messages: app.lang.get('LBL_AN_ERROR_OCCURRED_DETAILS', 'Administration') + error,
                autoClose: false
            });
        },
        complete: function () {
            $('[name="save"],[name="cancel"]').prop('disabled', false);
            app.alert.dismiss('loading-lists-in-progress');
        }
    });

    $('#docuSignFieldsMapping').on('submit', function (e) {
        e.preventDefault();
        if (!_.isEmpty($('#sync_template_list').val())) {
            app.alert.dismissAll();
            app.alert.show('save-field-mapping-in-progress', {
                level: 'process',
                title: 'Loading'
            });
            $('[name="save"],[name="cancel"]').prop('disabled', true);
            var form_data = {};
            _.each($(this).serializeArray(), function (v) {
                var names = v.name.split("[");
                if (!_.isUndefined(names[1])) {
                    n = names[1].substr(0, names[1].length - 1);
                    v = v.value;
                    switch (names[0]) {
                        case 'contacts':
                            if (!_.isObject(form_data.contacts)) {
                                form_data.contacts = {};
                            }
                            form_data.contacts[n] = v;
                            break;
                        case 'accounts':
                            if (!_.isObject(form_data.accounts)) {
                                form_data.accounts = {};
                            }
                            form_data.accounts[n] = v;
                            break;
                    }

                } else {
                    form_data[v.name] = v.value;
                }
            });
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'OAuth-Token': auth
                },
                url: apiRootURL + '/RT_DocuSign/docuSignSaveFieldsMapping/',
                data: form_data,
                success: function (response) {
                    app.alert.show('save-field-mapping-status', {
                        level: 'success',
                        messages: app.lang.get('LBL_SUCCESS_FIELDS_SAVING', 'Administration'),
                        autoClose: true
                    });
                },
                error: function (error) {
                    app.alert.show('save-field-mapping-status', {
                        level: 'error',
                        messages: app.lang.get('LBL_ERROR_FIELDS_SAVING', 'Administration'),
                        autoClose: false
                    });
                },
                complete: function () {
                    $('[name="save"],[name="cancel"]').prop('disabled', false);
                    app.alert.dismiss('save-field-mapping-in-progress');
                }
            });
        }
    });

    $('#sync_template_list').on('change', function () {
        if (_.isEmpty($(this).val())) {
            $('#module_fields').html("");
        } else {
            $('#docusign_list_name').val($(this).find(':selected').text());
            var template_id = $(this).val();
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'OAuth-Token': auth
                },
                url: apiRootURL + '/RT_DocuSign/docuSignTemplateFields/?template_id=' + template_id,
                data: '',
                success: function (data) {
                    var docusign = data.docusign;
                    var contacts = data.contacts;
                    var accounts = data.accounts;

                    var old = data.old;
                    var rows = '';

                    _.each(docusign, function (value, key) {
                        rows += '<tr>';
                        rows += '<td>';
                        var label = value;
                        rows += value;
                        value = value.replace(" ", "");
                        rows += '</td>';
                        if (app.user.get('type') != 'admin') {
                            rows += '<td>';
                            rows += old.contacts[value];
                            rows += '</td>';
                        } else {
                            rows += '<td>';

                            rows += '<select name="contacts[' + value + ']" id="contacts_' + value + '" onchange="onContactChange(this)">';
                            _.each(contacts, function (contact, ci) {

                                if (!_.isUndefined(old) && !_.isUndefined(old.contacts) && !_.isUndefined(old.contacts[value]) && old.contacts[value] == ci) {

                                    rows += '<option value="' + ci + '" selected="selected">' + contact + '</option>';
                                } else {
                                    rows += '<option value="' + ci + '">' + contact + '</option>';
                                }
                            });

                            rows += '</select></td>';

                            rows += '<td>';

                            rows += '<select name="accounts[' + value + ']" id="accounts_' + value + '" onchange="onAccountChange(this)">';
                            _.each(accounts, function (account, ai) {
                                if (!_.isUndefined(old) && !_.isUndefined(old.accounts) && !_.isUndefined(old.accounts[value]) && old.accounts[value] == ai) {

                                    rows += '<option value="' + ai + '" selected="selected">' + account + '</option>';
                                } else {
                                    rows += '<option value="' + ai + '">' + account + '</option>';
                                }
                            });

                            rows += '</select></td>';
                        }
                        rows += '</tr>';
                    });

                    $('#module_fields').html(rows);
                },
                error: function (error) {
                    app.alert.show('loading-lists-status', {
                        level: 'error',
                        messages: app.lang.get('LBL_AN_ERROR_OCCURRED_DETAILS', 'Administration') + error,
                        autoClose: false
                    });
                },
                complete: function () {
                    $('[name="save"],[name="cancel"]').prop('disabled', false);
                    app.alert.dismiss('loading-lists-in-progress');
                }
            });
        }
    });
});
function onContactChange(element) {
    var selectedId = element.id;
    if (element.value != "") {
        var res = selectedId.split("_");
        var accountElement = "accounts_" + res[1];
        $("#" + accountElement).val("");
    }
}

function onAccountChange(element) {
    var selectedId = element.id;
    if (element.value != "") {
        var res = selectedId.split("_");
        var contactElement = "contacts_" + res[1];
        $("#" + contactElement).val("");
    }
}