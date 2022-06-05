<?php
    require_once('../../function.php');
    checkIfConnected();
    $bdd = new PDO('mysql:host=localhost;dbname=CMS','root','');
    //fontion pour suprimer les element lieu dans la base donnes
    function delete($id){
        global $bdd;
        $sql = "DELETE FROM membre where id = ?";
        $requette = $bdd->prepare($sql);
        $requette->execute(array($id));
        // unlink()

    }

    function update($name,$biographie,$dateNais,$poste,$image,$id){
        global $bdd;
        $requette = $bdd->prepare("UPDATE membre set name='$name',biographie='$biographie',dateNais='$dateNais',poste='$poste',photo='$image' WHERE id = '$id'");
        // $data =
        $requette->execute();
    }
?>