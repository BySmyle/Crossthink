<?php 
/*session_start() ;
require_once('co_bdd.php');
if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['classe']) && isset($_POST['mail'])&& isset($_POST['mdp1']) ) { // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
        $mdp1 = $_POST['mdp1'] ;
        $erreur = "" ;
       //if(strcmp($mdp1,$mdp2 >0) || strcmp($mdp1,$mdp2 <0)){
           // $erreur = "mot de passe différents !";
           // echo strcmp($mdp1,$mdp2) ;
            
       // }
        //else{
            $mdp =$mdp1;
            // donnes du formulaire mise en variable
            $nom = htmlspecialchars($_POST['nom']) ;
            $prenom = htmlspecialchars($_POST['prenom']) ;
            $mail = htmlspecialchars($_POST['mail']);
            $classe = htmlspecialchars($_POST['classe']) ;
            //connection à la base de donnés sql

            //Requete sql
            $req = mysqli_query($lien , "INSERT INTO eleves(nom_eleve, prenom_eleve, mail,classe, mdp) VALUES ('$nom','$prenom', '$mail' ,'$classe','$mdp') ") ;//on verifie si le login et le mot de passe donnés existent bien dans la base de donnés
            echo "Votre compte a crée avec succés";
          
       // }
    }
}*/
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
            <form class="contact-form" action="" method="POST"> <!-- Dans ce formulaire, on demande à l'utilisateur son login et son mot de passe--->
                <label>Entrez vos informations personnelles</label>
                <input type="text" name="nomOrga" placeholder="Nom de l'organisme" required style="text-align: center;">
                <input type="text" name="numéroSIRET" placeholder="SIRET (exemple : 231 190 987 12315)" required minlength="9" maxlength="14" style="text-align: center;">
                <input type="text" name="mail" placeholder="Adresse Mail (exemple : exemple@exemple.fr)" required style="text-align: center;">
                <input type="password" name="mdp1" placeholder="Mot de passe" required style="text-align: center;">
                <input type="submit" value="Valider" name="boutton-valider">
                <p>
                    Avez-vous déjà un compte d'organisme? <a href="./page_connexion.php"> Connectez vous </a>
                </p>
            </form>
        </section> 
    </div>
    </body>
</html>