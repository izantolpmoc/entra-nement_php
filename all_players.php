<?php require_once "inc/header.inc.php" ?>
<?php 
// 5 - création d'une page : "voir toute les joueurs"

// 	-> affichage des joueurs dans 'l'ordre croissant'
// 	-> CHAQUE annonce doit pouvoir etre cliqué pour aller voir la "fiche du joueur"



$r = execute_requete("SELECT * FROM player ORDER BY id_player ASC");

$content .= "<div class = conteneur_accueil>";

while ($joueurs = $r ->fetch(PDO::FETCH_ASSOC)){
    // debug($joueurs);

    if(empty($joueurs['message'])){

        $indisponible_text= "";
        $indisponible = "";
    }else{

        $indisponible = "border: 1px solid red;";
        $indisponible_text = "<p style='color: red;'>indisponible</p>";
    }


$content .= "<div class='card' style='width: 18rem; $indisponible'>";
$content .= "<img src='https://svg-clipart.com/clipart/logo/pITljIQ-football-logo-vector-clipart.png' class='card-img-top' alt''>";
$content .= "<div class='card-body'>";
$content .= "<h5 class='card-title'>$joueurs[nom] $joueurs[prenom]</h5>";

$content .= $indisponible_text;

$content .= "<p>$joueurs[presentation]</p>";
$content .= "<a href='".URL."fiche_joueur.php?id_player=$joueurs[id_player]' class='btn btn-primary'>En savoir plus</a>";
$content .= "</div>";
$content .= "</div>";


};

    ?>

<h1> Notre équipe: </h1>

<?php echo $content ?>

<?php require_once "inc/footer.inc.php" ?>