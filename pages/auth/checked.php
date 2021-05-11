<?php
session_start();
use App\db\Connect;
require_once $_SERVER['DOCUMENT_ROOT'] . "/db/Connect.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/db/config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/auth/Auth.php";
$auth = new Auth(Connect::make(CONN));
$login = $_POST['login'];
$pass = $_POST['pass'];
if (isset($_POST['submit'])) {
    $admin = $auth->getOneAdmin($login);
    if ($admin) {
        if ($admin->password == $pass) {
            $_SESSION['user']['auth'] = true;
            header('Location: /pages/indexfile/admin.php');

        } else {
            $_SESSION['msg'] = "Неверный пароль";
            header('Location: index.php');

        }
    } else {
        $_SESSION['msg'] = "Неверный логин";
        header('Location: index.php');


    }
}
//if (isset($_POST['exit'])) {
//    unset($_SESSION['user']);
//    session_destroy();
//    header('Location: /');
//}
//if(isset($_SESSION['user'])){
//
//}
//if (isset($_POST['submit'])) {
//
//}

//  if($users[$_POST['user']])
////        $_SESSION['auth']=true;
////        $_SESSION['email']=$_POST['login'];
///
///