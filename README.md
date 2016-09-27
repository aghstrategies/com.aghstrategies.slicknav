This Extension
--------------

Uses the jquery plugin [slicknav](http://slicknav.com/) to make the CiviCRM administration menu web responsive on mobile.

Things to do:

+ get width of menu div on resize and compare to window.
+ test on joomla
+ Wordpress: internalization bug: this was the error message in the log: "[Mon Sep 26 18:13:19.027168 2016] [:error] [pid 32343] [client 69.243.64.106:59118] PHP Fatal error: Call to undefined method CRM_Core_I18n::getLocale() in /srv/www/dev/public_html/wp-content/uploads/civicrm/ext/com.aghstrategies.responsiveciviadminmenu/responsiveciviadminmenu.php on line 26, referer: http://dev.mediamobilizing.org/wp-admin/admin.php?page=CiviCRM&q=civicrm%2Fadmin%2Fextensions&action=add&id=com.aghstrategies.responsiveciviadminmenu&key=com.aghstrategies.responsiveciviadminmenu " when I commented out that line it worked fine.
