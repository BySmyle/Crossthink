<?php
    require_once 'co_bdd.php';

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['libelProfession'])) {  
            // Récupération des données du formulaire
            $titre = htmlspecialchars($_POST['libelProfession']);
            
            $creerProfession = $lien->prepare("INSERT INTO profession (libelProfession) VALUES (?)");
            $creerProfession->execute(array($titre));
            header('Location:inscription.php');
        }
    }
?>