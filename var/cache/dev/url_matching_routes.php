<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/comments' => [[['_route' => 'comments', '_controller' => 'App\\Controller\\CommentsController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserManagementController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserManagementController::register'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserManagementController::profile'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserManagementController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/movie/(?'
                    .'|([^/]++)(*:60)'
                    .'|c/([^/]++)(*:77)'
                    .'|wishlist(*:92)'
                .')'
                .'|/review(?'
                    .'|s/([^/]++)(*:120)'
                    .'|/([^/]++)(*:137)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'movie_list', '_controller' => 'App\\Controller\\MovieController::movie_list'], ['page'], null, null, false, true, null]],
        77 => [[['_route' => 'movie_show', '_controller' => 'App\\Controller\\MovieController::movie_show'], ['slug'], null, null, false, true, null]],
        92 => [[['_route' => 'movie_wishlist', '_controller' => 'App\\Controller\\MovieController::movie_wishlist'], [], null, null, false, false, null]],
        120 => [[['_route' => 'reviews_list', '_controller' => 'App\\Controller\\ReviewsController::reviews_list'], ['page'], null, null, false, true, null]],
        137 => [
            [['_route' => 'review', '_controller' => 'App\\Controller\\ReviewsController::review'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
