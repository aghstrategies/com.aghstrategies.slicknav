This Extension
--------------

Uses the jquery plugin [slicknav](http://slicknav.com/) to make the CiviCRM administration menu web responsive on mobile.

Things to do:

+ update readme
+ rename
+ publish
+ Making it work in CiviCRM 4.6
  + Internalization bug: PHP Fatal error: Call to undefined method CRM_Core_I18n::getLocale() in /com.aghstrategies.slicknav/slicknav.php on line 26 (will run but not automatically change the language if you comment out this line)
  + Font Awesome not in 4.6 so Icons do not load properly. can be removed if you comment out these two lines "openedSymbol:'&#xf078;',
      closedSymbol: '&#xf054;'," in civislicknav.js.tpl the icons will revert to triangles

Possible future things:

+ compare length of menu items to width of window and change based on that instead of automatically at 50em
