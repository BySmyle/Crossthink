<?php
session_start();
    require_once 'co_bdd.php';

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['EmailUti']) && isset($_POST['MdpUti']) && isset($_POST['NomUti']) && isset($_POST['PrenomUti']) && isset($_POST['profession']) && isset($_POST['TelephoneUti']) && isset($_POST['niveauEtude'])) { // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
            $mail = htmlspecialchars($_POST['EmailUti']);
            $mdp = htmlspecialchars($_POST['MdpUti']);
            $nomUti = htmlspecialchars($_POST['NomUti']);
            $prenomUti = htmlspecialchars($_POST['PrenomUti']);
            $profession = $_POST['profession'];
            $telUti = $_POST['TelephoneUti'];
            $etude = $_POST['niveauEtude'];
            $mdpHash = hash('sha256',$mdp.$sel);

                // Vérifier si l'utilisateur existe déjà sur le site
                $utilisateurExistant = $lien->prepare('SELECT EmailUti, NomUti, PrenomUti, MdpUti FROM Utilisateur WHERE EmailUti = ? OR NomUti = ? OR PrenomUti = ? OR TelephoneUti = ?');
                $utilisateurExistant->execute(array($mail, $nomUti, $prenomUti, $mdpHash));
                
                if($utilisateurExistant->rowCount() == 0 ){
                
                    // Insérer l'l'utilisateur dans la bdd
                    $creerUtilisateur = $lien->prepare('INSERT INTO Utilisateur (EmailUti, MdpUti, NomUti, PrenomUti, profession, TelephoneUti, niveauEtude) VALUES (?, ?, ?, ?, ?, ?, ?)');
                    $creerUtilisateur->execute(array($mail, $mdpHash, $nomUti, $prenomUti, $profession, $telUti, $etude));
                    
                    // Récupérer les informations de l'utilisateur
                    $obtenirinfoUtilisateur = $lien->prepare('SELECT EmailUti, NomUti, PrenomUti, MdpUti FROM Utilisateur WHERE EmailUti = ? OR NomUti = ? OR PrenomUti = ? OR TelephoneUti = ?');
                    $obtenirinfoUtilisateur->execute(array($mail, $nomUti, $prenomUti, $mdpHash));
                    
                    // Récupère les informations de l'utilisateur depuis la base de données
                    $infosUtilisateur = $obtenirinfoUtilisateur->fetch();
        
                    // Authentifier l'utilisateur sur le site et récupérer ses données dans des sessions
                    $_SESSION['EmailUti'] = $infosUtilisateur['EmailUti'];
                    $_SESSION['MdpUti'] = $infosUtilisateur['MdpUti'];
                    $_SESSION['NomUti'] = $infosUtilisateur['NomUti'];
                    $_SESSION['PrenomUti'] = $infosUtilisateur['PrenomUti'];

                    // Redirige l'utilisateur vers la page d'accueil
                    header('Location: index.php');
                    
                } else {
                    $errorMsg = "L'utilisateur existe déjà avec ce pseudo ou cet e-mail";
                }   
            }
        } 
?>