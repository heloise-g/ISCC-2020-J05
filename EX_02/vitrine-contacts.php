<!DOCTYPE html>
<html>
    <head>
        <title>vitrine-contacts</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="vitrine.css">
    </head>
    <body>
        <?php include("header.php");
        ?>        
        <div class="Titre-secondaires">
            <h2>Contacts</h2>
        </div>
        <div class="contenu">
            <div id="formulaire">
                <form action="/ma-page-de-traitement" method="post">
                    <div>
                        <label for="name"></label>
                        <input type="text" id="name" name="user_name" placeholder="Nom et Prénom">
                    </div>
                    <div>
                        <label for="mail"></label>
                        <input type="email" id="mail" name="user_mail" placeholder="E-mail">
                    </div>
                    <div>
                        <label for="msg"></label>
                        <textarea id="msg" name="user_message" placeholder="Comment améliorer mon site ?"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="button">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </body>

    <?php include("footer.php");
    ?>    
</html>