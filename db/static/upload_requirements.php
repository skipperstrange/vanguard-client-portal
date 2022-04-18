<?php

$upload_requirements =[
    'claims' => [
        "motor-claim"=>[
            "drivers licence" => [
                "required" => true,
                'description'=>'',
                'maxSize'=>'16MB'
            ],
            "police report" => [
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>true
            ],
            "photo of vehicle (front with registeration)" =>[
                "required" => true,
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>false
            ],
            "photo of vehicle (rear with registeration)" =>[
                "required" => true,
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>false
            ],
            "estimates of repair" => [
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>true
            ],
            "medical reports" => [
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>true
            ],
        ]
    ]
];