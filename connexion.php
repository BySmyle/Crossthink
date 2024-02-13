<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de connexion</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class ='body-test'>
    <section class="about">
        <div class="container">
            <h1>Page de connexion</h1>
            <form class="contact-form" action="./page_co.php" method="POST"> <!-- Dans ce formulaire, on demande à l'utilisateur son login et son mot de passe--->
                <input type="email" id="EmailUti" name="EmailUti" placeholder="Adresse Mail (ex : exemple@exemple.fr)" required style="text-align: center;"/>
                <input type="password" name="MdpUti" minlength="8" placeholder="Mot de passe" required style="text-align: center;">
                <input type="submit" value="Valider" name="boutton-valider">
                <p>
                    <a href="./modif_mdp.php">Mot de passe oublier?</a>
                </p>
                <p>
                    Pas de compte? Créez en un <a href="./inscription.php"> ici <a>
                </p>
            </form>
        </div>
    </section> 
    </body>
</html>