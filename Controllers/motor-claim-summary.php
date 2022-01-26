<?php
$motorclaim = $_POST['motor-claim'];
$date_of_accident = $_POST['accident_detailsdate'];
$policy_id = $_POST['policy_id'];
$witnesses = $_POST['casualty_motor_claim'];
$assets = $_POST['witness_motor_claim'];
include VIEWS.'motor-claim-summary.php';