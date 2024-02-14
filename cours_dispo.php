<?php
require_once 'co_bdd.php';
        $query = $lien->prepare("SELECT IdFormation, NomFormation, DescFormation, competence, duree, cout, materiau, nbEleve FROM Formation");
        $query->execute();

        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />';
        echo '<link href="./style.css" rel="stylesheet"/>';
        echo "<h2 style='color: black;'> Voici la liste de vos cours :".  "</h2>";
        echo '<a href="./ajout_cours.php" class="button-56" style="color: white;"><img src="./add.png" alt="" style="margin-right: 10px;">Ajouter un cours</a>';
        echo '<table style="margin-left: 5em;" border 1 eifth =100%>';
        echo  "<tr> <td> ID Cours </td><td> Nom du cours </td><td>Description du cours</td><td>Lieu du cours</td><td>Compétences requises par l'élèves</td><td>Duree du cours<td>Coût du cours</td><td>Nombre d'élévèes par cours</td><td>Supprimer le cours</td>\n " ;
        
        while($row = $query->fetch()) {
            echo "<tr>"
                ."<td> {$row['IdFormation']} </td>
                  <td> {$row['NomFormation']} </td>
                  <td> {$row['DescFormation']} </td>
                  <td> {$row['competence']} </td>
                  <td> {$row['duree']} </td>
                  <td> {$row['cout']} </td>
                  <td> {$row['materiau']} </td>
                  <td> {$row['nbEleve']} </td>
                  <td><a href='delete_formation.php?id=".$row['IdFormation']."' id='btn1'>Supprimer</a></td>
                  </tr>\n";
        }
        echo "</table>";
?>