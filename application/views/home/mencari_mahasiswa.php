<!--Page Title-->

<section class="page-title1">
    <div class="auto-container">
        <h1>Mencari Mahasiswa Kriya</h1>
    </div>

    <!--page-info-->
    <div class="page-info1">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('home'); ?>">Home > Mahasiswa Kriya</a></li>
                        <li class="active">Mahasiswa </li>
                    </ul>
                </div>

            </div>
        </div>

</section>

<section class="call-to-action-three" style="background-image:url(assets/images/background/3.jpg);">

    <div class="auto-container">
        <div data-aos="fade-right">
            <div class="row clearfix">
                <div>
                    <?= $this->session->flashdata('message');  ?>
                    <form action="<?= base_url('home/mencari_mahasiswa1') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nim">Nama/NIM Mahasiswa</label>
                            <input type="number" class="form-control" id="nim" name="nim" placeholder="NIM Mahasiswa">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Cari</button>
                    </form>
                    <div style="margin-top: 40px;">

                        <?php if ($users['nip'] != NULL) : ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">Data Mahasiswa</div>
                                <div class="panel-body">
                                    <table class="table table-bordered text-left">
                                        <tbody>
                                            <tr>
                                                <th style="width: 30%;">Nomor Induk Mahasiswa</th>
                                                <td style="width: 0;">:</td>
                                                <td><?= $users['nip']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 30%;">Nama Mahasiswa</th>
                                                <td style="width: 0;">:</td>
                                                <td><?= $users['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 30%;">Email</th>
                                                <td style="width: 0;">:</td>
                                                <td><?= $users['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 30%;">Instansi</th>
                                                <td style="width: 0;">:</td>
                                                <td><?= $users['instansi']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 30%;">Status</th>
                                                <td style="width: 0;">:</td>
                                                <?php if ($users['status'] == 'Y') : ?>
                                                    <td>Aktif</td>
                                                <?php else : ?>
                                                    <td>Tidak Aktif</td>
                                                <?php endif; ?>
                                            </tr>
                                            <tr>
                                                <th style="width: 30%;">Alamat</th>
                                                <td style="width: 0;">:</td>
                                                <td><?= $users['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width: 30%;">Foto</th>
                                                <td style="width: 0;">:</td>
                                                <td><img src="<?= base_url("assets_admin/img/profile/") . $users['image']; ?>" alt="" height="100" width="100"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php endif; ?>
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