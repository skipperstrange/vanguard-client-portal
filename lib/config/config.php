<?php

define('APP_NAME', 'Vanguard Client Portal');
define('MODE', 'development');
define('MVC_MODE', 'strict');

function config () {
    return[
        //Mail Servers
        'mailer'=>[
            'host' => 'smtp.gmail.com',
            'from' => 'noreply@vanguardassurance.com',
            'name' => 'Vanguarg Assurance Company Limited',
            'reply' => 'skipperstrange@gmail.com',
            'incoming' => 'skipperstrange@gmail.com',
            'outgoing' => 'skipperstrange@gmail.com',
            'smtp_in' => 993,
            'smtp_out' => 587,
            'pop' => 995,
            'user' => 'skipperstrange@gmail.com',
            'pass' => '32@Redrod',
            'messages' => [
                'success' => "Your message has been successfully sent.",
                'error' => "Sorry a problem occured. Please try again later"
            ]
        ],
    ];
}

