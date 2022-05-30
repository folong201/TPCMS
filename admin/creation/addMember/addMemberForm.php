<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de creation d'un nouveau membre</title>
</head>
<body>
    <form action="addMemberSave.php" method="post" enctype="multipart/form-data">
    <label for="name">nom Du menbre</label>
        <input type="text" name="name" require > <br> <br>

        <textarea name="biographie" id="id" cols="30" rows="10" require    >
            biographie du membre
        </textarea> <br> <br>

        <label for="instigateur">Date de naissance</label>
        <input type="date" name="dateNais" id="instigateur" require  > <br> <br>

        <label for="poste">Poste Occuper</label>
        <input type="text" name="poste" require > <br> <br>
        
        <!-- <label for="duree">Duree</label>
        <input type="text" name="duree" require > -->
        <br> <br>
        <h2>image du membre</h2>
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload"> <br> <br>

        <input type="submit" name="submit" value="Sauvegarder">
    </form>
</body>
</html>