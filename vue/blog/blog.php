<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8">
        <link href="./style/blog_style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
        <p><a href="index.php?deconnexion">Deconnexion</a></p>
 
<?php
foreach($billets as $billet)
{
?>
<div class="news">
    <h3>
        <?php echo $billet['titre']; ?>
        <em>le <?php echo $billet['date_creation_fr']; ?></em>
    </h3>
    
    <p>
    <?php echo $billet['contenu']; ?>
    <br />
    <em><a href="index.php?blog=commentaires&&billet=<?php echo $billet['id']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
}
?>
</body>
</html>