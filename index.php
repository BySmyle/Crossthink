<?php 
session_start() ;
require_once('co_bdd.php');
if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['login']) && isset($_POST['mdp'])) { // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
        // donnes du formulaire mise en variable
        $login = htmlspecialchars($_POST['login']) ;
        $mdp = htmlspecialchars($_POST['mdp']) ;
        $erreur = "" ;
        //connection à la base de donnés sql
        //Requete sql
        $req = mysqli_query($lien , "SELECT * FROM eleves WHERE id_eleve = '$login' AND mdp ='$mdp' ") ;//on verifie si le login et le mot de passe donnés existent bien dans la base de donnés
        $num_ligne = mysqli_num_rows($req) ;
        if($num_ligne > 0){ //si la requete renvoie 0 ligne, on renvoie une erreur sinon on le rediriger sur sa page de connexion
            $enseignant = mysqli_fetch_assoc($req);
            $_SESSION['login'] = $login; 
            $_SESSION['mdp']= $mdp;
            header("Location:page_eleve.php");
        }else {
            $erreur = "N° Identifiant ou Mots de passe incorrectes !";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de connexion</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class ='body-test'>
    <section>
        <h1> Connexion page Élèves</h1>
        <?php 
        if(isset($erreur)){
            echo "<p class= 'Erreur'>".$erreur."</p>"  ;// permet de faire l'affichage de l'erreur si elle se produit
        }
        ?>
        <form  class="contact-form" action="" method="POST"> <!-- Dans ce formulaire, on demande à l'utilisateur son login et son mot de passe--->
            <label>Votre Identifiant</label>
            <input type="text" name="login">
            <label >Mots de Passe</label>
            <input type="password" name="mdp">
            <input type="submit" value="Valider" name="boutton-valider">
            <button style="margin-right: 15em;"><a href="./page_inscription_eleves.php">Inscription</a></button>
        </form>
    </section> 
             <button style="margin-top: 3em;"><a href="./accueil.php">Retour à la page d'accueil</a></button>                          
             <script src="notif.js"></script>
    </body>
</html>
