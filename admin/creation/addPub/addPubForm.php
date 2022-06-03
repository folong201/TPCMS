<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de creation d'une Pub</title>
</head>
<body>
<center>
        <h1>
            ajouter une pub
        </h1>
    </center>
    <form action="addPubSave.php" method="post" enctype="multipart/form-data">
    <label for="name">nom Du menbre</label>
        <input type="text" name="name" require > <br> <br>

        <textarea name="description" id="id" cols="30" rows="10" require    >
texte lier a la pub
        </textarea> <br> <br>

       
        <!-- <label for="duree">Duree</label>
        <input type="text" name="duree" require > -->
        <br> <br>
        <h2>image de la pub</h2>
        <label for="fileUpload">Fichier Image:</label>
        <input type="file" name="photo" id="fileUpload"> <br> <br>

        <input type="submit" name="submit" value="Sauvegarder">
    </form>
</body>
</html>