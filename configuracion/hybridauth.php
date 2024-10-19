<?php
return [
    'callback' => 'http://localhost/tuapp/index.php?route=auth/callback',
    'providers' => [
        'Google' => [
            'enabled' => true,
            'keys' => [
                'id' => '-2j1ol5e4i1j9dq5ioa5710o3j9dvsh71.apps.googleusercontent.com',
                'secret' => '-Grb-CEB8jGcarzFVmnEFKXpgHAGp',
            ],
            'scope'   => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
            'redirect_uri' => 'http://localhost/tuapp/index.php?route=auth/callback',
        ],
        
    ],
];