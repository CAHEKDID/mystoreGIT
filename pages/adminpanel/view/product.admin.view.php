<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if($prod): ?>
    <div class="product">
        <div class="pic">
            <!--                --><?php //foreach ($images as $pic): ?>
            <td><img src="/img<?= $images[0]->img ?> " alt="" style="width: 200px;" </td></div>
        <div class="disc">
            <div class="nameprod"><?= $prod->name ?></div>
            <div class="priceprod"><?= $prod->price ?></div>
            <h3>О товаре:</h3>
            <div class="discprod"><?= $prod->discription ?></div>
        </div>
        <!--    --><?php //endforeach;?>
    </div>
                <form action="../indexfile/deleteProd.php" method="post">
                    <input type="hidden" name="id" value="<?= $prod->id_prod ?>">
                    <button type="submit" class="btn btn-danger px-3"
                            name="deleteBtn" id="deleteBtn"
                            onclick="return confirm('are you sure?')">Удалить пост</button>
                </form>
                <a href=/pages/indexfile/edit.php?id=<?= $prod->id ?>" class="btn btn-info px-3">Edit</a>
<?php else: ?>
    <div>Запрашиваемый рессурс не найден...</div>
<?php endif;?>

</body>
</html>