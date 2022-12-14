<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">

    <link rel="shortcut icon" type="image/x-icon" href="<?= PIC.'favicon.png' ?>">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" href="<?= CSS.'bootstrap.min.css'  ?>">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="<?= CSS.'font-awesome.min.css'  ?>">
    <!-- flaticon css -->
    <link rel="stylesheet" href="<?= FONTS.'flaticon.css'  ?>">
    <!-- animate css -->
    <link rel="stylesheet" href="<?= CSS.'animate.css'  ?>">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?= CSS.'owl.carousel.css'  ?>">
    <!-- slick css -->
    <link rel="stylesheet" href="<?= CSS.'slick.css'  ?>">
    <!-- off canvas css -->
    <link rel="stylesheet" href="<?= CSS.'off-canvas.css'  ?>">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="<?= CSS.'magnific-popup.css'  ?>">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="<?= CSS.'rsmenu-main.css'  ?>">
    <!-- spacing css -->
    <link rel="stylesheet" href="<?= CSS.'rs-spacing.css'  ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?= CSS.'style.css'  ?>">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= CSS.'responsive.css'  ?>">
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/627e5e70b0d10b6f3e7210c7/1g2uq1r9f';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-286N0D37WW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-286N0D37WW');
    </script>

</head>
<!-- <body class="defult-home"  onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status=' Interdiction de faire un clic droit ????'; return true;"> -->

