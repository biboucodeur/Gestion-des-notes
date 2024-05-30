<?php
include ('../bd.php');
$q = $bdd->query("SELECT * FROM notes_etudiants WHERE id='" . $_GET["id"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $ine = $row['ine'];
    $projet_tutore = $row['projet_tutore'];
    $javascript = $row['javascript'];
    $php = $row['php'];
    $reseaux = $row['reseaux'];
    $audiovisuel = $row['audiovisuel'];
    $anglais = $row['anglais'];
}

if (isset($_POST['changer'])) {
    $ine = $_POST['ine'];
    $projet_tutore = $_POST['projet_tutore'];
    $javascript = $_POST['javascript'];
    $php = $_POST['php'];
    $reseaux = $_POST['reseaux'];
    $audiovisuel = $_POST['audiovisuel'];
    $anglais = $_POST['anglais'];

    $r = "UPDATE notes_etudiants SET ine ='$ine', projet_tutore='$projet_tutore', javascript='$javascript', php='$php', reseaux='$reseaux', audiovisuel='$audiovisuel', anglais='$anglais'  WHERE id = '" . $_GET["id"] . "'";
    $bdd->exec($r);

    if ($r) {
        $success = "Notes modifiées avec succès...";
        header('Location: modifier_notes_etudiant.php?success=1');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICATION NOTES ETUDIANT</title>
</head>

<body>
    <?php include ('menu.php'); ?>

    <div class="container mt-3">
            <div class="card-header bg-dark text-white">
               <marquee direction="left"><p>Modification des notes d'un étudiant</p></marquee>
            </div>
                <form action="" method="post">
                    <div class="form-group">
                        <label>INE</label>
                        <input type="text" name="ine" class="form-control" value="<?php echo $ine; ?>">
                    </div>

                    <div class="form-group">
                        <label>Projet-tutoré</label>
                        <input type="number" name="projet_tutore" class="form-control" value="<?php echo $projet_tutore; ?>">
                    </div>

                    <div class="form-group">
                        <label>Javascript</label>
                        <input type="number" name="javascript" class="form-control" value="<?php echo $javascript; ?>">
                    </div>

                    <div class="form-group">
                        <label>Php</label>
                        <input type="number" name="php" class="form-control" value="<?php echo $php; ?>">
                    </div>

                    <div class="form-group">
                        <label>Réseaux</label>
                        <input type="number" name="reseaux" class="form-control" value="<?php echo $reseaux; ?>">
                    </div>

                    <div class="form-group">
                        <label>Audiovisuel</label>
                        <input type="number" name="audiovisuel" class="form-control" value="<?php echo $audiovisuel; ?>">
                    </div>

                    <div class="form-group">
                        <label>Anglais</label>
                        <input type="number" name="anglais" class="form-control" value="<?php echo $anglais; ?>">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Changer" name="changer">
                </form>
            </div>
</body>

</html>