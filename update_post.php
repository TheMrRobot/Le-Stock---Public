<?php
// on se connecte à notre base
$base = mysql_connect ('91.216.107.162', 'rtrin740946_3rjwuz', 'Belgacom002');
mysql_select_db ('rtrin740946_3rjwuz', $base) ;
?>
<html>
<head>
<title>Modification de l'adresse d'un propriétaire</title>
</head>
<body>
<?php
// on teste si les variables du formulaire sont déclarées
if (isset($_POST['n_description']) && isset($_POST['e_name'])) {

	// lancement de la requête
	$sql = 'UPDATE events SET description="'.$_POST['n_description'].'" WHERE name="'.$_POST['e_name'].'"';

	// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
	mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

	// on ferme la connexion à la base
	mysql_close();

	// un petit message permettant de se rendre compte de la modification effectuée
	echo 'La nouvelle adresse de '.$_POST['e_name'].' est : '.$_POST['n_description'];
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées';
}
?>
</body>
</html>