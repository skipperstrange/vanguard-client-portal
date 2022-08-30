<?php

$upload_requirements =[
    'claims' => [
            "motor-claim"=>[
                "drivers_licence_front" => [
                    "required" => true,
                    'description'=>'Picture of the front of drivers licence.',
                    'maxSize'=>'16MB',
                    'title' => 'Picture of the front of drivers licence (front with clear details)',
                    'block'=>false
                ],
                "drivers_licence_rear" => [
                    "required" => true,
                    'description'=>'Picture of the back of drivers licence',
                    'maxSize'=>'16MB',
                    'title' => 'Picture of the back of drivers licence (back with clear details)',
                    'block'=>false
                ],
                "damaged_vehicle_pictures" =>[
                    "required" => true,
                    'description'=>'Pictures of damaged vehicle ',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>true,
                    'title' => 'Pictures of damaged vehicle',
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
                    'allowMultiple'=>true,
                    'title' => 'medical reports',
                    'block'=>false,
                    'requirments'=>[
                        'status',
                        'div-check',
                        'name' => 'injury-theft',
                        'label' => "Inury or Theft"
                    ]
                ],
            ]
        ],

        'proposals' => [
            'motor' => [
                'id'=> [
                    "required" => false,
                    'description'=>'The specified id',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>false,
                    'title' => 'photo of ID used',
                    'block'=>false
                ],
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
                'vehicle_right'=> [
                    "required" => true,
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>false,
                    'title' => 'photo of vehicle (from rightt)',
                    'block'=>false
                ],
                "vehicle_left" =>[
                    "required" => true,
                    'description'=>'',
                    'maxSize'=>'16MB',
                    'allowMultiple'=>false,
                    'title' => 'photo of vehicle (from left)',
                    'block'=>false
                ],

            ]
        ]
];