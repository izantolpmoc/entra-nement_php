<?php require_once "inc/header.inc.php" ?>
<?php
// 4 - création d'une page : "ajout joueur"

// -> création formulaire pour insertion
// Enregistrement des données (formulaire)
//     => pensez aux controles des saisies :
//         -> nom, prenom OBLIGATOIRE  (2 conditions)
//         -> l'age doit etre un ENTIER et avoir 2 chiffres

// debug($_POST);

if( $_POST ){

    if( empty($_POST['nom'])){

        $error .= "<div class='alert alert-danger'>Veuillez renseigner le nom du joueur.</div>";

    }elseif( empty( $_POST['prenom'])){

        $error .= "<div class='alert alert-danger'>Veuillez renseigner le prénom du joueur.</div>";
    }else{
        $error .= "";
    }

    if( strlen($_POST['age']) < 2 ){

        $error .= "<div class='alert alert-danger'>Le format de l'âge est incorrect.</div>";
    }elseif( filter_var($_POST['age'], FILTER_VALIDATE_INT) == false){
        $error .= "<div class='alert alert-danger'>L'âge doit être un nombre entier.</div>";
    }
    else{
        $error .= "";
    }

    foreach($_POST as $indice => $valeur){

        $_POST[$indice] = htmlentities( addslashes($valeur));
    }


    if(empty($error)){
        execute_requete("INSERT INTO player(nom, prenom, age, poste, presentation) VALUES (
            '$_POST[nom]',
            '$_POST[prenom]',
            '$_POST[age]',
            '$_POST[poste]',
            '$_POST[presentation]'
        )");

        $content .= "<div class='alert alert-success'>$_POST[nom] a été ajouté à la liste des joueurs !</div>";
    }

}
?>
<h1>Ajouter un joueur</h1>

<?= $error ?>
<?= $content ?>
<form method="POST" class="formulaire_ajout">

<div class="input">
    <label for="">Nom</label>
    <input type="text" class="input-group-text" name="nom">
</div>

<div class="input">
    <label for="">Prénom</label>
    <input type="text" class="input-group-text" name="prenom">
</div>

<div class="input">
    <label for="">Âge</label>
    <input type="text" class="input-group-text" name="age">
</div>

<div class="input aside">
    <label class="input-group-text" for="inputGroupSelect01">Poste</label>
    <select class="form-select" id="inputGroupSelect01" name="poste">
        <option value="attaquant">Attaquant</option>
        <option value="defenseur">Defenseur</option>
    </select>
</div>

<div class="input form-floating">
    <textarea class="form-control" id="floatingTextarea2" name="presentation" cols="30" rows="10"></textarea>
    <label for="floatingTextarea2">Présentation</label>
</div>

<input type="submit" class="btn btn-secondary" value="Ajouter">
</form>
<?php require_once "inc/footer.inc.php" ?>