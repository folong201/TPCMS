<?php
    require_once('controller.php');
    checkIfConnected();
    if (isset($_POST['titre']) && 
    isset($_POST['description']) && 
    isset($_POST['instigateur']) && 
    isset($_POST['debut']) && 
    isset($_POST['duree']) && 
    isset($_FILES["photo"]) && 
    isset($_POST['id']))
    {
        update($_POST['titre'],$_POST['description'],$_POST['instigateur'],$_POST['debut'],$_POST['duree'],$_FILES["photo"]['name'],1,$_POST['id']);
        televerser();
        // die($_POST['id']);
        //redirection
        header('Location: ../../index.php');
    }
//     <?php
// $var="User', email='test";
// $a=new PDO("mysql:host=localhost;dbname=database;","root","");
// $b=$a->prepare("UPDATE `users` SET user=:var");
// $b->bindParam(":var",$var);
// $b->execute();
// ?>
