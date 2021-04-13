<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8">
        <link href="./style/blog_style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
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
        </p>
    </div>
    
    <?php
    }
    foreach($commentaires as $comment)
    {
    ?>
    <h2>Commentaires</h2>
    <p>
        <strong><?php echo $comment['auteur']; ?></strong> le <?php echo $comment['date_commentaire_fr']; ?>                    
    </p>
    <p>
        <?php echo $comment['commentaire']; ?>
    </p>
    <?php
    }
    ?>
</body>
</html>