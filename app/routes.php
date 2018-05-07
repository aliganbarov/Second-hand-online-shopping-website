<?php

$router->get('', 'PagesController@index');

$router->get('login', 'PagesController@login_page');
$router->post('login', 'UserController@login');

$router->get('logout', 'UserController@logout');

$router->get('register', 'PagesController@register_page');
$router->post('register', 'UserController@register');


// PRODUCT ROUTES
$router->get('add_product', 'PagesController@add_product');
$router->post('add_product', 'ProductsController@product_save');

$router->get('product_details', 'PagesController@product_details');
$router->get('delete_product', 'ProductsController@delete_product');

$router->get('edit_product', 'PagesController@edit_product');
$router->post('edit_product', 'ProductsController@update_product');

$router->get('my_products', 'PagesController@my_products');


// APARTMENT ROUTES
$router->get("add_apartment", "PagesController@add_apartment");
$router->post("add_apartment", "ApartmentsController@add_apartment");

$router->get('my_apartments', "PagesController@my_apartments");

$router->get('delete_apartment', "ApartmentsController@delete_apartment");


// POST ROUTES
$router->get('post', 'PagesController@post');
$router->post('post', 'PostController@post');

$router->get('my_posts', 'PagesController@my_posts');

$router->get('delete_post', 'PostController@delete_post');

$router->get('post_details', 'PagesController@post_details');
