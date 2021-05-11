<?php

class Auth
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getOneAdmin($login)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `admin` where login=:login");
        $stmt-> execute([
            'login' => $login
        ]);
        return $stmt->fetch();
    }
}