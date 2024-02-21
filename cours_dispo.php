
<?php
session_start();
require_once 'co_bdd.php';

if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['IdSujet'])){
        $id_sujet = $_POST['IdSujet'];
        $Email = $_SESSION['EmailUti'];
        $nom = $_SESSION['NomUti'];
        $prenom = $_SESSION['PrenomUti'];
        $query_uti = $lien->prepare("SELECT NomUti FROM Utilisateur WHERE EmailUti=?");
        $query_uti->execute(array($Email));

        $query = $lien->prepare("SELECT NomFormation, DescFormation, lieu, competence, duree, cout, materiau, nbEleve FROM Formation WHERE IdSujet=?");
        $query->execute(array($id_sujet));

        echo "<title>Liste des cours</title>";
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />';
        echo '<link href="./style.css" rel="stylesheet"/>';
        echo "<h2 style='color: black;'> Voici la liste de vos cours :".  "</h2>";
        echo "<span style='margin-left: 33em; color: red; font-size: 1.5em;'>&#x26A0</span>";
        echo '<p style="margin-left: 51em; margin-top: -1.85em; color: red;"><B>Les cours sont payant</B></p>';
        echo '<a href="./ajout_cours.php" class="button-56" style="color: white; text-decoration: none;"><img src="./add.png" alt="" style="margin-right: 10px;">Ajouter un cours</a>';
        echo '<table style="margin-top: 2em;" border 1 eifth =100%>';
        echo "<tr><td>Nom du cours</td><td>Description du cours</td><td>Lieu du cours</td><td>Professeur référent</td><td>Compétences requises par l'élèves</td><td>Duree du cours<td>Coût du cours</td><td>Matériaux requis<td>Nombre d'élévèes par cours</td><td>Adérer au cours</td><td>Supprimer le cours</td>\n " ;
            while($rowan = $query_uti->fetch()){
                while($row = $query->fetch()) {
                    echo "<tr>"
                            ."<td> {$row['NomFormation']} </td>
                            <td> {$row['DescFormation']} </td>
                            <td> {$row['lieu']} </td>
                            <td> {$rowan['NomUti']} </td>
                            <td> {$row['competence']} </td>
                            <td> {$row['duree']} </td>
                            <td> {$row['cout']} </td>
                            <td> {$row['materiau']} </td>
                            <td> {$row['nbEleve']} </td>
                            <td><a href='./payer.php?id=".$row['IdFormation']."' id='btn2'>Adhérer</a></td>
                            <td><a href='./supprimer.php?id=".$row['IdFormation']."' id='btn1'>Supprimer</a></td>
                        </tr>\n";
                }
                echo "</table>";
                echo "<a href='./index_connecter.php' class='button-56' style='color: white; margin-top: 2em;text-decoration: none;'>Retour à la page d'accueil</a>";
            }
    }
}
?>