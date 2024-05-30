<?php
session_start();
include("../bd.php");

if (!$_SESSION['password']) {
  header('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PAGE-ETUDIANTS</title>
  <style>
    #page-content {
      flex: 1 0 auto;
    }

    .bg {
      background-color: #FF584D;
    }
  </style>
</head>

<body class="bg">
  <div class="sticky-top">
    <?php include("menu.php"); ?>
  </div>



  <div class="container-fluid row row-cols-1 row-cols-md-2 g-4 my-3">
    <div class="col-md-3">
      <div class="card">
        <img src="../images/bib.jpg" class="card-img-top">
        <div class="card-body">
          <big class="card-title">Mes informations</big>
          <p class="card-text"><a href="mes_info.php" class="btn btn-primary">Cliquez ici <i class="bi bi-file-person"></i></a></p>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="card">
        <img src="../images/bib.jpg" class="card-img-top">
        <div class="card-body">
          <big class="card-title">Vérification notes</big>
          <p class="card-text"><a href="mes_notes.php" class="btn btn-primary">Cliquez ici <i class="bi bi-book"></i></a></p>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="card">
        <img src="../images/bib.jpg" class="card-img-top">
        <div class="card-body">
          <big class="card-title">Note dans les matières</big>
          <p class="card-text"><a href="mes_notes_matiere.php" class="btn btn-primary">Cliquez ici <i class="bi bi-journal"></i></a></p>
        </div>
      </div>
    </div>


    <div class="col-md-3">
      <div class="card">
        <img src="../images/bib.jpg" class="card-img-top">
        <div class="card-body">
          <big class="card-title">Modifier mot de passe</big>
          <p class="card-text"><a href="modifier_password.php" class="btn btn-primary">Cliquez ici <i class="bi bi-pencil-square"></i></a></p>
        </div>
      </div>
    </div>
  </div>

  <img src="../images/etudiante.png" height="350px" width="">

  <!--FOOTER-->
  <hr>
  <br>
  <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <h1 class="fw-light mt-4 text-white">Plateforme des résultats</h1>
          <p class="lead text-white-50">Cette plateforme est dédiée aux étudiants de l'Université Virtuelle du Sénégal (UVS) pour vérifier leurs résultats semestrielles</p>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-light text-dark-50">
    <div class="container text-center">
      <small>
        <marquee>Copyright &copy; Gestion des notes</marquee>
      </small>
    </div>
  </footer>


</body>

</html>