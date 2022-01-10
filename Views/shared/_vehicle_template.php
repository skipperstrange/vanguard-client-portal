<div class="row vehicle" id="vehicle_<?= $count?>">
            <div class="col-lg-12">
                <h5 class="title">
                  <span class="count"></span> Vehicle Details:
                <div class="float-right"><i class="fa fa-times-circle item-remove" onclick="removeItem('vehicle_<?= $count?>', 'vehicle')" title="Remove from list"></i></div>
                </h5>
            </div>
            <div class="col-lg-12 p-0">
              <div class="row">
            <div class="form-group col-lg-6 col-md-6 clear-fix clearfix">
              <input type="text" id=""  name="vehicle[<?= $count?>][vehicle_reg]" class="form-control vehicle_reg" placeholder="Vehicle Reg *" value="" />
            </div>
            </div>
            </div>
            
            <div class="col-lg-12 p-0">
              <div class="row">
            <div class="form-group col-lg-6 col-md-6">
              <input type="text" id=""  name="vehicle[<?= $count?>][vehicle_make]" class="form-control vehicle_make" placeholder="Vehicle Make *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
              <input type="text" id=""  name="vehicle[<?= $count?>][vehicle_model]" class="form-control vehicle_model" placeholder="Model *" value="" />
            </div>

            <div class="form-group col-lg-6 col-md-6">
                <div class="input-group date" id="id_<?= $count ?>">
                    <input type="text" name="vehicle[<?= $count?>][year_of_manufacture]" placeholder="Year Of Manufacture" title="" class="form-control"/>
                    <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
                <div class="input-group date" id="id_<?= $count ?>">
                    <input type="text" name="vehicle[<?= $count?>][year_of_reg]" placeholder="Year Of Registration" title="" class="form-control year_of_reg"/>
                    <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group col-lg-6 col-md-6">
              <input type="number" id=""  name="vehicle[<?= $count?>][chassis_no]" class="form-control chassis_no" placeholder="Chassis Number *" value="" />
            </div>


            <div class="form-group col-lg-6 col-md-6">
              <input type="number" id=""  name="vehicle[<?= $count?>][seats]" class="form-control seats" placeholder="Seat No. *" value="" />
            </div>
            <div class="form-group col-lg-6 col-md-6">
              <input type="text" id="" name="vehicle[<?= $count?>][value]" class="form-control vehicle_reg" placeholder="Cost Of Vehicle *" value="" />
            </div>
            </div>
            </div>


            <div class="col-lg-12 p-0">
            <div class="row">
              <div class="col-lg-8 col-md-6">
            <div class="form-group">
              <input type="text" id=""  name="vehicle[<?= $count?>][body_type]" class="form-control body_type" placeholder="Body Type *" value="" />
            </div>
            <div class="form-group">
              <div id="" class="input-group colorpicker-component body_color">
                  <input type="text" name="vehicle[<?= $count?>][color]" value="gold" class="form-control"/>
                  
                  <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                        <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
              </div>
            </div>
              </div>
              <div class="col-lg-4 col-md-6">
                
                <!-- Vehicle Body type icon with color to be displayed here -->
              </div>
            </div>
          </div>
          <!--div class="form-group col-lg-6 col-md-6">
              <input type="text" id="vehicle_reg"  name="vehicle[<?= $count?>][sum_insured]" class="form-control" placeholder="Sum Insured Inc. Accessories *" value="" />
            </!div>
            <div class="form-group col-lg-6 col-md-6">
              <input type="text" id=""  name="vehicle[<?= $count?>][acc_value]" class="form-control acc_value" placeholder="Value Of Accessories *" value="" />
            </div -->
          <h5 class="title" style="margin-top: 1rem;">
                Vehicle Usage:
          </h5>
          <div class="col-lg-12">
                <div class="row form-group">
                <div class="col-lg-4 col-md-4">
                    <input type="radio" name="vehicle[<?= $count?>][purpose]" id="" class="purpose-radio-input usage" value="private" checked>
                    <label for="private" class="purpose-radio-label">
                        <span class="label-text">Private</span>
                        </label>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <input type="radio" name="vehicle[<?= $count?>][purpose]" id="" class="purpose-radio-input usage" data-target="usage_<?= $count ?>" value="commercial" >
                    <label for="commercial" class="purpose-radio-label">
                        <span class="label-text">Commercial</span>
                    </label>
                </div>
                </div>
            </div>

            <div class="col-lg-12 m-0">
              <div class="row">
                <div class="form-group col-lg-6 col-md-6">
                            <select class="selectpicker form-control usage" data-style="btn-info" name="vehicle[<?= $count?>][usage_type_id]">
                                 <optgroup label="Usage Type">
                                  <option value="1">X1(Private Vehicle(Individual))</option>
                                  <option value="2">X1(Private Vehicle(Company))</option>
                                  <option value="3">Taxi</option>
                                  <option value="4">Hiring Cars</option>
                                  <option value="5">Mini Bus(Up to 22 Seats)</option>
                                  <option value="6">Maxi Bus(Greater Than 22 Seats)</option>
                                  <option value="7">Motor Cycle</option>
                                  <option value="8">Ambulance/Hearse</option>
                                  <option value="9">Own Goods(3000 CC or Below)</option>
                                  <option value="10">Own Goods(Above 3000 CC)</option>
                                  <option value="11">Articulators/Tankers</option>
                                  <option value="12">General Cartage(3000 CC or Below)</option>
                                  <option value="13">General Cartage(Above 3000 CC)</option>
                                  <option value="14">Special Type(On Site)</option>
                                  <option value="15">Special Type(On Road)</option>
                                  <option value="16">Trade Plate(Fitters)</option>
                                  <option value="17">Trade Plate(Garages)</option>
                                  <option value="18">Trade Plate(Clearers)</option>
                              </select>
                        </div>
                </div>
              </div>
  </div>
            
            