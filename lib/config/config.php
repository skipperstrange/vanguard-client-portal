<?php

define('APP_NAME', 'Vanguard Client Portal');
<<<<<<< HEAD
define('MODE', 'production');
=======
define('MAINENANCE', false);
define('MODE', 'development');
>>>>>>> 59a151a4817fda36f92060279e1f6983ea230819
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
            'pass' => '',
            'messages' => [
                'success' => "Your message has been successfully sent.",
                'error' => "Sorry a problem occured. Please try again later"
            ]
        ],
    ];
}

