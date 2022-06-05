
<?php
require_once('../../function.php');
checkIfConnected();
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de creation d'un nouveau membre</title>
    <link rel="stylesheet" href="../../../assets/css/add.css">
</head>
<body>
<center>
        <h1>
            ajouter une employer
        </h1>
</center>
    <!-- <form action="addEmployerSave.php" method="post" enctype="multipart/form-data">
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
        <!-- <br> <br>
        <h2>image de l'employer</h2>
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload"> <br> <br> -->

    <div class="cont"> 
    <form action="addEmployerSave.php" method="post" enctype="multipart/form-data">
        <h1>Ajout d'un Employer</h1>
        <table>
            <tr>
                <td> <label for="name">nom Du menbre</label></td>
                <td><input type="text" name="name" require ></td>
            </tr>
            <tr>
                <td><label for="desc">biographie du membre</label></td>
                <td><textarea name="biographie" id="id" cols="30" rows="10" require    >
            
                </textarea></td>
            </tr>
            <tr>
                <td><label for="instigateur">Poste Occuper </label></td>
                <td> <input type="text" name="poste" require ></td>
            </tr>
            <tr>
                <td><label for="poste"> Date de naissance</label></td>
                <td><input type="date" name="dateNais" id="instigateur" require  ></td>
            </tr>
            <tr>
                <td colspan="2"><h2>image du membre</h2></td>
                </tr>
            <tr>
                <td><label for="fileUpload">Fichier:</label></td>
                <td><input type="file" name="photo" id="fileUpload"></td>
            </tr>
            <tr>
            <br>
                <tr><label for="fileUpload">cv:</label></tr>
                <tr><input type="file" name="cv" class="fileUpload"></tr>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" name="submit" value="Sauvegarder"></td>
            </tr>

        
        
        <!-- <label for="duree">Duree</label>
        <input type="text" name="duree" require > -->
    </table>
    </form>
</body>
</div>
</html>