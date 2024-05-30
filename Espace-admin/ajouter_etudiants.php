<?php
session_start();
@$ine = $_POST['ine'];
@$formation = $_POST["formation"];
@$prenom = $_POST["prenom"];
@$nom = $_POST["nom"];
@$email = $_POST["email"];
@$telephone = $_POST["telephone"];
@$password = $_POST["password"];
@$send = $_POST["send"];
$erreur = "";
if (isset($send)) {
    if (empty($ine)) $erreur = "Vous n'avez pas saisi votre INE!";
    elseif (empty($formation)) $erreur = "Vous n'avez pas saisi votre formation!";
    elseif (empty($prenom)) $erreur = "Vous n'avez pas saisi votre prénom!";
    elseif (empty($nom)) $erreur = "Vous n'avez pas saisi votre nom!";
    elseif (empty($email)) $erreur = "Vous n'avez pas saisir votre email!";
    elseif (empty($telephone)) $erreur = "Vous n'avez pas saisir une numéro de téléphone!";
    elseif (empty($password)) $erreur = "Vous n'avez pas saisir une mot de passe!";
    else {
        include("../bd.php");
        $sel = $bdd->prepare("select id from etudiants where email=? limit 1");
        $sel->execute(array($email));
        $tab = $sel->fetchAll();
        if (count($tab) > 0)
            $erreur = "E-mail existe déjà!";
        else {
            $ins = $bdd->prepare("insert into etudiants (ine, formation, prenom, nom, email, telephone, password) values(?,?,?,?,?,?,?)");
            if ($ins->execute(array($ine, $formation, $prenom, $nom, $email, $telephone, ($password))));

            $erreur = "Inscription réussie!!";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJOUTER-ETUDIANT</title>

    <style>
        body {
            background-color: #ABA0F9;
            background-image: url(../images/bn.webp);
            background-attachment: fixed;
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
        }

        form {
            margin-top: 20px;
            padding: 30px;
            background: rgb(0, 0, 0, 0.3);
            box-shadow: 0.5rem 0.5rem #FF584D, -0.5rem -0.5rem #FF584D, 11px 16px 27px orangered;
        }

        .erreur {
            color: #FF584D;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
        }
        option{
            background-color: #ABA0F9;
            color:#FF584D;
        }
    </style>
</head>

<body class="text-light">
    <?php include("menu.php"); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <form action="" method="post">
                    <div class="erreur"><?php echo $erreur ?></div>

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
                        <label class="form-label">Prénom</label>
                        <input type="text" class="form-control" name="prenom">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom">
                    </div>

                    <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Téléphone</label>
                        <input type="text" class="form-control" name="telephone">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Inscrire l'étudiant" name="send">

                </form>
            </div>
        </div>
    </div>
    <br>
</body>

</html>