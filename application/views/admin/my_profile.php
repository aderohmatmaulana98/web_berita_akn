<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets_admin/img/Profile/') . $user['image'] ?>" class="card-img-top mt-2" alt="Profil" style="width: 120px; height: 120px; margin: auto;">
                    <div class="card-body" style="margin: auto;">
                        <h5 class="card-title"><?= $user['nama']; ?></h5>
                    </div>
                </div>
                <div class="card ml-2 col-lg-8">
                    <div class="card-body">
                        <div class="mb-2">
                            <h4 class="card-title"><b>DATA USER</b></h4><br>
                        </div>
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?= $user['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <?php if ($user['is_active'] == 1) : ?>
                                    <td>Aktif</td>
                                <?php else : ?>
                                    <td>Tidak Aktif</td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Dibuat Sejak</td>
                                <td>:</td>
                                <td><?= date('d-M-Y', $user['date_created']) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>