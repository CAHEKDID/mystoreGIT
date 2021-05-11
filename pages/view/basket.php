<?php

use App\models\Basket;

include $_SERVER["DOCUMENT_ROOT"] . "/templates/header.php" ?>
<h1 class="h1basket">КОРЗИНА</h1>
    <p class="title">ЗАКАЗ:</p>

    <form action="" method="post">
    <div class="contproduct">
        <button name="clearBasket">Очистить корзину</button>
        <table class="table_price" border="i">
            <tr>
                <th>Товар</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Размер</th>
                <th>Количество</th>
            </tr>

            <?php 
            $sum = 0;
            for($i=0;$i<count($_SESSION['baskets']);$i++): ?>
                <?php $products = $dataProds->getOneProd($_SESSION['baskets'][$i]['id_prod']); 
                $sizes = $dataProds->getSizeId($_SESSION['baskets'][$i]['size']);
                $sumProd = $products->price*$_SESSION['baskets'][$i]['count'];
                $sum+=$sumProd; ?>
                <input type="hidden" name="sum" value="<?=$sumProd?>">
                <tr>
                    <td> <img class="postImg" width="333" src="/img<?= $dataProds->getImgProd($_SESSION['baskets'][$i]['id_prod'])[0]->img ?>"  alt="">  </td>
                    <td> <?= $products->name ?> </td>
                    <td> <?= $products->price ?> руб.</td>
                    <td> <?= $sizes->size ?> </td>
                    <td> <?php print_r($_SESSION['baskets'][$i]['count']); ?> шт.</td>
                </tr>
            <?php endfor; ?>
        </table>
        <p>Итого к оплате: <?= $sum ?> руб.</p>
    </div>




    
        <div class="basket">
            <div class="div1"> </div>
            <div class="div2"><div class="order"></div>
                <div class="chooseAll">
                    <input type="text" class="choose" name="name" placeholder="Имя"> <br>
                    <input type="text" class="choose" name="surname" placeholder="Фамилия">
                    <p class="p-choose" >Ваш номер телефона*</p>
                    <input type="text" placeholder="+7 (999) 999-99-99" id="phone" class="choose" name="phone">
                    <p class="p-choose">Ваш email*</p>
                    <input placeholder="example@mail.com" type="text" class="choose">
                    <p class="p-choose">Адрес</p>
                    <input name="address" placeholder="Почтовый индекс,Город,Область,Улица,дом,квартира" type="text" class="choose">
                    <?php foreach ($delivery as $del): ?>
                    <p class="p-choose" data-tooltip="<?=$del ->discription ?>"><?=$del ->name ?>
                    <input type="radio" class="" name="delivery" value="<?= $del->delivery_id ?>">
                    <?php endforeach;?>
        </div>
                <button class="buy" name="btn-addOrder">ЗАКАЗАТЬ</button>
            </div>
        </div>
            <div class="div3"> </div>
    </form>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php" ?>