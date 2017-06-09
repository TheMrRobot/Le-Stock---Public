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
    
    <form action="insert_post.php" method="post">
        <p>
        <label for="name">Nom du groupe</label> : <input type="text" name="name" id="name" /><br />
        <label for="picture">Lien de l'image</label> :  <input type="text" name="picture" id="picture" /><br />
        <label for="date_event">Date</label> :  <input type="date" name="date_event" id="date_event" /><br />
        <label for="description">Description</label> :  <input type="text" name="description" id="description" /><br />
        <label for="youtube">Youtube</label> :  <input type="text" name="youtube" id="youtube" /><br />
        <label for="facebook">Facebook</label> :  <input type="text" name="facebook" id="facebook" /><br />
        <label for="twitter">Twitter</label> :  <input type="text" name="twitter" id="twitter" /><br />
        <label for="site">Site web</label> :  <input type="text" name="site" id="site" /><br />
        <label for="prix_prevente">Site web</label> :  <input type="text" name="prix_prevente" id="prix_prevente" /><br />
        <label for="prix_salle">Site web</label> :  <input type="text" name="prix_salle" id="prix_salle" /><br />
        <label for="html_billeterie">Site web</label> :  <input type="text" name="html_billeterie" id="html_billeterie" /><br />

        <input type="submit" value="Envoyer" />
    </p>
    </form>
	</body>
</html>     