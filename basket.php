<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
if(!$basket){
    echo "Корзина пуста!<a href='/catalog.php'>Вернутся в каталог</a>";
    }else{echo "<a href='/catalog.php'>Вернутся в каталог</a>";}
   $basketArr = myBasket();
   $i = 1;
   $sum = 0;
$basket = unserialize(base64_decode($_COOKIE['basket']));
print_r($basket);
  

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Корзина пользователя</title>
</head>
<body>
	<h1>Ваша корзина</h1>
<?php

?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
	<th>№</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
    
</tr>
    <? 
    foreach($basketArr as $item){
    ?>
<tr>
	
    <th><?=$i++?></th>
	<th><?=$item['title']?></th>
	<th><?=$item['author']?></th>
	<th><?=$item['pubyear']?></th>
	<th><?=$item['price']?></th>
	<th><?=$item['quantity']?></th>
    <th><a href="/delete_from_basket.php?id=<?=$item['id']?>">Удалить</a></th>
    
    <?$sum = $sum+($item['price']*$item['quantity']);?>
    
</tr>

<?php
   }
//     $o=0;
//    while ($o<count($basketArr)){
//        $sum = $sum+$basketArr['price'];
//    }
?>
</table>

<p>Всего товаров в корзине на сумму: <?=$sum ?> руб.</p>

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='orderform.php'" />
</div>

</body>
</html>







