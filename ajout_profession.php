<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
    include('./co_bdd.php');
    session_start(); 

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['NomFormation']) && isset($_POST['DescFormation']) && isset($_POST['lieu']) && isset($_POST['competence']) && isset($_POST['duree']) && isset($_POST['cout']) && isset($_POST['materiau']) && isset($_POST['nbEleve'])) {  
            // Récupération des données du formulaire
            $titre = $_POST['NomFormation'];
            $description = $_POST['DescFormation'];
            $lieu = $_POST['lieu'];
            $competence = $_POST['competence'];
            $duree = $_POST['duree'];
            $cout = $_POST['cout'];
            $materiau = $_POST['materiau'];
            $nbEleve = $_POST['nbEleve'];
            // $sujetId = $_SESSION['sujetId']; // Récupérer l'ID du suejt de formation

            // Requête d'insertion des données dans la table tickets
            $query = $lien->prepare("INSERT INTO Formation (NomFormation, DescFormation, lieu, competence, duree, cout, materiau, nbEleve) VALUES (NomFormation=? , DescFormation=?, lieu=?, competence=?, duree=?, cout=?, materiau=?, nbEleve=?/*,'$enseignant_id')*/");
            $query = bindParam(1, $titre);
            $query = bindParam(2, $description);
            $query = bindParam(3, $lieu);
            $query = bindParam(4, $competence);
            $query = bindParam(5, $duree);
            $query = bindParam(6, $cout);
            $query = bindParam(7, $materiau);
            $query = bindParam(8, $nbEleve);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $count = $query->rowCount();
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Création de tickets</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <link href="./style.css" rel="stylesheet"/>
    </head>
    <body>
        
        <form class="contact-form" method="POST" action="">
                <input type="text" name="NomFormation" placeholder="Titre" required style="text-align: center;"/>
                <input type="text" name="DescFormation" placeholder="Description" required style="text-align: center;"/><div class="center-form">
                <label for="etude">Choississez le niveau d'étude requis :</label>
                <select id="competence" required>
                    <option value="" style="text-align: center;">--- Choisir un niveau ---</option>
                    <option value="3eme" style="text-align: center;">3ème</option>
                    <option value="2nd" style="text-align: center;">2nd</option>
                    <option value="1ere" style="text-align: center;">1ère</option>
                    <option value="CAP" style="text-align: center;">CAP</option>
                    <option value="terminale" style="text-align: center;">Terminale</option>
                    <option value="1ereBTS" style="text-align: center;">1èreBTS</option>
                    <option value="2ndBTS" style="text-align: center;">2ndBTS</option>
                    <option value="licence" style="text-align: center;">Licence</option>
                </select>
                <label for="duree">Durée du cours</label>
                <input type="time" id="duree" name="duree" min="00:00" max="18:00" required style="text-align: center;"/>
                <input type="text" name="cout" placeholder="Coût du cour" required style="text-align: center;">
                <!--<form  name=formu action="ajout_date.php"  method="POST">  
                    <input type="date" placeholder="Date debut cours" value="<?php //if (isset($_POST['date_debut_cours'])){echo $_POST['date_debut_cours'];} ?>" maxlength="10" name="date_debut_cours" id="date_debut_cours" class="calendrier" required onClick="ds_sh(this);"><br>
                    <input type="date" placeholder="Date  Fin du cours" value="<?php //if (isset($_POST['date_fin_cours'])){echo $_POST['date_fin_cours'];} ?>" maxlength="10" name="date_fin_cours" id="date_fin_cours" class="calendrier" onClick="ds_sh(this);" required><br>
                </form>-->
                <label for="materiau">Choississez les matériaux requis :</label>
                <select id="materiau" required>
                    <option value="" style="text-align: center;">--- Choisir un matériau ---</option>
                    <option value="ordi" style="text-align: center;">Ordinateur</option>
                    <option value="calculatrice" style="text-align: center;">Calculatrice</option>
                    <option value="regle" style="text-align: center;">Outils de constructions de formes (règles, équerre, etc)</option>
                </select>
                <input type="number" name="nbEleve" step="1" min="0" max="100" placeholder="Nombre d'élèves par cours" required style="text-align: center;">
                <input type="submit" value="Valider" name="boutton-valider">
        </form>
    </body>
    <script src="./script.js"></script>
</html>
