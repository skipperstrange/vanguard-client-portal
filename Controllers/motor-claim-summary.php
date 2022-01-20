<?php
$motorclaim = $_POST['motor-claim'];
$date_of_accident = $_POST['accident_detailsdate'];
$policy_id = $_POST['policy_id'];
$witnesses = $_POST['casualtyMotorClaim'];
$assets = $_POST['witnessMotorClaim'];
include VIEWS.'motor-claim-summary.php';