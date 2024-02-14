<?php 
require_once 'co_bdd.php';  
    if(isset($_POST['validation'])){
      if (isset($_POST['MdpUti'])&& (isset($_POST['validerMdpUti'])) ){
            $mdp = htmlspecialchars($_POST['MdpUti']);
            $mdpHash = hash('sha256',$mdp.$sel);

            $newMdp = htmlspecialchars($_POST['validerMdpUti']);
            $newMdpHash = hash('sha256',$newMdp.$sel);
            //connection à la base de donnés sql
            $query = $lien->prepare("UPDATE Utilisateur SET MdpUti = ? WHERE MdpUti = '$mdpHash'") ; //on change la date du jour selon l'id de la consultation
            $query->execute(array($newMdpHash));
            header("Location:connexion.php") ;
      }
    }
    ?>