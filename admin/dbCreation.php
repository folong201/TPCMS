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
    //initialisation des tables et de la
    
    function initTable(){
        $bdd = new PDO('mysql:host=localhost;debname=CMS','root','');
        // global $bdd;
        initDb();
        //cette fonction permetra de verifier si les bd et la table existe et de la les creer dans le cas contraire
        //Les diferentes tables sont :
            // admin 
            // membre 
            // project 
            // Employer 
            // lieux touristique 
            // pub 
            // activiter 
            // anonce
            
            
            //admin    
            $requeteAdmin="CREATE TABLE if not exists 
            admin (
                        id INT primary key NOT NULL auto_increment,
                        userName varchar(120) not null,description TEXT not null,
                        pass varchar(255),
                        surname varchar(255),
                        poste varchar(200),
                    )"; 
             $bdd->exec($requeteAdmin);
             die("merde");
             //membre
             $requeteMembre="CREATE TABLE if not exists 
            membre (
                        id int primary key NOT NULL auto_increment,
                        name varchar(120) not null,description TEXT not null,
                        poste varchar(255),
                        photo varchar(300),
                        biographie text(2000),
                        dateNais date()
    
                    )"; 
            $bdd->exec($requeteMembre);
            //employer
            $requeteEmployer="CREATE TABLE if not exists 
            Employer (
                        id int primary key NOT NULL auto_increment,
                        name varchar(120) not null,description TEXT not null,
                        biographie varchar(255),
                        photo varchar(300),
                        dateNais date(),
                        poste varchar(255)
    
                    )"; 
            $bdd->exec($requeteEmployer);
            //creation de lieux touritique
            $requeteLieux="CREATE TABLE if not exists 
            Lieux (
                        id int primary key NOT NULL auto_increment,
                        name varchar(120) not null,description TEXT not null,
                        description varchar(255),
                        photo varchar(300)
    
                    )"; 
            $bdd->exec($requeteLieux);
            
            //projects
            $requeteProject="CREATE TABLE if not exists 
            projects (
                        id int primary key NOT NULL auto_increment,
                        titre varchar(120) not null,description TEXT not null,
                        description varchar(255),
                        photo varchar(300),
                        instigateur varchar(300),
                        createur number(500),
                        duree varchar(300),
                        debut date()
                    )"; 
            $bdd->exec($requeteProject);
            //creation de Pub
            $requetepub="CREATE TABLE if not exists 
            pub (
                        id int primary key NOT NULL auto_increment,
                        name varchar(120) not null,description TEXT not null,
                        description varchar(255),
                        photo varchar(300)
                    )"; 
            $bdd->exec($requetepub);
            
            
            //activiter pour la mairie
            $requeteactiviter="CREATE TABLE if not exists 
            activiter (
                        id int primary key NOT NULL auto_increment,
                        name varchar(120) not null,description TEXT not null,
                        description varchar(255),
                        photo varchar(300)
    
                    )"; 
            $bdd->exec($requeteactiviter);
            
            //Annonce
            $requeteAnnonce="CREATE TABLE if not exists 
            annonce (
                        id int primary key NOT NULL auto_increment,
                        name varchar(120) not null,description TEXT not null,
                        description varchar(255),
                        photo varchar(300)
    
                    )"; 
            $bdd->exec($requeteAnnonce);
        }
        // die('bloc');
        ?>