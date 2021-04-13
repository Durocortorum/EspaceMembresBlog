<!DOCTYPE html>
<html>
<head>
	<title>MON SITE</title>
	<meta charset="utf-8">
	<link href="./style/inscription_style.css" rel="stylesheet" /> 
</head>
<body>
	<div class="inscription">
		<header class="header">
			<h1>FORMULAIRE D'INCRIPTION</h1>
		</header>
		<div class="formulaire">
			<form action="index.php?inscription" method="post">
				<p>Veuillez renseigner les champs suivants :</p>
				<p>pseudo : <input type="text" name="formulaire_pseudo"/></p>
				<p>password :<input type="password" name="formulaire_password" /></p>
				<p>retapez password :<input type="password" name="formulaire_confirm_password" /></p>
				<p>email : <input type="email" name="formulaire_email" /></p>
				<p><input type="submit" name="enregistrer" /></p>
			</form>
		</div>
	</div>

</body>
</html>