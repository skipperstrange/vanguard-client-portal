<?php

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
    
    $proposer_details_left['type'] = $policy['proposer_type'];
    $proposer_details_left[$policy['proposer_type']] = $proposer['proposer_type_name'];
    
    $proposer_details_right['email'] = $proposer['proposer_type_email'];
    
    
    
    $insurer_details['fullname'] = $proposer['fullname'];
    $insurer_details['dob'] = $proposer['dob'];
    $insurer_details["$proposer[id_type]"] = $proposer['id_number'];
    $insurer_details['occupation'] = $proposer['occupation'];
    $insurer_details['proposer_type'] = $policy['proposer_type'];
    
    
    $proposer_contacts['address']= $proposer['postal_address'];
    $proposer_contacts['contact']= $proposer['contact'];
    $proposer_contacts['digital_address']= $proposer['digital_address'];
    $proposer_contacts['email']= $proposer['email'];
    
    
    $proposer_policy_options_left['cover_type'] = $policy['cover_type_desc'];
    $proposer_policy_options_left['branch'] = $policy['branch'];
    $proposer_policy_options_left['currency'] = $policy['currency']." ($policy[currency_symbol])";
    $proposer_policy_options_left['third_party_property_damage'] = $policy["tppd"];
    $proposer_policy_options_right['policy_duration'] = $policy['policy_duration']." Months";
    $proposer_policy_options_right['start'] = $policy['start'];

    
