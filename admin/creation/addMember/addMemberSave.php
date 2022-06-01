<?php
    require_once('../../function.php');
    if (isset($_POST['name']) && 
    isset($_POST['biographie']) && 
    isset($_POST['dateNais']) && 
    isset($_POST['poste']) && 
    isset($_FILES["photo"]))
    { 
        //fabrication du nouveau nom du fichier image
        $nom = $_POST['name'];
        $biographie = $_POST['biographie'];
        $dateNais = $_POST['dateNais'];
        $poste = $_POST['poste'];
        $image = $filename = $_FILES["photo"]["name"];
        addMember($nom,$biographie,$dateNais,$poste,$image);
        televerser();

        
        
    }else{
                echo"donner manqaunte";
         }
    
     televerser();
        
        header("Location: ../../index.php");
?>