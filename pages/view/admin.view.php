<?php //include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
<?php session_start();
if(!$_SESSION['user']['auth']){
    header("Location: /pages/auth/index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/admin-panel.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
</head>
<body>
<h1>ADMIN panel</h1>
<div class="container">
    <a class="btn-out" href="/pages/auth/logout.php">Out</a>
    <a href="/pages/adminpanel/indexfile/orders.php" class="btn-out">Управление заказами</a>
    <form action="/pages/indexfile/insertProduct.php" method="post" enctype="multipart/form-data">
        <label for="product-title">Название продукта</label>
        <input id="product-title" type="text" name="product-title" placeholder="Введите название">

        <label for="description">Описание</label>
        <textarea id="description" type="text" name="product-description">

        </textarea>

        <label for="price">Цена продукта</label>
        <input id="price" type="number" name="product-price">

        <label for="pic">Картинка</label>
        <input id="pic" type="file"  name="product-pic">
        <button type="submit" name="submit">Добавление</button>
    </form>
</div>
<div class="products">
    <?php foreach ($products as $prod): ?>
        <div class="post">
            <a style="text-decoration: none" href="/pages/adminpanel/indexfile/product.admin.php?id=<?=$prod->id_prod ?>">
                <img class="postImg" width="50px" src="/img<?= $dataProds->getImgProd($prod->id_prod)[0]->img ?>"  alt="">
                <p class="postTxt"><?= $prod->name ?></p></a>
            <p class="postPrice"><?= $prod->price ?></p>
        </div>
    <?php endforeach;?>
</div>
<script>
    let loadImage = document.querySelector("#pic");
    let image = document.querySelector("#image");

    image.addEventListener('change',function (e)
        {
            loadImage.src = URL.createObjectURL(e.target.files[e]);
            loadImage.style.dysplay = "block";
            loadImage.onload = function ()
            {
                URL.revokeObjectURL(e.target.src)
            };
        }
    )
</script>

</body>
</html>