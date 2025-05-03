<?php
    //connection a la database
    require_once'../config/db.php';
    
    //teste si la requette est post 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //recuperer avec POST
        $nom_livre = $_POST['nom_livre'];
        $genre  = $POST['genre'];
        $resume = $POST['resume'];
        $quantite = $POST['quantite'];
        $auteur = $POST['auteur'];


        //preparation insertion sql
        $query = "INSERT INTO livre(nom_livre,genre,resume,quantite,acteur) values (?,?,?,?,?)";

        if($conn->query($query)){   
        //query : Méthode qui exécute une requête SQL simple
            echo"film ajouté avec succes";
        }
        else echo "echec de l ajout du film";
    }


?>