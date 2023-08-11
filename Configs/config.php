<?php 
$servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "test";

        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
        if ($conn->connect_error) {
            die("Échec de la connexion : " . $conn->connect_error);
        }
        
?>