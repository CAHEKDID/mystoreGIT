<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/bootstrap.php";
$products = $dataProds->getAllProds();

include "index.view.php";