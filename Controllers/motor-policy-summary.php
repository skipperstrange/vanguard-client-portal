<?php

$motor_proposal = $_POST['motor_policy'];
$vehicle_details = $_POST['vehicle'];

$proposer_details['fullname'] = $motor_proposal['fulname'];
$proposer_details['dob'] = $motor_proposal['dob'];
$proposer_details["$motor_proposal[id_type]"] = $motor_proposal['id_number'];
$proposer_details['occupation'] = $motor_proposal['occupation'];


$proposer_contacts['address']= $motor_proposal['postal_address'];
$proposer_contacts['email']= $motor_proposal['email'];
$proposer_contacts['contact']= $motor_proposal['contact'];
$proposer_policy_options_left['cover_type'] = $motor_proposal['cover_type'];
$proposer_policy_options_right['policy_duration'] = $motor_proposal['policy_duration']." Months";

$insurance_history = $motor_proposal['insurance_history'];





