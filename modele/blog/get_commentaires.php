<?php
function verif_billet()
{
	global $bdd;
	$req = $bdd->query('SELECT MAX(id) AS id_max FROM billets');
   	$verif_maxbillet = $req->fetch();

    return $verif_maxbillet['id_max'];
}

function get_billets($id)
{
    global $bdd;
    $id = (int) $id;
        
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = :idb');

    $req->execute(array('idb' => $id));
    $billets = $req->fetchAll();
    
    return $billets;
}

function get_commentaires($id)
{
    global $bdd;
    $id = (int) $id;
        
    $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = :idc ORDER BY date_commentaire');
    
    $req->execute(array('idc' => $id));
    $commentaires = $req->fetchAll();
    
    return $commentaires;
}