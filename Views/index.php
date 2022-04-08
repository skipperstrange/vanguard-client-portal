
                    <!-- Intro -->
                    <!--div class="col-lg-6 col-md-4 intro">
                        <h1 class="title">
                            Filing for a claim could never be this easier.
                        </h1>
                        <div class="info">
                            Fill in our step by step form to begin the process.
                        </div>
                        <br>
                        <a href="tel:<?= SUPPORT_CONTACT_1 ?>" class="btn btn-primary action-call">Call for enquiries</a>
                    </div -->
                    <!--/ End Intro -->
                    <!-- Contact Form-->
                    <!--- div class="col-lg-6 col-md-8">
                        <div class="container  form-card card shadow">
                                <br>
                            <h4 class="title" style="text-align: center;">Select a claim type to file for</h4>
                            <br>       
                            <section>
                                    <div class="form-group">
                                    <a id="checkPolicy" href="<?= _link('motor-claim','motor-claim') ?>" class="btn btn-block btn-primary " >
                                            <i class="fa fa-car"></i> Motor Claims
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <a id="checkPolicy" href="<?= _link('fire-claim', 'fire-claim') ?>" class="btn btn-block btn-warning" >
                                            <i class="fa fa-fire"></i> Fire Claims
                                        </a>
                                    </div>
                                </section>
                        </div>
                    </div --->

                    <div class="col-lg-6 col-md-4 intro">
                        <h1 class="title">
                            Proposal and Claims Portal
                        </h1>
                        <div class="info">
                            Get started. Its easy!!
                        </div>
                        <br>
                        <a href="tel:<?= SUPPORT_CONTACT_1 ?>" class="btn btn-primary action-call">Call for enquiries</a>
                    </div>
                    <div class="col-lg-5 col-md-6 offset-md-1">
                        <div class="container  form-card card shadow">
                                <br>
                            <h4 class="title" style="text-align: center;">Choose an action to get started</h4>
                            <br>       
                            <section>
                                    <div class="form-group">
                                    <a id="checkPolicy" href="<?= _link('motor-policy','motor-policy') ?>" class="btn btn-block btn-primary " >
                                            <i class="fa fa-car"></i> New Proposal
                                        </a>
                                    </div>
                                     <div class="form-group">
                                        <a id="checkPolicy" href="<?= _link('motor-claim', 'motor-claim') ?>" class="btn btn-block btn-warning" >
                                            <i class="fa fa-car"></i> New Motor Claim
                                        </a>
                                    </div>
                                    <!--div class="form-group">
                                        <a id="checkPolicy" href="<?= _link('fire-claim', 'fire-claim') ?>" class="btn btn-block btn-warning" >
                                            <i class="fa fa-fire"></i> Fire Claims
                                        </a>
                                    </div-->
                                </section>
                        </div>
                    </div>
                    <?php 
                     $config = config();
                     sendEmail($config['mailer'], '', 'skipperstrange@gmail.com', 'Hi this is a test', "Test Subject");
                    ?>