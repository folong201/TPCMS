<?php
require_once('../../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de creation d'un Lieux touristique</title>
    <link rel="stylesheet" href="../../../assets/css/add.css">
</head>
<body>

<center>
        <h1>
            ajouter un lieu touristique
        </h1>
</center>
    <form action="addLieuxSave.php" method="post" enctype="multipart/form-data">
    <label for="name">nom site tourristique</label>

    <div class="cont">
    <form action="addLieuxSave.php" method="post" enctype="multipart/form-data">
    <h1>Ajout d'un lieu touristique</h1>
        <label for="name">nom Du Lieux</label>
        <input type="text" name="name" require > <br> <br>

        <textarea name="description" id="id" cols="30" rows="10" require    >
description du site touristique
        </textarea> <br> <br>

       
        <!-- <label for="duree">Duree</label>
        <input type="text" name="duree" require > -->
        <br> <br>
        <h2>image du Lieux</h2>
        <label for="fileUpload">Fichier Image:</label>
        <input type="file" name="photo" id="fileUpload"> <br> <br>

        <input type="submit" name="submit" value="Sauvegarder">
    </form>
</div>
</body>
</html>