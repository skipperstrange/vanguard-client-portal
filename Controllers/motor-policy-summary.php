<?php

include STATIC_DATA.'branches.php';
include STATIC_DATA.'cover_types.php';

$proposer = $_POST['proposer'];
$policy = $_POST['policy'];
$vehicle_usage = $_POST['vehicle_usage'];

$vehicle_details = $_POST['vehicle'];
$insurance_history = $_POST['insurance_history'];
$policy['branch'] = ucfirst(strtolower($branches[$policy['branch_id']]['BRANCH_DESC']));



$proposer_details['fullname'] = $proposer['fullname'];
$proposer_details['dob'] = $proposer['dob'];
$proposer_details["$proposer[id_type]"] = $proposer['id_number'];
$proposer_details['occupation'] = $proposer['occupation'];
$proposer_details['proposer_type'] = $proposer['proposer_type'];


$proposer_contacts['address']= $proposer['postal_address'];
$proposer_contacts['contact']= $proposer['contact'];
$proposer_contacts['digital_address']= $proposer['digital_address'];
$proposer_contacts['email']= $proposer['email'];


$proposer_policy_options_left['cover_type'] = ucfirst(strtolower($cover_types[$policy['cover_type']]));
$proposer_policy_options_left['branch'] = $policy['branch'];
$proposer_policy_options_right['policy_duration'] = $policy['policy_duration']." Months";
$proposer_policy_options_right['start'] = $policy['start'];






