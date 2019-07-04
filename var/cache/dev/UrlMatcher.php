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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/campaign' => [[['_route' => 'campaign_index', '_controller' => 'App\\Controller\\CampaignController::index'], null, ['GET' => 0], null, true, false, null]],
        '/campaign/new' => [[['_route' => 'campaign_new', '_controller' => 'App\\Controller\\CampaignController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/participant' => [[['_route' => 'participant_index', '_controller' => 'App\\Controller\\ParticipantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participant/new' => [[['_route' => 'participant_new', '_controller' => 'App\\Controller\\ParticipantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment' => [[['_route' => 'payment_index', '_controller' => 'App\\Controller\\PaymentController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/campaign/([^/]++)(?'
                    .'|(*:190)'
                    .'|/(?'
                        .'|edit(*:206)'
                        .'|payment(*:221)'
                    .')'
                    .'|(*:230)'
                .')'
                .'|/pa(?'
                    .'|rticipant/([^/]++)(?'
                        .'|(*:266)'
                        .'|/edit(*:279)'
                        .'|(*:287)'
                    .')'
                    .'|yment/(?'
                        .'|new/([^/]++)(*:317)'
                        .'|([^/]++)(?'
                            .'|(*:336)'
                            .'|/edit(*:349)'
                            .'|(*:357)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'campaign_show', '_controller' => 'App\\Controller\\CampaignController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'campaign_edit', '_controller' => 'App\\Controller\\CampaignController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'campaign_payment', '_controller' => 'App\\Controller\\CampaignController::payment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        230 => [[['_route' => 'campaign_delete', '_controller' => 'App\\Controller\\CampaignController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        266 => [[['_route' => 'participant_show', '_controller' => 'App\\Controller\\ParticipantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'participant_edit', '_controller' => 'App\\Controller\\ParticipantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'participant_delete', '_controller' => 'App\\Controller\\ParticipantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        317 => [[['_route' => 'payment_new', '_controller' => 'App\\Controller\\PaymentController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        336 => [[['_route' => 'payment_show', '_controller' => 'App\\Controller\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'payment_edit', '_controller' => 'App\\Controller\\PaymentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [
            [['_route' => 'payment_delete', '_controller' => 'App\\Controller\\PaymentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
