<?php
require_once('../function.php');
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
            mise a jouret suppression d'un admin
        </h1>
</center>
    <?php
        $database = new PDO('mysql:host=localhost;dbname=CMS','root','');
        $sql = $database->query( "SELECT * FROM admin");

        while($donnees = $sql->fetch()){

            $id = $donnees['id'];
            echo"nom de l'admin : ".$donnees['surname']."<br>";
            echo $donnees['description']."<br>";
            // echo;

            // echo"<a href=\"delete.php?id=".$x."?delete=delete>delete</a><br>";
            ?>
            <br>
        <a href="updateForm.php?id=<?php echo$donnees['id']; ?>">update</a> <br>

        <a href="delete.php?delete=0&id=<?php echo$donnees['id'] ?>">delete</a> <br>
            <?php

        }

    ?>
    

</body>
</html>