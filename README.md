This Extension
--------------

Uses the jquery plugin [slicknav](http://slicknav.com/) to make the CiviCRM administration menu web responsive.

Currently there is one breakpoint at 50em at which point the menu changes from a bar across the top to a hamburger style dropdown menu so that CiviCRM users can more easily navigate thru CiviCRM on small screens (tablets, phones etc.).

![screenshot of responsive menu in action](/slicknavmenu.png)

#### Making it work in CiviCRM 4.6
+ Comment out line 26 of com.aghstrategies.slicknav/slicknav.php (`$lang = CRM_Core_I18n::getLocale()`) to fix the  Fatal error: Call to undefined method $lang = CRM_Core_I18n::getLocale() in /com.aghstrategies.slicknav/slicknav.php on line 26
+ Font Awesome is not in 4.6 so the open and close icons in this extension do not load properly. They can be removed if you comment out these two lines in templates/CRM/Slicknav/Page/civislicknav.js.tpl

```js
openedSymbol:'&#xf078;',
closedSymbol: '&#xf054;',
```

#### Possible future things:

+ Compare length of menu items to width of window and change to small screen menu based on that instead of automatically at 50em
