<?php
    // require_once('./function.php');
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/add.css">

        <title>Create and admin</title>
    </head>
    <body>
        <div class="cont">
        <div class="container">
            <div class="form">
                <form action="update.php" method="post">
                    <h1>Modification d'un Admin</h1>
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
    </div>
</body>