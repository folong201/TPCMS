<?php
    require_once('../../function.php');
    $bdd = new PDO('mysql:host=localhost;dbname=CMS','root','');
    //fontion pour suprimer les element lieu dans la base donnes
    function delete($id){
        global $bdd;
        $sql = "DELETE FROM pub where id = ?";
        $requette = $bdd->prepare($sql);
        $requette->execute(array($id));

    }

    function update($name,$description,$image,$id){
        global $bdd;
        $sql = "UPDATE pub SET name=?, description=?,photo=? WHERE id = ?";
        $requette = $bdd->prepare($sql);
        $requette->execute(array($name,$description,$image,$id));
    }
?>