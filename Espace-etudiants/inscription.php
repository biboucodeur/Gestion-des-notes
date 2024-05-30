<?php
include('../bd.php');

if (isset($_POST['send'])) {
    if (!empty($_POST['ine'])
    and !empty($_POST['formation'])
        and !empty($_POST['prenom'])
        and !empty($_POST['nom'])
        and !empty($_POST['email'])
        and !empty($_POST['telephone'])
        and !empty($_POST['password'])
    ) {
        $ine = htmlspecialchars($_POST['ine']);
        $formation = htmlspecialchars($_POST['formation']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $password = ($_POST['password']);

        $insertUser = $bdd->prepare('INSERT INTO etudiants (ine, formation, prenom, nom, email, telephone, password)VALUES(?,?,?,?,?,?,?)');
        $insertUser->execute(array($ine, $formation, $prenom, $nom, $email, $telephone, $password));
    } else {
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
    <title>INSCRIPTION-ETUDIANT</title>

    <style>
        body {
            background:#ccc;
        }

        form {
            margin-top: 30px;
            padding: 30px;
            background:#282E2E;
            box-shadow: 0.5rem 0.5rem blue, -0.5rem -0.5rem #FF584D, 11px 16px 27px black;
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
                    <marquee class="text-light">Inscrivez-vous si vous n'avez pas de compte!!</marquee>
                    </div>
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
                    <input type="submit" class="btn btn-primary" value="Inscrire" name="send">

                </form>
            </div>
        </div>
    </div>
    <br>
    <span>J'ai déjà un compte</span> <a href="login.php" class="btn btn-primary">Se connecter</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>