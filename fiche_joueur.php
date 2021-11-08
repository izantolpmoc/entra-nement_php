<?php require_once "inc/header.inc.php" ?>
<?php
if( isset($_GET['id_player'])){

    $r = execute_requete("SELECT * FROM player WHERE id_player = '$_GET[id_player]'");
    
}else{
    header('location:all_players.php');
    exit;
}

if( isset($_POST['message']) && !empty($_POST['message'])){


    foreach($_POST as $indice => $valeur){

        $_POST[$indice] = htmlentities( addslashes($valeur));
    }


    execute_requete("UPDATE player SET message = '$_POST[message]' WHERE id_player=$_GET[id_player]");

    $content .= "<div class='alert alert-success'>Votre message a été envoyé au joueur !</div>";


}

$fiche_joueur = $r->fetch(PDO::FETCH_ASSOC);
    // debug($fiche_joueur);


foreach ($fiche_joueur as $indice => $valeur){

    if($indice == 'id_player' || $indice == 'message'){
        $content .= '';
    }else{
        $content .= "<p> <strong>". ucfirst($indice)." </strong> : $valeur </p>";
    }

}

// debug($_POST);

if( !empty($fiche_joueur['message'])){

    $content .= "<p style='color: red;'>Joueur déjà acheté</p>";
}else{



$content .= "<form method='post'>";

$content .= "<div class='input form-floating'>";
$content .= "<textarea class='form-control' id='floatingTextarea2' name='message' cols='30' rows='20'></textarea>";
$content .= "<label for='floatingTextarea2'>Message</label>";
$content .= "</div>";
$content .= "<input class='btn btn-secondary' type='submit' value='Contacter'>";

$content .= "</form>";
}
?>

<h1>Fiche joueur</h1>

<div class="fiche_joueur">
<?= $content ?>
</div>
<?php require_once "inc/footer.inc.php" ?>