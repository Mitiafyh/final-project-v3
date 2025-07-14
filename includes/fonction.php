<?php
require("connection.php");
function get_liste_objet(){
    $sql="SELECT i.nom_image,o.nom_objet,o.id_objet FROM PF_objet AS o JOIN PF_images_objet AS i ON o.id_objet=i.id_objet";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}


function liste_emprunte(){
    $sql="SELECT id_objet,date_retour FROM v_objet_emprunt WHERE date_retour>NOW() AND date_retour is not null";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}

function liste_efa_niverina(){
    $sql="SELECT id_objet,date_retour FROM v_objet_emprunt WHERE date_retour<NOW() OR date_retour is null";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}
function filtre($id){
    $sql="SELECT nom_objet FROM v_objet_categorie WHERE id_categorie=".$id;
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}
function get_categorie(){
    $sql="SELECT * FROM PF_categorie_objet";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}


function get_historique($id){
    $sql="SELECT * FROM v_objet_emprunt_image WHERE id_objet=".$id;
    $resultat = mysqli_query(bdd(), $sql);

    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;

}

function get_membre(){
    $sql="SELECT id_membre,nom FROM PF_membre";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}
function about_membre($id){
    $sql="SELECT * FROM PF_membre WHERE id_membre=".$id;
    $resultat = mysqli_query(bdd(), $sql);
    $donnees = mysqli_fetch_assoc($resultat);
   
    return $donnees;
}

function get_objet_membre($id,$cat){
    $sql="SELECT * FROM v_objet_emprunt_image WHERE id_membre=".$id;
    $resultat = mysqli_query(bdd(), $sql);

    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;

}





