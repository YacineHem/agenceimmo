<?php
include_once 'inc/headerRoot.inc';
include_once 'BDD/fonctionsBDD.php';
if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $dateConnection = time();
    login(connect(),$mdp, $login);
}
?>

<form action="#" method="post">
    <p><label for="login">Entrez votre nom d'utilisateur :</label></p>
    <input type="text" name="login" id="login" required><br>
    <p><label for="mdp">Entrez votre mot de passe :</label></p>
    <input type="password" name="mdp" id="mdp"><br>
    <input type="submit" value="Se connecter">
</form>
<?php include_once 'inc/footer.inc';