<?php

if (!defined(MODULE_RTH_MMLC_ADMIN_STATUS) || MODULE_RTH_MMLC_ADMIN_STATUS != 'true') {
    return;
}

// logs off the MMLC through the module "MMLC im Admin"
if (basename($PHP_SELF) == FILENAME_LOGOFF) {
    $stdSessionId = $_COOKIE['PHPSESSID'];
    session_id($stdSessionId);
    session_start();
    $_SESSION['accessRight'] = false;
    session_write_close();
}