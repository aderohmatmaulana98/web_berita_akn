<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/featured-2-bg.jpg);">
    <div class="auto-container">
        <h1>Berita</h1>
    </div>

    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('home'); ?>">Home</a></li>
                        <li class="active">Berita</li>
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

<!--Sidebar Artikel Page-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12 ">
                <secti class="news-outer col-12 col-mb-4">
                    <div class="row clearfix">

                        <?php foreach ($berita as $art) : ?>



                        <div class="news-style-two col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img
                                            src="<?= base_url('./assets_admin/img/berita/') . $art['gambar'];  ?>"
                                            width="370px" height="260px"></a>

                                    <div class="date">
                                        <span> <?= date('d F Y', $art['date_created']); ?></span>
                                    </div>

                                </figure>

                                <!--lower-content-->
                                <div class="lower-content">
                                    <h3><a
                                            href="<?php echo base_url('home/detailberita/') . $art['id'] ?>"><?= substr($art['judul'], 0, 20); ?>...</a>
                                    </h3>

                                    <!--post-meta-->
                                    <ul class="post-meta">
                                        <li><a href="#"><span class="fa fa-heart-o"></span> 10 Likes</a></li>
                                        <li><a href="#"><span class="fa fa-comments-o"></span> 06 Comments</a>
                                        </li>
                                    </ul>

                                    <div class="textku">
                                        <p><?= substr($art['isi_konten'], 0, 80); ?>...</p>
                                    </div>
                                    <a class="read-more col-mb-4"
                                        href="<?php echo base_url('home/detailberita/') . $art['id'] ?>">READ
                                        MORE
                                        <span class="fa fa-angle-double-right"></span></a>
                                </div>
                            </div>

                        </div>
                        <?php endforeach; ?>


                    </div>

                    <?= $this->pagination->create_links(); ?>
                </secti
 on>



                <!--Content Side-->