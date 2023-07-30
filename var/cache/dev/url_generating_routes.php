<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'index' => [[], ['_controller' => 'CodeChallenge\\Infrastructure\\Http\\Controller\\SiteController::status'], [], [['text', '/']], [], [], []],
    'doctor' => [[], ['_controller' => 'CodeChallenge\\Infrastructure\\Http\\Controller\\DoctorSlotsSynchronizerController::doctors'], [], [['text', '/api/doctors']], [], [], []],
    'slots' => [['id'], ['_controller' => 'CodeChallenge\\Infrastructure\\Http\\Controller\\DoctorSlotsSynchronizerController::slots'], [], [['text', '/slots'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/doctors']], [], [], []],
];