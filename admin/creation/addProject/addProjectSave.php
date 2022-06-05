<?php
    require_once('../../function.php');
    // die("bloc");
    checkIfConnected();
    if (isset($_POST['titre']) && 
    isset($_POST['description']) && 
    isset($_POST['instigateur']) && 
    isset($_POST['debut']) && 
    isset($_POST['duree']) && 
    isset($_FILES["photo"]))
   {
        //fabrication du nouveau nom du fichier image
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $duree = $_POST['duree'];
        $debut = $_POST['debut'];
        $image = $filename = $_FILES["photo"]["name"];
        $instigateur = $_POST['instigateur'];

        addProjectSave(
                    $titre,
                    $description,
                    $instigateur,
                    $debut,
                    $duree,
                    $image,
                    1
                    );
                //  televerser();
      
    }else{
                echo"donner manqaunte";
         }
    televerser();
        
        header("Location: ../../index.php");
?>