<?php

 $host = 'localhost';
 $dbname = 'ecole';
 $username = 'root';
 $password = '';
 
try {
    
    $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    
   // echo "Connexion réussie à la base $dbname.";
} catch (PDOException $pe) {
    die("Echec de connexion $dbname :" . $pe->getMessage());
}

?>