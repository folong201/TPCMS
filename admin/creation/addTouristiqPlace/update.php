<?php
    require_once('controller.php');
    checkIfConnected();
    if (isset($_POST['name']) && 
    isset($_POST['description']) && 
    isset($_FILES["photo"])&&
    isset($_POST['id']))
    {
        //$name,$biographie,$dateNais,$poste,$image
        update($_POST['name'],$_POST['description'],$_FILES['photo']['name'],$_POST['id']);
        // die("stop");

        //redirection
        televerser();
        header('Location: ../../index.php');
    }
//     <?php
// $var="User', email='test";
// $a=new PDO("mysql:host=localhost;dbname=database;","root","");
// $b=$a->prepare("UPDATE `users` SET user=:var");
// $b->bindParam(":var",$var);
// $b->execute();
// ?>
