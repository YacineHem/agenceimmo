<?php

include_once 'inc/headerRoot.inc';
include_once 'BDD/fonctionsBDD.php';
$connect = connect();
if (isset($_POST['choix1'])) {
    $login = $_POST['login'];
    $mail = $_POST['mail'];
    $codepostal= $_POST['codepostal'];
    $mdpnonchiffrer = $_POST['mdp'];
    $mdp = password_hash($mdpnonchiffrer, PASSWORD_BCRYPT);
    
    ajoututilisateur($connect, $login, $mail, $codepostal , $mdp);
}

?>


<br>

<h3>Inscription</h3>

<br>



<form method="post" action="" onsubmit="if (confirm('Etes vous sur de vouloir vous inscrire ?')) {
    return true;
} else {
    return false;
}">

<label>Nom d'utilisateur</label>
<input type="text" placeholder="Entrez le nom d'utilisareur" name="login" required>
<br><br>
<label>Mail</label>
<input type="mail" placeholder="Entrez le mail" name="mail" required>
<br><br>
<label>Code Postal</label>
<input type="text" placeholder="Entrez le code postal" name="codepostal" required>
<br><br>
<label>Mot de passe</label>
<input type="password" placeholder="Entrez le mot de passe" name="mdp" required>
<br><br>
<input type="checkbox" name="choix1" value="1" required>Cochez si approuvé<a href="politique.php"> politique de Protection de Données</a>
<br><br>
<input class="submit" type="submit"  value="inscription">