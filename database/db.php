<?php

class DB {
    static public function connexion() {
        try {
            $host = "localhost";
            $dbname = "commerce_electronique";
            $username = "root";
            $password = ""; // Mot de passe par défaut de XAMPP
        
            $db = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch(PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
        
}
}
?>
