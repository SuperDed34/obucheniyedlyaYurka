<?php
define ('DB_HOST', 'localhost');
define ('DB_LOGIN', 'root');
define ('DB_PASSWORD', "");
define ('DB_NAME', 'eshop');
opendir("..");
define ('ORDERS_LOG', 'admin/orders.log');
closedir();
$basket = [];
$count = 0;
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
    if(!$link){
        echo 'Ошибка:'
            . mysqli_connect_error();
    }
basketInit();
