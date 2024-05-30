<?php
session_start();
include("../bd.php");
//if (!$_SESSION['passwor']) {
//  header('location: login.php');
//}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOIR NOTES ETUDIANTS</title>
    <style>
        .th {
            background-color: #FF584D;
            color: white;
            text-align: center;
        }

        .td {
            background-color: #ABA0F9;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include('menu.php'); ?>
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card-header text-light bg-dark">
                    <marquee direction="left">
                        <p>Entrez votre Identifiant et cliquer sur afficher</p>
                    </marquee>
                </div>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                    <div class="form-group">
                        <label>Votre INE</label>
                        <input type="text" class="form-control" name="ine">
                    </div><br>
                    <div class="form-group col-md-4">
                        <input type="submit" class="form-control btn btn-success" name="afficher" value="Afficher" class="bouton">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['afficher'])) {

        $ine = htmlspecialchars($_POST['ine']);

        $recupUsers = $bdd->query("select * from notes_etudiants where ine ='$ine'");

        print '<div class="container mt-5">';
        print '<div class="card-header bg-dark text-white">';
        print '<marquee direction="right"><p>Les notes d un étudiant</p></marquee>';
        print '</div>';
        print '<table class="table  table-bordered border-light"><tr class="th"><th>Id</th><th>INE</th><th>Projet-tutoré</th><th>Javascript</th><th>Php</th><th>Réseaux</th><th>Audiovisuel</th><th>Anglais</th></tr>';
        while ($user = $recupUsers->fetch()) {
            print '<tr class="td">';
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['ine'] . "</td>";
            echo "<td>" . $user['projet_tutore'] . "</td>";
            echo "<td>" . $user['javascript'] . "</td>";
            echo "<td>" . $user['php'] . "</td>";
            echo "<td>" . $user['reseaux'] . "</td>";
            echo "<td>" . $user['audiovisuel'] . "</td>";
            echo "<td>" . $user['anglais'] . "</td>";
            print "</tr>";
        }
        print '</table>';
        print '</div>';
        print '</div>';
    }
    ?>

</body>

</html>