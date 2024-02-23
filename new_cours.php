<?php
    require_once 'co_bdd.php';
    session_start();

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['NomFormation']) && isset($_POST['DescFormation']) && isset($_POST['lieu']) && isset($_POST['competence']) && isset($_POST['duree']) && isset($_POST['cout']) && isset($_POST['materiau']) && isset($_POST['nbEleve']) && isset($_POST['IdSujet'])) {  
            $titre = htmlspecialchars($_POST['NomFormation']);
            $description = htmlspecialchars($_POST['DescFormation']);
            $lieu = htmlspecialchars($_POST['lieu']);
            $competence = $_POST['competence'];
            $duree = $_POST['duree'];
            $cout = htmlspecialchars($_POST['cout']);
            $materiau = $_POST['materiau'];
            $nbEleve = $_POST['nbEleve'];
            $id_sujet = $_POST['IdSujet'];

            $query_sujet = $lien->prepare("SELECT * FROM Sujet");
            $query_sujet->execute();
            $infosSujet = $query_sujet->fetch();

            $creerCour = $lien->prepare("INSERT INTO Formation (NomFormation, DescFormation, lieu, competence, duree, cout, materiau, nbEleve, IdSujet) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $creerCour->execute(array($titre, $description, $lieu, $competence, $duree, $cout, $materiau, $nbEleve, $id_sujet));
            $infosCour = $creerCour->fetch();

            header('Location:cours_dispo.php');
        }
    }
?>