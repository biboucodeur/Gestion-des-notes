<?php
include ('../bd.php');
$q = $bdd->query("SELECT * FROM etudiants WHERE id='" . $_GET["id"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $ine = $row['ine'];
    $prenom = $row['prenom'];
    $nom = $row['nom'];
    $email = $row['email'];
    $telephone = $row['telephone'];
}

if (isset($_POST['update'])) {
    $ine = $_POST['ine'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
   

    $r = "UPDATE etudiants SET ine ='$ine', prenom='$prenom', nom='$nom', email='$email', telephone='$telephone' WHERE id = '" . $_GET["id"] . "'";
    $bdd->exec($r);

    if ($r) {
        $success = "Etudiant modifié avec succès...";
        header('Location: list_etudiants.php?success=1');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>MODIFIER ETUDIANT</title>
</head>

<body>
    <?php include ('menu.php'); ?>


    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius container'>
            <p>Etudiant ajouté avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
               <marquee direction="left"><b> Gestion Etudiant</b></marquee>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>INE</label>
                        <input type="text" name="ine" class="form-control" value="<?php echo $ine; ?>">
                    </div>

                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="prenom" class="form-control" value="<?php echo $prenom; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>">
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                    </div>

                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="number" name="telephone" class="form-control" value="<?php echo $telephone; ?>">
                    </div><br>
                    <input type="submit" class="btn btn-primary" value="Changer" name="update">
                </form>
            </div>
        </div>
    </div>

</body>

</html>