<?php

$routes = [
    '/commerce101/' => 'Core/controller/home.php',
    '/commerce101/home' => 'Core/controller/home.php',
    '/commerce101/viewproduct' => 'Core/controller/product.php',
    '/commerce101/wishlist' => 'Core/controller/wishlist.php',
    '/commerce101/home/deletecart' => 'Core/controller/deletecart.php',

    '/commerce101/admin/upload' => 'Core/access/admin.php',

];

if(array_key_exists($url,$routes)){
    require($routes[$url]);
}else{
   
    abort(404);
}