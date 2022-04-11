<?php
require "inc/lib.inc.php";
require "inc/config.inc.php";
$basket = unserialize(base64_decode($_COOKIE['basket']));
$orderId = $basket['orderid'];
$orderTime = time();
$i = 0;

$order = $_POST['name'] . '|' . $_POST['email'] . '|' . $_POST['phone'] . '|' . $_POST['address'] . '|' . $orderId . '|' . $orderTime . PHP_EOL;


//foreach($_POST as $value){
//    
//    //$orderStr0 = $value['name'];
//    //$orderStr1 = $value['email'];
//    //$orderStr2 = $value['phone'];
//    //$orderStr3 = $value['adress'];
//    $order = $value['name'].'|'.$value['email'].'|'.$value['phone'].'|'.$value['adress'].'|'.$orderId.'|'.$orderTime;
//    
//}


file_put_contents(ORDERS_LOG, "$order", FILE_APPEND);
saveOrder($orderTime);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Сохранение данных заказа</title>
</head>
<body>
<p>Ваш заказ принят.</p>
<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>