<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
            <title>Page protégée par mot de passe</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head>
    <body>
        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
        <form action="secret.php" method="POST">
                <p>
                    Identifiant : <input type="text" name="username" />
                    Mot de passe: <input type="password" name="pwd" />
                    <input type="submit" value="Valider" />
                </p>
            </form>
        <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
    </body>
</html>