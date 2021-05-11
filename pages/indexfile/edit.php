<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"] . "/templates/bootstrap.php";
$id = $_GET['id'] ?? 1;
$prod = $dataProds ->getOneProd($id);

include $_SERVER["DOCUMENT_ROOT"] . '/pages/view/edit.view.php';