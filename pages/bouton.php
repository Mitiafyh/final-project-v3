<?php
require("../includes/fonction.php");
$num=$_GET['num'];
$sql="UPDATE PF_emprunt SET date_retour=(NOW()+3) WHERE id_objet=".$num ;
$resultat = mysqli_query(bdd(), $sql);

header('location: emprunt.php');
?>