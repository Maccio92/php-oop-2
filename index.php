<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Subscription.php";

// $user_one = new User ('Valerio', 'Macciocchi', 'abc@gmail.com', 'via nettuno', 'Prime', new Credit('1425362727', '12/05', '567'));
// var_dump($user_one);

$product_one = new Product ('Bicchiere', '2.00', 'Bicchiere di vetro', 'Casa');
// var_dump($product_one);

$premium_user = new Subscription (3, 'Valerio', 'Macciocchi', 'abc@gmail.com', 'via nettuno', new Credit('1425362727', '12/05', '567'));
var_dump($premium_user)
?>