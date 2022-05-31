<?php
    // require_once('../../function.php');
    $bdd = new PDO('mysql:host=localhost;dbname=CMS','root','');
    //fontion pour suprimer les element lieu dans la base donnes
    function delete($id){
        global $bdd;
        
        $sql = "DELETE FROM projects where id = ?";
        $requette = $bdd->prepare($sql);
        $requette->execute(array($id));
        // die('verif');
        header('Location: ../../index.php');
        exit;

    }





        //fontion pour televerser les fichier images
function televerser(){

    // Vérifier si le formulaire a été soumis
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Vérifie si le fichier a été uploadé sans erreur.
        if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["photo"]["name"];
            $filetype = $_FILES["photo"]["type"];
            $filesize = $_FILES["photo"]["size"];

            // Vérifie l'extension du fichier
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");
    
            // Vérifie la taille du fichier - 5Mo maximum
            $maxsize = 5 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");
    
            // Vérifie le type MIME du fichier
            if(in_array($filetype, $allowed)){
                // Vérifie si le fichier existe avant de le télécharger.
                if(file_exists("../../upload/" . $_FILES["photo"]["name"])){
                    echo $_FILES["photo"]["name"] . " existe déjà.";
                } else{
                    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../upload/" . $_FILES["photo"]["name"]);
                    // echo "Votre fichier a été téléchargé avec succès.";
                } 
            } else{
                echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
            }
        } else{
            echo "Error: " . $_FILES["photo"]["error"];
        }
    }
}







    
    function update($titre,$description,$instigateur,$debut,$duree,$image,$createur,$id){
        
        global $bdd;
       // $sql1 = "UPDATE `projects` SET `id`='$id',`description`='$description',`instigateur`='$instigateur',`debut`='$debut',`duree`='$duree',`photo`='$image',`createur`='$createur',`titre`='$titre' WHERE `id`='$id";
        $sql = "UPDATE  projects SET createur='$createur', titre='$titre', duree='$duree', debut='$debut', description='$description', instigateur='$instigateur',photo='$image', createur='$createur' where id='$id' ";//
       try{
        $requette = $bdd->prepare($sql);
       }catch(PDOException $e){
           die($e);
       }
        // $data =
        $requette->execute();
        // die("mince");
        // $requette->execute(array($titre,$description,$instigateur,$debut,$duree,$image,$createur,$id));
        // televerser();
        
    }
?>