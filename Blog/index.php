<?php require "connexion.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
            <title>Mon blog</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head>
    <body>
       <?php
            $reponse=$bdd->query('SELECT * FROM billets ORDER BY date_creation DESC LIMIT 0,3');

            while($donnees=$reponse->fetch())
            {
                ?>
<h1>
    <?php echo $donnees['titre']; ?>
</h1>
<h2>
    Billet n°<?php echo $donnees['id']; ?> - Posté le <?php $donnees['date_creation']; ?>
</h2>
<p>
    <?php echo $donnees['contenu'] ?>
</p>
                <a href="commentaire.php?id=<?php echo $donnees['id']; ?>">Accèder aux commentaires</a>
<?php
            }

            $reponse->closeCursor();

       ?>
    </body>
</html>