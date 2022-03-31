<?php
$view = null;
include STATIC_DATA.'branches.php';
include STATIC_DATA.'cover_types.php';
include STATIC_DATA.'currencies.php';

$data = $_POST;
foreach($data as $key => $value){
    if($value == ''){
        $data[$key] = "N/A";
    }
}

    $info['owner_details']['first_name'] = $data['client_first_name'];
    $info['owner_details']['client_last_name'] = $data['client_last_name'];
    $info['owner_details']['client_other_name'] = $data['client_other_name'];
    $info['owner_details']['occupation'] = $data['client_occupation'];
    $info['owner_details']['client_contact'] = $data['client_contact'];
    $info['owner_details']['postal_address'];
    $info['owner_details']['residential_address'] = $data['residential_address'];

    $info['motor_details']['chassis_number'] = $data['chassis_number'] ;
    $info['motor_details']['make']  = $data['make'] ;
    $info['motor_details']['model'] = $data['model'];
    $info['motor_details']['year_of_manufacture'] = $data['year_of_manufacture'];
    $info['motor_details']['cubic_capacity'] = $data['cubic_capacity'];
    $info['motor_details']['vehicle_registration'] = $data['vehicle_registration'];
    
    $info['policy_details']['policy_number'] = $data['policy_number'];
    $info['policy_details']['cover_type'] = $cover_types[$data['cover_type_code']];
    $info['policy_details']['branch'] = $branches[$data['branch_code']]['BRANCH_DESC'];
    $info['policy_details']['vehicle_usage'] = $data['vehicle_usage'];
    $info['policy_details']['duration'] = $data['inception_date'] .' - '.$data['expiry_date'];



    include SHARED.'motor-claim-owner-details.php';