<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php"; ?>
<div class="sim-slider">
    <ul class="sim-slider-list">
        <!-- <li><img src="http://pvbk.spb.ru/inc/slider/imgs/no-image.gif" alt="screen"></li> это экран -->
        <li class="sim-slider-element"><img src="img/1.png" class="slide_img" alt="0"></li>
        <li class="sim-slider-element"><img src="img/2.png" class="slide_img" alt="1"></li>
        <li class="sim-slider-element"><img src="img/1.png" class="slide_img" alt="2"></li>
        <li class="sim-slider-element"><img src="img/2.png" class="slide_img" alt="3"></li>
        <li class="sim-slider-element"><img src="img/1.png" class="slide_img" alt="4"></li>
        <li class="sim-slider-element"><img src="img/2.png" class="slide_img" alt="5"></li>
    </ul>
    <div class="sim-slider-arrow-left"></div>
    <div class="sim-slider-arrow-right"></div>
    <div class="sim-slider-dots"></div>
</div>
<script>
    new Sim()</script>
<div class="products">
    <?php foreach ($products as $prod): ?>
        <div class="post">
            <a style="text-decoration: none" href="/pages/indexfile/product.php?id=<?=$prod->id_prod ?>">
                <img class="postImg" width="333" src="/img<?= $dataProds->getImgProd($prod->id_prod)[0]->img ?>"  alt="">
                <p class="postTxt"><?= $prod->name ?></p>
            </a>
            <p class="postPrice"><?= $prod->price ?> руб.</p>
        </div>
    <?php endforeach;?>
</div>

<div class="sales">
    <p class="sasles">В дни релиза скидки: до -30% </p>
</div>
<div class="aboutus"> <br>

    <br><img src="/img/ABOUTUS.png" class="aboutuspic">


    <p class="us">Вы слушаете, а мы делаем, чтобы вы еще и носили!!!</p>
    <p class="ps">С любовью, <a href="/pages/auth/index.php">CAHEKDID</a> ♥ </p>


</div>
<div class="newcoll">
    <a href="/pages/view/basket.php">
        <button class="btnnew">new collection notifications</button></a>
    <img src="/img/arrow.png" class="arrow" alt="">

</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.php"; ?>

