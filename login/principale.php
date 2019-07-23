<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                 if(isset($_SESSION['pseudo']) && $_SESSION['pseudo'] !== ""){
                    $user = $_SESSION['pseudo'];
                    // afficher un message
                    echo "
                    Bonjour $user, vous êtes connectés";
                    }
                    else
                    {
                    header("location:connexion.php");
                    }
            ?>
            
        </div>
    </body>
</html>