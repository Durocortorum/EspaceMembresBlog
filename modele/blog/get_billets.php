<?php
function get_billets($offset, $limite)
{
    global $bdd;
    $offset = (int) $offset;
    $limite = (int) $limite;
        
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT :offset, :limite');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limite', $limite, PDO::PARAM_INT);
    $req->execute();
    $billets = $req->fetchAll();
    
    
    return $billets;
}