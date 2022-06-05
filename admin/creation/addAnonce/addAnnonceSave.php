<?php
    require_once('../../function.php');
    checkIfConnected();
    if (isset($_POST['name']) && 
    isset($_POST['description']) && 
    isset($_FILES["photo"]))
    { 
        //fabrication du nouveau nom du fichier image
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image =$_FILES["photo"]["name"];
        
        addAnnonce($name,$description,$image);
        // die("nom mais comment");
        //  televerser();
        
        
        televerser();
    }else{
                echo"donner manqaunte";
         }
    
        
        header("Location: ../../index.php");
?>