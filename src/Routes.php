<?php

/**
 * @version 1.0
 *
 * Archivo de Rutas
 *
 * Define los endpoints de la API. Cada ruta se asocia a un controlador y a un método,
 * y opcionalmente especifica los roles permitidos para acceder a ella.
 */


//* Rutas Públicas (Forma 1)
$router->get('stores', [
    'use'          => 'RPC\Get@GetAll',
    'allowedRoles' => ['GUEST', 'ADMIN'],
]);

//* Rutas Públicas - Sin allowedRoles (Forma 2)
$router->get('publicEndpoint', [
    'use' => 'RPC\Get@Static',
]);
$router->get('stores/:id', [
    'use' => 'RPC\Get@GetById',
]);
$router->get('stores/static', [
    'use' => 'RPC\Get@Static',
]);


//* Rutas Autenticadas
$router->get('users', [
    'use'          => 'Users\UsersController@index',
    'allowedRoles' => ['ADMIN'],
]);
