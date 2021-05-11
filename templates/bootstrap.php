<?php
use App\db\Connect;
use App\models\Product;
use App\models\Image;
use App\models\Basket;

include $_SERVER["DOCUMENT_ROOT"] .'/functions.php';
include $_SERVER["DOCUMENT_ROOT"] .'/db/config.php';
include $_SERVER["DOCUMENT_ROOT"] .'/db/Connect.php';
include $_SERVER["DOCUMENT_ROOT"] .'/models/Product.php';
include $_SERVER["DOCUMENT_ROOT"] .'/models/Image.php';
include $_SERVER["DOCUMENT_ROOT"] .'/models/Basket.php';

$dataProds = new Product(Connect::make(CONN));
$dataImg = new Image(Connect::make(CONN));
$dataBasket = new Basket(Connect::make(CONN));