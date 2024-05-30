<?php
include ('../bd.php');
$q = $bdd->query("SELECT * FROM etudiants WHERE id='" . $_GET["id"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $password = $row['password'];
}

if (isset($_POST['update'])) {

    $password = $_POST['password'];
   

    $r = "UPDATE etudiants SET password='$password' WHERE id = '" . $_GET["id"] . "'";
    $bdd->exec($r);

    if ($r) {
        $success = "Mot de passe modifiée avec succès...";
        header('Location: modifier_password.php?success=1');
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
            <p>Mot de passe modifiée avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
               <marquee direction="left"><b>Modification Mot de passe</b></marquee>
            </div>
            <div class="card-body">
                <form action="" method="post">
            
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                    </div><br>
                    <input type="submit" class="btn btn-primary" value="Changer" name="update">
                </form>
            </div>
        </div>
    </div>

</body>

</html>