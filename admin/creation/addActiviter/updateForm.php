<?php
require_once('../../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de creation d'une activiter</title>
        <link rel="stylesheet" href="../../../assets/css/add.css">
    </head>
<body>
    <center>
        <h1>
            metre ajour une activiter
        </h1>
    </center>
    <div class="cont">
        <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo$_GET['id']; ?>"> <br>
        <h1>Mise a jour d'une Activite</h1>
    <label for="name">Nom de l'activiter</label>
        <input type="text" name="name" require > <br> <br>

        <textarea name="description" id="id" cols="30" rows="10" require    >
description de l'activiter
        </textarea> <br> <br>

       
        <br> <br>
        <h2>image de L'activiter</h2>
        <label for="fileUpload">Fichier Image:</label>
        <input type="file" name="photo" id="fileUpload"> <br> <br>

        <input type="submit" name="submit" value="Sauvegarder">
    </form>
</div>
</body>
</html>