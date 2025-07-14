<?php
require("../includes/fonction.php");
$categorie = get_categorie();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Objets par catégorie</title>
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background: linear-gradient(to right, #dff6f0, #b9e4d6);
      font-family: 'Segoe UI', sans-serif;
      padding: 30px;
    }

    .navbar {
      background-color: #ffffff !important;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    .nav-link.active {
      font-weight: bold;
      color: #007b5e !important;
    }

    h2 {
      color: #007b5e;
      margin-top: 30px;
      margin-bottom: 15px;
      border-bottom: 2px solid #cde7dc;
      padding-bottom: 5px;
    }

    ul {
      list-style-type: none;
      padding-left: 0;
    }

    li {
      background-color: #ffffff;
      margin-bottom: 10px;
      padding: 12px 18px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease;
    }

    li:hover {
      background-color: #eef9f4;
    }
  </style>
</head>

<body>

<header>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="emprunt.php">Emprunt</a>
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

<main class="container">
  <?php foreach ($categorie as $cat) { ?>
    <h2><?= $cat['nom_categorie'] ?></h2>
    <?php $filtre = filtre($cat['id_categorie']); ?>
    <ul>
      <?php foreach ($filtre as $fl) { ?>
        <li><?= $fl['nom_objet'] ?></li>
      <?php } ?>
    </ul>
  <?php } ?>
</main>

</body>
</html>