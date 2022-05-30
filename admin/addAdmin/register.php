<?php 
require_once('../function.php');

    if (isset($_POST['userName']) && isset($_POST['pass'])) {
        $base = new PDO('mysql:host=localhost;dbname=CMS');
        $requette = $base->prepare('INSERT INTO admin (userName,pass) VALUES(?,?)');
        $requette->execute(array($_POST['userName'],$_POST['pass']));
    }else {
        header('Location: ../index.php');
    }

?>