<?php
	// подключение библиотек
	//require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
if(!$_POST){
    echo 'Не введены данные для добавления!';
}
$i=1;
while($i<count($_POST)){
    $title = $_POST["title"];
    $author = $_POST["author"];
    $pubyear = $_POST["pubyear"];
    $price = $_POST["price"];
    $i++;
   }

if(!addItemToCatalog($title, $author, $pubyear, $price)){
    echo 'Мы не смогли добавить этот товар в корзину, виноват Шестаков';

    }else{
    header("location: add2cat.php");
    exit;
}