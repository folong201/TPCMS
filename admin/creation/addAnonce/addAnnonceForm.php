<?php
require_once('../../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de creation d'une Annonce</title>
    <link rel="stylesheet" href="../../../assets/css/add.css">
</head>
<body>
<center>
        <h1>
            ajouter une annonce
        </h1>
</center>
    <div class="cont">
    <form action="addAnnonceSave.php" method="post" enctype="multipart/form-data">
        <h1>Creation d'une Annonce</h1>
    <label for="name">nom De L'Annonce</label>
        <input type="text" name="name" require > <br> <br>

        <textarea name="description" id="id" cols="30" rows="10" require    >
description de L'annonce
        </textarea> <br> <br>

       
        <!-- <label for="duree">Duree</label>
        <input type="text" name="duree" require > -->
        <br> <br>
        <h2>image lier a l'annonce</h2>
        <label for="fileUpload">Fichier Image:</label>
        <input type="file" name="photo" id="fileUpload"> <br> <br>

        <input type="submit" name="submit" value="Sauvegarder">
    </form>
</div>
</body>
</html>