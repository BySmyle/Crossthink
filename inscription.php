<?php
    include('./co_bdd.php');
    session_start() ;
    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['EmailUti']) && isset($_POST['MdpUti'])&& isset($_POST['NomUti']) && isset($_POST['PrenomUti']) && isset($_POST['profession']) && isset($_POST['TelephoneUti']) && isset($_POST['niveauEtude'])) { // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
            $mail = $_POST['EmailUti'];
            $mdp = $_POST['MdpUti'];
            $nomUti = $_POST['NomUti'];
            $prenomUti = $_POST['PrenomUti'];
            $profession = $_POST['profession'];
            $telUti = $_POST['TelephoneUti'];
            $etude = $_POST['niveauEtude'];
            $mdpHash = hash('sha256',$mdp.$sel);
            $requete = $lien->prepare("INSERT INTO Utilisateur (EmailUti, MdpUti, NomUti, PrenomUti, profession, TelephoneUti, niveauEtude) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $requete = bindParam(1, $mail);
            $requete = bindParam(2, $mdpHash);
            $requete = bindParam(3, $nomUti);
            $requete = bindParam(4, $prenomUti);
            $requete = bindParam(5, $profession);
            $requete = bindParam(6, $telUti);
            $requete = bindParam(7, $etude);
            $requete = execute();
            $result = $requete->fetchAll(PDO::FETCH_ASSOC);
            $count = $requete->rowCount();
        }
    }
?>
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
            <form class="contact-form" action="" method="POST"> <!-- Dans ce formulaire, on demande à l'utilisateur ses informations personnelles--->
                <label>Entrez vos informations personnelles</label>
                <input type="text" name="NomUti" placeholder="Nom" required style="text-align: center;">
                <input type="text" name="PrenomUti" placeholder="Prenom" required style="text-align: center;">
                <input type="email" id="EmailUti" name="EmailUti" placeholder="Adresse Mail (ex : exemple@exemple.fr)" required style="text-align: center;"/>
                <input type="tel" id="telUti" name="telUti" placeholder="Entrez votre numéro de téléphone (ex : 06-12-34-56-78)" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required style="text-align: center;"/>
                <div class="center-form">
                    <label for="profession">Choississez votre profession :</label>
                    <select id="profession" required>
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
                    <select id="niveauEtude" required>
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
                    Avez-vous déjà un compte? <a href="./page_connexion.php"> Connectez vous </a>
                </p>
            </form>
        </section> 
    </div>
    </body>
</html>