<?php
require_once('../function.php');
checkIfConnected();
require_once('controller.php');
//function to uodate
if (isset($_POST['update']) && isset($_POST['id']) && isset($_POST['description']) && isset($_POST['name']) && isset($_POST['photo'])) {
    update($_POST['name'],$_POST['description'],$_POST['photo'],$_POST['id']);
    televerser();
}

//function to delete
if (isset($_GET['delete']) && isset($_GET['id'])) {
    delete($_GET['id']);
    die($_GET['delete']);   
}
// die('verif');

header('Location: ../index.php?reponce="action realiser avec success"');
?>