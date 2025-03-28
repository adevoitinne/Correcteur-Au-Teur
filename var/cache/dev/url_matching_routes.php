<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/contact' => [[['_route' => 'admin.contact.index', '_controller' => 'App\\Controller\\Admin\\ContactController::index'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'admin.homepage.index', '_controller' => 'App\\Controller\\Admin\\HomepageController::index'], null, null, null, true, false, null]],
        '/admin/member' => [[['_route' => 'admin.member.index', '_controller' => 'App\\Controller\\Admin\\MemberController::index'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/functioning' => [[['_route' => 'functioning.index', '_controller' => 'App\\Controller\\FunctioningController::index'], null, ['GET' => 0], null, false, false, null]],
        '/legal-support' => [[['_route' => 'legal-support.index', '_controller' => 'App\\Controller\\LegalSupportController::index'], null, ['GET' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'profile.homepage.index', '_controller' => 'App\\Controller\\Profile\\HomepageController::index'], null, null, null, true, false, null]],
        '/profile/myoffer' => [[['_route' => 'profile.myoffer.index', '_controller' => 'App\\Controller\\Profile\\MyOfferController::index'], null, null, null, true, false, null]],
        '/profile/myoffer/form' => [[['_route' => 'profile.myoffer.form', '_controller' => 'App\\Controller\\Profile\\MyOfferController::form'], null, null, null, false, false, null]],
        '/profile/myprofile/form' => [[['_route' => 'profile.myprofile.form', '_controller' => 'App\\Controller\\Profile\\MyProfileController::form'], null, null, null, false, false, null]],
        '/profile/myprofile/password' => [[['_route' => 'profile.myprofile.password.edit', '_controller' => 'App\\Controller\\Profile\\MyProfileController::edit'], null, null, null, false, false, null]],
        '/profile/offer' => [[['_route' => 'profile.offer.index', '_controller' => 'App\\Controller\\Profile\\OfferController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'homepage.index', '_controller' => 'App\\Controller\\HomepageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'registration.register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/resend-verif' => [[['_route' => 'registration.resend-verif', '_controller' => 'App\\Controller\\RegistrationController::resendVerif'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security.login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security.logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgotten-password' => [[['_route' => 'security.forgotten-password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/technical-support' => [[['_route' => 'technical-support.index', '_controller' => 'App\\Controller\\TechnicalSupportController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|contact/remove/([^/]++)(*:235)'
                    .'|member/(?'
                        .'|detail/([^/]++)(*:268)'
                        .'|remove/([^/]++)(*:291)'
                    .')'
                .')'
                .'|/profile/(?'
                    .'|myoffer/(?'
                        .'|form/update(?:/([^/]++))?(*:349)'
                        .'|remove(?:/([^/]++))?(*:377)'
                    .')'
                    .'|offer/detail/([^/]++)(*:407)'
                .')'
                .'|/verif/([^/]++)(*:431)'
                .'|/reset\\-password/([^/]++)(*:464)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        235 => [[['_route' => 'admin.contact.remove', '_controller' => 'App\\Controller\\Admin\\ContactController::remove'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'admin.member.detail', '_controller' => 'App\\Controller\\Admin\\MemberController::detail'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'admin.member.remove', '_controller' => 'App\\Controller\\Admin\\MemberController::remove'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'profile.myoffer.form.update', 'id' => null, '_controller' => 'App\\Controller\\Profile\\MyOfferController::form'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'profile.myoffer.remove', 'id' => null, '_controller' => 'App\\Controller\\Profile\\MyOfferController::remove'], ['id'], null, null, false, true, null]],
        407 => [[['_route' => 'profile.offer.detail', '_controller' => 'App\\Controller\\Profile\\OfferController::detail'], ['id'], null, null, false, true, null]],
        431 => [[['_route' => 'registration.verify-user', '_controller' => 'App\\Controller\\RegistrationController::verifUser'], ['token'], null, null, false, true, null]],
        464 => [
            [['_route' => 'security.reset-password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
