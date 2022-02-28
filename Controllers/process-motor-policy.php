<?php

if(check_post_get('p','agreeDeclare', 'agree')){
    include STATIC_DATA.'branches.php';
    include STATIC_DATA.'cover_types.php';
    include STATIC_DATA.'vehicle_usage.php';
    include STATIC_DATA.'currencies.php';

    $proposer = post_get('p','proposer');

    $policy = post_get('p','policy');

    $v_usage = post_get('p', 'vehicle_usage');

    $vehicle_details = post_get('p','vehicle');

    $insurance_history = post_get('p','insurance_history');

    $proposer['occupation'] =  (empty($proposer['occupation'])) ? "N/A" : $proposer['occupation'];

    $policy['currency_code'] = $policy['currency'];
    $policy['currency'] = $currencies[$policy['currency_code']]['name'];
    $policy['currency_symbol'] = $currencies[$policy['currency_code']]['symbol'];
    $policy['tppd'] =  (empty($policy['tppd'])) ? "0" : $policy['tppd'];
    $policy['cover_type_desc'] = ucfirst(strtolower($cover_types[$policy['cover_type']]));
    $policy['branch'] = (empty( $policy['branch_id'] )) ? "N/A" : ucfirst(strtolower($branches[$policy['branch_id']]['BRANCH_DESC']));

    $vehicle_details['chassis_no'] = strtoupper($vehicle_details['chassis_no']);

    $insurance_history['accident_history'] =  (empty($insurance_history['accident_history'])) ? "N/A" : $insurance_history['accident_history'];
    

    $vusage['purpose'] = $v_usage['purpose'];
    $vusage['type'] = $vehicle_usage[$v_usage['purpose']][$v_usage['useage_type_id']];
    $vusage['has vehicle been altered?'] = $v_usage['altered'];
    $vusage['has driver been defected'] = $v_usage['driver_defect'];
    $vusage['has driver commited motor offence'] = $v_usage['motor_offence'];
    $vusage['has driver faced prosecution'] = $v_usage['prosecution'];

    $data['proposer'] = $proposer;
    $data['policy'] = $policy;
    $data['vehicle_usage'] = $vusage;
    $data['vehicle'] = $vehicle_details;
    $data['insurance_history'] = $insurance_history;

    //Send emails out
        
            //if($mail->send()){
                echo json_response($data);
            //}

}else{
    echo json_response(['message'=>'Agreement to declaration not acknowleged'], 400);
}