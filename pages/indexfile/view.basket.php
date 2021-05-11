<?php
include $_SERVER["DOCUMENT_ROOT"] . "/templates/bootstrap.php";
//$products = $dataProds->getAllProds();
//$id = $_GET['id'] ?? 1;
//$id = $product[$_POST['id']]=$_POST['sizes'];

if(isset($_POST['btn-addOrder'])){

    $dataBasket->insertOrder($_POST);
    
}


if(isset($_POST['clearBasket'])){

    $_SESSION['baskets'] = array();

}

session_start();
$delivery = $dataProds ->getDeliveryType();
include $_SERVER["DOCUMENT_ROOT"] . "/pages/view/basket.php";