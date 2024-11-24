<?php
    require("header.php");
    if(isset($_POST["email"]) && !empty($_POST["email"])){

        $email = $_POST["email"];
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];

        $mysqli = new mysqli("localhost", "root", "root", "site_php");
        $mysqli->query("INSERT INTO `users`(`email`, `prenom`, `nom`) VALUES ('$email','$prenom','$nom')");
        $mysqli->real_query("SELECT * FROM users");
        $result = $mysqli->use_result();
    }
    else{
        require("index.php");
    }
?>
