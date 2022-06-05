<?php
    // require_once('./function.php');
    require_once('../function.php');
checkIfConnected();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create and admin</title>
</head>
<body>
<center>
        <h1>
            ajouter un admin
        </h1>
</center>
    <div class="container">
        <div class="form">
            <form action="register.php" method="post">

                <label for="userName">UserName</label>
                <input type="text" name="userName" id="userName"> <br><br>

                <label for="password">Password</label>
                <input type="password" name="pass" id="pass"> <br><br>
                <input type="text" name="surname" placeholder="surname"> <br><br>
                <input type="text" name="poste" placeholder="poste"> <br><br>
                <br>
                <input type="submit" id="submit">
            </form>
        </div>
    </div>
    <style>
        .container{
            display: flex;
            align-items: center;
            background-color: #f60;
            margin-left: 025%;
            margin-right: 025%;
            display: flex;
            text-align: center;
            color: white;
            font-size: large;
        }
        input{
            width: 100%;
            margin: 5px;
            margin-left: 100px;
        }       
    </style>
</body>
</html>
