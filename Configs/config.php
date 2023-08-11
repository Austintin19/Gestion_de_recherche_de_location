<?php

// Définir les paramètres de connexion à la base de données
$dsn = "mysql:host=localhost;dbname=gestion_recherche_location";
$username = "root";
$password = "";

// Créer une instance PDO
$conn = new PDO($dsn, $username, $password);

// Définir le mode d'erreur sur les exceptions
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Si la connexion à la base de données échoue, lancer une exception
if ($conn->connect_error) {
    throw new Exception("Échec de la connexion : " . $conn->connect_error);
}

// La connexion a réussi !
echo "Connexion réussie à la base de données.";

?>
