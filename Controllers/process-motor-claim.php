<?php

if(check_post_get('p','agreeDeclare', 'agree')){
   $exempted = ['third_party', 'reported', 'loan_or_hire', 'owner_driving'];
   $meta_details = ['owner_driving'];
   $claim_tmp = [];
   $claim = [];
   $tmp_details = [];
   $raw_claim = $_POST;
   $policy_info = $raw_claim['policy_info'];
   
   foreach($raw_claim as $c => $details){
        if($c !== 'agreeDeclare'){
            if(!in_array($c, $exempted) && $c != 'owner_driving'){
                $claim[$c] = $details;
            }else{
                $tmp_details[$c] = $details;
            }
        }
   }

   foreach($tmp_details as $c => $details){
        if(!in_array($c, $meta_details)){
            if($details['option'] == 'no'){
                $claim_tmp[$c] = 'no';    
            }else{
                $claim_tmp[$c] = $details;
            }
        }else{
            switch($c){
                    case "owner_driving":
                        if($details['option'] == 'yes'){
                            $claim_tmp[$c] = 'yes';    
                        }else{
                            $claim_tmp[$c] = $details;
                        }
                    break;
            }
        }
    }

    $data = array_merge($claim,$claim_tmp);

    echo json_response($data, 200);
   
}else{
    echo json_response(['message'=>'Agreement to declaration not acknowleged'], 400);
}