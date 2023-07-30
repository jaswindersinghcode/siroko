<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'CodeChallenge\\Infrastructure\\Http\\Controller\\SiteController::status'], null, null, null, false, false, null]],
        '/api/doctors' => [[['_route' => 'doctor', '_controller' => 'CodeChallenge\\Infrastructure\\Http\\Controller\\DoctorSlotsSynchronizerController::doctors'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/doctors/([^/]++)/slots(*:69)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [
            [['_route' => 'slots', '_controller' => 'CodeChallenge\\Infrastructure\\Http\\Controller\\DoctorSlotsSynchronizerController::slots'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
