<?php
//On vérifie si le pseudo existe
require_once('modele/blog/inscription.php');
$erreur = array();

//Verification que le formulaire est bien envoyé
if (strtolower($_SERVER["REQUEST_METHOD"]) == 'post'){
	
	//Traitement / Sécurisation
	$pseudo = addslashes(htmlspecialchars(trim($_POST['formulaire_pseudo'])));
	$password = htmlspecialchars($_POST['formulaire_password']);
	$confirm_password = htmlspecialchars($_POST['formulaire_confirm_password']);
	$confirm_password = htmlspecialchars($_POST['formulaire_confirm_password']);
	$email = addslashes(htmlspecialchars(trim($_POST['formulaire_email'])));

	$option_cost = ['cost' => 11,];
	$password_hash = password_hash($password, PASSWORD_DEFAULT, $option_cost);
	
	//Verification du pseudo
	if (empty($pseudo)){
		$erreur['oubliePseudo'] = "Vous devez indiquer un pseudo !";
	}
	else {
		$verif_pseudo = verif_pseudo($pseudo);

		if ($verif_pseudo >= 1){
			$erreur['indispopseudo'] = "Ce pseudo est déjà utilisé !";
		}
	}

	//Verification du mot de passe 
	if (empty($password)){
		$erreur['oubliPassword'] = "Vous devez renseigner un mot de passe !";
	}
	if (empty($confirm_password)){
		$erreur['oubliConfirmPassword'] = "Vous devez confirmer votre mot de passe !";
	}
	if ($password != $confirm_password){
		$erreur['differencePassword'] = "le mot de passe et la confirmation de mot de passe ne sont pas identiques !";
	}

	//Verification de l'email 
	if (empty($email)){
		$erreur['oubliEmail'] = "Vous devez renseigner une adresse mail !";
	}
	if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
		$erreur['nonConformEmail'] = "l'adresse email renseignée n'est pas correcte !";
	}

	

	//Si pas d'erreur on enregistre l'inscription en BDD
	if (empty($erreur)){

		echo $pseudo."<br />";
		echo $password_hash."<br />";
		echo $email."<br />";

		add_user($pseudo, $password_hash, $email);
	}
	//On parcours le tableau des erreurs et on affiche
	foreach($erreur as $erreurFormulaire){
		require_once('vue/blog/inscription.php');
		echo $erreurFormulaire . '<br />';	
	}
}
else
{
	require_once('vue/blog/inscription.php');
}




