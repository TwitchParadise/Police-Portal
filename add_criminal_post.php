<?php
// Connexion à la base de données
include( "config.php" );



// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO lspd (nom, telephone, steam, crime, sanction) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['telephone'], $_POST['steam'], $_POST['crime'], $_POST['sanction']));

// Redirection du visiteur vers la page du minichat
header('Location: add_criminal.php');

?>
