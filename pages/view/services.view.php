<?php
include $_SERVER["DOCUMENT_ROOT"] . "/templates/header.php"; ?>
<div class="serv">
    <?php foreach ($products as $prod): ?>
        <div class="post">
            <a style="text-decoration: none" href="/pages/indexfile/product.php?id=<?=$prod->id_prod ?>">
                <img class="postImg" width="333" src="/img<?= $dataProds->getImgProd($prod->id_prod)[0]->img ?>"  alt="">
                <p class="postTxt"><?= $prod->name ?></p></a>
            <p class="postPrice"><?= $prod->price ?></p>
        </div>
    <?php endforeach;?>
</div>
<?php
include $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php"; ?>

