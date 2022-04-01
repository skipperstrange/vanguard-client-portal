<?php

$summary_columns=null;
$summary_columns["purpos_of_vehicle"] = $vehicle;
$summary_columns=null;
include SHARED.'_summary_columns.php';
$summary_columns = null;

$summary_columns["consented_by_owner"] = $consented_by_owner;

$summary_columns=null;
$summary_columns["loan_or_hire"] = $loan_or_hire_status;
$summary_columns["police_report"] = $back_check;
include SHARED.'_summary_columns.php';
$summary_columns = null;


$summary_columns['driver'] = $driver;
if($driver_has_own_vehicle == true){
    $summary_columns['driver insurer_details'] = $driver_insurance;;
}
include SHARED.'_summary_columns.php';

$summary_columns = null;
$summary_columns['third_party'] = $third_party_driver;

$summary_columns['third_party_offences'] = $tp_motor_offence;
include SHARED.'_summary_columns.php';
$summary_columns = null;


$summary_columns['accident_details'] = $accident_details_in_depth;
include SHARED.'_summary_columns.php';
$summary_columns = null;


$data_title = 'casualties_and_damages';
$data = $casualty_damage;
$controlId = 'casualties_table';
include SHARED.'_summary_rows.php';



$data_title = 'witnesses';
$data = $witnesses;
$controlId = 'witnesses_table';
include SHARED.'_summary_rows.php';




