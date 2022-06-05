<?php
    require_once('../../function.php');
    checkIfConnected();
    if (isset($_POST['name']) && 
    isset($_POST['biographie']) && 
    isset($_POST['dateNais']) && 
    isset($_POST['poste']) && 
    isset($_FILES["photo"])&&
    isset($_FILES["cv"]))
    { 
        //fabrication du nouveau nom du fichier image
        $nom = $_POST['name'];
        $biographie = $_POST['biographie'];
        $dateNais = $_POST['dateNais'];
        $poste = $_POST['poste'];
        $image =$_FILES["photo"]["name"];
        $cvName =$_FILES['cv']['name'];
        
        addEmployer($nom,$biographie,$dateNais,$poste,$image,$cvName);
        // die("blocage");

        
            televerser();
    }else
    {
        echo"donner manqaunte";
    }
    
        
        header("Location: ../../index.php");
        exit;
?>