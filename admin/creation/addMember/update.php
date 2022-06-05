<?php
    require_once('controller.php');
    checkIfConnected();
    if (isset($_POST['name']) && 
    isset($_POST['biographie']) && 
    isset($_POST['dateNais']) && 
    isset($_POST['poste']) && 
    isset($_FILES["photo"])&&
    isset($_POST['id']))
    {
        //$name,$biographie,$dateNais,$poste,$image
        update($_POST['name'],$_POST['biographie'],$_POST['dateNais'],$_POST['poste'],$_FILES['photo']['name'],$_POST['id']);
        // die("stop");

        //redirection
        televerser();
        header('Location: ../../index.php');
        exit;
    }


?>
