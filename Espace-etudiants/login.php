<?php
session_start();
include('../bd.php');


if (isset($_POST['valider'])) {
    if (!empty($_POST['ine']) and !empty($_POST['password'])) {

        $ine = htmlspecialchars($_POST['ine']);
        $password = ($_POST['password']);


        $recupUsers = $bdd->prepare('SELECT * FROM etudiants WHERE ine = ? AND password = ? ');
        $recupUsers->execute(array($ine, $password));

        if ($recupUsers->rowCount() > 0) {
            $_SESSION['ine'] = $ine;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $recupUsers->fetch()['id'];
            header('Location: savoir.php');
        } 
        else {
            echo "<big>Votre mot de passe ou ine incorrect</big>";
        }
    } 
    else {
        echo "<big>Veuillez completez tous les champs</big>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CONNEXION-ETUDIANTS</title>

    <style>
        body {
            background:#ccc;
        }

        form{
            margin-top: 25%;
            padding: 50px;
            background:#282E2E;
            box-shadow: 0.5rem 0.5rem blue, -0.5rem -0.5rem #FF584D, 11px 16px 27px black;
        }
        .rond{
            padding: 12px;
            background: linear-gradient(to right, #FF584D, #ABA0F9);
            border-radius: 7px;
        }
    </style>
</head>

<body class="text-light">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <form action="" method="post">
                    <div class="rond">
                    <marquee class="text-light">Connectez-vous si vous avez un compte!!</marquee>
                    </div>
                
                    <div class="form-group">
                        <label class="form-label">Identifiant INE</label><br>
                        <input type="text" class="form-control" name="ine">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Mot de passe</label><br>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Connecter" name="valider">
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
                <span> J'ai pas de compte</span> <a href="inscription.php" class="btn btn-primary">S'inscire</a>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>