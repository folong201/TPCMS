<?php
    require_once('controller.php');
    // checkIfConnected();
    if (isset($_POST['name']) && 
    isset($_POST['description']) &&
    isset($_POST['id'])&&
    isset($_FILES['photo']))
    {
        //$name,$description,$image,$id
        update($_POST['name'],$_POST['description'],$_FILES['photo']['name'],$_POST['id']);
        // die("stop");
        televerser();
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
