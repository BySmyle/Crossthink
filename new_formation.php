<?php
    require_once 'co_bdd.php';

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['LibelSujet'])) {  
            // Récupération des données du formulaire
            $titre = htmlspecialchars($_POST['LibelSujet']);
            
            $creerSujet = $lien->prepare("INSERT INTO Sujet (LibelSujet) VALUES (?)");
            $creerSujet->execute(array($titre));
            header('Location:index_connecter.php');
        }
    }
?>