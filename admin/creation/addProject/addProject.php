<?php
require_once('../../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="add.css">
    <link rel="stylesheet" href="../../../assets/css/add.css">
    <title>Formulaire d'upload d'un projet</title>
</head>
<body>

<center>
        <h1>
            ajouter un project
        </h1>
</center>
   
    <div class="cont">

    <form action="addProjectSave.php" method="post" enctype="multipart/form-data">
        <h1>Ajout d'un nouveau projet </h1>
        <table>
      
    <tr>
        <td><label for="titre">titre du projet</label></td>
        <td><input type="text" name="titre" require ></td>
    </tr>
    <tr>
        <td><label for="instigateur">Description du projet</label></td>
        <td><textarea name="biographie" id="id" cols="30" rows="10" require    >
            biographie du membre
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
    
</div>
</body>
</html>