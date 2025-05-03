<?php
    $host =  "localhost";
    $dbname = "gestion_livre";
    $username= "root";
    $password= "";

try {
    //connection a mysql
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username,$password);
    
    // Activer le mode erreur pour afficher les exceptions
    $pdo->setAttribute(PDO::ATTR_MODE, PDO:ERRMODE_EXCEPTION);

    echo "connexion reussie";
}

catch (PDOException $e){
    echo ("Erreur de la connexion:" .$e->getMessage());
}

?>