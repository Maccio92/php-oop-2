<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";

$user_one = new User ('Valerio', 'Macciocchi', 'abc@gmail.com', 'via nettuno', 123456789);
var_dump($user_one);
?>