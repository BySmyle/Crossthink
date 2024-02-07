
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
            <ul class="navbar-menu">
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
            </ul>
        </nav>

        <main>   
            <?php 
                /*require_once('co_bdd.php');  
                session_start();
                if(isset($_SESSION['login'])) {
                    $Elogin = $_SESSION['login'];
                    $mdp = $_SESSION['mdp'];
                    $query = "SELECT * FROM enseignants WHERE E_id = '$Elogin' AND E_mdp = '$mdp'";
                    $result = mysqli_query($lien, $query);
                    if(!$result) {
                        exit("Error executing query: " . mysqli_error($lien));
                    }
                    $enseignant = mysqli_fetch_assoc($result);
                    echo "<h1>Bienvenu(e) sur notre site " . $enseignant['E_nom'] . " " . $enseignant['E_prenom'] . " !</h1>";
                }*/
            ?>
        </main>

        <footer>
            <h1> NOUS CONTACTER </h1>
            <h2>MARQUEZ Lucas et PEREZ Edouard , 102 Rue Sylvabelle, 13006 Marseille, France </h2>
            <h2>123-456-7890 </h2>
            <h2>© 2024</h2>
        </footer>
    </body>
</html>