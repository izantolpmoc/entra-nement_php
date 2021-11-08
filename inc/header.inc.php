<?php require_once "init.inc.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>

<!-- CDN CSS BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- CDN FONT AWESOME-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<!-- CSS PERSO -->
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <div class="navbar">
        <figure>
            <a href="<?php echo URL ?>accueil.php"><img src="https://svg-clipart.com/clipart/logo/pITljIQ-football-logo-vector-clipart.png" width="80px" alt="football"></a>
        </figure>
        <nav>
            <a class="btn btn-dark" href="<?php echo URL?>ajout.php">Ajout</a>
            <a class="btn btn-dark" href="<?php echo URL ?>all_players.php">Voir tous les joueurs</a>
        </nav>
    </div>

    <main>