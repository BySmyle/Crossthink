<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
    /*require_once('co_bdd.php');
    session_start(); 

    if(isset($_POST['boutton-valider'])){ 
        if(isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['num_salle'])) {  
            // Récupération des données du formulaire
            $titre = htmlspecialchars($_POST['titre']);
            $description = htmlspecialchars($_POST['description']);
            $num_salle = htmlspecialchars($_POST['num_salle']);
            $enseignant_id = $_SESSION['login']; // Récupérer l'ID de l'enseignant connecté

            // Requête d'insertion des données dans la table tickets
                    $query = "INSERT INTO tickets (titre, description, dateCreation, num_salle, E_id) VALUES ('$titre', '$description',NOW(), '$num_salle', '$enseignant_id')";

            mysqli_query($lien, $query);
        }
    }*/
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
                <input type="text" name="titre" placeholder="Titre" required style="text-align: center;"/>
                <input type="text" name="description" placeholder="Description" required style="text-align: center;"/><div class="center-form">
                <label for="etude">Choississez le niveau d'étude requis :</label>
                <select id="etude" required>
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
                <input type="time" id="duree" name="duree" min="09:00" max="18:00" required style="text-align: center;"/>
                <input type="text" name="cout" placeholder="Coût du cour" required style="text-align: center;">
                <!--<form  name=formu action="ajout_date.php"  method="POST">  
                    <input type="date" placeholder="Date debut cours" value="<?php //if (isset($_POST['date_debut_cours'])){echo $_POST['date_debut_cours'];} ?>" maxlength="10" name="date_debut_cours" id="date_debut_cours" class="calendrier" required onClick="ds_sh(this);"><br>
                    <input type="date" placeholder="Date  Fin du cours" value="<?php //if (isset($_POST['date_fin_cours'])){echo $_POST['date_fin_cours'];} ?>" maxlength="10" name="date_fin_cours" id="date_fin_cours" class="calendrier" onClick="ds_sh(this);" required><br>
                </form>-->
                <label for="etude">Choississez les matériaux requis :</label>
                <select id="etude" required>
                    <option value="" style="text-align: center;">--- Choisir un matériau ---</option>
                    <option value="ordi" style="text-align: center;">Ordinateur</option>
                    <option value="calculatrice" style="text-align: center;">Calculatrice</option>
                    <option value="regle" style="text-align: center;">Outils de constructions de formes (règles, équerre, etc)</option>
                </select>
                <input type="number" name="nbEleves" placeholder="Nombre d'élèves par cours" required style="text-align: center;">
                <input type="submit" value="Valider" name="boutton-valider">
        </form>
    </body>
    <script src="./script.js"></script>
</html>
