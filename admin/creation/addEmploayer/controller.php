<?php
    require_once('../../function.php');
    checkIfConnected();
    $bdd = new PDO('mysql:host=localhost;dbname=CMS','root','');
    //fontion pour suprimer les element lieu dans la base donnes
    function delete($id){
        global $bdd;
        $sql = "DELETE FROM employer where id = ?";
        $requette = $bdd->prepare($sql);
        $requette->execute(array($id));
    }

    function update($name,$biographie,$dateNais,$poste,$image,$id,$cv){
        //$name,$biographie,$dateNais,$poste,$image,$id
        global $bdd;
        $sql = "UPDATE employer SET name='$name',dateNais='$dateNais',poste='$poste',biographie='$biographie', photo='$image',cv='$cv' WHERE id ='$id'";
        $requette = $bdd->prepare($sql);
        $requette->execute();
    }
?>