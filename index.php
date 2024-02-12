<?php
    include('./co_bdd.php');  
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page accueil</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="./style.css" rel="stylesheet"/>
    </head>
    <body>
        <!-- Barre de navigation -->
        <nav class="navbar">
        <div class="navbar-logo">
            <img src="./logo.png" alt="Logo">
        </div>
            <ul class="navbar-menu">
                <a href="./ajout_cours.php" class="button-56" style="color: white;"><img src="./add.png" alt="" style="margin-right: 10px;">Ajouter un cour</a>
                <form>
                    <div>
                        <input
                            type="search"
                            id="maRecherche"
                            name="q"
                            placeholder="Recherche sur le site…"
                            required />
                        <button>Rechercher</button>
                        <span class="validity"></span>
                    </div>
                </form>
                <a href="./page_connexion.php" class="button-55">Se connecter</a>
                <a href="./inscription.php" class="button-56" style="color: white;"> S'inscrire</a>
                <div class="profil">
                    <?php 
                        /*if(isset($_SESSION['login'])) {
                            $Elogin = $_SESSION['login'];
                            $mdp = $_SESSION['mdp'];
                            $query = "SELECT * FROM enseignants WHERE E_id = '$Elogin' AND E_mdp = '$mdp'";
                            $result = mysqli_query($lien, $query);
                            if(!$result) {
                                exit("Error executing query: " . mysqli_error($lien));
                            }
                            $enseignant = mysqli_fetch_assoc($result);
                            echo "<p>" . $utilisateur['E_nom'] . " " . $utilisateur['E_prenom'] . " !</p>";
                        }*/
                    ?>
                </div>
            </ul>
        </nav>
        <?php
            /*if(isset($_SESSION['login'])) {
                $query = "SELECT NomFormation, DescFormation, lieu, competence, duree, cout, materiau, nbEleve FROM Formation";
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                $count = $query->rowCount();
            

            echo "<h2> Voici la liste des cours disponible :" . "</h2>";
            echo '<div class="cours">';
            while($row = $count) {    
                echo '<div class="sujet">';
                echo '<img src="./book.png" alt="livre">';
                echo '<p> {$row["NomFormation"]} </p>';
                echo '</div>';
                echo '<div class="description">';
                echo '<p> {$row["DescFormation"]} </p>';
                echo '</div>';
                echo '<div class="lieu">';
                echo '<img src="./location.png" alt="location">';
                echo '<p> {$row["lieu"]} </p>';
                echo '</div>';
                echo '<div class="prof">';
                echo '<img src="./teacher.png" alt="prof">';
                echo '<p> {$row["lieu"]} </p>';
                echo '</div>';
                echo '<div class="competence">';
                echo '<p> {$row["competence"]} </p>';
                echo '</div>';
                echo '<div class="duree">';
                echo '<p> {$row["duree"]} </p>';
                echo '</div>';
                echo '<div class="cout">';
                echo '<p> {$row["cout"]} </p>';
                echo '</div>';
                echo '<div class="materiau">';
                echo '<p> {$row["materiau"]} </p>';
                echo '</div>';
                echo '<div class="nbEleve">';
                echo '<p> {$row["nbEleve"]} </p>';
                echo '</div>';
                echo '<a href="./payer.php" class="button-56" style="color: white;"> Adhérer au cour </a>';
            }
            echo '</div>'; 
            }*/

        ?>
        <div class="cours">
            <div class="sujet">
                <img src="./book.png" alt="livre">
                <p style="margin-left: 1em;">
                    Maths
                </p>
            </div>
            <div class="lieu">
                <img src="./location.png" alt="location">
                <p style="margin-left: 1em;">
                    Marseille(8ème)
                </p>
            </div>
            <div class="prof">
                <img src="./teacher.png" alt="prof">
                <p style="margin-left: 1em;">
                    Professeur : M. POLOCHON
                </p>
            </div>
            <div class="eleves">
                <img src="./user.png" alt="eleves">
                <p>
                    Nombre d'élèves disponible dans le cour : 30
                </p>
            </div>
            <form action="">
                <input type="submit" value="Adhérer au cour" name="boutton-valider">
            </form>
        </div>
        <footer>
            <h1> NOUS CONTACTER </h1>
            <h2>Suivez nous sur nos réseaux : </h2>
            <div class="reseaux">
                <div class="insta">
                    <img src="./instagram.png" alt="insta">
                    <p style="margin-left: 1em;">
                        @crossthink
                    </p>
                </div>
                <div class="snap">
                    <img src="./snapchat.png" alt="snap">
                    <p style="margin-left: 1em;">
                        crossthink
                    </p>
                </div>
                <div class="tweeter">
                    <img src="./twitter.png" alt="tweet">
                    <p style="margin-left: 1em;">
                        crossthink
                    </p>
                </div>
                <div class="facebook">
                    <img src="./facebook.png" alt="facebook">
                    <p style="margin-left: 1em;">
                        crossthink
                    </p>
                </div>
            </div>
            <h2>MARQUEZ Lucas et PEREZ Edouard , 102 Rue Sylvabelle, 13006 Marseille, France </h2>
            <h2>123-456-7890 </h2>
            <h2>© 2024</h2>
        </footer>
    </body>
</html>