<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/acceuil/admin' => [[['_route' => 'app_acceuil_admin', '_controller' => 'App\\Controller\\AcceuilAdminController::index'], null, null, null, false, false, null]],
        '/acceuil/client' => [[['_route' => 'app_acceuil_client', '_controller' => 'App\\Controller\\AcceuilClientController::index'], null, null, null, false, false, null]],
        '/acceuil' => [
            [['_route' => 'app_acceuil_index', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null],
            [['_route' => 'acceuil', '_controller' => 'App\\Controller\\Acceuil\\AcceuilController::index'], null, null, null, false, false, null],
        ],
        '/' => [
            [['_route' => 'app_acceuil_acceuil', '_controller' => 'App\\Controller\\AcceuilController::acceuil'], null, null, null, false, false, null],
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuil'], null, null, null, false, false, null],
        ],
        '/accueilclient' => [
            [['_route' => 'app_acceuil_acceuilclient', '_controller' => 'App\\Controller\\AcceuilController::acceuilclient'], null, null, null, false, false, null],
            [['_route' => 'accueilclient', '_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuilclient'], null, null, null, false, false, null],
        ],
        '/acceuiladmin' => [
            [['_route' => 'app_acceuil_acceuiladmin', '_controller' => 'App\\Controller\\AcceuilController::acceuiladmin'], null, null, null, false, false, null],
            [['_route' => 'acceuiladmin', '_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuiladmin'], null, null, null, false, false, null],
        ],
        '/contact/client' => [[['_route' => 'app_contact_client', '_controller' => 'App\\Controller\\ContactClientController::index'], null, null, null, false, false, null]],
        '/contact/client/add' => [[['_route' => 'app_contact_client_add', '_controller' => 'App\\Controller\\ContactClientController::add'], null, null, null, false, false, null]],
        '/contact' => [
            [['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null],
            [['_route' => 'contact', '_controller' => 'App\\Controller\\Contact\\ContactController::index'], null, null, null, false, false, null],
        ],
        '/contact/add' => [[['_route' => 'app_contact_add', '_controller' => 'App\\Controller\\ContactController::add'], null, null, null, false, false, null]],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
        ],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'security_login', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'security_logout'], null, null, null, false, false, null],
        ],
        '/contactclient' => [[['_route' => 'contactclient', '_controller' => 'App\\Controller\\Contact\\ContactController::contact/client'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/contact/(?'
                    .'|edit/([^/]++)(?'
                        .'|(*:197)'
                    .')'
                    .'|delete/([^/]++)(?'
                        .'|(*:224)'
                    .')'
                    .'|show/([^/]++)(*:246)'
                    .'|client/show/([^/]++)(*:274)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [
            [['_route' => 'app_contact_edit', '_controller' => 'App\\Controller\\ContactController::editContact'], ['id'], null, null, false, true, null],
            [['_route' => 'app_contact_client_edit', '_controller' => 'App\\Controller\\ContactClientController::editContact'], ['id'], null, null, false, true, null],
        ],
        224 => [
            [['_route' => 'app_contact_delete', '_controller' => 'App\\Controller\\ContactController::deleteContact'], ['id'], null, null, false, true, null],
            [['_route' => 'app_contact_client_delete', '_controller' => 'App\\Controller\\ContactClientController::deleteContact'], ['id'], null, null, false, true, null],
        ],
        246 => [[['_route' => 'app_contact_show', '_controller' => 'App\\Controller\\ContactController::showContact'], ['id'], ['GET' => 0], null, false, true, null]],
        274 => [
            [['_route' => 'app_contact_client_show', '_controller' => 'App\\Controller\\ContactClientController::showContact'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
