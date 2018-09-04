    
    /**
    * redirect to google for authentication
    */
    function redirectToGoogle(auth_url, gmail_id, is_bwc)
    {
        //for sugar versions less than 7 we show legacy alert
        if (is_bwc) {
            if (!gmail_id) {
                alert(SUGAR.language.get('Users','ERR_GMAIL_ID'));
                return false;
            }
        } else {
            var app = window.parent.SUGAR.App;
            if (_.isEmpty(gmail_id)) {
                app.alert.show('error', {
                    level: 'error',
                    messages: app.lang.get('ERR_GMAIL_ID', 'Users'),
                });
                return false;
            }
        }
        window.open(auth_url);
    }
