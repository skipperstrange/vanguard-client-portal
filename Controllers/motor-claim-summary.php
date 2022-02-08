<?php
$motorclaim = $_POST['proposer'];


$policy_id = $_POST['policy_id'];
$casualty_motor_claim = $_POST['casualty_motor_claim'];
$witness_motor_claim = $_POST['witness_motor_claim'];
$vehicle_information = $_POST['vehicle_information'];

include VIEWS.'motor-claim-summary.php';
