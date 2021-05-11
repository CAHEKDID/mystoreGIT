<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/bootstrap.php';

$id = $_GET['id'] ?? 1;
$prod = $dataProds ->getOneProd($id);
$images = $dataProds ->getImgProd($id);



include $_SERVER['DOCUMENT_ROOT'] . '/pages/adminpanel/view/product.admin.view.php';