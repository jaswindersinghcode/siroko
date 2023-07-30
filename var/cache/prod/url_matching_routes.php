<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\SiteController::index'], null, null, null, false, false, null]],
        '/offers/duplicate' => [[['_route' => 'duplicate_offers', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersController::duplicate'], null, ['POST' => 0], null, false, false, null]],
        '/announcers' => [[['_route' => 'search_announcers', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\AnnouncersController::searchAnnouncers'], null, ['GET' => 0], null, false, false, null]],
        '/brands' => [[['_route' => 'search_brands', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\BrandController::searchBrands'], null, ['GET' => 0], null, false, false, null]],
        '/providers' => [[['_route' => 'search_providers', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\ProvidersController::searchProviders'], null, ['GET' => 0], null, false, false, null]],
        '/iab-categories' => [[['_route' => 'search_iab_categories', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\IabCategoriesController::search'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/offer(?'
                    .'|\\-newsletter/(?'
                        .'|([^/]++)(?'
                            .'|(*:43)'
                            .'|/offer/([^/]++)(?'
                                .'|(*:68)'
                            .')'
                        .')'
                        .'|(.*)(*:81)'
                    .')'
                    .'|s(?'
                        .'|\\-(?'
                            .'|added/([^/]++)(*:112)'
                            .'|to\\-add/([^/]++)/([^/]++)(?'
                                .'|(*:148)'
                                .'|/(?'
                                    .'|filter(*:166)'
                                    .'|announcers(*:184)'
                                    .'|c(?'
                                        .'|ategories(*:205)'
                                        .'|ities(*:218)'
                                    .')'
                                    .'|labels(*:233)'
                                    .'|brands(*:247)'
                                    .'|providers(*:264)'
                                .')'
                            .')'
                            .'|view/(.*)(*:283)'
                        .')'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|/([^/]++)(*:316)'
                                .'|(*:324)'
                            .')'
                            .'|(.*)(*:337)'
                        .')'
                    .')'
                .')'
                .'|/newsletter/(?'
                    .'|([^/]++)(?'
                        .'|(*:374)'
                    .')'
                    .'|(.*)(*:387)'
                .')'
                .'|/multioffers\\-editor/(?'
                    .'|([^/]++)(*:428)'
                    .'|offers/([^/]++)(*:451)'
                    .'|([^/]++)(*:467)'
                    .'|relation/([^/]++)(*:492)'
                    .'|(.*)(*:504)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'create_offers_newsletter', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OfferNewsletterController::create'], ['refNewsletter'], ['POST' => 0], null, false, true, null]],
        68 => [
            [['_route' => 'delete_offer_newsletter', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OfferNewsletterController::delete'], ['refNewsletter', 'refOffer'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'update_offer_newsletter', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OfferNewsletterController::update'], ['refNewsletter', 'refOffer'], ['PATCH' => 0], null, false, true, null],
        ],
        81 => [[['_route' => 'options_offer_newsletter_url_all_routes', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OfferNewsletterController::options'], ['catchall'], ['OPTIONS' => 0], null, false, true, null]],
        112 => [[['_route' => 'search_get_offers_added', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersAddedController::search'], ['refNewsletter'], ['GET' => 0], null, false, true, null]],
        148 => [[['_route' => 'search_get_offers_to_add', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersToAddController::search'], ['country_code', 'refNewsletter'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'search_by_filter_get_offers_to_add', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersToAddFilterController::search'], ['country_code', 'refNewsletter'], ['GET' => 0], null, false, false, null]],
        184 => [[['_route' => 'search_by_announcers_get_offers_to_add', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\AnnouncersController::search'], ['countryCode', 'refNewsletter'], ['GET' => 0], null, false, false, null]],
        205 => [[['_route' => 'search_by_categories_get_offers_to_add', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\CategoriesController::search'], ['countryCode', 'refNewsletter'], ['GET' => 0], null, false, false, null]],
        218 => [[['_route' => 'search_by_cities_get_offers_to_add', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\CitiesController::search'], ['countryCode', 'refNewsletter'], ['GET' => 0], null, false, false, null]],
        233 => [[['_route' => 'search_by_labels_get_offers_to_add', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\LabelsController::search'], ['countryCode', 'refNewsletter'], ['GET' => 0], null, false, false, null]],
        247 => [[['_route' => 'search_by_brands_get_offers_to_add', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\BrandController::search'], ['countryCode', 'refNewsletter'], ['GET' => 0], null, false, false, null]],
        264 => [[['_route' => 'search_by_providers_get_offers_to_add', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\ProvidersController::search'], ['countryCode', 'refNewsletter'], ['GET' => 0], null, false, false, null]],
        283 => [[['_route' => 'options_offer_view_all_routes', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OfferNewsletterController::options'], ['catchall'], ['OPTIONS' => 0], null, false, true, null]],
        316 => [[['_route' => 'search_get_offers', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersController::search'], ['country_code', 'refOffer'], ['GET' => 0], null, false, true, null]],
        324 => [
            [['_route' => 'delete_offers', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersController::delete'], ['refOffer'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'detail_get_multi_offers', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController::detail'], ['refOffer'], ['GET' => 0], null, false, true, null],
        ],
        337 => [[['_route' => 'options_offers_url_all_routes', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\OffersController::options'], ['catchall'], ['OPTIONS' => 0], null, false, true, null]],
        374 => [
            [['_route' => 'update_newsletters', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\NewslettersController::update'], ['refNewsletter'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'detail_get_newsletters', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\NewslettersController::detail'], ['refNewsletter'], ['GET' => 0], null, false, true, null],
        ],
        387 => [[['_route' => 'options_newsletters_url_all_routes', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\NewslettersController::options'], ['catchall'], ['OPTIONS' => 0], null, false, true, null]],
        428 => [[['_route' => 'update_multi_offers', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController::update'], ['refNewsletter'], ['PATCH' => 0], null, false, true, null]],
        451 => [[['_route' => 'search_get_multi_offers', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController::search'], ['refNewsletter'], ['GET' => 0], null, false, true, null]],
        467 => [[['_route' => 'multi_offers_editor', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController::create'], ['refNewsletter'], ['POST' => 0], null, false, true, null]],
        492 => [[['_route' => 'create_offer_relation', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController::createRelation'], ['refNewsletter'], ['POST' => 0], null, false, true, null]],
        504 => [
            [['_route' => 'options_multi_offers_url_all_routes', '_controller' => 'Emn\\CodeChallenge\\Infrastructure\\Http\\Controller\\MultiOffersController::options'], ['catchall'], ['OPTIONS' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
