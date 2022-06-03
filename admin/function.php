<?php
session_start();
//inportation du fichier pour creer les diferentes base de donnees
// require_once('dbCreation.php');
//initialisation de bases de donne et des tables 
// initDb();
// initTable();
// die("ici");
// die("here after the calling of init table functio");
//creation de la connection a la base de donne
$bdd = new PDO('mysql:host=localhost;dbname=CMS','root','');
//function to check if someone is connected
function checkIfConnected(){
        // die("boc");
        // && isset($_SESSION['userName']) && ($_SESSION['userName']!=null)
        if($_SESSION['connected']!=1){
            header("Location: login.php");
            exit;
        }
    }
    //fontion pour televerser les fichier images
function televerser(){

    // Vérifier si le formulaire a été soumis
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Vérifie si le fichier a été uploadé sans erreur.
        if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["photo"]["name"];
            $filetype = $_FILES["photo"]["type"];
            $filesize = $_FILES["photo"]["size"];

            // Vérifie l'extension du fichier
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");
    
            // Vérifie la taille du fichier - 5Mo maximum
            $maxsize = 5 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");
    
            // Vérifie le type MIME du fichier
            if(in_array($filetype, $allowed)){
                // Vérifie si le fichier existe avant de le télécharger.
                if(file_exists("../../upload/" . $_FILES["photo"]["name"])){
                    echo $_FILES["photo"]["name"] . " existe déjà.";
                } else{
                    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../upload/" . $_FILES["photo"]["name"]);
                    echo "Votre fichier a été téléchargé avec succès.";
                } 
            } else{
                echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
            }
        } else{
            echo "Error: " . $_FILES["photo"]["error"];
        }
    }
}

function connection($pass,$userName){
    try{
        global $bdd;
    }catch(PDOException $e){
        echo $e;
    }
    $requette = $bdd->query('SELECT * FROM admin');
    while($item = $requette->fetch()){
        if ($item['userName'] == $userName && $item['pass']==$pass) {
            $_SESSION['connected'] = true;
            $_SESSION['userName']=$userName;
            $_SESSION['userId'] = $item['id'];
            header('Location: index.php');
            die($item['pass']);
            exit;
        }
    }
    header('Location: login.php');
    exit;
}

function addProjectSave($titre,$description,$instigateur,$debut,$duree,$image,$createur){
    global $bdd;
    $requette = $bdd->prepare("INSERT INTO projects (titre,description,instigateur,debut,duree,photo,createur) VALUES(?,?,?,?,?,?,?)");
    // $data =
    $requette->execute(array($titre,$description,$instigateur,$debut,$duree,$image,$createur));
}

function addMember($name,$biographie,$dateNais,$poste,$image){
    global $bdd;
    $requette = $bdd->prepare("INSERT INTO membre (name,biographie,dateNais,poste,photo) VALUES(?,?,?,?,?)");
    // $data =
    $requette->execute(array($name,$biographie,$dateNais,$poste,$image));
}
function addEmployer($name,$biographie,$dateNais,$poste,$image){
    global $bdd;
    $requette = $bdd->prepare("INSERT INTO employer (name,biographie,dateNais,poste,photo) VALUES(?,?,?,?,?)");
    // $data =
    $requette->execute(array($name,$biographie,$dateNais,$poste,$image));
}
//funtion pour l'ajout d;un lieux

function addLieux($name,$description,$image){
    global $bdd;
    $requette = $bdd->prepare("INSERT INTO Lieux (name,description,image) VALUES(?,?,?)");
    // $data =
    $requette->execute(array($name,$description,$image));  
}



function addActiviter($name,$description,$image){
    global $bdd;
    $requette = $bdd->prepare("INSERT INTO activiter (name,description,image) VALUES(?,?,?)");
    // $data =
    try{

        $requette->execute(array($name,$description,$image)); 
    }catch(PDOException $e){
        return false;
    }
    return true;
}

function addAnnonce($name,$description,$image){
    global $bdd;
    $requette = $bdd->prepare("INSERT INTO Annonce (name,description,image) VALUES(?,?,?)");
    // $data =
    $requette->execute(array($name,$description,$image));  
}

function addPub($name,$description,$image){
    global $bdd;
    $requette = $bdd->prepare("INSERT INTO pub (name,description,photo) VALUES(?,?,?)");
    // $data =
    $requette->execute(array($name,$description,$image));  
}
?>
