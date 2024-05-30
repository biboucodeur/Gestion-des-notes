<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFIER-INFO-ETUDIANTS</title>
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
    <?php include ('menu.php'); ?>


    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius container mt-4'>
            <p>Information modifiée avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
            <div class="card-header bg-dark text-white">
               <marquee direction="left"><p>Modification informations étudiants</p></marquee> 
            </div>
                <table class="table  table-bordered border-light">
                    <tr class="th">
                        <th>ID</th>
                        <th>INE</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>E-mail</th>
                        <th>Téléphone</th>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <?php
                        include ('../bd.php');;
                        $stmt = $bdd->query("SELECT * FROM etudiants");

                        while ($row = $stmt->fetch()) { ?>

                    <tr class="td">
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["ine"]; ?></td>
                        <td><?php echo $row["prenom"]; ?></td>
                        <td><?php echo $row["nom"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["telephone"]; ?></td>
                        <td><a class="btn btn-warning" href="edit_etudiant.php?id=<?php echo $row['id']; ?>">
                                Modifier</a></td>
                    </tr>

                <?php
                        }

                ?>
                </tr>
                </table>
            </div>
</body>

</html>