<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Modifier le mot de passe</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body class ='body-test'>
      <section class="about">
        <div class="container">
                <h1>Veuillez changer de mot de</h1>
                <form class="contact-form" action="./new_mdp.php" method="POST"> 
                      <input type="email" id="EmailUti" name="EmailUti" placeholder="Adresse Mail (ex : exemple@exemple.fr)" required style="text-align: center;"/>
                      <input type="password" name="validerMdpUti" minlength="8" placeholder="Votre nouveau mot de passe" required style="text-align: center;">
                      <input type="submit" value="Valider" name="validation">
                </form>
        </div>
      </section>
    </body>
</html>