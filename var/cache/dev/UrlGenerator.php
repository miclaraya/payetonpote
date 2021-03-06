<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'campaign_index' => [[], ['_controller' => 'App\\Controller\\CampaignController::index'], [], [['text', '/campaign/']], [], []],
    'campaign_new' => [[], ['_controller' => 'App\\Controller\\CampaignController::new'], [], [['text', '/campaign/new']], [], []],
    'campaign_show' => [['id'], ['_controller' => 'App\\Controller\\CampaignController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/campaign']], [], []],
    'campaign_edit' => [['id'], ['_controller' => 'App\\Controller\\CampaignController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/campaign']], [], []],
    'campaign_payment' => [['id'], ['_controller' => 'App\\Controller\\CampaignController::payment'], [], [['text', '/payment'], ['variable', '/', '[^/]++', 'id', true], ['text', '/campaign']], [], []],
    'campaign_delete' => [['id'], ['_controller' => 'App\\Controller\\CampaignController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/campaign']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'participant_index' => [[], ['_controller' => 'App\\Controller\\ParticipantController::index'], [], [['text', '/participant/']], [], []],
    'participant_new' => [[], ['_controller' => 'App\\Controller\\ParticipantController::new'], [], [['text', '/participant/new']], [], []],
    'participant_show' => [['id'], ['_controller' => 'App\\Controller\\ParticipantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participant']], [], []],
    'participant_edit' => [['id'], ['_controller' => 'App\\Controller\\ParticipantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/participant']], [], []],
    'participant_delete' => [['id'], ['_controller' => 'App\\Controller\\ParticipantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participant']], [], []],
    'payment_index' => [[], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['text', '/payment/']], [], []],
    'payment_new' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/payment/new']], [], []],
    'payment_show' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/payment']], [], []],
    'payment_edit' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/payment']], [], []],
    'payment_delete' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/payment']], [], []],
];
