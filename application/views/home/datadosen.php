<!--Page Title-->

<section class="page-title1" style="background-image:url(assets/images/background/featured-2-bg.jpg);">
    <div class="auto-container">
        <h1>Dosen Kriya</h1>
    </div>

    <!--page-info-->
    <div class="page-info1">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('home'); ?>">Home > Dosen Kriya</a></li>
                        <li class="active">Dosen</li>
                    </ul>
                </div>

            </div>
        </div>

</section>

<section class="call-to-action-three" style="background-image:url(assets/images/background/3.jpg);">

    <div class="container">
        <div data-aos="fade-right">
            <div class="row clearfix">
                <div class="card-body">
                    <div class="panel panel-warning shadow">
                        <div class="panel-heading">Data Dosen</div>
                        <div class="panel-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>NIP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Instansi</th>
                                        <th>Jabatan</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data_dosen as $dd) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><img src="<?= base_url('assets_admin/img/profile/') . $dd['image']; ?>" alt="" width="100" height="100"></td>
                                            <td><?= $dd['nip']; ?></td>
                                            <td><?= $dd['nama']; ?></td>
                                            <td><?= $dd['instansi']; ?></td>
                                            <td><?= $dd['jabatan']; ?></td>
                                            <td><?= $dd['alamat']; ?></td>
                                        </tr>
                                        <?php $i++;  ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Map Section-->
<section class="map-section">
    <div class="map-outer">

        <!--Map Canvas-->
        <div class="map-canvas" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4964673133286!2d110.35969181372684!3d-7.842992394348865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a564ea4260f97%3A0x89a93db937c4021a!2sAkademi%20Komunitas%20Negeri%20Seni%20Dan%20Budaya%20Yogyakarta!5e0!3m2!1sid!2sid!4v1646893580583!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


    </div>
</section>

</div>
</div>
</div>