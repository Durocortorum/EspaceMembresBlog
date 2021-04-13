<?php

// Connexion à la base de données

try
{
	$host = 'localhost';
    $database = 'espacemembres';
    $identifiant = 'root';
    $password = '';
	$bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8;port=3308', $identifiant, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

}
catch(PDOException $e)
{
    echo 'La base de donnée n\'est pas disponible pour le moment. <br />';
    echo ''.$e->getMessage().'<br />';
    echo 'Ligne : '.$e->getLine();
}