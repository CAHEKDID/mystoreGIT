<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/bootstrap.php';
$id = $_GET['id'] ?? 1;
$prod = $dataProds ->getOneProd($id);
$category = $dataProds ->getCategory($id);
$images = $dataProds ->getImgProd($id);
$sizes = $dataProds ->getSize();

session_start();

if(isset($_POST['btn-addBasket'])){

    $_SESSION['basket'] = array(
        'id_prod' => $id,
        'count' => $_POST['count'],
        'size' => $_POST['sizes']
    );

    array_push($_SESSION['baskets'], $_SESSION['basket']);
}

if(isset($_POST['deleteBasket'])){

    unset($_SESSION['arrProd']);
}

include $_SERVER['DOCUMENT_ROOT'] . '/pages/view/product.view.php';