
<?php 
    //session_start() ;   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Modifier le mot de passe</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body class ='body-test'>
    <?php 
    /*require_once('co_bdd.php');

      if (isset($_GET['id'])&& (isset($_POST['validation'])) ){
            $id =$_GET['id'];
            $msg_eleves= htmlspecialchars($_POST['msg_prof']); 
            //connection à la base de donnés sql
            $query = "UPDATE messages SET message = ' $msg_eleves' WHERE id_messages =$id" ; //on change la date du jour selon l'id de la consultation
            $req =  mysqli_query($lien ,$query);
            header("Location:page_eleve.php") ;
      }*/
    ?>
    <section>
      <form class="contact-form" method="POST"> 
            <input type="text" name="nvMdp" placeholder="Votre nouveau mote de passe" required style="text-align: center;">
            <input type="text" name="vaiderNvMdp" placeholder="Validez votre nouveau mote de passe" required style="text-align: center;">
            <input type="submit" value="Valider" name="validation">
      </form>
      </section>
    </body>
</html>