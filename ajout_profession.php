<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Création de profession</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <link href="./style.css" rel="stylesheet"/>
    </head>
    <body>
        <section class="about">
            <div class="container">
                    <h1> Page de création de profession</h1>
                    <form class="contact-form" method="POST" action="./new_profession.php">
                            <input type="text" name="libelProfession" placeholder="Nom de la profession" required style="text-align: center;"/>
                            <input type="submit" value="Valider" name="boutton-valider">
                    </form>
            </div>
        </section>
    </body>
    <script src="./script.js"></script>
</html>
