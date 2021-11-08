<?php require_once "inc/header.inc.php" ?>
<?php

$r = execute_requete("SELECT * FROM player LIMIT 5");

$content .= "<div class = conteneur_accueil>";

while ($joueurs = $r ->fetch(PDO::FETCH_ASSOC)){
    // debug($joueurs);


$content .= "<div class='card' style'width: 18rem;'>";
$content .= "<img src='https://svg-clipart.com/clipart/logo/pITljIQ-football-logo-vector-clipart.png' class='card-img-top' alt''>";
$content .= "<div class='card-body'>";
$content .= "<h5 class='card-title'>$joueurs[nom] $joueurs[prenom]</h5>";
$content .= "<p>$joueurs[presentation]</p>";
$content .= "<a href'#' class='btn btn-primary'>En savoir plus</a>";
$content .= "</div>";
$content .= "</div>";


};





$content.= "</div>";

?>
<img id="accueil_img" src="https://images.pexels.com/photos/701773/pexels-photo-701773.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="foot">
<h1 id="accueil_h1">Bienvenue</h1>

<?= $content ?>
<?php require_once "inc/footer.inc.php" ?>