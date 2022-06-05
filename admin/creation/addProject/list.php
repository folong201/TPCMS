<?php
require_once('../../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des project</title>
</head>
<body>
<center>
        <h1>
            mise ajour et supression des projets
        </h1>
</center>
    <?php
        $database = new PDO('mysql:host=localhost;dbname=CMS','root','');
        $sql = $database->query( "SELECT * FROM projects");

        while($donnees = $sql->fetch()){

            $id = $donnees['id'];
            echo"<br><br>nom du projet : ".$donnees['titre']."<br>";
            echo"description du projet :". $donnees['description']."<br>";
            // echo;
            ?>
         <img src="./../../upload/<?php echo$donnees['photo'] ?>" alt="" style="max-width: 200px;max: heigth 200px;"><br>
        <a href="updateForm.php?id=<?php echo$donnees['id']; ?>">update</a> <br>

        <a href="delete.php?delete=0&id=<?php echo$donnees['id'] ?>">delete</a> <br>
            <?php

            // echo"<a href=\"delete.php?id=".$x."?delete=delete>delete</a><br>";

        }

    ?>
    

</body>
</html>