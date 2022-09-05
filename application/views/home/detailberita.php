<!--Page Title-->
<section class="page-title" style="background-image:url(assets/images/background/featured-2-bg.jpg);">
    <div class="auto-container">
        <h1>Berita detail</h1>
    </div>

    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('home'); ?>">Home</a></li>
                        <li class="active">Berita detail</li>
                    </ul>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="social-nav clearfix">
                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-flickr"></span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</section>

<!--Sidebar blog Page-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <section class="news-outer">

                    <div class="news-style-two">
                        <div class="inner-box">
                            <figure class="image">
                                <img src="<?= base_url('./assets_admin/img/berita/') . $berita['gambar'];  ?>" alt="" />

                                <div class="date">
                                    <span> <?= date('d F Y', $berita['date_created']); ?></span>
                                </div>

                            </figure>

                            <!--lower-content-->
                            <div class="lower-content">
                                <h3><?= $berita['judul']; ?></h3>

                                <!--post-meta-->
                                <ul class="post-meta">
                                    <li><a href="#"><span class="fa fa-heart-o"></span> 10 Likes</a></li>
                                    <li><a href="#"><span class="fa fa-comments-o"></span> 06 Comments</a></li>
                                </ul>

                                <p><?= $berita['isi_konten']; ?></p>
                                <!--blockquote-->




                            </div>

                        </div>
                    </div>





                </section>


                <!--Con
tent Side-->
