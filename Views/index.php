
        <?php
            include STATIC_DATA.'products.php';
            $btnClasses = ['info', 'warning'];
            $offsets = [1=>4,2=>2,3=>0];
            if(count($products) >= 3){
                $offset = 0;
             }else{
                $offset = $offsets[count($products)];
             }
        ?>
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
                            <h4 class="title" style="text-align: center;"></h4>
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

                    <div class=" col-md-12 intro" style="text-align:center;">
                        <h1 class="title">
                            Online Claims & Proposals Forms
                        </h1>
                    <div class="intro col-md-12"  style="margin-top: 0px;">Choose an action to get started</div>

                    </div>
 

                    <?php  foreach ($products as $product => $poperties):
                       $i = 0;
                      
                        ?>
                    <div class="col-lg-4 col-sm-6 col-xs-12 <?php if(($i==0) && count($products) < 0): echo "offset-md-$offset offset-sm-<?= $offset-1"; endif; ?>">
                        <div class="container  form-card card shadow" style="text-align: center;">
                            <h2 class="title"><?= generateIcons($products[$product]['icon']) ?></h1>
                            <div class="info" style="text-align: center; font-size:80%; margin-bottom:1rem;">
                            <b><?= format_string($product) ?></b>
                            <p>
                                <?= $products[$product]['description'];?>
                            </p>
                        </div>
                            
                            <section>
                                <?php  foreach($products[$product]['products'] as $property => $details): 
                                    ?>
                                    <div class="form-group">
                                    <a id="checkPolicy" href="<?= _link($details['controller'], $details['view']) ?>" <?php if($details['enabled'] = false): echo 'disabled'; endif;?>class="btn btn-block btn-<?= $btnClasses[$i%count($btnClasses)] ?>" >
                                        <?= $details['label']; ?>
                                    </a>
                                </div>
                                <?php 
                                $i++; endforeach; ?>
                            </section>
                        </div>
                    </div>

            <?php
            endforeach;
            ?>
                    