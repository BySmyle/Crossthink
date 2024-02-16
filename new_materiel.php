<?php
    require_once 'co_bdd.php';

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['libelMateriel'])) {  
            // Récupération des données du formulaire
            $titre = htmlspecialchars($_POST['libelMateriel']);
            
            $creerProfession = $lien->prepare("INSERT INTO materiel (libelMateriel) VALUES (?)");
            $creerProfession->execute(array($titre));
            header('Location:ajout_cours.php');
        }
    }
?>