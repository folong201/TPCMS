<?php
    require_once('../../function.php');
    checkIfConnected();
    $bdd = new PDO('mysql:host=localhost;dbname=CMS','root','');
    //fontion pour suprimer les element lieu dans la base donnes
    function delete($id){
        global $bdd;
        $sql = "DELETE FROM Lieux where id = ?";
        $requette = $bdd->prepare($sql);
        $requette->execute(array($id));

    }

    function update($name,$description,$image,$id){
        global $bdd;
        $sql = "UPDATE Lieux SET name='$name', description='$description', photo='$image' WHERE id ='$id'";
        $requette = $bdd->prepare($sql);
        $requette->execute();
    }

?>

