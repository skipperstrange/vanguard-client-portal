<?php
include_once STATIC_DATA.'nav.php';
$home_link = WEB_URL;
$lookAway = false;
if(($controller == 'index') && ($view == 'index')){
    $home_link = CLIENT_WEBSITE;
    $lookAway = true;
}
?>

<div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <!-- .site-mobile-menu -->
    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-7">
                        <div class="d-flex mr-auto">
                            <a href="#" class="d-flex align-items-center mr-4">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block"><?= SUPPORT_EMAIL ?></span>
                            </a>
                            <a href="#" class="d-flex align-items-center mr-auto">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block"><?= SUPPORT_CONTACT_1 ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-5 text-right">
                        <div class="mr-auto">
                            <a href="<?= TWITTER ?>" target="_blank" class="p-2 pl-0"><span class="icon-twitter"></span
                ></a>
                            <a href="<?= FACEBOOK ?>" target="_blank" class="p-2 pl-0"><span class="icon-facebook"></span
                ></a>
                            <a href="<?= LINKEDIN ?>" target="_blank" class="p-2 pl-0"><span class="icon-linkedin"></span
                ></a>
                            <a href="<?= INSTAGRAM ?>" target="_blank" class="p-2 pl-0"><span class="icon-instagram"></span
                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-2 brand" style="overflow-wrap: float-left;">
                        <div class="my-0 site-logo" >
                            <a href="<?= $home_link ?>" -->
                            <span style="display: flex; align-items: center; justify-content: default;">
                                <div>
                                    <img src="<?= IMAGES_URL ?>logo-mini.png" style="width:64px; margin-top:0px;" />
                                </div>
                                <h1 style="color:#2c2a78; font-family:Webnar; font-size:1em;line-height: .8;">
                                    <?= CLIENT_NAME ?>
                                    <div style="font-family:arial; font-size :0.5em; font-weight:900; color:var(--grey1); margin-top:8px;">COMPANY LIMITED</div>
                                </h1>
                                </span>
                            </a>
                        </div>
                        
                                
                        <span class="slogan"><?= SLOGAN ?></span>
                    </div>
                    <div class="col-6 offset-4">
                    <?php if($lookAway == false){ ?>

                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span ></a>
                                </div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    
                                <?php 
                                    echo generateNavigation($navLinks); 
                                ?>
                               </ul>
                            </div>
                        </nav>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End Navigation Container-->
    </div>
   
