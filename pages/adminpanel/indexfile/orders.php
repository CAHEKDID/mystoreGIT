<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/bootstrap.php';

$orders = $dataBasket ->getAllOrders();

include "../view/orders.view.php";