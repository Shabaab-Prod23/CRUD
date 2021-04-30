<?php
$serveur = "localhost";
$login = "root";
$pass = "";
//config
try{
$connexion = new PDO("mysql:host=$serveur;dbname=digibase", $login, $pass);
$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//echo "Connect > OK !";

}
catch(PDOException $e){
    echo "Echec de la connexion !" .$e->getMessage();
    
}
?>