<?php 
session_start();
require_once 'co_bdd.php';
    
    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['EmailUti']) && isset($_POST['MdpUti'])) { // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
            // donnes du formulaire mise en variable
            $mail = htmlspecialchars($_POST['EmailUti']);
            $mdp = htmlspecialchars($_POST['MdpUti']);            
            $mdpHash = hash('sha256',$mdp.$sel);
            
            //requête sql qui permet de prendre les pseudos et les mails de la table utilisateur pour l'authentification
            $utilisateurExistant = $lien->prepare('SELECT * FROM Utilisateur WHERE EmailUti=?');
            $utilisateurExistant->execute(array($mail));

            if($utilisateurExistant->rowCount() > 0 ){
                $infosUtilisateur = $utilisateurExistant->fetch();
                    
                $_SESSION['auth'] = true;
                $_SESSION['EmailUti'] = $infosUtilisateur['EmailUti'];
                $_SESSION['MdpUti'] = $infosUtilisateur['MdpUti'];
                $_SESSION['NomUti'] = $infosUtilisateur['NomUti'];
                $_SESSION['PrenomUti'] = $infosUtilisateur['PrenomUti'];
                 
                    //si la connexion est réussie, rediriger vers la page d'accueil "index.php"
                header('Location: index.php');
                exit;
                
            } else {
                $errorMsg = "Votre pseudo est incorrect";
            }
            
            } else {
                 $errorMsg = "Veuillez compléter tous les champs";
            }
    }
?>
        
        <?php 
    require_once 'co_bdd.php' ;

        if (isset($_GET['id'])&& (isset($_POST['validation'])) ){
                $id =$_GET['id'];
                //Requete sql
                $query = $lien->prepare("DELETE FROM Formation WHERE IdFormation=?"); //on supprime le rdv donné
                $query->execute(array($id));
                header("Location:cours_dispo.php") ; // retour vers la page de la secrétaire
        }

        if (isset($_POST['refus'])){// si la secrétaire ne veut finalement pas supprimer le rdv cela nous ramène vers la page de la sécrétaire
            header("Location:cours_dispo.php") ;
        }

    ?>