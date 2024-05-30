<?php
session_start();
include("../bd.php");
//if (!$_SESSION['mdp_admin']) {
//  header('location: admin.php');
//}


if (isset($_POST['envoyer'])) {
    if (
        !empty($_POST['ine'])
        and !empty($_POST['formation'])
        and !empty($_POST['matieres'])
        and !empty($_POST['notes'])
    ) {

        $ine = htmlspecialchars($_POST['ine']);
        $formation = htmlspecialchars($_POST['formation']);
        $matieres = htmlspecialchars($_POST['matieres']);
        $notes = htmlspecialchars($_POST['notes']);
        $insertNotes = $bdd->prepare('INSERT INTO notedesetudiants (ine, formation, matieres, notes)VALUES(?,?,?,?) ');
        $insertNotes->execute(array($ine, $formation, $matieres, $notes));

        echo "<big>Notes bien ajoutées</big>";
    } else {

        echo "<big>Veuillez ajouter une note</big>";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJOUTER-NOTES-ETUDIANT</title>

</head>

<body>

    <?php include("menu.php"); ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">

                <form action="" method="post">

                    <div class="form-group">
                        <label class="form-label">Identifiant INE</label>
                        <input type="text" class="form-control" name="ine">
                    </div>


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
                    </div>


                    <div class="form-group">
                        <label class="form-label">Matières</label>
                            <select name="matieres" class="form-select">
                                <option value="Projet_tutore">Projet-tutoré</option>
                                <option value="Javascript">Javascript</option>
                                <option value="Php">Php</option>
                                <option value="Reseaux">Réseaux</option>
                                <option value="Audiovisuel">Audiovisuel</option>
                                <option value="Anglais">Anglais</option>
                            </select>
                        </div>


                    <div class="form-group">
                    <label class="form-label">Notes</label>
                    <input type="text" class="form-control" name="notes">
                    </div>

                    <br>
                    <input type="submit" class="btn btn-primary" value="Ajouter les notes" name="envoyer">

                </form>
            </div>
        </div>
    </div>
    <br>



</body>

</html>