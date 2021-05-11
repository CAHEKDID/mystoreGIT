<?php


namespace App\models;
use PDO;

class Image
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this ->pdo = $pdo;
    }
    public function getImg()
    {
        $stmt = $this->pdo->query("SELECT * FROM img ");
        $temp = $stmt->fetchAll();
        return $temp;
    }
    public function getOneImg($id)
    {
        $stmt = $this->pdo->query("SELECT * FROM img where id_prod=:id ");
        $stmt -> execute([
            "id_prod" => $id
        ]);
        $temp = $stmt->fetchAll();
        return $temp;
    }
}