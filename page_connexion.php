<?php 
    include('./co_bdd.php');
    /*session_start() ;
    
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
                header("Location:accueil.php");
            }else {
                $erreur = "N° Identifiant ou Mots de passe incorrectes !";
            }
        }
    }*/
?>
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
            <?php 
            /*if(isset($erreur)){
                echo "<p class= 'Erreur'>".$erreur."</p>"  ;// permet de faire l'affichage de l'erreur si elle se produit
            }*/
            ?>
            <form class="contact-form" action="" method="POST"> <!-- Dans ce formulaire, on demande à l'utilisateur son login et son mot de passe--->
                <input type="text" name="login" placeholder="Votre Identifiant" required style="text-align: center;">
                <input type="password" name="mdp" placeholder="Mot de Passe" required style="text-align: center;">
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