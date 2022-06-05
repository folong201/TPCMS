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
        <title>Create and admin</title>
    </head>
    <body>
<center>
    <h2>
        Mise ajour d'un admin 
    </h2>
</center>
        <div class="container">
            <div class="form">
                <form action="update.php" method="post">
                    
                    <label for="userName">UserName</label>
                    <input type="text" name="userName" id="userName"> <br>
                    <input type="hidden" name="id" value="<?php echo$_GET['id']; ?>"> <br>
                    
                    <label for="password">Password</label> <br>
                    <input type="password" name="pass" id="pass"> <br>
                    <input type="text" name="surname" placeholder="surname"> <br>
                    <input type="text" name="poste" placeholder="poste"> <br>
                <br>
                
                <input type="submit">
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