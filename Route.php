<?php
$routes =[
    '/' => [
        'controller' => 'HomeController',
        'action' => 'index',
    ],
    'register' => [
        'controller' => 'MajorController',
        'action' => 'index',
    ],
    '/' => [
        'controller' => 'MajorController',
        'action' => 'getList',
    ],
    '/' => [
        'controller' => 'MajorController',
        'action' => 'edit',
    ],
    '/' => [
        'controller' => 'MajorController',
        'action' => 'add',
    ],
    '/' => [
        'controller' => 'MajorController',
        'action' => 'delete',
    ],
    '/' => [
        'controller' => 'MajorController',
        'action' => 'update',
    ],
];