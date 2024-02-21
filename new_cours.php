<?php
    require_once 'co_bdd.php';

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['NomFormation']) && isset($_POST['DescFormation']) && isset($_POST['lieu']) && isset($_POST['competence']) && isset($_POST['duree']) && isset($_POST['cout']) && isset($_POST['materiau']) && isset($_POST['nbEleve']) && isset($_POST['IdSujet'])) {  
            // Récupération des données du formulaire
            $email = $_SESSION['EmailUti'];
            $nom = $_SESSION['NomUti'];
            $prenom = $_SESSION['PrenomUti'];
            $titre = htmlspecialchars($_POST['NomFormation']);
            $description = htmlspecialchars($_POST['DescFormation']);
            $lieu = htmlspecialchars($_POST['lieu']);
            $competence = $_POST['competence'];
            $duree = $_POST['duree'];
            $cout = htmlspecialchars($_POST['cout']);
            $materiau = $_POST['materiau'];
            $nbEleve = $_POST['nbEleve'];
            $id_sujet = $_POST['IdSujet']
            // $sujetId = $_SESSION['sujetId']; // Récupérer l'ID du suejt de formation

            // Requête d'insertion des données dans la table tickets
            $creerCour = $lien->prepare("INSERT INTO Formation (NomFormation, DescFormation, lieu, competence, duree, cout, materiau, nbEleve, IdSujet) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $creerCour->execute(array($titre, $description, $lieu, $competence, $duree, $cout, $materiau, $nbEleve, $id_sujet));
            $infosCour = $creerCour->fetch();

            header('Location:cours_dispo.php');
        }
    }
?>