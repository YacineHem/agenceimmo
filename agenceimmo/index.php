<?php

include_once './inc/headerRoot.inc';
include 'BDD/fonctionsBDD.php';
if (isset($_SESSION['login'])) {
    $username = $_SESSION['login'];
    
    echo '<h3>Connecte en tant que ' . $_SESSION['login'] . '</h3>
    <a href="vuesControlleur/ajoutbien.php">Ajouter un bien</a><br>
    <a href="vuesControlleur/modifierbien.php">Modifier un bien</a><br>
    <a href="vuesControlleur/supprimerBien.php">Supprimer un bien</a><br>
    <a href="vuesControlleur/RechercheBien.php">Accèder aux biens</a><br></body>
    <a href="BDD/deconnexion.php">Se Deconnecter</a><br></body>';
} else {
    echo '<a href="vuesControlleur/rechercheBien.php">Accèder aux biens</a><br></body>';
}
include_once './inc/footer.inc';
