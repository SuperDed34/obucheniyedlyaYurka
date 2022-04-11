<?php
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
$orders = getOrders();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Поступившие заказы</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Поступившие заказы:</h1>
<?php
    $z=1;
foreach ($orders as $order){
?>
<hr>
<h2>Заказ номер:<? echo $z++?> </h2>
<p><b>Заказчик</b>:<? echo $order['name']?> </p>
<p><b>Email</b>: <? echo $order['email']?> </p>
<p><b>Телефон</b>:<? echo $order['phone']?> </p>
<p><b>Адрес доставки</b>:<? echo $order['address']?> </p>
<p><b>Дата размещения заказа</b>:<? echo date("d-m-Y H:i:s",$order['date'])?> </p>

<h3>Купленные товары:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
</tr>
<tr>
<? $i=1;$sum=0; foreach($order['goods'] as $item){ ?>
    
    <th><?=$i++?></th>
	<th><?=$item['title']?></th>
	<th><?=$item['author']?></th>
	<th><?=$item['pubyear']?></th>
	<th><?=$item['price']?></th>
	<th><?=$item['quantity']?></th>
    
    <?$sum = $sum+($item['price']*$item['quantity']);?>
</tr>
<?php } ?>
</table>
    
<p>Всего товаров в заказе на сумму:<?php echo $sum?> руб.</p>
<?php } ?>
</body>
</html>