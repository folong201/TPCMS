<?php
require_once('function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <form action="haching.php" method="post">
        <input type="password" name="pass" id="pass"> <br>
        <input type="submit">
    </form>

    <?php
        if(isset($_POST['pass'])){
            $password = md5($_POST['pass']);
            echo $password;
        }
    ?>
</body>
</html>