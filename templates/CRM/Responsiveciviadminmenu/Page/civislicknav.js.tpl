// <script> Generated {$smarty.now|date_format:'%d %b %Y %H:%M:%S'}
{literal}
CRM.$(function($) {
  var navMarkup = {/literal}{$navigation|@json_encode}{literal};
  $('<ul>' + navMarkup + '</ul>').slicknav({
    label: '',
    removeClasses: 'true',
    removeStyles: 'true',
    // openedSymbol:'fa fa-shield',
    // closedSymbol: '&#xf078;',
    // removeIds: 'true',
    appendTo: '#civicrm-menu',
    closeOnClick: 'true'
  });
});
{/literal}
