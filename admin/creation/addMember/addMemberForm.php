<?php
require_once('../../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="add.css">
    <title>Formulaire de creation d'un nouveau membre</title>
</head>
<body>

<center>
        <h1>
            ajouter un membre
        </h1>
</center>

   
    <div class="cont">
    <form action="addMemberSave.php" method="post" enctype="multipart/form-data">
        <h1>Ajout d'un nouveau membre </h1>
        <table>
      
    <tr>
        <td><label for="name">nom Du menbre</label></td>
        <td><input type="text" name="name" require ></td>
    </tr>
    <tr>
        <td><label for="instigateur">Description</label></td>
        <td><textarea name="biographie" id="id" cols="30" rows="10" require    >
biographie du membre
        </textarea></td>
    </tr>
    <tr>
        <td><label for="instigateur">Date de naissance</label></td>
        <td> <input type="date" name="dateNais" id="instigateur" require  ></td>
    </tr>
    <tr>
        <td><label for="poste">Poste Occuper</label></td>
        <td> <input type="text" name="poste" require ></td>
    </tr>
    <tr>
        <td colspan="2"> <h2>image du membre</h2></td>
        
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