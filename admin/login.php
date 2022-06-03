<?php
    // require_once('./function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style>
        .container{
            display: flex;
            box-shadow: 2px 2px 2px #f60;
            justify-content: center;
            /* max-width: 50%; */
        }
        input{
            margin: 10px;
            outline: none;
            border: none;
            border-bottom: 2px solid black;
        }
        .submit{
            border: none;
            font-size: larger;
            text-align: center;
            width: 150px;
            outline: 1px solid #f60;
            box-shadow: 2px 2px 2px #f60;
            margin-left: 50px;
        }
        </style>
        <script>

        </script>
    <div class="container">
        <div class="form">
            <form action="traitLogin.php" method="post">
                <label for="userName">UserName :</label>
                <input type="text" name="userName" id="userName" require> <br>

                <label for="password">Password :</label>
                <input type="password" name="pass" id="pass" require>

                <br>
                <input type="submit" class="submit" onclick="pass();" id="submit">
            </form>
        </div>
    </div>
    <script src="tester.js"></script>
</body>
</html>


