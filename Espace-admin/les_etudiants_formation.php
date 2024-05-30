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
    <title>VOIR ETUDIANTS-FORMATION</title>
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
                        <p>Entrez la formation et cliquer sur afficher</p>
                    </marquee>
                </div>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <div class="form-group">
                        <label class="form-label">Formation</label>
                        <select name="formation" class="form-select">
                            <option value="MIC">MIC</option>
                            <option value="CD">CD</option>
                            <option value="MAI">MAI</option>
                            <option value="IDA">IDA</option>
                            <option value="SEG">SEG</option>
                            <option value="AGN">AGN</option>
                        </select>
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

        $formation = htmlspecialchars($_POST['formation']);

        $recupUsers = $bdd->query("select * from etudiants where formation ='$formation'");

        print '<div class="container mt-5">';
        print '<div class="card-header bg-dark text-white">';
        print '<marquee direction="right"><p>Liste des étudiants d une formation</p></marquee>';
        print '</div>';
        print '<table class="table table-bordered border-light"><tr class="th"><th>Id</th><th>Formation</th><th>INE</th><th>Prénom</th><th>Nom</th></tr>';
        while ($user = $recupUsers->fetch()) {
            print '<tr class="td">';
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['formation'] . "</td>";
            echo "<td>" . $user['ine'] . "</td>";
            echo "<td>" . $user['prenom'] . "</td>";
            echo "<td>" . $user['nom'] . "</td>";
            
            print "</tr>";
        }
        print '</table>';
        print '</div>';
        print '</div>';
    }
    ?>

</body>

</html>