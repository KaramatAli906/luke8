$(function () {
    $('[name="download"],[name="cancel"]').prop('disabled', true);
    app.alert.dismissAll();

    $('form#excelSheetFieldsMapping').submit(function (e) {
        e.preventDefault();
        if (!Validate(this)) {
            app.alert.show('load-field-mapping-status', {
                level: 'warning',
                messages: 'Invalid file. Allowed extension is csv',
                autoClose: false
            });
            return;
        }
        app.alert.show('load-field-mapping-status', {
            level: 'process',
            messages: 'Loading...',
            autoClose: false
        });

        var url = window.location.href;
        url = url.substr(0, url.indexOf('#'));
        url = url + 'index.php?entryPoint=excelsheetapi';

        var form_data = new FormData(this);
        var token = app.api.getOAuthToken();
        $.ajax({
            type: 'POST',
            url: url,
            enctype: 'multipart/form-data',
            data: form_data,
            processData: false, // Important!
            contentType: false,
            cache: false,
            success: function (response) {
                // console.log("response");
                //console.log(response);
                var potenial_match = new Array(",", ".", ", LLC", ", LCC", " LLC", ", LLC", ", LLC.", ",LLC.", " Inc", ", Inc", ", Inc", "s", " Homes Inc", " homes", " Homes, Inc.", " Construction", " By Hayden", " HOmes", " NW, LLC", " NW");
                app.alert.dismiss('load-field-mapping-status');
                if (response != "") {
                    response = JSON.parse(response);
                    if (typeof response.file_path != "undefined") {
                        window.location = "rest/v10/customdownloadfileexcel?OAuth-Token=" + token;
                    } else {
                        var builders_list = app.lang.getAppListStrings("builders_list");
                        //console.log(builders_list);
                        var rows = '';
                        _.each(response, function (value, key) {
                            if (key != "") {
                                rows += '<tr>';
                                rows += '<td style="border-bottom: 1px solid black !important;">';
                                rows += key;
                                rows += '</td>';

                                rows += '<td style="border-bottom: 1px solid black !important;">';

                                rows += '<select name="' + key + '" id="contacts_' + value + '">';
                                _.each(builders_list, function (contact, ci) {
                                    var concatVal = contact + "=" + key;
                                    //custom code start here
                                    var flag = false;
                                    //if we don not find potenial match
                                    if (key != contact)
                                    {
                                        //concat the potenial match array element to the Sugar builder lists element and then compare 
                                        //both builder list elment and excel sheet builder element
                                        for (i = 0; i < potenial_match.length; i++) {
                                            var temp_concat = contact + potenial_match[i];
                                            if (key.toLowerCase() == temp_concat.toLowerCase()) {
                                                flag = true;
                                            }
                                        }
                                        if (flag)
                                        {
                                            rows += '<option value="' + concatVal + '"selected="selected">' + contact + '</option>';
                                        } else {
                                            //concat the poteial match array element to the builder list element of Excel Sheet and then compare 
                                            //both builder list elment of Sugar and excel sheet builder element
                                            var falg1 = false;
                                            for (i = 0; i < potenial_match.length; i++) {
                                                temp_concat = key + potenial_match[i];
                                                if (temp_concat.toLowerCase() == contact.toLowerCase()) {
                                                    falg1 = true;
                                                }
                                            }
                                            if (falg1)
                                            {
                                                rows += '<option value="' + concatVal + '"selected="selected">' + contact + '</option>';
                                            } else {
                                                //remove special characters and then compare 
                                                //both builder list elment of Sugar and excel sheet builder element
                                                var falg2 = false;
                                                for (i = 0; i < potenial_match.length; i++) {
                                                    temp_concat = key + potenial_match[i];
                                                    temp_concat = temp_concat.replace(/[^a-zA-Z]/ig, "");
                                                    temp_contact = contact.replace(/[^a-zA-Z]/ig, "");
                                                    if (temp_concat.toLowerCase() == temp_contact.toLowerCase()) {
                                                        falg2 = true;
                                                    }
                                                }
                                                if (falg2)
                                                {
                                                    rows += '<option value="' + concatVal + '"selected="selected">' + contact + '</option>';
                                                } else {
                                                    var mapping = {
                                                        "Evolve Bldg & Dev.": "Evolve Building & Dev",
                                                        "Tyee Development": "Tyee Construction",
                                                        "Tyee Development Inc": "Tyee Construction",
                                                        "DANMAC": "Dan MacNaughton",
                                                        "Larson": "Larsen Construction",
                                                        "Burnham Building Compnay": "Burnham Building Company",
                                                        "Sone Bridge Home NW, LLC": "Stone Bridge Homes",
                                                    };
                                                    //if Potenial mecthes need through array   
                                                    //both builder list elment of Sugar and excel sheet builder element
                                                    if (mapping[key] == contact)
                                                    {
                                                        rows += '<option value="' + concatVal + '"selected="selected">' + contact + '</option>';
                                                    } else {
                                                        rows += '<option value="' + concatVal + '">' + contact + '</option>';
                                                    }

                                                }
                                            }
                                        }

                                    } else {
                                        rows += '<option value="' + concatVal + '"selected="selected">' + contact + '</option>';

                                    }
                                    //custom code end here
                                });
                                rows += '</select></td>';
                                rows += '</tr>';
                            }
                        });

                        $('#module_fields').html(rows);
                    }
                }
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
                $('[name="download"],[name="cancel"],[name="upload"]').prop('disabled', false);
                $('[name="upload"]').prop('disabled', true);
                app.alert.dismiss('save-field-mapping-in-progress');
            }
        });

    });

});
var _validFileExtensions = [".csv"];
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
//                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }

    return true;
}

