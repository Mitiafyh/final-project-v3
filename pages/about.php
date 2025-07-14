<?php 
require("../includes/fonction.php");
$id=$_GET['id'];
$about=about_membre($id);
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
   <table class="table">
    <tr>
        <td>Nom</td>
        <td>Date de naissance</td>
        <td>Genre</td>
        <td>Ville</td>
        <td>E_mail</td>

    </tr>
    <tr>
        <td><?=$about['nom']?></td>
        <td><?=$about['date_de_naissance']?></td>
        <td><?=$about['genre']?></td>
        <td><?=$about['ville']?></td>
        <td><?=$about['email']?></td>



    </tr>
   </table>
</main>

</body>
</html>