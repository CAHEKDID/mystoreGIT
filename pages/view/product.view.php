<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php"; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <a href="/index.php"><img  class="back" src="/img/arrow.png"  alt=""></a>

    <div class="main">
        <?php if($prod): ?>
        <form method="post" action="">
            <div class="product">

                <ul id="slider">
                    <li class="slide active">
                        <div class="pic">
                            <?php foreach ($images as $pic): ?>
                                <td><img src="/img<?= $pic->img ?> " alt="" class="img-prod" </td>
                            <?php endforeach;?></div>
                    </li>
                </ul>

                <div class="arrows">
                    <span class="arrow next" id="next">Вправо</span>
                    <span class="arrow prew" id="prew">Влево</span>
                </div>

                <div class="disc">
                    
                    <input hidden value="<?=$prod->id_prod?>" name="id">
                    <div class="nameprod"><?= $prod->name ?></div>

                    
                        
                    <div class="category-id">Категория: <?= $prod->cat ?></div>
                    <div class="priceprod"><?= $prod->price ?> руб.</div>
                    <label for="sizes">Размер:</label>
                    <select name="sizes" id="sizes">
                        <? foreach ($sizes as $size): ?>
                        <option value="<?= $size->size_id ?>"><?= $size->size ?></option>
                        <?php endforeach;?>
                    </select>
                    <label for="count">Количество:</label>
                    <input type="number" value="1" name="count" id="count" min="1"><br>
                    <input type="hidden" value="<?=$prod->id_prod ?>" name="idProd" id="idProd"><br>
                    <h3>О товаре:</h3>
                    <div class="discprod"><?= $prod->discription ?></div>
                    <a href="/pages/indexfile/product.php?id=<?=$prod->id_prod ?>"><button id="btn-addBasket" type="submit" class="btn-add" name="btn-addBasket">Добавить в корзину</button></a>
                    <!-- <?php print_r($_SESSION['baskets']);?> -->
                    </div>
                    
                </div>
            </div>
        </form>

        <?php else: ?>
            <div>Запрашиваемый ресурс не найден...</div>
        <?php endif;?>

    </div>    
    
<?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.php" ?>