<body>


    <!--Preloader area start here-->
    <div id="loader" class="loader">
        <div class="loader-container"></div>
    </div>
    <!--Preloader area End here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header style2">
                <!-- Topbar Area Start -->
                <div class="topbar-area style2">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-11">
                                <ul class="topbar-contact">
                                    <li>
                                        <em class="flaticon-email"></em>
                                        <a href="">infos@devman-goshen.com</a>
                                    </li>
                                    <li>
                                        <em class="flaticon-call"></em>
                                        <a href="tel:+2252721266496"> +225 27 21 26 64 96</a>
                                    </li>
                                    <li>
                                        <em class="flaticon-location"></em>
                                        Abidjan- Marcory, Immeuble SCI Les Merveilles (Mitoyen ?? PLAYCE MARCORY)
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-1 text-right">
                                <div class="toolbar-sl-share">
                                    <ul>
                                        <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                                        <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="">
                                    <a href="index.php">
                                        <img src="<?= PIC.'logo-dark.png' ?>" alt="LOGO DEVMAN & GOSHMEN" width="100%">
                                    </a>
                                </div>
                                <div class="mobile-menu">
                                    <a href="#" class="rs-menu-toggle rs-menu-toggle-close secondary">
                                        <em class="fa fa-bars"></em>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu pr-100 lg-pr-50 md-pr-0" aria-label="">
                                            <ul class="nav-menu">
                                                <li class="<?= ($page == 'index')? 'current-menu-item' : '' ?>">
                                                    <a href="index">Acceuil</a>
                                                </li>
                                                <li class="<?= ($page == 'about')? 'current-menu-item' : '' ?>">
                                                    <a href="about">Nous concernant</a>
                                                </li>
                                                <li class="<?= ($page == 'blog')? 'current-menu-item' : '' ?>">
                                                    <a href="blog">Actualit??s</a>
                                                </li>
                                                <li class="<?= ($page == 'job')? 'current-menu-item' : '' ?>">
                                                    <a href="job">Carri??res</a>
                                                </li>
                                                <li class="<?= ($page == 'contact')? 'current-menu-item' : '' ?>">
                                                    <a href="contact">Contact</a>
                                                </li>
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md" aria-label="">
                <div class="close-btn"><span id="nav-close" class="text-center"><em class="fa fa-close"></em></span></div>
                <div class="canvas-logo">
                    <a href="index.html"><img src="assets/images/logo-dark.png" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                        ???Content here, content here???, making it look like readable English.</p>
                </div>
                <div class="canvas-contact">
                    <h5 class="canvas-contact-title">Contact Info</h5>
                    <ul class="contact">
                        <li><em class="fa fa-globe"></em>Middle Badda, Dhaka, BD</li>
                        <li><em class="fa fa-phone"></em>+123445789</li>
                        <li><em class="fa fa-envelope"></em><a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
                        </li>
                        <li><em class="fa fa-clock-o"></em>10:00 AM - 11:30 PM</li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                        <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </div>
        <!--Full width header End-->

        <!-- menu-item-has-children -->



        <?= $content ?>




        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="index.php"><img src="<?= PIC.'logo-dark.png' ?>" alt="DEVMAN & GOSHEN"></a>
                            </div>
                            <div class="textwidget pb-30">
                                <p>DEVMAN & GOSHEN Consulting est un cabinet d?????tudes, de Conseils,
                                    d'assistances, d'organisation, de suivi, de ressources humaines,
                                    d'infog??rance etc ...</p>
                            </div>
                            <ul class="footer-social md-mb-30">
                                <li>
                                    <a href="#" target="_blank"><span><em class="fa fa-facebook"></em></span></a>
                                </li>
                                <li>
                                    <a href="# " target="_blank"><span><em class="fa fa-linkedin"></em></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                            <h3 class="widget-title" style="color: #be1d2c">Nos activit??s</h3>
                            <ul class="site-map text-center">
                                <li><a href="">Etudes et Gestions de Projets</a></li>
                                <hr class="ligne">
                                <li><a href="">Audit et Conseils</a></li>
                                <hr class="ligne">
                                <li><a href="">Formations diverses</a></li>
                                <hr class="ligne">
                                <li><a href="">Syst??me et Politique Budg??taire</a></li>
                                <hr class="ligne">
                                <li><a href="">Organisation de l'entreprise</a></li>
                                <hr class="ligne">
                                <li><a href="">Repr??sentation et Interm??diation</a></li>
                                <hr class="ligne">
                                <li><a href="">Informatique et Infog??rance</a></li>


                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <ul class="site-map mt-5 pt-3 text-center">

                                <li><a href="">Ressources Humaines et son volet Juridique</a></li>
                                <hr class="ligne">

                                <li><a href="">Assistance Comptable, Fiscale et Sociale</a></li>
                                <hr class="ligne">
                                <li><a href="">Cr??ation, Suivi et Accompagnement des Entreprises</a></li>
                                <hr class="ligne">
                                <li><a href="">??valuation, Valorisation, Fusion et Acquisition de Soci??t??s</a></li>
                                <hr class="ligne">
                                <li><a href="">Recherche de Financement et Lev??e de Fonds</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                            <h3 class="widget-title" style="color: #be1d2c">Contacts</h3>
                            <ul class="address-widget">
                                <li>
                                    <em class="flaticon-location"></em>
                                    <div class="desc"> Abidjan- Marcory, Immeuble SCI Les Merveilles (Mitoyen ??
                                        PLAYCE
                                        MARCORY), Face au nouvel ??changeur Marcory Treichville (Marcory) </div>
                                    01 BP 12255 Abidjan 01
                                </li>
                                <hr>
                                <li>
                                    <em class="flaticon-call"></em>
                                    <div class="desc">
                                        <a href="tel:+2252721266496"> +225 27 21 26 64 96</a>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <em class="flaticon-email"></em>
                                    <div class="desc">
                                        <a href="">infos@devman-goshen.com</a>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <em class="flaticon-clock-1"></em>
                                    <div class="desc">
                                        Heure d'ouverture: 08:00 - 18:00
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-8 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="about.php">Nous concernant</a></li>
                                <li><a href="job.php">Carri??res</a></li>
                                <li><a href="blog.php">Actualit??s</a></li>
                                <li><a href="contact.php">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div class="copyright">
                                <p>&copy; 2022 Tous droits reserv??s. Developp?? par <a
                                        href="https://level-si.com">LEVEL-SI</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- modernizr js -->
        <script src="<?= JS.'modernizr-2.8.3.min.js' ?>"></script>
        <!-- jquery latest version -->
        <script src="<?= JS.'jquery.min.js' ?>"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="<?= JS.'bootstrap.min.js' ?>"></script>
        <!-- Menu js -->
        <script src="<?= JS.'rsmenu-main.js' ?>"></script>
        <!-- op nav js -->
        <script src="<?= JS.'jquery.nav.js' ?>"></script>
        <!-- owl.carousel js -->
        <script src="<?= JS.'owl.carousel.min.js' ?>"></script>
        <!-- wow js -->
        <script src="<?= JS.'wow.min.js' ?>"></script>
        <!-- Skill bar js -->
        <script src="<?= JS.'skill.bars.jquery.js' ?>"></script>
        <script src="<?= JS.'jquery.counterup.js' ?>"></script>
        <!-- counter top js -->
        <script src="<?= JS.'waypoints.min.js' ?>"></script>
        <!-- swiper js -->
        <script src="<?= JS.'swiper.min.js' ?>"></script>
        <!-- particles js -->
        <script src="<?= JS.'particles.min.js' ?>"></script>
        <!-- magnific popup js -->
        <script src="<?= JS.'hquery.magnific-popup.min.js' ?>"></script>
        <!-- plugins js -->
        <script src="<?= JS.'plugins.js' ?>"></script>
        <!-- pointer js -->
        <script src="<?= JS.'pointer.js' ?>"></script>
        <!-- contact form js -->
        <script src="<?= JS.'contact.form.js' ?>"></script>
        <!-- main js -->
        <script src="<?= JS.'main.js' ?>"></script>

        <script src="<?= JS.'script.js' ?>"></script>
</body>

</html>