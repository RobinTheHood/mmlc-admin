<?php
defined( '_VALID_XTC' ) or die( 'Direct Access to this location is not allowed.' );

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class rth_mmlc_admin extends StdModule
{
    public function __construct()
    {
        $this->init('MODULE_RTH_MMLC_ADMIN');
    }

    public function display()
    {
        return $this->displaySaveButton();
    }

    public function process($file)
    {
    }

    public function install()
    {
        parent::install();
        $this->setAdminAccess('rth_mmlc_admin');
    }

    public function remove()
    {
        parent::remove();
        $this->deleteAdminAccess('rth_mmlc_admin');
    }
}
