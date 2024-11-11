<?php
class Category {
    public static function getAll() {
        global $db; // Assurez-vous que la connexion est accessible
        
        try {
            $stmt = $db->prepare("SELECT * FROM categories");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

}
?>