(function(app) {app.augment("config", {"appId":"SupportPortal","appStatus":"offline","env":"dev","platform":"portal","additionalComponents":{"header":{"target":"#header","layout":"header"},"footer":{"target":"#footer","layout":"footer"},"drawer":{"target":"#drawers","layout":"drawer"}},"alertsEl":"#alerts","alertAutoCloseDelay":2500,"serverUrl":"http:\/\/localhost\/Luke_data\/luke8\/rest\/v11_2","siteUrl":"http:\/\/localhost\/Luke_data\/luke8","unsecureRoutes":["signup","error"],"loadCss":"url","themeName":"default","clientID":"support_portal","serverTimeout":180,"maxSearchQueryResult":"5","analytics":{"enabled":false},"customer_journey":{"enabled_modules":"Contacts,Accounts,Opportunities,Cases,Leads,m_CAMS"}}, false);})(SUGAR.App);