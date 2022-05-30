<?php
require_once('function.php');
if (isset($_POST['pass'] ) && isset($_POST['userName'])) {
    // echo"le post a bien ete recu";
    // echo $_POST['pass'];
    // echo $_POST['userName'];
    $pass = md5($_POST['pass']);
    connection($pass,$_POST['userName']);
    die("ici");
    }else {
        header("Location: login.php");
        exit;
    }
?>