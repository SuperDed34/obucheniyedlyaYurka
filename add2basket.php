<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
    
    $id = $_GET['id'];

if($id){
     
        addToBasket($id);
        
    }
     header('location: /catalog.php');
        exit;
