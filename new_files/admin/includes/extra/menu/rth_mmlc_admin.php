<?php
defined( '_VALID_XTC' ) or die( 'Direct Access to this location is not allowed.' );

// Sprachabhaengiger Menueeintrag, kann fuer weiter Sprachen ergaenzt werden
switch ($_SESSION['language_code']) {
    case 'de':
        define('MENU_NAME_RTH_MMLC_ADMIN', 'Modified Module Loader Client (MMLC)');
        break;
    case 'en':
        define('MENU_NAME_RTH_MMLC_ADMIN', 'Modified Module Loader Client (MMLC)');
        break;
    default:
        define('MENU_NAME_RTH_MMLC_ADMIN', 'Modified Module Loader Client (MMLC)');
        break;
}

//BOX_HEADING_TOOLS = Name der box in der der neue Menueeintrag erscheinen soll
$add_contents[BOX_HEADING_MODULES][] = [
    'admin_access_name' => 'rth_mmlc_admin',    // Eintrag fuer Adminrechte
    'filename' => 'rth_mmlc_admin.php',         // Dateiname der neuen Admindatei
    'boxname' => MENU_NAME_RTH_MMLC_ADMIN,      // Anzeigename im Menue
    'parameter' => '',                          // zusaetzliche Parameter z.B. 'set=export'
    'ssl' => ''                                 // SSL oder NONSSL, kein Eintrag = NONSSL
];
