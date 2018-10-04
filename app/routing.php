<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 03/10/18
 * Time: 15:59
 */

$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Category' => [ // Controller
        ['categ', '/categories', 'GET'], // action, url, HTTP method
        ['oneCateg', '/category/{id}', 'GET'], // action, url, HTTP method
    ],
];