<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFIER-NOTES-ETUDIANT</title>
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
            <p>Notes modifiées avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
            <div class="card-header bg-dark text-white">
               <marquee direction="left"><p>Modification des notes d'un étudiant</p></marquee> 
            </div>
                <table class="table  table-bordered border-light">
                    <tr class="th">
                        <th>ID</th>
                        <th>INE</th>
                        <th>Projet-tutoré</th>
                        <th>Javascript</th>
                        <th>Php</th>
                        <th>Réseaux</th>
                        <th>Audiovisuel</th>
                        <th>Anglais</th>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <?php
                        include ('../bd.php');;
                        $stmt = $bdd->query("SELECT * FROM notes_etudiants");

                        while ($row = $stmt->fetch()) { ?>

                    <tr class="td">
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["ine"]; ?></td>
                        <td><?php echo $row["projet_tutore"]; ?></td>
                        <td><?php echo $row["javascript"]; ?></td>
                        <td><?php echo $row["php"]; ?></td>
                        <td><?php echo $row["reseaux"]; ?></td>
                        <td><?php echo $row["audiovisuel"]; ?></td>
                        <td><?php echo $row["anglais"]; ?></td>
                        <td><a class="btn btn-warning" href="edit_notes_etudiant.php?id=<?php echo $row['id']; ?>">
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