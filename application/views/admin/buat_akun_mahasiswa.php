<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div>
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
            <?= $this->session->flashdata('message');  ?>

            <div class="row">
                <div class="card card-primary col card-outline">
                    <div class="card-header row">
                        <div class="col text-white text-right" data-toggle="modal" data-target="#exampleModal">
                            <a href="<?= base_url('admin/add_mahasiswa') ?>" class="btn btn-primary">
                                <i class="fas fa-plus text-white"> </i> Tambah mahasiswa
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Instansi</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($users as $u) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $u['nip']; ?></td>
                                        <td><?= $u['nama']; ?></td>
                                        <td><?= $u['username']; ?></td>
                                        <td><?= $u['email']; ?></td>
                                        <td><?= $u['alamat']; ?></td>
                                        <td><?= $u['instansi']; ?></td>
                                        <td><?= $u['status']; ?></td>
                                        <td><img src="<?= base_url('assets_admin/img/profile/') . $u['image']; ?>" alt="" srcset="" height="50" width="50"></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/hapus_akun_dosen/') . $u['id'] ?>" class="badge badge-danger" onclick="return confirm ('Hapus daftar?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
</div>