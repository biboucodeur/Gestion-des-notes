<?php
session_start();
include('../bd.php');
if (!$_SESSION['password']) {
    header('location: login_admin.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGE-ADMIN</title>
   <style>
       .bod{
           background-color: #ccc;
       }
   </style>
</head>

<body class="bod">
   
    <?php include("menu.php");?>

   <div class="container mt-4">
        <h1 class="display-4 text-success">Gestion Administrateur!</h1>
        <p class="text-dark">Page de l'administrateur de la plateforme</p>
        <hr class="my-4">
   
        <a class="btn btn-primary text-white" href="admin.php" role="button">Accueil admin!!</a>
    </div>

</body>

</html>