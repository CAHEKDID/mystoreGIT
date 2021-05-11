<?php
namespace App\models;
use PDO;

class Basket
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this ->pdo = $pdo;
    }

    public function deleteBasket($id)
    {
        unset($_SESSION['baskets'][$id]);
    }

    public function getProduct($id)
    {
        $stmt=$this->pdo->prepare("SELECT price FROM products WHERE id_prod=:id");
        $stmt-> execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function getSizeId($id){
        $stmt = $this->pdo->prepare("SELECT *  FROM size where size_id=:id");
        $stmt-> execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }

    public function insertOrder($data){

        for($i=0;$i<count($_SESSION['baskets']);$i++){
            
            $stmt = $this->pdo->prepare("INSERT INTO order_t (name, surname, phone, address, status_id, delivery_id, sum, count, id_prod, size_id, date)
            values(:name, :surname, :phone, :address, :status_id, :delivery_id, :sum, :count, :id_prod, :size_id, :date)");
            $stmt -> execute([
                'name' => $data["name"],
                'surname' => $data["surname"],
                'phone' => $data["phone"],
                'address' => $data["address"],
                'status_id' => 1,
                'delivery_id' => $data["delivery"],
                'sum' => $data["sum"],
                'count' => $_SESSION['baskets'][$i]['count'],
                'id_prod' => $_SESSION['baskets'][$i]['id_prod'],
                'size_id' => $_SESSION['baskets'][$i]['size'],
                'date' => date('Y-m-d')
            ]);
        }

        $_SESSION['baskets'] = array();
    }

    public function getAllOrders()
    {
        $stmt=$this->pdo->query("SELECT * FROM order_t");
        $temp = $stmt->fetchAll();
        return $temp;
    }

}