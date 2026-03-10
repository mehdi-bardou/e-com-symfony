<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\StoreController::index'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'app_products', '_controller' => 'App\\Controller\\StoreController::products'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'app_categories', '_controller' => 'App\\Controller\\StoreController::categories'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\StoreController::cart'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\StoreController::login'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\StoreController::profile'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/products/(\\d+)(*:22)'
                .'|/categories/([^/]++)(*:49)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        22 => [[['_route' => 'app_product_details', '_controller' => 'App\\Controller\\StoreController::productDetails'], ['id'], null, null, false, true, null]],
        49 => [
            [['_route' => 'app_products_by_category', '_controller' => 'App\\Controller\\StoreController::productsByCategory'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
