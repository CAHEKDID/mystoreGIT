<?php
namespace App\models;
use PDO;
class Product
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        session_start();
        // $_SESSION['baskets'] = array();
        $this ->pdo = $pdo;
    }
    public function updateProd($data)
    {

        $stmt = $this->pdo->prepare("UPDATE products SET name =:name,price =:price,discription = 
        :discription,category_id =:category_id WHERE id_prod =:id");
        $stmt -> execute([
            'name' => $data["name"],
            'price' => $data["price"],
            'discription' => date("discription"),
            'category_id' => $data["category_id"]
        ]);
    }

    public function getAllProds()
    {

        $stmt=$this->pdo->query("SELECT * FROM products ");
        $temp = $stmt->fetchAll();
        return $temp;
    }
    public function getSize()
    {
        $stmt=$this->pdo->query("SELECT * FROM size ");
        $temp = $stmt->fetchAll();
        return $temp;
    }
    public function getDeliveryType()
    {
        $stmt=$this->pdo->query("SELECT * FROM delivery_type ");
        $temp = $stmt->fetchAll();
        return $temp;
    }
//    public function deleteProd($id)
//    {
//        $stmt=$this->pdo->prepare("DELETE FROM products where id_prod=:id");
//        $stmt-> execute([
//            'id' => $id
//        ]);
//
//    }
    public function InsertProduct($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO products (name,price,discription,category_id)
        values(:name,:price,:discription,:category_id)");
        $stmt -> execute([
            'name' => $data["name"],
            'price' => $data["price"],
            'discription' => date("discription"),
            'category_id' => $data["category_id"]
        ]);
    }
    public function getCategory($id)
    {
        $stmt=$this->pdo->prepare("SELECT * FROM category where category_id=:id");
        $stmt-> execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }
    public function getOneProd($id)
    {
        $stmt = $this->pdo->prepare("SELECT C.name as cat, P.name, P.price, P.discription, P.category_id  FROM products P, category C where id_prod=:id and P.category_id = C.category_id");
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

    public function getStatus($id){
        $stmt = $this->pdo->prepare("SELECT *  FROM status where id_status=:id");
        $stmt-> execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }
    
    public function getImgProd($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM img where id_prod=:id");
        $stmt-> execute([
            'id' => $id
        ]);
        return $stmt->fetchAll();
    }
    public function InsertProd($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO products (name,price,category_id,discription)
        VALUES (:name,:price,:category_id,:discription)");
        $stmt -> execute([
            'name' => $data["product-title"],
            'price' => $data["price"],
            'category_id' => 1,
            'discription'=>$data["discription"]
        ]);
        $id = $this->pdo->lastInsertId();

        $stmt = $this->pdo->prepare("INSERT INTO img (img,id_prod) VALUES (:img,:id_prod) ");
        $stmt -> execute([
            'img' => $data['product-pic'],
            'id_prod'=> $id
        ]);
    }

    public function deleteProd($id)
    {
        $stmt = $this -> pdo->prepare("DELETE FROM products where id_prod = :id");
        $stmt-> execute([
            'id' => $id
        ]);

    }
}