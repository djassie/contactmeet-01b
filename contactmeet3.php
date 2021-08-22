<?php

require_once 'contactmeet3.civix.php';
// phpcs:disable
use CRM_Contactmeet3_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function contactmeet3_civicrm_config(&$config) {
  _contactmeet3_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function contactmeet3_civicrm_xmlMenu(&$files) {
  _contactmeet3_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function contactmeet3_civicrm_install() {
  _contactmeet3_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function contactmeet3_civicrm_postInstall() {
  _contactmeet3_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function contactmeet3_civicrm_uninstall() {
  _contactmeet3_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function contactmeet3_civicrm_enable() {
  _contactmeet3_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function contactmeet3_civicrm_disable() {
  _contactmeet3_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function contactmeet3_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _contactmeet3_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function contactmeet3_civicrm_managed(&$entities) {
  _contactmeet3_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function contactmeet3_civicrm_caseTypes(&$caseTypes) {
  _contactmeet3_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function contactmeet3_civicrm_angularModules(&$angularModules) {
  _contactmeet3_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function contactmeet3_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _contactmeet3_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function contactmeet3_civicrm_entityTypes(&$entityTypes) {
  _contactmeet3_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function contactmeet3_civicrm_themes(&$themes) {
  _contactmeet3_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function contactmeet3_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function contactmeet3_civicrm_navigationMenu(&$menu) {
//  _contactmeet3_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _contactmeet3_civix_navigationMenu($menu);
//}

/**
 * Implements hook_civicrm_tokens().
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_tokens/
 * 
 * @param $tokens
 */
function contactmeet3_civicrm_tokens(&$tokens) {
  $tokens['contactmeet']['contactmeet.total_meetings'] = E::ts('Contact Meet') . ' :: ' . E::ts('Meeting Number');
}

/**
 * Fetch values for tokens
 * Implements hook_civicrm_tokenValues().
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_tokenValues/
 * 
 * @param $values
 * @param $contactIDs
 * @param null $jobID
 * @param array $tokens
 * @param null $context
 * 
 * @throws \API_Exception
 * @throws \Civi\API\Exception\UnauthorizedException
 */
function contactmeet3_civicrm_tokenValues(&$values, $contactIDs, $jobID=null, $tokens=array(), $className=null) {
  if (contactmeet3_is_token_present($tokens)) {
    // Normalize $contactIds.
    // $contactIds is either an array with contact ids
    // or it is formatted according $contactIds['contact_id'] = 123, $contactIds['case_id'] = 67
    // if this is the case we wrap the array so it is easier to process.
    if (is_array($contactIDs) && isset($contactIDs['contact_id'])) {
      $contactIDs = [$contactIDs]; // Wrap the $contactIds into an array.
    }
    foreach ($contactIDs as $index => $contact) {
      $contact_id = $contact;
      if (is_array($contact_id) && isset($contact_id['contact_id'])) {
        $contact_id = $contact_id['contact_id'];
      }    
      $values[$contact_id]['contactmeet.total_meetings'] = contactmeet3_retrieve_total_meetings($contact);
    }
  }
}

/**
 * Returns true when the {contactmeet.total_meetings} is set and present in the set and
 * needs to be replaced.
 *
 * @param $tokens
 * @return bool
 */
function contactmeet3_is_token_present($tokens) {
  if (in_array('total_meetings', $tokens)) {
    return TRUE;
  } elseif (isset($tokens['total_meetings'])) {
    return TRUE;
  } elseif (isset($tokens['contactmeet']) && in_array('total_meetings', $tokens['contactmeet'])) {
    return TRUE;
  } elseif (isset($tokens['contactmeet']['total_meetings'])) {
    return TRUE;
  }
  return FALSE;
}

/**
 * Gets token value(contactmeet.total_meetings)
 * 
 * @param $contactID
 * 
 * @throws \API_Exception
 * @throws \Civi\API\Exception\UnauthorizedException
 */
function contactmeet3_retrieve_total_meetings($contactID){

  $contactid = $contactID['contact_id'];
  $contact_id_con = (int)$contactid;

  $activities = \Civi\Api4\Activity::get()
  ->selectRowCount()
  ->addSelect('id')
  ->addJoin('Contact AS contact', 'LEFT', 'ActivityContact')
  ->addWhere('activity_type_id', '=', 1)
  ->addWhere('contact.id', '=', $contact_id_con)
  ->execute();

  $count_activity_one = $activities->count();

  return $count_activity_one;
}