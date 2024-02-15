<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Supprimer un cours</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class ='body-test'>
        <section class="validation_delete"><!-- formulaire pour confirmer la suppression d'un rdv donné -->
        <form method="POST" action="./delete_formation.php" class="creation_rdv">  
            <label> Etes vous sur de vouloir supprimer ce cours?</label>
            <div class="button_delete"> 
                <button class="button-56" name="validation">oui</button>
                <button class="button-56" name="refus">non</button>
            </div>
        </form>
    </section>
    </body>
</html>