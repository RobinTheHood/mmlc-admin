<?php

/**
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 * @phpcs:disable PSR1.Methods.CamelCapsMethodName
 */

declare(strict_types=1);

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class rth_mmlc_admin extends StdModule
{
    public function __construct()
    {
        parent::__construct('MODULE_RTH_MMLC_ADMIN');
    }

    public function display()
    {
        return $this->displaySaveButton();
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
