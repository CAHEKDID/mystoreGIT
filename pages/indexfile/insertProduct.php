<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/templates/bootstrap.php';
if (isset($_POST['submit'])){

    $data['product-title'] = $_POST['product-title'];
    $data['discription']= $_POST['product-description'];
    $data['price'] = $_POST['product-price'];
    $img = $_FILES['product-pic']["name"];

    $error = loadImg($validFileTypes,$uploadPath, $img);
    
    if(empty($error))
    {

        $_SESSION['msg'] = "";
        $_SESSION['alert'] = "alert-success";

        $data['product-pic']="/prod/". $_FILES['product-pic']['name'];
        $dataProds->InsertProd($data);
        header("Location:/pages/indexfile/admin.php");
        exit();
    }
    else
    {
        $_SESSION['msg'] = "Файл HE загружнен :(";
        $_SESSION['alert'] = "alert-danger";
        header("Location:/pages/indexfile/admin.php");
        exit();

    }

}