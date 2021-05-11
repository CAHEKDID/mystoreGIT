<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/bootstrap.php";

$products = $dataProds->getAllProds();

include $_SERVER['DOCUMENT_ROOT'] . "/pages/view/admin.view.php";
