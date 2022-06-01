<?php
    require_once('../../function.php');
    if (isset($_POST['name']) && 
    isset($_POST['description']) && 
    isset($_FILES["photo"]))
    { 
        //fabrication du nouveau nom du fichier image
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $filename = $_FILES["photo"]["name"];
        
        addAnnonce($name,$description,$image);
        //  televerser();
        
        
        televerser();
    }else{
                echo"donner manqaunte";
         }
    
        
        header("Location: ../../index.php");
?>