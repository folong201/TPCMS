<?php
// require_once('function.php');
// checkIfConnected();
?>
<?php
    function initDb(){
        $servername = "localhost";
        $username = "root";
        $password = "";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Create database
        $sql = "CREATE DATABASE IF NOT exists CMS";
        $conn->query($sql);
        // if ( === TRUE) {
        //     echo "Database created successfully";
        // } else {
        //     echo "Error creating database: " . $conn->error;
        // }
        
        $conn->close();
    }   
    initDb(); 
    //initialisation des tables et de la
    
    // function initTable(){
    //     // global $bdd;
    //     initDb();
    //     $bdd = new PDO('mysql:host=localhost;debname=CC','root','');
    //     //cette fonction permetra de verifier si les bd et la table existe et de la les creer dans le cas contraire
    //     //Les diferentes tables sont :
    //         // admin 
    //         // membre 
    //         // project 
    //         // Employer 
    //         // lieux touristique 
    //         // pub 
    //         // activiter 
    //         // anonce
            
            
    //         //admin    
    //         $requeteAdmin="CREATE TABLE add (
    //             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //             userName VARCHAR(30) NOT NULL,
    //             pass VARCHAR(30) NOT NULL,
    //             surname VARCHAR(50),
    //             poste VARCHAR(50)
    //             reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //             )";
    //         $x =  $bdd->exec($requeteAdmin);

    //          //membre
    //          $requeteMembre="CREATE TABLE if not exists 
    //         membre (
    //                     id int primary key NOT NULL auto_increment,
    //                     name varchar(120) not null,description TEXT not null,
    //                     poste varchar(255),
    //                     photo varchar(300),
    //                     biographie text(2000),
    //                     dateNais date()
    
    //                 )"; 
    //         $bdd->query($requeteMembre);
    //         //employer
    //         $requeteEmployer="CREATE TABLE if not exists 
    //         employer (
    //                     id int primary key NOT NULL auto_increment,
    //                     name varchar(120) not null,description TEXT not null,
    //                     biographie varchar(255),
    //                     photo varchar(300),
    //                     dateNais date(),
    //                     poste varchar(255)
    
    //                 )"; 
    //         $bdd->query($requeteEmployer);
    //         //creation de lieux touritique
    //         $requeteLieux="CREATE TABLE if not exists 
    //         Lieux (
    //                     id int primary key NOT NULL auto_increment,
    //                     name varchar(120) not null,description TEXT not null,
    //                     description varchar(255),
    //                     photo varchar(300)
    
    //                 )"; 
    //         $bdd->query($requeteLieux);
            
    //         //projects
    //         $requeteProject="CREATE TABLE if not exists 
    //         projects (
    //                     id int primary key NOT NULL auto_increment,
    //                     titre varchar(120) not null,description TEXT not null,
    //                     description varchar(255),
    //                     photo varchar(300),
    //                     instigateur varchar(300),
    //                     createur number(500),
    //                     duree varchar(300),
    //                     debut date()
    //                 )"; 
    //         $bdd->query($requeteProject);
    //         //creation de Pub
    //         $requetepub="CREATE TABLE if not exists 
    //         pub (
    //                     id int primary key NOT NULL auto_increment,
    //                     name varchar(120) not null,description TEXT not null,
    //                     description varchar(255),
    //                     photo varchar(300)
    //                 )"; 
    //         $bdd->query($requetepub);
            
            
    //         //activiter pour la mairie
    //         $requeteactiviter="CREATE TABLE if not exists 
    //         activiter (
    //                     id int primary key NOT NULL auto_increment,
    //                     name varchar(120) not null,description TEXT not null,
    //                     description varchar(255),
    //                     photo varchar(300)
    
    //                 )"; 
    //         $bdd->query($requeteactiviter);
            
    //         //Annonce
    //         $requeteAnnonce="CREATE TABLE if not exists 
    //         annonce (
    //                     id int primary key NOT NULL auto_increment,
    //                     name varchar(120) not null,description TEXT not null,
    //                     description varchar(255),
    //                     photo varchar(300)
    
    //                 )"; 
    //         $bdd->query($requeteAnnonce);
    //     }
    //     initTable();
    //     // die('bloc');
        ?>











<?php
function createAdmin(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMS";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  if not exists admin (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userName VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL,
poste VARCHAR(50),
pass VARCHAR(50)
)";
$sql2 = "INSERT INTO admin( userName, surname, poste, pass) VALUES ('admin','admin','admin','21232f297a57a5a743894a0e4a801fc3')";
$conn->query($sql2);
if ($conn->query($sql) === TRUE) {
//   echo "Table admin created successfully";

$x=4;
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
}
createAdmin();
?>







<?php
function createMembre(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  if not exists membre (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
photo VARCHAR(30) NOT NULL,
poste VARCHAR(50),
biographie VARCHAR(50),
dateNais DATE
)";


if ($conn->query($sql) === TRUE) {
//   echo "Table membre created successfully";
$x=4;
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
}
createMembre();
?>










<?php
function createEmployer(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  if not exists employer (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
photo VARCHAR(30) NOT NULL,
cv VARCHAR(60),
poste VARCHAR(50),
biographie VARCHAR(50),
dateNais DATE,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if ($conn->query($sql) === TRUE) {
$x=4;
//   echo "Table empployer created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
}
createEmployer();
?>











<?php
function createLieux(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  if not exists Lieux (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
photo VARCHAR(30) NOT NULL,
description TEXT(500)
)";


if ($conn->query($sql) === TRUE) {
$x=4;
//   echo "Table lieux created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
}
createLieux();
?>













<?php
function createProjects(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  if not exists projects (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
photo VARCHAR(30) NOT NULL,
instigateur VARCHAR(50),
description TEXT(500),
titre VARCHAR(30),
createur INT(6),
debut DATE,
duree VARCHAR(30))";


if ($conn->query($sql) === TRUE) {
$x=4;
//   echo "Table projects created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
}
createProjects();
?>





<?php
function createPub(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  if not exists pub (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
photo VARCHAR(30) NOT NULL,
description TEXT(500)
)";


if ($conn->query($sql) === TRUE) {
$x=4;
//   echo "Table Pub created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
}
createPub();
?>










<?php
function createActiviter(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  if not exists activiter (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
photo VARCHAR(30) NOT NULL,
description TEXT(500)
)";


if ($conn->query($sql) === TRUE) {
$x=4;
//   echo "Table activiter created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
}
createActiviter();
?>






<?php
function createAnnonce(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  if not exists annonce (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
photo VARCHAR(30) NOT NULL,
description TEXT(50)
)";


if ($conn->query($sql) === TRUE) {
$x=4;
//   echo "Table annonce created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
}
createAnnonce();
header('Location: index.php');
?>