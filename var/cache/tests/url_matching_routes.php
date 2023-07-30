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
                .'|/api/doctors/([^/]++)/slots(*:34)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [
            [['_route' => 'slots', '_controller' => 'CodeChallenge\\Infrastructure\\Http\\Controller\\DoctorSlotsSynchronizerController::slots'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
