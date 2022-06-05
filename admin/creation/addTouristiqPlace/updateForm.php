<?php
require_once('../../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de creation d'un Lieux touristique</title>
    </head>
    <body>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <label for="name">nom Du lieu</label>
            <input type="text" name="name" require > <br> <br>
            <input type="hidden" name="id" value="<?php echo$_GET['id']; ?>"> <br>

        <textarea name="description" id="id" cols="30" rows="10" require    >description du cite touristique
        </textarea> <br> <br>

       
        <!-- <label for="duree">Duree</label>
        <input type="text" name="duree" require > -->
        <br> <br>
        <h2>image du Lieux</h2>
        <label for="fileUpload">Fichier Image:</label>
        <input type="file" name="photo" id="fileUpload"> <br> <br>

        <input type="submit" name="submit" value="Sauvegarder">
    </form>
</body>
</html>