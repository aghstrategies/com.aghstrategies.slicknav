<?php

require_once 'responsiveciviadminmenu.civix.php';
CRM_Core_Resources::singleton()->addScriptFile('com.aghstrategies.responsiveciviadminmenu', 'SlickNav-master/dist/jquery.slicknav.js', 0, 'html-header');
CRM_Core_Resources::singleton()->addScriptFile('com.aghstrategies.responsiveciviadminmenu', 'js/slicknav.js');
CRM_Core_Resources::singleton()->addStyleFile('com.aghstrategies.responsiveciviadminmenu', 'SlickNav-master/dist/slicknav.css');
CRM_Core_Resources::singleton()->addStyleFile('com.aghstrategies.responsiveciviadminmenu', 'css/civislicknav.css');


/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function responsiveciviadminmenu_civicrm_config(&$config) {
  _responsiveciviadminmenu_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param array $files
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function responsiveciviadminmenu_civicrm_xmlMenu(&$files) {
  _responsiveciviadminmenu_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function responsiveciviadminmenu_civicrm_install() {
  _responsiveciviadminmenu_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function responsiveciviadminmenu_civicrm_uninstall() {
  _responsiveciviadminmenu_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function responsiveciviadminmenu_civicrm_enable() {
  _responsiveciviadminmenu_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function responsiveciviadminmenu_civicrm_disable() {
  _responsiveciviadminmenu_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function responsiveciviadminmenu_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _responsiveciviadminmenu_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function responsiveciviadminmenu_civicrm_managed(&$entities) {
  _responsiveciviadminmenu_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * @param array $caseTypes
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function responsiveciviadminmenu_civicrm_caseTypes(&$caseTypes) {
  _responsiveciviadminmenu_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function responsiveciviadminmenu_civicrm_angularModules(&$angularModules) {
_responsiveciviadminmenu_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function responsiveciviadminmenu_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _responsiveciviadminmenu_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function responsiveciviadminmenu_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function responsiveciviadminmenu_civicrm_navigationMenu(&$menu) {
  _responsiveciviadminmenu_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'com.aghstrategies.responsiveciviadminmenu')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _responsiveciviadminmenu_civix_navigationMenu($menu);
} // */
