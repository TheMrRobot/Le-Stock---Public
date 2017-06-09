


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un concert</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action="update_post.php" method="post">
        <p>
        <label for="e_name">Nom du groupe</label> : <select name="e_name" id="e_name">
        
        
        
        <?php
try
{
    // On se connecte à MySQL
	$bdd = new PDO('mysql:host=91.216.107.162;dbname=rtrin740946_3rjwuz;charset=utf8', 'rtrin740946_3rjwuz', 'Belgacom002');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM events');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>



        
        
           <option value="<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></option>

                   

        
        <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</select>
        <label for="description">Description</label> :  <input type="text" name="n_description" id="n_description" /><br />


        <input type="submit" value="Envoyer" />
    </p>
    </form>
	</body>
</html>     