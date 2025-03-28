<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'admin.contact.index' => [[], ['_controller' => 'App\\Controller\\Admin\\ContactController::index'], [], [['text', '/admin/contact/']], [], [], []],
    'admin.contact.remove' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ContactController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact/remove']], [], [], []],
    'admin.homepage.index' => [[], ['_controller' => 'App\\Controller\\Admin\\HomepageController::index'], [], [['text', '/admin/']], [], [], []],
    'admin.member.index' => [[], ['_controller' => 'App\\Controller\\Admin\\MemberController::index'], [], [['text', '/admin/member/']], [], [], []],
    'admin.member.detail' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MemberController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/member/detail']], [], [], []],
    'admin.member.remove' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MemberController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/member/remove']], [], [], []],
    'contact.index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'functioning.index' => [[], ['_controller' => 'App\\Controller\\FunctioningController::index'], [], [['text', '/functioning']], [], [], []],
    'legal-support.index' => [[], ['_controller' => 'App\\Controller\\LegalSupportController::index'], [], [['text', '/legal-support']], [], [], []],
    'profile.homepage.index' => [[], ['_controller' => 'App\\Controller\\Profile\\HomepageController::index'], [], [['text', '/profile/']], [], [], []],
    'profile.myoffer.index' => [[], ['_controller' => 'App\\Controller\\Profile\\MyOfferController::index'], [], [['text', '/profile/myoffer/']], [], [], []],
    'profile.myoffer.form' => [[], ['_controller' => 'App\\Controller\\Profile\\MyOfferController::form'], [], [['text', '/profile/myoffer/form']], [], [], []],
    'profile.myoffer.form.update' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\Profile\\MyOfferController::form'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile/myoffer/form/update']], [], [], []],
    'profile.myoffer.remove' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\Profile\\MyOfferController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile/myoffer/remove']], [], [], []],
    'profile.myprofile.form' => [[], ['_controller' => 'App\\Controller\\Profile\\MyProfileController::form'], [], [['text', '/profile/myprofile/form']], [], [], []],
    'profile.myprofile.password.edit' => [[], ['_controller' => 'App\\Controller\\Profile\\MyProfileController::edit'], [], [['text', '/profile/myprofile/password']], [], [], []],
    'profile.offer.index' => [[], ['_controller' => 'App\\Controller\\Profile\\OfferController::index'], [], [['text', '/profile/offer/']], [], [], []],
    'profile.offer.detail' => [['id'], ['_controller' => 'App\\Controller\\Profile\\OfferController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile/offer/detail']], [], [], []],
    'homepage.index' => [[], ['_controller' => 'App\\Controller\\HomepageController::index'], [], [['text', '/']], [], [], []],
    'registration.register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'registration.verify-user' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::verifUser'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/verif']], [], [], []],
    'registration.resend-verif' => [[], ['_controller' => 'App\\Controller\\RegistrationController::resendVerif'], [], [['text', '/resend-verif']], [], [], []],
    'security.login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'security.logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'security.forgotten-password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/forgotten-password']], [], [], []],
    'security.reset-password' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password']], [], [], []],
    'technical-support.index' => [[], ['_controller' => 'App\\Controller\\TechnicalSupportController::index'], [], [['text', '/technical-support']], [], [], []],
    'App\Controller\Admin\ContactController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\ContactController::index'], [], [['text', '/admin/contact/']], [], [], []],
    'App\Controller\Admin\ContactController::remove' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ContactController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/contact/remove']], [], [], []],
    'App\Controller\Admin\HomepageController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\HomepageController::index'], [], [['text', '/admin/']], [], [], []],
    'App\Controller\Admin\MemberController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\MemberController::index'], [], [['text', '/admin/member/']], [], [], []],
    'App\Controller\Admin\MemberController::detail' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MemberController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/member/detail']], [], [], []],
    'App\Controller\Admin\MemberController::remove' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MemberController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/member/remove']], [], [], []],
    'App\Controller\ContactController::index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'App\Controller\FunctioningController::index' => [[], ['_controller' => 'App\\Controller\\FunctioningController::index'], [], [['text', '/functioning']], [], [], []],
    'App\Controller\LegalSupportController::index' => [[], ['_controller' => 'App\\Controller\\LegalSupportController::index'], [], [['text', '/legal-support']], [], [], []],
    'App\Controller\Profile\HomepageController::index' => [[], ['_controller' => 'App\\Controller\\Profile\\HomepageController::index'], [], [['text', '/profile/']], [], [], []],
    'App\Controller\Profile\MyOfferController::index' => [[], ['_controller' => 'App\\Controller\\Profile\\MyOfferController::index'], [], [['text', '/profile/myoffer/']], [], [], []],
    'App\Controller\Profile\MyOfferController::remove' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\Profile\\MyOfferController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile/myoffer/remove']], [], [], []],
    'App\Controller\Profile\MyProfileController::form' => [[], ['_controller' => 'App\\Controller\\Profile\\MyProfileController::form'], [], [['text', '/profile/myprofile/form']], [], [], []],
    'App\Controller\Profile\MyProfileController::edit' => [[], ['_controller' => 'App\\Controller\\Profile\\MyProfileController::edit'], [], [['text', '/profile/myprofile/password']], [], [], []],
    'App\Controller\Profile\OfferController::index' => [[], ['_controller' => 'App\\Controller\\Profile\\OfferController::index'], [], [['text', '/profile/offer/']], [], [], []],
    'App\Controller\Profile\OfferController::detail' => [['id'], ['_controller' => 'App\\Controller\\Profile\\OfferController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile/offer/detail']], [], [], []],
    'App\Controller\HomepageController::index' => [[], ['_controller' => 'App\\Controller\\HomepageController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifUser' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::verifUser'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/verif']], [], [], []],
    'App\Controller\RegistrationController::resendVerif' => [[], ['_controller' => 'App\\Controller\\RegistrationController::resendVerif'], [], [['text', '/resend-verif']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::forgottenPassword' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/forgotten-password']], [], [], []],
    'App\Controller\SecurityController::resetPassword' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password']], [], [], []],
    'App\Controller\TechnicalSupportController::index' => [[], ['_controller' => 'App\\Controller\\TechnicalSupportController::index'], [], [['text', '/technical-support']], [], [], []],
];
