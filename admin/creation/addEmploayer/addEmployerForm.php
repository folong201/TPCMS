<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de creation d'un nouveau membre</title>
</head>
<body>
<center>
        <h1>
            ajouter une employer
        </h1>
</center>
    <form action="addEmployerSave.php" method="post" enctype="multipart/form-data">
    <label for="name">nom De l;employer</label>
        <input type="text" name="name" require > <br> <br>

        <textarea name="biographie" id="id" cols="30" rows="10" require    >
biographie de l'employer
        </textarea> <br> <br>

        <label for="instigateur">Date de naissance</label>
        <input type="date" name="dateNais" id="instigateur" require  > <br> <br>

        <label for="poste">Poste Occuper</label>
        <input type="text" name="poste" require > <br> <br>
        
        <!-- <label for="duree">Duree</label>
        <input type="text" name="duree" require > -->
        <br> <br>
        <h2>image de l'employer</h2>
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload"> <br> <br>

        <input type="submit" name="submit" value="Sauvegarder">
    </form>
</body>
</html>