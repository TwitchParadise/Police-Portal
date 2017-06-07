<?php
$username = "METTRE ICI"; // username
$password = "METTRE ICI"; // password of the database
$hostname = "METTRE ICI"; // host of the database
$namebase = "METTRE ICI"; // name of the database























// on tente la connexion à la base de donnée
try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
 }
  catch (Exception $e)
 {
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : ' . $e->getMessage());
 }
 ?>