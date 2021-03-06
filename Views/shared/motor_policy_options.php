<?php
    include_once STATIC_DATA.'branches.php';
    include_once STATIC_DATA.'currencies.php';
?>
            <div class="form-group col-lg-6 col-md-6">
                <select class="form-control"  name="policy[branch_id]" id="branches">
                    <option value="">Select Preferred Branch</option>
                   <?php
                    foreach($branches as $branch){
                        ?>
                        <option value="<?=$branch['BRANCH_CODE']?>"><?= ucwords(strtolower($branch['BRANCH_DESC']))?></option>
                        <?php
                    }
                   ?>
                </select>
            </div>


            <div class="form-group col-lg-6 col-md-6">
              <input type="text" id="tppd" name="policy[tppd]" class="form-control" placeholder="Extra TPPD ( default 0)" value="" />
            </div>

            <!-- Duration -->
            <div class="form-group col-lg-6 col-md-6">
                <select required class="form-control"  name="policy[policy_duration]">
                        <option value="">Policy Duration *</option>
                        <option value="1">1 Month</option>
                        <option value="3">3 Months</option>
                        <option value="6">6 Months</option> 
                        <option value="12">12 Months</option> 
                </select>
            </div>

            <!-- Start date -->
            <div class="form-group col-lg-6 col-md-6">
                <div class="" >
                    <input type="text" required name="policy[start]" title="Date expected to start your insurance cover" placeholder="Date of commence *" title="Start date"  class="form-control date-duration-start"/>
                </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
                <div class="" >
                    <?php include "_motor_vehicle_value.php"; ?>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12"><label for="cover_type">Currency *</label></div>
                </div>
                <div class="row form-group">
                    <?php
                    $grid = 9;
                    $each_column = $grid/count($currencies);
                    foreach($currencies as $currency_code => $currency){
                        ?>
                            <div class="col-lg-<?= $each_column ?> col-md-<?= $each_column ?>">
                                <input type="radio" name="policy[currency]" id="currency<?= $currency['name'] ?>" class="purpose-radio-input" value="<?= $currency_code ?>" <?php if($currency_code == 0) echo "checked"; ?>>
                                <label for="<?= strtolower($currency['name']) ?>" class="purpose-radio-label">
                                    <span class="label-text"><?= ucfirst(strtolower($currency['name'])) ?> (<?= $currency['currency_code']?>)</span>
                                    </label>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <span id="agent-broker" style="width:100%">
            
            </span>

