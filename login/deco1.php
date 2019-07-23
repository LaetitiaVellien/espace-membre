<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deco</title>
</head>
<body>
    Bonjour <?php
    echo $_SESSION['pseudo'];
    ?>
    <form method="POST" action="deco.php">
<button> Deco</button>
    </form>
    
</body>
</html>