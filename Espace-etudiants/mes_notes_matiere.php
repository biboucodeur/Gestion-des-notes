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
    <title>MES NOTES DANS UNE MATIERE</title>
    <style>
        .body{
            background-color: #ccc;
        }
        .th {
            background-color: blue;
            color: white;
            text-align: center;
        }

        .td {
            background-color: #ABA0F9;
            text-align: center;
        }
    </style>
</head>

<body class="body">
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
                    <label class="form-label">INE</label>
                    <br>
                    <input type="text" name="ine" class="form-control">
                    <label class="form-label">Matières</label>
                    <br>
                    <select name="matieres" class="form-select">
                        <option value="Projet_tutore">Projet-tutoré</option>
                        <option value="Javascript">Javascript</option>
                        <option value="Php">Php</option>
                        <option value="Réseaux">Réseaux</option>
                        <option value="Audiovisuel">Audiovisuel</option>
                        <option value="Anglais">Anglais</option>
                    </select>
                    <br>
                    <input type="submit" name="afficher" value="Afficher" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>


                <?php
                if (isset($_POST['afficher'])) {

                    $ine = htmlspecialchars($_POST['ine']);
                    $matieres = htmlspecialchars($_POST['matieres']);

                    $recupUsers = $bdd->query("select * from notedesetudiants where ine ='$ine' AND matieres='$matieres'");

                    print '<div class="container mt-5">';
                    print '<div class="card-header bg-dark text-white">';
                    print '<marquee direction="right"><p>Mes notes</p></marquee>';
                    print '</div>';

                    print '<table class="table  table-bordered border-light"><tr class="th"><th>INE</th><th>Matière</th><th>Note</th></tr>';
                    while ($user = $recupUsers->fetch()) {
                        print '<tr class="td">';
                        echo "<td>" . $user['ine'] . "</td>";
                        echo "<td>" . $user['matieres'] . "</td>";
                        echo "<td>" . $user['notes'] . "</td>";
                        print "</tr>";
                    }
                    print '</table>';
                    print '</div>';
        print '</div>';
                }
                ?>
</body>

</html>