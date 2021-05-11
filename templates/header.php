<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/product.css">
<!--    <link rel="stylesheet" href="/css/auth.css">-->
    <link rel="stylesheet" href="/css/slidePic.css">
    <link rel="stylesheet" href="/css/burger.css">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="stylesheet" href="/css/music.css">
    <link rel="stylesheet" href="/css/slider.css">
    <link rel="stylesheet" href="/css/post.css">
    <link rel="stylesheet" href="/css/basket.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Train+One&display=swap" rel="stylesheet">
    <script src="/js/slider.js"></script>
    <script src="/js/slidePic.js"></script>
    <title>Мерч</title>
</head>

<body>
<header>
    <a href="/index.php"><img src="/img/logo.png" class="logo"></a>

    <p class="prodRub">Товаров в корзине: <?= count($_SESSION['baskets']) ?></p>
    <a href="/pages/indexfile/view.basket.php"><img src="/img/korzina.png" class="trash-bin"></a>

    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
        <div class="spinner diagonal part-1"></div>
<!--        <div class="spinner horizontal"></div>-->
        <div class="spinner diagonal part-2"></div>
    </label>
    <div id="sidebarMenu">
        <ul class="sidebarMenuInner">
            <a href="/pages/view/music.php"><li>Music</li></a>
            <a href="/pages/view/aboutUs.php"><li>About us</li></a>
        </ul>
    </div>

</header>