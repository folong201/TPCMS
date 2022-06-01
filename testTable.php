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
dateNais DATE,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
?>