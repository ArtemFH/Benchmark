<?php

use Illuminate\Support\Facades\Log;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/customers', 'CustomersController@index');
$router->get('/customers/{customerId}', 'CustomersController@view');
$router->post('/customers', 'CustomersController@create');
$router->put('/customers/{customerId}', 'CustomersController@update');
$router->delete('/customers/{customerId}', 'CustomersController@delete');
