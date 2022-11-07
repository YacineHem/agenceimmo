<?php
include_once 'fonctionsBDD.php';
$dateDeconnexion = date("y-m-d");
$query = connect()->prepare('INSERT INTO deconnexion (dateDeconnexion) VALUES (:dateDeconnexion)');
$bv = $query->bindValue(':dateDeconnexion', $dateDeconnexion, PDO::PARAM_STR);
$query->execute();
session_start();
session_unset();
echo '<meta http-equiv="refresh" content="1; url=../index.php"/>';