<?php

$router->get('', 'PagesController@index');

$router->get('login', 'PagesController@login_page');
$router->post('login', 'UserController@login');

$router->get('logout', 'UserController@logout');

$router->get('register', 'PagesController@register_page');
$router->post('register', 'UserController@register');

$router->get('add_product', 'PagesController@add_product');
$router->post('add_product', 'ProductsController@product_save');

$router->get('my_products', 'PagesController@my_products');