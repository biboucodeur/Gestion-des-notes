<style>
    header{
        background-color: rgb(0, 0, 0,0.5);
        padding: 20px;
    }
    a{
        background-color:  #FF584D;
        border-radius: 5px;
        margin-right: 5px;
        padding: 5px;
        margin-bottom: 5px;
    } 
    .navbar-toggler-icon{
        background-color:  #FF584D;
    }
    .dropdown-menu{
        background-color:  white;
    }
</style>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light">
    <a  class="navbar-brand text-light" href="savoir.php"><i class="bi bi-house-fill"></i> Groupe HS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Administratives
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="mes_info.php">Je vérifie mes informations administratives</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mes notes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="mes_notes.php">Je vérifie mes notes</a>
                    <a class="dropdown-item" href="mes_notes_matiere.php">Je vérifie mes notes dans une matière</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mot de passe
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="modifier_password.php">Je modifie mon mot de passe</a>
                </div>
            </li>
        </ul>
    </div>
    <a class="btn btn-danger text-white" href="deconnexion.php" role="button">Déconnexion</a>
   
    <!--   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button name="deconnecte" class="btn btn-outline-secondary" type="button">Se déconneter</button>
    </div>-->
</nav>

</header>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

