<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de paiement</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class ='body-test'>
    <section class="about">
        <div class="container">
            <h1>Paiement</h1>
            <form class="contact-form" action="./action_payer.php" method="POST"> <!-- Dans ce formulaire, on demande à l'utilisateur son login et son mot de passe--->
            <label>Entrez vos informations personnelles</label>
                <input type="text" name="Nom" placeholder="Nom sur la carte" required style="text-align: center;">
                <input type="text" name="numéroSIRET" placeholder="Numéro de carte (exemple : 1234 5678 9101 0000)" minlength="9" maxlength="16" pattern="[0-9]{16}" required style="text-align: center;">
                <input type="month" name="dateExpi" placeholder="Date d'expiration de la carte" required style="text-align: center;">
                <input type="number" name="crypto" placeholder="Mettre votre cryptogramme" maxlength="3" required style="text-align: center;">
                <input type="submit" value="Valider" name="boutton-valider">
            </form>
        </section> 
    </div>
    </body>
</html>