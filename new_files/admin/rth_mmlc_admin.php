<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
$_SESSION['accessRight'] = true;

session_write_close();
require ('includes/application_top.php');

require (DIR_WS_INCLUDES . 'head.php');
?>

<body>

<style type="text/css">
        #rth-content {
            margin-top: 30px;
            font-family: Verdana, Arial, sans-serif;
            margin-left: auto;
            margin-right: auto;
            max-width: 800px;
            min-height: 300px;
            text-align: center;
        }

        #rth-content a {
            font-size: 16px;
        }
    </style>

    <script>
        window.open('/ModifiedModuleLoaderClient');
    </script>

    <!-- header //-->
    <?php require(DIR_WS_INCLUDES . 'header.php'); ?>

    <div id="rth-content">
        <strong>Der Modified Module Loader Client (MMLC) wird in einem neuen Fenster/Tab geöffnet.</strong>
        <br><br>
        Wenn der MMLC dir nicht angezeigt wird, kontrolliere ob das Fenster/Tab von deinem Browser blockiert wurde oder klicke auf den folgenden Link:
        <br><br>
        <a target="_blank" href="/ModifiedModuleLoaderClient"><?php echo HTTPS_SERVER;?>/ModifiedModuleLoaderClient</a>
    </div>

    <!-- footer //-->
    <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
    <!-- footer_eof //-->
    <br />
</body>
</html>
