<?php
use CRM_Membershipperiod_ExtensionUtil as E;

class CRM_Membershipperiod_BAO_MembershipPeriodEntity extends CRM_Membershipperiod_DAO_MembershipPeriodEntity {

  /**
   * Create a new MembershipPeriodEntity based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Membershipperiod_DAO_MembershipPeriodEntity|NULL
   *
  public static function create($params) {
    $className = 'CRM_Membershipperiod_DAO_MembershipPeriodEntity';
    $entityName = 'MembershipPeriodEntity';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */

}
