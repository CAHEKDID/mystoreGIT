<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/ordersstyle.css">
</head>
<body>
<a href="/pages/indexfile/admin.php"> << back</a>
<table class="order">
    <tr>
        <td>№ заказа</td>
        <td>Дата заказа</td>
        <td>Имя покупателя</td>
        <td>Фамилия покупателя</td>
        <td>Телефон</td>
        <td>Товар</td>
        <td>Размер</td>
        <td>Кол-во</td>
        <td>Сумма заказа</td>
        <td>Статус</td>
    </tr>
    <?php foreach($orders as $order):?>
        <?php 
            $product = $dataProds->getOneProd($order->id_prod); 
            $size = $dataProds->getSizeId($order->size_id);
            $status = $dataProds->getStatus($order->status_id);
        ?>
        <tr>
            <th><?= $order->order_id ?></th>
            <th><?= $order->date ?></th>
            <th><?= $order->name ?></th>
            <th><?= $order->surname ?></th>
            <th><?= $order->phone ?></th>
            <th><?= $product->name ?></th>
            <th><?= $size->size ?></th>
            <th><?= $order->count ?> шт.</th>
            <th><?= $order->sum ?> руб.</th>
            <th><?= $status->name ?></th>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>