// triggered only for sugar versions less than 7, makes ajax call to check if user needs to authenticate
// from google i.e if gsyn is enabled for that user and gdrive_refresh_code is empty
$(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "index.php?module=rt_GSync&action=needAuthentication&sugar_body_only=true",
        success: function (need_to) {
            if (parseInt(need_to)) {
                var msg = SUGAR.language.translate('app_strings', 'ERR_GOOGLE_AUTH');
                var warn = SUGAR.language.translate('app_strings', 'LBL_WARN');
                $( "body" ).append("<div id='alertWindow' style = 'display:none;border: 1px solid #333;width: 300px;border-radius: 5px;padding:15px ;position: absolute;top: 32px;right: 0;margin: 0 auto;z-index: 99999;background: #fff;left: 0;'><a id='btnCancel' style='font-size:14px;font-weight: bold;position: absolute;right: 5px;top: 1px;padding: 0 3px;cursor:pointer;text-decoration:none;'>x</a><p><b>"+warn+"</b> "+msg+"</p> </div>");
                $("#alertWindow").show();
                $("#btnCancel").click(function() {
                    $("#alertWindow").hide();
                });
            }
        }
    });
});
