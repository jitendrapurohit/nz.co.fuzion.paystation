<?php

/**
 * Collection of upgrade steps
 */
class CRM_Paystation_Upgrader extends CRM_Paystation_Upgrader_Base {
  /**
   * Convert from 3.x-style specialized extension to a 4.x-style general ext.
   */
  public function upgrade_3000() {
    $this->ctx->log->info('Applying update 4200');
    CRM_Core_DAO::executeQuery('UPDATE civicrm_extension SET type = "module" WHERE full_name = "nz.co.fuzion.paystation"');
    return TRUE;
  }
}
