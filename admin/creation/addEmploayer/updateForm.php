<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de creation d'un nouveau membre</title>
        <link rel="stylesheet" href="../../../assets/css/add.css">
    </head>
    <body>
        <div class="cont">
    <form action="update.php" method="post" enctype="multipart/form-data">
        <h1>Modification d'un Membre</h1>
        <label for="name">nom Du menbre</label>
        <input type="text" name="name" require > <br> <br>
        
        <input type="hidden" name="id" value="<?php echo$_GET['id']; ?>"> <br>
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
    </div>
</body>
</html>