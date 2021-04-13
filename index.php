<?php
require_once('modele/connexion_bdd.php');

if (isset($_GET['inscription']))
{
	require_once('controleur/blog/inscription.php');
}
else if (isset($_GET['connexion']))
{
	require_once('controleur/blog/connexion.php');
}
else if (isset($_GET['deconnexion']))
{
	require_once('controleur/blog/deconnexion.php');
}
else if(isset($_GET['blog']) AND $_GET['blog'] == 'accueil')
{
	require_once('controleur/blog/get_billets.php');
}
else if(isset($_GET['blog']) AND $_GET['blog'] == 'commentaires')
{
	require_once('controleur/blog/commentaires.php');
}


else
{
	require_once('controleur/blog/connexion.php');
}