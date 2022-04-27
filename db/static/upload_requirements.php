<?php

$upload_requirements =[
    'claims' => [
        "motor-claim"=>[
            "drivers_licence" => [
                "required" => true,
                'description'=>'',
                'maxSize'=>'16MB',
                'desc' => 'drivers licence',
                'block'=>false
            ],
            "police_report" => [
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>true,
                'desc' => 'police report',
                'block'=>false
            ],
            "vehicle_front" =>[
                "required" => true,
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>false,
                'desc' => 'photo of vehicle (front with registeration)',
                'block'=>false
            ],
            "vehicle_rear" =>[
                "required" => true,
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>false,
                'desc' => 'photo of vehicle (rear with registeration)',
                'block'=>false
            ],
            "estimates_of_repair" => [
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>true,
                'total estimates of repair',
                'block'=>false
            ],
            "medical_reports" => [
                'description'=>'',
                'maxSize'=>'16MB',
                'allowMultiple'=>true,
                'desc' => 'medical reports',
                'block'=>false
            ],
        ]
    ]
];