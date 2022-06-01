<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des project</title>
</head>
<body>
    network_cell
    <?php
        $database = new PDO('mysql:host=localhost;dbname=CMS','root','');
        $sql = $database->query( "SELECT * FROM Lieux");

        while($donnees = $sql->fetch()){
            ?>

        <a href="updateForm.php?id=<?php echo$donnees['id']; ?>">update</a> <br>

        <a href="delete.php?delete=0&id=<?php echo$donnees['id'] ?>">delete</a> <br>
            <?php

            $id = $donnees['id'];
            echo"nom du projet : ".$donnees['name']."<br>";
            echo $donnees['description']."<br>";
            // echo;

            // echo"<a href=\"delete.php?id=".$x."?delete=delete>delete</a><br>";

        }

    ?>
    

</body>
</html>