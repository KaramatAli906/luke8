// this event is triggered when meta data is synced and user is logged in
SUGAR.App.events.on("app:sync:complete", function(){
        //fetch current user to check its gdrive_refresh_code
        var user_id = SUGAR.App.user.get("id");
        if (_.isEmpty(user_id)) {
            return;
        }
        var user = SUGAR.App.data.createBean("Users",{id:user_id});
        user.fetch({
            success:_.bind(function(){
                var gdrive_refresh_code = user.get('gdrive_refresh_code');
                if (_.isEmpty(gdrive_refresh_code) && user.get('enable_gsync')) {
                    SUGAR.App.alert.show('notify_user_google_auth', {
                        level: 'warning',
                        autoClose: false,
                        messages: SUGAR.App.lang.get('ERR_GOOGLE_AUTH'),
                    });
                } else {
                    SUGAR.App.alert.dismiss('notify_user_google_auth');
                }
            }, this),
            error: _.bind(function(error){
                SUGAR.App.alert.show('error', {
                    level: 'error',
                    messages: error.message
                });
            }, this)
        });
});
