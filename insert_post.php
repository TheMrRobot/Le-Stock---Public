<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=91.216.107.162;dbname=rtrin740946_3rjwuz;charset=utf8', 'rtrin740946_3rjwuz', 'Belgacom002');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO events (name, picture, date_event, description, youtube, facebook, twitter, site, prix_prevente, prix_salle, html_billeterie) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['picture'], $_POST['date_event'], $_POST['description'], $_POST['youtube'], $_POST['facebook'], $_POST['twitter'], $_POST['site'], $_POST['prix_prevente'], $_POST['prix_salle'], $_POST['html_billeterie']));

// Redirection du visiteur vers la page du minichat
header('Location: insert.php');
?>