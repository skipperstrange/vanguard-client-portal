<?php
$policy = $_POST['policy'];

$affirmative = 'yes';

if(isset($_POST['policy']) && is_array($_POST['policy'])){

    $printDivId = "section.current";
    $printTitle  = "Motor Claim Summary";
    $letter_header_title  = $printTitle;
    
    $view = null;
    include SHARED.'_print_buttons.php';
            
    include SHARED.'_letter_header_template.php';

    include CONTROLLERS.'motor-claim-owner-details.php';
}

else{
$third_party_driver_offence = false;

$loan_or_hire = $_POST['loan_or_hire'];
$owner_driving = $_POST['owner_driving'];
$reported = $_POST['reported'];
$accident_details = $_POST['accident_details'];
$driver_details = $owner_driving['driver'];
$casualty_damage = $_POST['casualty_damage'];
$witnesses = $_POST['witness'];
$third_party = $_POST['third_party'];
$uploads = $_POST['upload'];


foreach($uploads as $upload => $files){
    $uploaded[] = format_string($upload)." (".@count($files).")";
}

// = (implode(', ',$up));

if($reported['option'] == $affirmative){
    $back_check['reported'] = $affirmative;   
    $back_check['officer'] = $reported['officer_name'];  
    $back_check['station'] = $reported['officer_station'];  //Was vehicle use ionsented 
}else{
    $back_check['reported'] = $reported['option'];
}

$save['reported'] = $back_check;

if($loan_or_hire['option'] == $affirmative){
    $loan_or_hire_status['status'] = $affirmative;   
    $loan_or_hire_status['unit'] = $loan_or_hire['name_of_company'];  
}
else{
    $loan_or_hire_status['loan_or_hire'] = $loan_or_hire['option'];
}
$vehicle['purpose'] = !empty($owner_driving['purpose_of_vehicle']) ? $owner_driving['purpose_of_vehicle'] : 'N/A';


if($owner_driving['option'] !== $affirmative){
    $driver['fullname'] = $driver_details['fullname'];
    $driver['dob'] = $driver_details['dob'];   
    $driver['license_no'] = $driver_details['driver_license_no'];
    $driver['date_of_issue'] = $driver_details['date_of_license_issue'];
    $driver['occupation'] = $driver_details['driver_occupation'];
    $driver['relationship'] = $driver_details['driver_owner_relationship'];
    $driver['owner_consent'] = $owner_driving['driver']['vehicle_consent']['option'];  //Was vehicle use consented 
   
        $driver_insurance['insurance_company'] = $driver_details['insurance_company'];
        $driver_insurance['policy_id'] = $driver_details['policy_id'];
}else{
    $driver['owner_driving'] = 'yes';
}

if($third_party['option'] == $affirmative){
    foreach($third_party as $third_part => $detail){
        if($third_part == 'motor_offence_details' || $third_part == 'motor_offence'){
        }else{
            if($third_part == 'insurance_company' || $third_part == 'policy_id'){
                $third_party_insurance[$third_part] = $detail;
            }else{
                $third_party_driver[$third_part] = $detail;
            }
        }
    }
    
    $tp_motor_offence['driver_commited_offence'] = $third_party['motor_offence']['option'];

    if($tp_motor_offence['driver_commited_offence']== $affirmative){
        $tp_motor_offence['motor_offence_details'] = $third_party['motor_offence']['details'];
    }
}else{
    $third_party_driver['third_party'] = 'no';
    $third_party['motor_offence_details'] = 'N/A';
    $third_party['motor_offence'] = 'N/A';
    $tp_motor_offence['motor_offence_details'] = 'N/A';
    $third_party_insurance['policy_id'] = 'N/A';
    $third_party_insurance['insurance_company'] = 'N/A';
}

    $accident_details_in_depth['accident_location'] = $accident_details['location'];
    $accident_details_in_depth['date'] = $accident_details['date'];
    $accident_details_in_depth['accident_description'] = $accident_details['accident_description'];
    $accident_details_in_depth['who_caused_it'] = $accident_details['who_caused_it'];
    $accident_details_in_depth['vehicle_damage'] = $accident_details['damage'];




//get driver detailsif driver is no the owner


include VIEWS.'motor-claim-summary.php';
}
