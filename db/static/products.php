<?php
$products = [
    'motor'=>[
        'products'=>[
            'policy'=>[
                'label'=>'Complete a proposal',
                'controller'=>'motor-policy',
                'view'=>'motor-policy',
                'icon' => '',
                'enabled'=>true,
                'show'=> true,
            ],
            'claim'=>[
                'label'=>'Register claim',
                'controller'=>'motor-claim',
                'view'=>'motor-claim',
                'icon' => '',
                'enabled'=>true,
                'show'=> true,
            ]
        ],
        'icon'=>'fa fa-car',
        'description'=>'All motor related tasks bundled up for you.Quick and easy.',
        'show'=> true,
        'enabled'=>true
    ],
    'fire'=>[
        'products'=>[
            'policy'=>[
                'label'=>'Complete a proposal',
                'controller'=>'fire-policy',
                'view'=>'fire-policy',
                'icon' => '',
                'enabled'=>false,
                'show'=> true,
            ],
            'claim'=>[
                'label'=>'Register claim',
                'controller'=>'fire-claim',
                'view'=>'fire-claim',
                'icon' => '',
                'enabled'=>false,
                'show'=> true,
            ]
        ],
        'icon'=>'fa fa-home',
        'description'=>'For home related damages and policies please select an action.',
        'show'=> true,
        'enabled'=>true
    ],

    'travel'=>[
        'products'=>[
            'policy'=>[
                'label'=>'Complete a proposal',
                'controller'=>'fire-policy',
                'view'=>'fire-policy',
                'icon' => '',
                'enabled'=>false,
                'show'=> true,
            ],
            'claim'=>[
                'label'=>'Register claim',
                'controller'=>'fire-claim',
                'view'=>'fire-claim',
                'icon' => '',
                'enabled'=>false,
                'show'=> true,
            ]
        ],
        'icon'=>'fa fa-plane',
        'description'=>'For home related damages and policies please select an action.',
        'show'=> true,
        'enabled'=>false
    ],
];
