<?php
    require_once('controller.php');
    delete($_GET['id']);
    header('Location: ../../index.php');
?>