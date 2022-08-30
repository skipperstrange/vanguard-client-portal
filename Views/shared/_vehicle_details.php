            <div class="col-lg-12">
                <label for="altered">Vehicle State </label>
            </div>
            
                <div class="form-group col-lg-2 col-md-4 col-sm-4">
                    <input type="radio" name="vehicle[state]" id="" class="purpose-radio-input vehicle-state" value="new" checked>
                    <label for="noclaimyes" class="purpose-radio-label">
                        <span class="label-text">New</span>
                      </label>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <input type="radio" name="vehicle[state]" id="" class="purpose-radio-input vehicle-state" value="used" >
                    <label for="noclaimno" class="purpose-radio-label">
                        <span class="label-text">Used</span>
                    </label>
                </div>
                    
                <div class="form-group col-lg-10 col-md-8 col-sm-8">
                  <!-- Space after Vehicle state radio buttons-->
                </div>

             <div class="form-group col-lg-6 col-md-6">
              <input type="number" id="seats" required name="vehicle[seats]" class="form-control" placeholder="Seat No. *" value="" />
            </div>

          <?php include SHARED. '_vehicle_information.php'?>
          <div class="form-group col-lg-6 col-md-0">
                <!-- space down after chassis number -->
          </div>

          <div class="form-group col-lg-6 col-md-6">
            <input type="text" id="body_type"  name="vehicle[body_type]" class="form-control" placeholder="Body Type *" value="" />
          </div>
         
          <div class="form-group col-lg-6 col-md-6">
              <div id="body_color" class="input-group  colorpicker-component body_color">
                  <input type="text" name="vehicle[color]" value="" placeholder="Vehicle Color" class="form-control"/>
                  
                  <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                        <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
              </div>
          </div>

          <div class="col-lg-12">
                <p><b>Please provide images of the vehicle</b></p>
            </div>
          <?php 
                $upload_type = 'proposals';
                $upload_sub_type = 'motor';
               
                include STATIC_DATA."upload_requirements.php";
                include SHARED.'_requirements_upload.php'; 
          ?>
            
            