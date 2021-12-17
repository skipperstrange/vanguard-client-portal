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
                                    <li class="active">
                                        <a href="<?= WEB_URL ?>" class="nav-link">Home</a>
                                    </li>
                                    <li>
                                        <a href="#about-section" class="nav-link">About</a>
                                    </li>
                                    <li>
                                        <a href="#services-section" class="nav-link">Services</a>
                                    </li>
                                    <li class="has-children">
                                        <a href="#" class="nav-link">Sections</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="#about-section" class="nav-link">About</a></li>
                                            <li><a href="#services-section" class="nav-link">Services</a></li>
                                            <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                            <li><a href="#" class="nav-link">FAQ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End Navigation Container-->
    </div>