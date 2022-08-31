<?php
class Photos
{
    private $pdo = null;
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=book;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }
    }
    public function listerPhotos()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM photos');
        }
        $photos = [];
        while ($photo = $stmt->fetchObject()) {
            $photos[] = $photo;
        }
        return $photos;
    }
}

