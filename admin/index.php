<?php
    require_once('./function.php');
    checkIfConnected();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andmin</title>
</head>
<body>
    <style>
        *{
            box-sizing: border-box;
            font-size: larger;
            margin: 15px;
            color: black;
            text-decoration: none;
        }
        .container{
            display: flex;
            justify-content: center;
        }
        a{
            width: auto;
            display: inline-block;
            border: 2px solid black;
            box-shadow: 5px 5px 5px 5px #f60;
        }
    </style>
    <center>
        <h1>
            Welcome to the admin pages
        </h1>
    </center>
<hr><hr>
    <center>
        <h2>
            ajouter des elements
        </h2>
    </center>
    <a href="creation/addProject/addProject.php">
        Ajouter un project
    </a>
    
    <a href="creation/addMember/addMemberForm.php">
        Ajouter un membre
    </a> 
    <a href="addAdmin/addAdminForm.php">
        Ajouter un admin
    </a>
    
    <a href="creation/addActiviter/addActiviterForm.php">
        Ajouter une activiter
    </a>
    
    <a href="creation/addAnonce/addAnnonceForm.php">
        Ajouter une annonce
    </a>
    
    <a href="creation/addPub/addPubForm.php">
        Ajouter une pub
    </a>

    
    <a href="creation/addEmploayer/addEmployerForm.php">
        Ajouter un EMployer
    </a>
    
    
    <a href="creation/addTouristiqPlace/addLieuxForm.php">
        Ajouter un site touristique
    </a>
    



    <center>
        <h2>
            metre a jour des elements
        </h2>
    </center>
    <br>
    <hr>
    <a href="creation/addProject/list.php">
        metre a jour ou ssuprimer un project
    </a>
    
    <a href="creation/addMember/addMemberForm.php">
        metre a jour ou ssuprimer un membre
    </a> <br>
    <a href="addAdmin/list.php">
        metre a jour ou ssuprimer un admin
    </a>
    
    <a href="creation/addMember/">
        metre a jour ou ssuprimer une activiter
    </a>
    
    <a href="creation/addMember/">
        metre a jour ou ssuprimer une annonce
    </a>
    
    <a href="creation/addMember/">
        metre a jour ou ssuprimer une pub
    </a>
    
    <a href="creation/addMember/">
        metre a jour ou ssuprimer un membre de la comune
    </a>
    
    <a href="creation/addMember/">
        metre a jour ou ssuprimer un project
    </a>
    
    <a href="creation/addMember/">
        metre a jour ou ssuprimer une annonce

    <a href="creation/addMember/">
        metre a jour ou ssuprimer un EMployer
    </a>
    
    
    <a href="creation/addMember/">
        metre a jour ou ssuprimer un site touristique
    </a>
    





<center>
        <h2>
            suprimer des elements
        </h2>
    </center>
    <br>
    <hr>
    <a href="creation/addMember/">
        Ajouter un project
    </a>
    
    <a href="creation/addMember/addMemberForm.php">
        Ajouter un membre
    </a> 
    <a href="creation/addMember/">
        Ajouter un admin
    </a>
    
    <a href="creation/addMember/">
        Ajouter une activiter
    </a>
    
    <a href="creation/addMember/">
        Ajouter une annonce
    </a>
    
    <a href="creation/addMember/">
        Ajouter une pub
    </a>
    
    <a href="creation/addMember/">
        Ajouter un membre de la comune
    </a>
    
    <a href="creation/addMember/">
        Ajouter un project
    </a>
    
    <a href="creation/addMember/">
        Ajouter une annonce
    
    <a href="creation/addMember/">
        Ajouter un EMployer
    </a>

    
    <a href="creation/addMember/">
        Ajouter un site touristique
    </a>

<div class="container" style="background-color:green;">
    <center>
        <h1>
            initialiser la base de donnees.
        </h1>
    </center>
</div>
<center>
    <!-- <a href="disconnect.php" > -->
    <div class="container" style="background-color: red;">
             Se deconnecter
             
            </div>
        
</center>

    <script src="/assets/js/main.js"></script>
</body>
</html>





