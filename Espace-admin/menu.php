<style>
    header{
        background-color: #FF584D;
        padding: 20px;
    }
    a{
        background-color:  #ABA0F9;
        border-radius: 5px;
        margin-right: 5px;
        padding: 5px;
        margin-bottom: 5px;
    }
    .navbar-toggler-icon{
        background-color:  #ABA0F9;
    }
    .dropdown-menu{
        background-color:  white;
    }
</style>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand text-light" href="admin.php">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gestion des étudiants
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="ajouter_etudiants.php">Inscrire un étudiant</a>
                    <a class="dropdown-item" href="list_etudiants.php">Voir la liste des étudiants</a>
                    <a class="dropdown-item" href="modifier_info_etudiants.php">Modifier les informations d'un étudiant</a>

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gestion des notes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="ajouter_notes_etudiant.php">Ajouter les notes d'un étudiant</a>
                    <a class="dropdown-item" href="notes_etudiants.php">Voir les notes d'un étudiant</a>
                    <a class="dropdown-item" href="modifier_notes_etudiant.php">Modifier les notes d'un étudiant</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gestion des formations
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ajouter une formation et les matières de la formation</a>
                    <a class="dropdown-item" href="les_etudiants_formation.php">Voir l'ensemble des étudiants d'une formation</a>

                </div>
            </li>
        </ul>
    </div>
    <a class="btn btn-danger text-white" href="dec.php" role="button">Déconnexion</a>
   
</nav>

</header>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

