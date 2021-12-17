            <section class="row">
            <div class="form-group col-lg-6 col-md-6">
                <div class="input-group date" id="id_0">
                    <input type="text" name="claim[date]" placeholder="Incident Date" title="" class="form-control" required/>
                    <div class="input-group-addon input-group-append">
                        <div class="input-group-text">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <input type="text" id="location" required name="claim[location]" class="form-control" placeholder="Location *" value="" />
            </div>
            <div class="form-group col-lg-12">
                <input type="text" id="" required name="claim[cause]" class="form-control" placeholder="Cause of incident *" value="" />
            </div>
            <div class="form-group col-md-12">
                <textarea textarea name="claim[incident_description]" title="What happened?" class="form-control" placeholder="Incident Description *" style="width: 100%; height: 150px;"></textarea>
            </div>
            </section>