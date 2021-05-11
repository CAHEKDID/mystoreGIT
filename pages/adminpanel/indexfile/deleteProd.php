<?php
include $_SERVER["DOCUMENT_ROOT"] . '/templates/bootstrap.php';

function deleteImg($path)
{
    if (strlen($path) > 0)
    {
        unlink(realpath($path));
    }
    else {
        return "cannot delete";
    }
}

if (isset($_POST['deleteBtn'])) {
    $id = $_POST['id'];
    $prod = $dataProds ->getOneProd($id);
    $images = $dataProds ->getImgProd($id);
    $image = '/img/'.(string)$images[0]->img;
    $error = deleteImg($_SERVER["DOCUMENT_ROOT"] . $image);

    if (empty($error)) {
        $_SESSION['msg'] = "Файл успешно deleted";
        $_SESSION['alert'] = 'alert-success';
        $dataProds->deleteProd($id);
        header("Location:/pages/indexfile/admin.php");
        die();
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /pages/indexfile/admin.php');
        die();
    }
}