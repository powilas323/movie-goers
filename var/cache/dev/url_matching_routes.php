<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserManagementController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserManagementController::register'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserManagementController::profile'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserManagementController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/comments/(?'
                    .'|([^/]++)(?:/([^/]++))?(*:77)'
                    .'|delete(*:90)'
                    .'|create(*:103)'
                    .'|edit(*:115)'
                    .'|report(*:129)'
                .')'
                .'|/movie(?'
                    .'|(?:/([^/]++))?(*:161)'
                    .'|/(?'
                        .'|c/([^/]++)(*:183)'
                        .'|wishlist(*:199)'
                    .')'
                .')'
                .'|/review(?'
                    .'|s(?:/([^/]++))?(*:234)'
                    .'|/([^/]++)(*:251)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'comments', 'page' => 1, '_controller' => 'App\\Controller\\CommentsController::comments'], ['id', 'page'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'delete_comment', '_controller' => 'App\\Controller\\CommentsController::delete_comment'], [], ['POST' => 0], null, false, false, null]],
        103 => [[['_route' => 'create_comment', '_controller' => 'App\\Controller\\CommentsController::create_comment'], [], ['POST' => 0], null, false, false, null]],
        115 => [[['_route' => 'edit_comment', '_controller' => 'App\\Controller\\CommentsController::edit_comment'], [], ['PUT' => 0], null, false, false, null]],
        129 => [[['_route' => 'report_comment', '_controller' => 'App\\Controller\\CommentsController::report_comment'], [], ['POST' => 0], null, false, false, null]],
        161 => [[['_route' => 'movie_list', 'page' => 1, '_controller' => 'App\\Controller\\MovieController::movie_list'], ['page'], null, null, false, true, null]],
        183 => [[['_route' => 'movie_show', '_controller' => 'App\\Controller\\MovieController::movie_show'], ['slug'], null, null, false, true, null]],
        199 => [[['_route' => 'movie_wishlist', '_controller' => 'App\\Controller\\MovieController::movie_wishlist'], [], null, null, false, false, null]],
        234 => [[['_route' => 'reviews_list', 'page' => 1, '_controller' => 'App\\Controller\\ReviewsController::reviews_list'], ['page'], null, null, false, true, null]],
        251 => [
            [['_route' => 'review', '_controller' => 'App\\Controller\\ReviewsController::review'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
