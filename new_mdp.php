<?php 
require_once 'co_bdd.php';  
    if(isset($_POST['validation'])){
      if (isset($_POST['EmailUti']) && isset($_POST['validerMdpUti'])){
            $mail = htmlspecialchars($_POST['EmailUti']);
            $newMdp = htmlspecialchars($_POST['validerMdpUti']);
            $newMdpHash = hash('sha256',$newMdp.$sel);

            $utilisateurExistant = $lien->prepare('SELECT * FROM Utilisateur WHERE EmailUti=?');
            $utilisateurExistant->execute(array($mail));

            if($utilisateurExistant->rowCount() > 0 ){
                $infosUtilisateur = $utilisateurExistant->fetch();

                $query = $lien->prepare("UPDATE Utilisateur SET MdpUti = ? WHERE EmailUti = '$mail'") ; //on change la date du jour selon l'id de la consultation
                $query->execute(array($newMdpHash));
                header("Location:connexion.php") ;
            }
      }
    }
    ?>