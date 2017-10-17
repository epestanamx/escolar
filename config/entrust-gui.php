<?php
return [
    "layout" => "entrust-gui::app",
    "route-prefix" => "admin",
    "pagination" => [
        "users" => 5,
        "roles" => 5,
        "permissions" => 5,
    ],
    // "middleware" => ['web', 'entrust-gui.admin'],
    "middleware" => ['web'],
    "unauthorized-url" => '/login',
    "middleware-role" => 'admin',
    "confirmable" => false,
    "users" => [
      'fieldSearchable' => [],
    ],
];
