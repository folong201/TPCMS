<?php
require_once('../function.php');
checkIfConnected();
?>
<?php
    require_once('controller.php');
    if (isset($_POST['surname']) && 
    isset($_POST['userName']) && 
    isset($_POST['pass']) && 
    isset($_POST['poste']) && 
    isset($_POST['id']))
    {
        update($_POST['userName'],$_POST['surname'],$_POST['poste'],md5($_POST['pass']),$_POST['id']);
        // die("stop");

        //redirection
        header('Location: ../../index.php');
    }
//     <?php
// $var="User', email='test";
// $a=new PDO("mysql:host=localhost;dbname=database;","root","");
// $b=$a->prepare("UPDATE `users` SET user=:var");
// $b->bindParam(":var",$var);
// $b->execute();
// ?>
