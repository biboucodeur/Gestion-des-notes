<?php
session_start();
include('../bd.php');


if (isset($_POST['valider'])) {
    if (!empty($_POST['login']) and !empty($_POST['password'])) {

        $login = htmlspecialchars($_POST['login']);
        $password = ($_POST['password']);


        $recupUsers = $bdd->prepare('SELECT * FROM administrateur WHERE login = ? AND password = ? ');
        $recupUsers->execute(array($login, $password));

        if ($recupUsers->rowCount() > 0) {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $recupUsers->fetch()['id'];
            header('Location: admin.php');
        } 
        else {
            echo "<big>Votre mot de passe ou login incorrect</big>";
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
    <title>CONNEXION-ADMIN</title>

    <style>
        body {
            background: #ABA0F9;
            background-image: url(login.svg);
            background-attachment: fixed;
            background-size: 35%;
            background-position: right;
            background-repeat: no-repeat;
        }

        form{
            margin-top: 40%;
            padding: 50px;
            background: rgb(0, 0, 0, 0.4);
            box-shadow: 0.5rem 0.5rem #FF584D, -0.5rem -0.5rem #FF584D, 11px 16px 27px orangered;
        }
    </style>
</head>

<body class="text-light">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <form action="" method="post">
                    <div class="form-group">
                        <label class="form-label">Login</label><br>
                        <input type="text" class="form-control" name="login">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Mot de passe</label><br>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-outline-light" value="Connecter" name="valider">
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>