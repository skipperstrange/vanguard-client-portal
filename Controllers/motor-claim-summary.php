<?php
$motorclaim = $_POST;


$printDivId = "motor-policy-wizard-p-5";
$printTitle  = "Motor Claim Summary";
$letter_header_title  = $printTitle;

$view = null;

include VIEWS.'motor-claim-summary.php';
