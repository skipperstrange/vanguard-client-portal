<?php
$navLinks = [
    'home'=>['href'=>  WEB_URL],
    'about' => ['href'=>_link('about','about')],
    'claims' =>['href' => [ 
            'new fire claim' => ['href' => _link('fire-claim','fire-claim')],
           'new motor claim' => ['href' => _link('motor-claim','motor-claim')],
            'FAQ' => ['href'=> '#']
        ],
    ],
    'proposals' =>['href' => [ 
            'new motor policy' => ['href' => _link('motor-policy','motor-policy')],
            'FAQ' => ['href'=> '#']
        ],
    ]
];
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
                            <a href="<?= TWITTER ?>" class="p-2 pl-0"><span class="icon-twitter"></span
                ></a>
                            <a href="<?= FACEBOOK ?>" class="p-2 pl-0"><span class="icon-facebook"></span
                ></a>
                            <a href="<?= LINKEDIN ?>" class="p-2 pl-0"><span class="icon-linkedin"></span
                ></a>
                            <a href="<?= INSTAGRAM ?>" class="p-2 pl-0"><span class="icon-instagram"></span
                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 brand">
                        <h1 class="my-0 site-logo"><a href="<?= WEBSITE ?>"><?= CLIENT_NAME ?></a></h1>
                        <span class="slogan"><?= SLOGAN ?></span>
                    </div>
                    <div class="col-6">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span
                    ></a>
                                </div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    
                                <?php 
                                    echo generateNavigation($navLinks);
                                ?>
                               </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End Navigation Container-->
    </div>
   
