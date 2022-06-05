<?php
require_once('../../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'upload de fichiers</title>
    <link rel="stylesheet" href="../../../assets/css/add.css">
</head>
<body>
    <!-- <form action="update.php" method="post" enctype="multipart/form-data">
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
        <br> <br>
        <h2>Upload Fichier</h2>
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
    </form>
     -->
    <center>
        <h1>
            METRE A JOUR  un project
        </h1>
    </center>
   
    <div class="cont">

        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo$_GET['id']; ?>">
        <h1>Mise a jour d'un projet </h1>
        <table>
      
    <tr>
        <td><label for="titre">titre du projet</label></td>
        <td><input type="text" name="titre" require placeholder="titre du project"></td>
    </tr>
    <tr>
        <td><label for="instigateur">Description du projet</label></td>
        <td><textarea name="biographie" id="id" cols="30" rows="10" require  placeholder=""  >
description du project
        </textarea></td>
    </tr>
    <tr>
        <td> <label for="debut">debut</label></td>
        <td><input type="date" name="debut" require ></td>
    </tr>
    <tr>
        <td><label for="duree">Duree</label></td>
        <td><input type="text" name="duree" require ></td>
    </tr>
    
    <tr>
        <td colspan="2"> <h2>image du projet</h2></td>
        
    </tr>
    <tr>
        <td><label for="fileUpload">Fichier:</label></td>
        <td> <input type="file" name="photo" id="fileUpload"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Sauvegarder"></td>
    </tr>
        
        
        
         
     
    </table>
    </form>
</body>
</html>