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
    <section>
      <form class="contact-form" action="./new_mdp.php" method="POST"> 
            <input type="password" name="MdpUti" minlength="8" placeholder="Votre nouveau mot de passe" required style="text-align: center;">
            <input type="password" name="validerMdpUti" minlength="8" placeholder="Validez votre nouveau mot de passe" required style="text-align: center;">
            <input type="submit" value="Valider" name="validation">
      </form>
      </section>
    </body>
</html>