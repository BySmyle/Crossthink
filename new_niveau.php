<?php
    require_once 'co_bdd.php';

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['libelNiveau'])) {  
            // Récupération des données du formulaire
            $titre = htmlspecialchars($_POST['libelNiveau']);
            
            $creerProfession = $lien->prepare("INSERT INTO niveauEtude (libelNiveau) VALUES (?)");
            $creerProfession->execute(array($titre));
            header('Location:ajout_cours.php');
        }
    }
?>