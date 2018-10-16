<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['add', '/items/add', ['GET', 'POST']],
        ['edit', '/itemEdit/{id}', ['GET', 'POST']],
        ['delete', '/itemDelete/{id}', ['GET', 'POST']]
    ],
    'Categories' => [ // Controller
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'], // action, url, HTTP method
        ['add', '/categoryAdd', ['GET', 'POST']],
        ['edit', '/categoryEdit/{id}', ['GET', 'POST']],
        ['delete', '/categoryDelete/{id}', ['GET', 'POST']]
    ],
];
