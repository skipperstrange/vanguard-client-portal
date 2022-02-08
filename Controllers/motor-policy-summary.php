<?php

include STATIC_DATA.'branches.php';

$proposer = $_POST['proposer'];
$policy = $_POST['policy'];
$vehicle_details = $_POST['vehicle'];
$insurance_history = $_POST['insurance_history'];

$policy['branch_desc'] = $branches[$policy['branch']]['BRANCH_DESC'];



$proposer_details['fullname'] = $motor_proposal['fulname'];
$proposer_details['dob'] = $motor_proposal['dob'];
$proposer_details["$motor_proposal[id_type]"] = $motor_proposal['id_number'];
$proposer_details['occupation'] = $motor_proposal['occupation'];


$proposer_contacts['address']= $motor_proposal['postal_address'];
$proposer_contacts['email']= $motor_proposal['email'];
$proposer_contacts['contact']= $motor_proposal['contact'];
$proposer_policy_options_left['cover_type'] = $policy['cover_type'];
$proposer_policy_options_left['branch'] = $branches[$policy['branch']]['BRANCH_DESC'];
$proposer_policy_options_right['policy_duration'] = $policy['policy_duration']." Months";






