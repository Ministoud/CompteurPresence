<?php
    require('./src/php/Application/DBHelper.php');

    if(!empty($_GET['recType']) && !empty($_GET['ardMacAddress'])) {
        $database = new DBHelper;
        $database->addRecord(date("Y-m-d H:i:s.u"), $_GET['recType'], $_GET['ardMacAddress']);
    }
?>