<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Style.css">
    <title>Document</title>
</head>
<body>
<title>Client</title>
</head>

<body display:inline-block>
    <?php include '../nav.php' ?>

    <?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
    <div class='alert alert-danger corner-radius container mt-4'>
        <p>Client supprimé avec succés</p>
    </div>
    <?php unset($_GET['delete']);
    } ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-success corner-radius container mt-4'>
        <p>Client modifié avec succés</p>
    </div>
    <?php unset($_GET['success']);
    } ?>
    <fieldset align="center">
    <div class="container mt-3">
    <div class="card">
            <div class="card-header bg-success text-white">
                <h1>Liste des clients</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Nom Client:</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Boite Postale</th>
                        <th>Rue</th>
                        <td>Action</td>
                    </tr>
                    <tr>
                    </fieldset>
                        <?php
                    include '..//Conf/db.php';
                    $stmt = $connexion->query("SELECT * FROM client");

                        while ($row = $stmt->fetch()) { ?>

                    <tr>
                        <td><?php echo $row["idClient"]; ?></td>
                        <td><?php echo $row["nomClient"]; ?></td>
                        <td><?php echo $row["tel"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["bp"]; ?></td>
                        <td><?php echo $row["rue"]; ?></td>

                        <td><a class="btn btn-warning"
                                href="../Action/Client/EditClient.php?idClient=<?php echo $row['idClient']; ?>">
                                Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="../Action/Client/DeleteClient.php?idClient=<?php echo $row['idClient']; ?>"
                                onclick="return confirm('Vous êtes sur le point de supprimer , vous voulez vraiment supprimer');">Supprimer</a>
                        </td>

                    </tr>

                    <?php
                        }

                ?>
                    </tr>
                    </table>
            </div>
        </div>
    </div>


</body>
</html>