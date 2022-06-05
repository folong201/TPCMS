<?php
session_start();
session_destroy();
require_once('function.php');
    header('Location: ../index.php');
    exit;
?>


<?php
    // $requete="CREATE TABLE if not exists 
    // contenu (
    //     id int primary key NOT NULL auto_increment,
    //     titre varchar(120) not null,description TEXT not null,
    //     photo varchar(255),
    //     ville varchar(40),
    //     mail varchar(30),
    //     index(ville)
    // )";
?>