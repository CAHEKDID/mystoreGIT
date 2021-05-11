<?php
use App\db\Connect;
require_once $_SERVER['DOCUMENT_ROOT'] . "/db/Connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/db/config.php";
$product = new \App\models\Product(Connect::make(CONN));