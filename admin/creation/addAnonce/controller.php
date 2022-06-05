<?php
    require_once('../../function.php');
    checkIfConnected();
    $bdd = new PDO('mysql:host=localhost;dbname=CMS','root','');
    //fontion pour suprimer les element lieu dans la base donnes
    function delete($id){
        global $bdd;
        $sql = "DELETE FROM annonce where id = ?";
        $requette = $bdd->prepare($sql);
        $requette->execute(array($id));

    }

    function update($name,$description,$image,$id){
        $bdd = new PDO('mysql:host=localhost;dbname=CMS','root','');
        $sql = "UPDATE annonce SET name='$name', photo='$image', description='$description' where id='$id' ";
        // $sql2 =  "UPDATE  annonce SET name='$name', photo='$image', description='$description', where id='$id' ";
        try{
            $requette = $bdd->prepare($sql);
            $requette->execute();
        }catch(PDOException $e){
            die($e);
        }

    }
?>