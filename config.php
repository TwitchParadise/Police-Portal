<?php
$username = "METTRE ICI"; // username
$password = "METTRE ICI"; // password of the database
$hostname = "METTRE ICI"; // host of the database
$namebase = "METTRE ICI"; // name of the database























// Attempt to connect to the database
try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
 }
  catch (Exception $e)
 {
  // If an error is thrown, display the message
  die('Erreur : ' . $e->getMessage());
 }
 ?>
