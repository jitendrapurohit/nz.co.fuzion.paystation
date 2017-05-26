<?php

/**
 * Collection of upgrade steps
 */
class CRM_Paystation_Upgrader extends CRM_Paystation_Upgrader_Base {
  /**
   * Convert from 3.x-style specialized extension to a 4.x-style general ext.
   */
  public function upgrade_3000() {
    Civi::log()->info('nz.co.fuzion.paystation: Applying update 3000');
    CRM_Core_DAO::executeQuery('UPDATE civicrm_extension SET type = "module" WHERE full_name = "nz.co.fuzion.paystation"');
    return TRUE;
  }

  /**
   * Use System.flush to clear caches to trigger hook_civicrm_managed() and
   * update managed values.
   *
   * This might not be required on all sites, but it's harmless enough.
   */
  public function upgrade_3001() {
    Civi::log()->info('nz.co.fuzion.paystation: Executing System.flush');
    civicrm_api3('System', 'flush', []);
    return TRUE;
  }
}
