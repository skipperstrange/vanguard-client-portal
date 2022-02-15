<?php

include STATIC_DATA.'branches.php';
include STATIC_DATA.'cover_types.php';
include STATIC_DATA.'vehicle_usage.php';
include STATIC_DATA.'currencies.php';

$proposer = $_POST['proposer'];
$policy = $_POST['policy'];
$policy['currency_code'] = $policy['currency'];
$policy['currency'] = $currencies[$policy['currency_code']]['name'];
print_r($policy);
$policy['currency_symbol'] = $currencies[$policy['currency_code']]['symbol'];
$vehicle_usage_details = $_POST['vehicle_usage'];
$vehicle_usage_details['useage'] = $vehicle_usage[$vehicle_usage_details['purpose']][$vehicle_usage_details['useage_type_id']];

$vuseage['purpose'] = $vehicle_usage_details['purpose'];
$vuseage['Type'] = $vehicle_usage_details['useage'];
$vuseage['has vehicle been altered?'] = $vehicle_usage_details['altered'];
$vuseage['has driver been defected'] = $vehicle_usage_details['driver_defect'];
$vuseage['has driver commited motor offence'] = $vehicle_usage_details['motor_offence'];
$vuseage['has driver faced prosecution'] = $vehicle_usage_details['prosecution'];


$vehicle_details = $_POST['vehicle'];
$insurance_history = $_POST['insurance_history'];
$policy['branch'] = ucfirst(strtolower($branches[$policy['branch_id']]['BRANCH_DESC']));


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


$proposer_policy_options_left['cover_type'] = ucfirst(strtolower($cover_types[$policy['cover_type']]));
$proposer_policy_options_left['branch'] = $policy['branch'];
$proposer_policy_options_left['currency'] = $policy['currency']." ($policy[currency_symbol])";
$proposer_policy_options_left['third_party_property_damage'] = $policy["tppd"];
$proposer_policy_options_right['policy_duration'] = $policy['policy_duration']." Months";
$proposer_policy_options_right['start'] = $policy['start'];






