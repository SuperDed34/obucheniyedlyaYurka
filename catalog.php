<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
    $goods = selectAllItems();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог товаров</title>
</head>
<body>
    <p><a href="/admin/">Войти</a></p>    
<p>Товаров в <a href="basket.php">корзине</a>: <?= $count?></p>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
    <td>Наименование</td>
    <td>Автор</td>
    <td>Год выпуска</td>
    <td>Цена</td>
    <td>Купить</td>
    </tr>
    <?php
    foreach($goods as $item){ 
?> 
 <tr> 
 <td><?= $item['title']?></td> 
 <td><?= $item['author']?></td> 
 <td><?= $item['pubyear']?></td> 
     <td><?= $item['price']?></td> <td><a href="/add2basket.php?id=<?=$item['id']?>">В корзину</a></td> 
 </tr> 
<? 
}?>

<?php

?>
</table>
</body>
</html>