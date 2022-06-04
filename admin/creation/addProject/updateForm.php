<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'upload de fichiers</title>
    <link rel="stylesheet" href="../../../assets/css/add.css">
</head>
<body>
    <div class="cont">
    <form action="update.php" method="post" enctype="multipart/form-data">
    <label for="titre">titre du project</label>
        <input type="text" name="titre" require > <br> <br>

        <textarea name="description" id="id" cols="30" rows="10" require    >
            description du project
        </textarea> <br> <br>

        <label for="instigateur">Instigateur</label>
        <input type="text" name="instigateur" id="instigateur" require  > <br> <br>

        <label for="debut">debut</label>
        <input type="date" name="debut" require > <br> <br>
        
        <label for="duree">Duree</label>
        <input type="text" name="duree" require >
        <input type="hidden" name="id" value="<?php echo$_GET['id']; ?>">
        <br> <br>
        <h2>Upload Fichier</h2>
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
    </form>
    </div>
</body>
</html>