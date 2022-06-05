<?php
    require_once('../../function.php');
    checkIfConnected();
    if (isset($_POST['name']) && 
    isset($_POST['description']) && 
    isset($_FILES["photo"]))
    { 
        //fabrication du nouveau nom du fichier image
        $nom = $_POST['name'];
        $description = $_POST['description'];
        $image = $filename = $_FILES["photo"]["name"];
        
        addLieux($nom,$description,$image);
        //  televerser();
        
        
    }else{
                echo"donner manqaunte";
         }
    
        televerser();
        
        header("Location: ../../index.php");
?>