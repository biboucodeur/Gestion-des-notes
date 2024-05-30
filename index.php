<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Gestion des notes</title>
  <style>
    #page-content {
      flex: 1 0 auto;
    }
  </style>
</head>

<body class="bg-danger">

  <!--header-->
  <div class="card my-2">
    <div class="card-header bg-light text-dark">
      <marquee>
        <h1>Gestion des notes</h1>
      </marquee>
    </div>
  </div>


  <!--Image deroulant-->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/2.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="./images/2.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="./images/3.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--case-->
  <div class="container">
    <div class="card my-3">

      <img src="./images/6.svg" class="card-img-top" height="300px">

      <div class="card-body">
        <h5 class="card-title">Uniquement pour l'administrateur</h5>
        <p class="card-text">Je suis un(e) administrateur(trice) je cliques ici pour aller dans ma page</p>
        <a href="Espace-admin/login_admin.php" class="btn btn-success">ESPACE ADMIN</a>
      </div>
    </div>

    <div class="card">
      <img src="./images/4.svg" class="card-img-top" height="300px">

      <div class="card-body">
        <h5 class="card-title">Uniquement pour les étudiants</h5>
        <p class="card-text">Je suis un(e) étudiant(e) je cliques ici pour aller dans ma page</p>
        <a href="Espace-etudiants/login.php" class="btn btn-primary">ESPACE ETUDIANTS</a>
      </div>
    </div>
  </div>



  <!--FOOTER-->
  <hr>
  <br>
  <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <h1 class="fw-light mt-4 text-white">Plateforme de formation</h1>
          <p class="lead text-white-50">Cette plateforme est dédiée à la Gestion des notes</p>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>