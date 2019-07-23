<?php
$servername = "localhost";
$username = "Moi";
$password = "Simplon974!";
$dbname = "espace";

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

$mdp2 = $_POST['mdp2'];

if($mdp == $mdp2){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO membre (id,pseudo,email,mdp, date)
    VALUES (null, '$pseudo', '$email', '$mdp',CURDATE())";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully <br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

}
else{
    echo "confirmation mdp incorrecte";
}
?>