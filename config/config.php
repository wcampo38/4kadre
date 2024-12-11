<?php
// Informations de connexion à la base de données
define('DB_HOST', 'localhost');      // Adresse du serveur (XAMPP = localhost)
define('DB_NAME', '4kadre');         // Nom de la base de données
define('DB_USER', 'root');           // Nom d'utilisateur (par défaut : root)
define('DB_PASS', '');               // Mot de passe (par défaut : vide sur XAMPP)

// Fonction pour se connecter à la base de données
function getPDOConnection() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
?>
