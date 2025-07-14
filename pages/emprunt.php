<?php
require("../includes/fonction.php");
$liste = get_liste_objet();
$liste_emprunt = liste_emprunte();
$etat = false;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des objets</title>
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background: linear-gradient(to right, #dff6f0, #b9e4d6);
      font-family: 'Segoe UI', sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #007b5e;
    }

    .navbar {
      background-color: #ffffff !important;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .nav-link.active {
      font-weight: bold;
      color: #007b5e !important;
    }

    .objet-card {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s;
    }

    .objet-card:hover {
      transform: scale(1.01);
    }

    .btn-emprunter {
      background-color: #007b5e;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 6px;
      margin-top: 10px;
    }

    .btn-emprunter:hover {
      background-color: #005f45;
    }

    .retour-date {
      color: #dc3545;
      font-weight: 500;
      margin-top: 10px;
    }

    a {
      color: #007b5e;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
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

  <h1>Liste des objets</h1>

  <div class="container">
    <?php foreach ($liste as $ls) { ?>
      <div class="objet-card text-center">
        <a href="historique.php?num=<?= $ls['id_objet'] ?>">
          <?php if ($ls['nom_image'] == null) { ?>
            <img src="../assets/image/5.jpeg" alt="" style="width:50px;">

          <?php } ?>
          <img src="../assets/image/<?= $ls['nom_image'] ?>" alt="" style="width:50px;">


          <h5><?= $ls['nom_objet'] ?></h5>
        </a>
        <?php
        $est_emprunte = false;
        foreach ($liste_emprunt as $ls_e) {
          if ($ls['id_objet'] == $ls_e['id_objet']) { ?>
            <p class="retour-date">Déjà emprunté (non disponible)— retour le <?= $ls_e['date_retour'] ?></p>
            <?php $est_emprunte = true; ?>
            <?php break ?>
          <?php }
        }
        if (!$est_emprunte) { ?>
        <a href="bouton.php?num=<?= $ls['id_objet'] ?>"><button class="btn-emprunter" type="submit">Emprunter</button></a>
            
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</body>

</html>