<?php
    require_once './co_bdd.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Création de cours</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <link href="./style.css" rel="stylesheet"/>
    </head>
    <body>
        <section class="about">
            <div class="container">
                <h1> Page de création de cours</h1>
                <form class="contact-form" method="POST" action="./new_cours.php">
                        <input type="text" name="NomFormation" placeholder="Titre" required style="text-align: center;"/>
                        <input type="text" name="DescFormation" placeholder="Description" required style="text-align: center;"/>
                        <input type="text" name="lieu" placeholder="Mettre le lieu de votre formation" required style="text-align: center;">
                        <div class="center-form">
                        <label for="etude">Choississez le niveau d'étude requis :</label>
                            <select id="competence" name="competence" required>
                                <option value="" style="text-align: center;">--- Choisir un niveau ---</option>
                                <option value="3eme" style="text-align: center;">3ème</option>
                                <option value="2nd" style="text-align: center;">2nd</option>
                                <option value="1ere" style="text-align: center;">1ère</option>
                                <option value="CAP" style="text-align: center;">CAP</option>
                                <option value="terminale" style="text-align: center;">Terminale</option>
                                <option value="1ereBTS" style="text-align: center;">1èreBTS</option>
                                <option value="2ndBTS" style="text-align: center;">2ndBTS</option>
                                <option value="licence" style="text-align: center;">Licence</option>
                                <!-- affiche les niveaux ajoutée par l'utilisateur à la suites des niveaux déjà existante -->
                                <?php
                                    $query = $lien->prepare("SELECT libelNiveau FROM niveauEtude");
                                    $query->execute();
                                    
                                    while($row = $query->fetch()) {
                                        echo "<option value='{$row["libelNiveau"]}' style='text-align: center;'> {$row["libelNiveau"]} </option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <a href="./ajout_niveau.php" class="button-56" style="text-decoration: none; color: white;"><img src="./add.png" alt="">Ajouter un niveau d'étude</a>
                        <label for="duree">Durée du cours</label>
                        <input type="time" id="duree" name="duree" min="00:00" max="18:00" required style="text-align: center;"/>
                        <input type="text" name="cout" placeholder="Coût du cour" required style="text-align: center;">
                        <!--<form  name=formu action="ajout_date.php"  method="POST">  
                            <input type="date" placeholder="Date debut cours" value="<?php //if (isset($_POST['date_debut_cours'])){echo $_POST['date_debut_cours'];} ?>" maxlength="10" name="date_debut_cours" id="date_debut_cours" class="calendrier" required onClick="ds_sh(this);"><br>
                            <input type="date" placeholder="Date  Fin du cours" value="<?php //if (isset($_POST['date_fin_cours'])){echo $_POST['date_fin_cours'];} ?>" maxlength="10" name="date_fin_cours" id="date_fin_cours" class="calendrier" onClick="ds_sh(this);" required><br>
                        </form>-->
                        <div class="center-form">
                            <label for="materiau">Choississez les matériaux requis :</label>
                            <select id="materiau" name="materiau" required>
                                <option value="" style="text-align: center;">--- Choisir un matériel ---</option>
                                <option value="Ordinateur" style="text-align: center;">Ordinateur</option>
                                <option value="Calculatrice" style="text-align: center;">Calculatrice</option>
                                <option value="Outils de constructions de formes (règles, équerre, etc)" style="text-align: center;">Outils de constructions de formes (règles, équerre, etc)</option>
                                <!-- affiche les matériaux ajoutée par l'utilisateur à la suites des matériaux déjà existante -->
                                <?php
                                    $query = $lien->prepare("SELECT libelMateriel FROM materiel");
                                    $query->execute();
                                    
                                    while($row = $query->fetch()) {
                                        echo "<option value='{$row["libelMateriel"]}' style='text-align: center;'> {$row["libelMateriel"]} </option>";
                                    }
                                ?>
                                <option value="Aucun"style="text-align: center;">Aucun</option>
                            </select>
                        </div>
                        <a href="./ajout_materiel.php" class="button-56" style="text-decoration: none; color: white;"><img src="./add.png" alt="">Ajouter un matériel</a>
                        <input type="number" name="nbEleve" step="1" min="0" max="100" placeholder="Nombre d'élèves par cours" required style="text-align: center;">
                        <input type="submit" value="Valider" name="boutton-valider">
                </form>
            </div>
        </section>
    </body>
    <script src="./script.js"></script>
</html>
