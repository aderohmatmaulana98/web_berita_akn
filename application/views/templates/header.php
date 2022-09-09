<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Akademik Komunitas Negeri Seni Dan Budaya Yogyakarta</title>
    <!-- Stylesheets -->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/revolution-slider.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!--Favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/images/akn/logo_akn_tulisan_putih.png') ?>"
        type="<?= base_url('assets/images/akn/logo_akn_tulisan_putih.png') ?>">
    <link rel="icon" href="<?= base_url('assets/images/akn/logo_akn_tulisan_putih.png') ?>"
        type="<?= base_url('assets/image/x-icon') ?>">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="<?= base_url('assets/css/responsive.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <link rel="stylesheet"
        href="<?= base_url('assets_admin/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url('assets_admin/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url('assets_admin/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body>
    <div class="page-wrapper">



        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="cssload-container">
                    <div class="cssload-speeding-wheel"></div>
                </div>
            </div>
        </div>

        <!-- Main Header-->
        <header class="main-header header-style-two">
            <!-- Header Top -->
            <div class="header-top">

            </div>
            <!-- Header Top End -->

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-outer">
                            <div class="logo"><a href="index.html"><img src="<?= base_url('assets/images/logo.png') ?>"
                                        width="200px" height="60px" alt="AKN" title="AKN"></a></div>
                        </div>

                        <div class="pull-right upper-right clearfix">

                            <div class="nav-outer clearfix">
                                <!-- Main Menu -->
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <!-- <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage Style One</a></li>
                                        <li><a href="index-2.html">Homepage Style Two</a></li>
                                        <li><a href="index-3.html">Homepage Style Three</a></li>
                                    </ul>
                                </li> -->
                                            <li><a href="<?= base_url('home'); ?>">Beranda</a></li>
                                            <li><a href="https://pmb.aknyogya.ac.id/">PMB</a></li>

                                            <li class="dropdown"><a href="#">Profile</a>
                                                <ul>
                                                    <li><a href="<?= base_url('home/profile'); ?>">Profile</a></li>
                                                    <li><a href="<?= base_url('home/visimisi'); ?>">Visi Misi</a></li>
                                                    <li><a href="<?= base_url('home/sejarah'); ?>">Sejarah</a></li>
                                                    <li><a href="<?= base_url('home/fasilitas'); ?>">Fasilitas</a></li>
                                                    <li><a href="<?= base_url('home/komisisenat'); ?>">Komisi Senat</a>
                                                    </li>
                                                    <li><a href="<?= base_url('home/organisasi'); ?>">Struktur
                                                            Organisasi</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Program Studi</a>
                                                <ul>
                                                    <li><a href="<?= base_url('home/tari'); ?>">Prodi Seni Tari</a></li>
                                                    <li><a href="<?= base_url('home/karawitan'); ?>">Prodi Seni
                                                            Karawitan</a></li>
                                                    <li><a href="#">Prodi Seni Kriya</a>
                                                        <ul>
                                                            <li><a href="<?= base_url('home/kriya'); ?>">Profile Prodi
                                                                    Kriya</a></li>
                                                            <li><a
                                                                    href="<?= base_url('home/mahasiswa_kriya'); ?>">Mahasiswa</a>
                                                            </li>
                                                            <li><a href="<?= base_url('home/dosen_kriya'); ?>">Dosen</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?= base_url('home/galeri_kriya'); ?>">Galeri</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="<?= base_url('home/kontak'); ?>">Hubungi Kami</a>

                                            </li>
                                            <li><a href="contact.html">Download</a></li>

                                        </ul>
                                    </div>

                                </nav><!-- Main Menu End-->

                                <!--Quote Button-->
                                <!-- <div class="btn-outer"><a href="contact.html" class="theme-btn quote-btn btn-style-four"><span class="fa fa-mail-reply-all"></span> Get a Quote</a></div> -->

                                <div class="btn-outer">
                                    <div class="search-box">
                                        <input type="text" placeholder="Mau cari apa?">
                                        <div class="search-icon">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <div class="cancel-icon">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <div class="search-data">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img
                                src="<?= base_url('assets/images/logo-small.png') ?>" width="200px" height="50px"
                                alt="Brighton" title="Brighton"></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="<?= base_url('home'); ?>">Beranda</a></li>
                                    <li><a href="https://pmb.aknyogya.ac.id/">PMB</a></li>

                                    <li class="dropdown"><a href="#">Profile</a>
                                        <ul>
                                            <li><a href="<?= base_url('home/profile'); ?>">Profile</a></li>
                                            <li><a href="<?= base_url('home/visimisi'); ?>">Visi Misi</a></li>
                                            <li><a href="<?= base_url('home/sejarah'); ?>">Sejarah</a></li>
                                            <li><a href="<?= base_url('home/fasilitas'); ?>">Fasilitas</a></li>
                                            <li><a href="<?= base_url('home/komisisenat'); ?>">Komisi Senat</a></li>
                                            <li><a href="<?= base_url('home/organisasi'); ?>">Struktur Organisasi</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Program Studi</a>
                                        <ul>
                                            <li><a href="<?= base_url('home/tari'); ?>">Prodi Seni Tari</a></li>
                                            <li><a href="<?= base_url('home/karawitan'); ?>">Prodi Seni
                                                    Karawitan</a></li>
                                            <li><a href="#">Prodi Seni Kriya</a>
                                                <ul>
                                                    <li><a href="<?= base_url('home/kriya'); ?>">Profile Prodi
                                                            Kriya</a></li>
                                                    <li><a href="<?= base_url('home/mahasiswa_kriya'); ?>">Mahasiswa</a>
                                                    </li>
                                                    <li><a href="<?= base_url('home/dosen_kriya'); ?>">Dosen</a>
                                                    </li>
                                                    <li><a href="<?= base_url('home/galeri_kriya'); ?>">Galeri</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('home/kontak'); ?>">Hubungi Kami</a>


                                    </li>
                                    <li><a href="contact.html">Download</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!--End Main Header -->