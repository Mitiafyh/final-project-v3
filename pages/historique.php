<?php 
require("../includes/fonction.php");
$num=$_GET['num'];
$historique=get_historique($num);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<header>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Emprunt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="filtrer.php">Liste par categorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="liste_membre.php">Liste membre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">se deconnecter</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</header>
    
<main>
    <?php if($historique==null){ ?>
        <p>aucun historique d'emprunt</p>
    <?php } else{ ?>
        <table class="table">
<tr>
    <td>Membre</td>
    <td>Nom de l'objet</td>
    <td>Date_emprunt</td>
    <td>Date_retour</td>

</tr>

    <?php foreach($historique as $h){ ?>
        <tr>
        <td><?= $h['nom'] ?></td>
        <td><?= $h['nom_objet'] ?></td>
        <td><?= $h['date_emprunt'] ?>
        <td><?= $h['date_retour'] ?></td>
        </tr>

    <?php } ?>
    </table>
    <?php } ?>

<a href="emprunt.php"><button>retour</button></a>

</main>


</body>
</html>