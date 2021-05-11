<?php
//include $_SERVER["DOCUMENT_ROOT"] . '/templates/bootstrap.php';
//
//if (isset($_POST['submitUpload'])){
//
//    $data['name']=htmlspecialchars($_POST['name']);
//    $data['discription']=htmlspecialchars($_POST['discription']);
//    $data['id']=$_POST['id'];
//
//    $prod = $dataProds ->getOneProd($id);
//
//    $errorDel = deleteImg('../img/' .(string)$images[0]->img);
//
//    [$errorLoad, $fileName] =
//        loadImg($maxFileSize, $validFileTypes, $uploadPath, 'image');
//    if (empty($errorDel) && empty($errorLoad))
//    {
//        $_SESSION['msg'] = "Файл успешно загружен";
//        $_SESSION['alert'] = 'alert-success';
//        $data['image'] = $fileName;
//
//        $dataProds->updateProd($data);
//
//        header('Location: /pages/indexfile/admin.php');
//    }
//    else
//    {
//        $_SESSION['msg'] = $error;
//        $_SESSION['alert'] = 'alert-danger';
//        header('Location: /pages/indexfile/admin.php');
//    }
//
//}