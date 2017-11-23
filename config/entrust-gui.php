<?php
return [
    "layout" => "entrust-gui::app",
    "route-prefix" => "admin",
    "pagination" => [
        "users" => 100000,
        "roles" => 100000,
        "permissions" => 100000,
    ],
    "middleware" => ['web', 'entrust-gui.admin'],
    // "middleware" => ['web'],
    "unauthorized-url" => '/login',
    "middleware-role" => 'admin',
    "confirmable" => false,
    "users" => [
      'fieldSearchable' => [],
    ],
];
