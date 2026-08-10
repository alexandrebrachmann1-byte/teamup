<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teamup";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
}
catch(PDOException $e){
    echo "Erreur de connexion : " . $e->getMessage();
}