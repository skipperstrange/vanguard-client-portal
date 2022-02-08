            <div class="col-lg-12">
                <label for="altered">Vehicle State </label>
            </div>
            <div class="col-lg-12">
                <div class="row">
                <div class="form-group col-lg-2 col-md-2">
                    <input type="radio" name="vehicle[state]" id="" class="purpose-radio-input vehicle-state" value="new" checked>
                    <label for="noclaimyes" class="purpose-radio-label">
                        <span class="label-text">New</span>
                        </label>
                </div>
                
                <div class="col-lg-2 col-md-2">
                    <input type="radio" name="vehicle[state]" id="" class="purpose-radio-input vehicle-state" value="used" >
                    <label for="noclaimno" class="purpose-radio-label">
                        <span class="label-text">Used</span>
                    </label>
                </div>
                </div>
            </div>      

             <div class="form-group col-lg-6 col-md-6">
              <input type="number" id="seats"  name="vehicle[seats]" class="form-control" placeholder="Seat No. *" value="" />
            </div>

          <?php include SHARED. '_vehicle_information.php'?>

            <div class="form-group col-lg-7 col-md-7">
              <input type="text" id="tppd"  name="policy[tppd]" class="form-control" placeholder="Extra TPPD" value="" />
            </div>

            <div class="row p-0">
              <div class="col-lg-8">
            <div class="form-group col-lg-12">
              <input type="text" id="body_type"  name="vehicle[body_type]" class="form-control" placeholder="Body Type *" value="" />
            </div>
            <div class="form-group col-lg-12">
              <div id="body_color" class="input-group  colorpicker-component body_color">
                  <input type="text" name="vehicle[color]" value="" placeholder="Vehicle Color" class="form-control"/>
                  
                  <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                        <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
              </div>
            </div>
              </div>
              <div class="col-lg-4">
                <!-- Vehicle Body type icon to be displayed here -->
              </div>
            </div>
            <!--div class="form-group col-lg-6 col-md-6">
              <input type="text" id="vehicle_reg"  name="vehicle[vehicle_reg]" class="form-control" placeholder="Vehicle Reg *" value="" />
            </!div>
            <div-- class="form-group col-lg-6 col-md-6">
              <input type="text" id="vehicle_reg"  name="vehicle[vehicle_reg]" class="form-control" placeholder="Vehicle Reg *" value="" />
            </div-->
            