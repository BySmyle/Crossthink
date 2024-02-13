<?php 
require_once 'co_bdd.php';
    
    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['EmailUti']) && isset($_POST['MdpUti'])) { // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
            // donnes du formulaire mise en variable
            echo "wesh mec";
            $mail = htmlspecialchars($_POST['EmailUti']);
            $mdp = htmlspecialchars($_POST['MdpUti']);
            $mdpHash = hash('sha256',$mdp.$sel);
            
            //requête sql qui permet de prendre les pseudos et les mails de la table utilisateur pour l'authentification
            $utilisateurExistant = $lien->prepare('SELECT MdpUti FROM Utilisateur WHERE EmailUti=?');
            $utilisateurExistant->execute(array($mail));
            echo "t'es nul";

            if($utilisateurExistant->rowCount() > 0 ){
                echo "t'es nul";
       
                $infosUtilisateur = $utilisateurExistant->fetch();
            echo "t'es nul";
                
                if(password_verify($mdpHash, $infosUtilisateur['MdpUti'])){
            echo "t'es nul";
                    
                    $_SESSION['auth'] = true;
                    $_SESSION['EmailUti'] = $infosUtilisateur['EmailUti'];
                    $_SESSION['MdpUti'] = $infosUtilisateur['MdpUti'];
                    $_SESSION['NomUti'] = $infosUtilisateur['NomUti'];
                    $_SESSION['PrenomUti'] = $infosUtilisateur['PrenomUti'];
                    echo "t'es nul";
                 
                 //si la connexion est réussie, rediriger vers la page d'accueil "index.php"
                 header('Location: ./index.php');
                 echo "t'es nul";
                 exit;
                 
                } else {
                 $errorMsg = "Votre mot de passe est incorrect";
                }
                
             } else {
                 $errorMsg = "Votre pseudo est incorrect";
             }
            
            } else {
                 $errorMsg = "Veuillez compléter tous les champs";
        }
    }
?>