<?php
// logs off the MMLC through the module "MMLC im Admin"
switch(basename($PHP_SELF)) {

	case FILENAME_LOGOFF:
            $stdSessionId = $_COOKIE['PHPSESSID'];
            session_id($stdSessionId);
            session_start();
            $_SESSION['accessRight'] = false;
            session_write_close();
    		break;
}
?>
