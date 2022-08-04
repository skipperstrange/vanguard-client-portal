<?php

$upload_requirements =[
    'claims' => [
            "motor-claim"=>[
                "drivers_licence_front" => [
                    "required" => true,
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'title' => 'front picture of drivers licence (front with clear details)',
                    'block'=>false
                ],
                "drivers_licence_rear" => [
                    "required" => true,
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'title' => 'back picture of drivers licence (back with clear details)',
                    'block'=>false
                ],
                "vehicle" =>[
                    "required" => true,
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>true,
                    'title' => 'pictures of damaged vehicle (with registeration)',
                    'block'=>false
                ],

                "estimates_of_repair" => [
                    "required" => true,
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>true,
                    'title'=>'total estimates of repair',
                    'block'=>false
                ],
                "police_report" => [
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>true,
                    'title' => 'police report',
                    'requirments'=>[
                        'status',
                        'div-check',
                        'name' => 'injury-theft',
                        'label' => "Inury or Theft"
                    ]
                ],
                "medical_reports" => [
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>false,
                    'title' => 'medical reports',
                    'block'=>false
                ],
            ]
        ],

        'proposals' => [
            'motor' => [
                'vehicle_front'=> [
                    "required" => true,
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>false,
                    'title' => 'photo of vehicle (front with registeration)',
                    'block'=>false
                ],
                "vehicle_rear" =>[
                    "required" => true,
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>false,
                    'title' => 'photo of vehicle (rear with registeration)',
                    'block'=>false
                ],

            ]
        ]

];