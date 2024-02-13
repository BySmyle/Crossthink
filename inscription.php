<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire d'inscription</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class ='body-test'>
    <section class="about">
        <div class="container">
            <h1> Inscription</h1>
            <form class="contact-form" action="./page_inscription.php" method="POST"> <!-- Dans ce formulaire, on demande à l'utilisateur ses informations personnelles--->
                <p>Entrez vos informations personnelles</p>
                <input type="text" name="NomUti" placeholder="Nom" required style="text-align: center;">
                <input type="text" name="PrenomUti" placeholder="Prenom" required style="text-align: center;">
                <input type="email" id="EmailUti" name="EmailUti" placeholder="Adresse Mail (ex : exemple@exemple.fr)" required style="text-align: center;"/>
                <input type="tel" id="TelephoneUti" name="TelephoneUti" placeholder="Entrez votre numéro de téléphone (ex : 06-12-34-56-78)" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required style="text-align: center;"/>
                <div class="center-form">
                    <label for="profession">Choississez votre profession :</label>
                    <select id="profession" name="profession" required>
                        <option value="" style="text-align: center;">--- Profession ---</option>
                        <option value="eleve" style="text-align: center;">Élève</option>
                        <option value="profMath" style="text-align: center;">Professeur de maths</option>
                        <option value="profFr" style="text-align: center;">Professeur de français</option>
                        <option value="profEng" style="text-align: center;">Professeur d'anglais</option>
                        <option value="profPhilo" style="text-align: center;">Professeur de philo</option>
                    </select>
                </div>
                <a href="./ajout_profession.php" class="button-56" style="color: white;"><img src="./add.png" alt="">Ajouter une profession</a>
                <div class="center-form">
                    <label for="niveauEtude">Choississez votre niveau d'étude :</label>
                    <select id="niveauEtude" name="niveauEtude" required>
                        <option value="" style="text-align: center;">--- Étude en cours ---</option>
                        <option value="3eme" style="text-align: center;">3ème</option>
                        <option value="2nd" style="text-align: center;">2nd</option>
                        <option value="1ere" style="text-align: center;">1ère</option>
                        <option value="CAP" style="text-align: center;">CAP</option>
                        <option value="terminale" style="text-align: center;">Terminale</option>
                        <option value="1ereBTS" style="text-align: center;">1èreBTS</option>
                        <option value="2ndBTS" style="text-align: center;">2ndBTS</option>
                        <option value="licence" style="text-align: center;">Licence</option>
                    </select>
                </div>
                <input type="password" name="MdpUti" minlength="8" placeholder="Mot de passe" required style="text-align: center;">
                <input type="submit" value="Valider" name="boutton-valider">
                <p>
                    Avez-vous déjà un compte? <a href="./connexion.php"> Connectez vous </a>
                </p>
            </form>
        </section> 
    </div>
    </body>
</html>