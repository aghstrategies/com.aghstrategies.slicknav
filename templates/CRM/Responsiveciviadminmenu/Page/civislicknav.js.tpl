// <script> Generated {$smarty.now|date_format:'%d %b %Y %H:%M:%S'}
{literal}
CRM.$(function($) {
  var navMarkup = {/literal}{$navigation|@json_encode}{literal};
  $('<ul>' + navMarkup + '</ul>').slicknav({
    label: '',
    removeClasses: 'true',
    removeStyles: 'true',
    openedSymbol:'&#xf078;',
    closedSymbol: '&#xf054;',
    appendTo: '#civicrm-menu',
    closeOnClick: 'true'
  });
});
{/literal}
