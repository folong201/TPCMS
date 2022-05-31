<?php 
// require_once('../function.php');
if (isset($_POST['userName']) && isset($_POST['pass'])&& isset($_POST['surname'])&& isset($_POST['poste'])) {
    $base = new PDO('mysql:host=localhost;dbname=CMS','root','');
    //hachage du mot de passe
    $pass = md5($_POST['pass']);
    //creationde la requette
    $requette = $base->prepare('INSERT INTO admin(userName,pass,poste,surname) VALUES(?,?,?,?)');
    //execution de la requette
    $requette->execute(array($_POST['userName'],$pass,$_POST['poste'],$_POST['surname']));
  
    }else {
        header('Location: ../index.php');
    }
    header('Location: ../index.php');

?>