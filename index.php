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
                <a href="./ajout_formation.php" class="button-56" style="color: white;"><img src="./add.png" alt="" style="margin-right: 10px;">Ajouter une formation</a>
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
                <a href="./connexion.php" class="button-55">Se connecter</a>
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
            $query = $lien->prepare("SELECT LibelSujet FROM Sujet");
            $query->execute();
            
            echo "<h2 style='color: black;'> Voici la liste de toutes les formations disponible : ".  "</h2>";
            while($row = $query->fetch()) {
                echo '<div class="cours">'
                    ."<div class='sujet' style='margin-left: 5em;'>
                    <img src='./book.png' alt='livre'>
                    <p style='margin-left: 1em;'> {$row['LibelSujet']} </p>
                    </div>\n
                    <a href='./cours_dispo.php' class='button-56'>Voir les cours</a>
                    </div>";
            }
        ?>
        <footer>
            <h1 style="color: white;"> NOUS CONTACTER </h1>
            <h2>Suivez nous sur nos réseaux : </h2>
            <div class="reseaux">
                <div class="insta">
                    <img src="./instagram.png" alt="insta">
                    <p style="margin-left: 1em;">
                        @crossthink
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