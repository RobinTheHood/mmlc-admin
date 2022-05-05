<?php

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

if (!defined('MODULE_RTH_MMLC_ADMIN_STATUS') || MODULE_RTH_MMLC_ADMIN_STATUS != 'true') {
    return;
}

$fwBoxName = [
    'de' => 'Modified Module Loader Client (MMLC)',
    'en' => 'Modified Module Loader Client (MMLC)',
];
$fwLanguageCode = $_SESSION['language_code'] ?? '';
$fwSelectedBoxName = $fwBoxName[$fwLanguageCode] ?? $fwBoxName['de'];

//BOX_HEADING_TOOLS = Name der box in der der neue Menueeintrag erscheinen soll
$add_contents[BOX_HEADING_MODULES][] = [
    'admin_access_name' => 'rth_mmlc_admin',    // Eintrag fuer Adminrechte
    'filename' => 'rth_mmlc_admin.php',         // Dateiname der neuen Admindatei
    'boxname' => $fwSelectedBoxName,            // Anzeigename im Menue
    'parameters' => '',                         // zusaetzliche Parameter z.B. 'set=export'
    'ssl' => ''                                 // SSL oder NONSSL, kein Eintrag = NONSSL
];
