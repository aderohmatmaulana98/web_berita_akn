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
                            <a href="#" class="btn btn-primary">
                                <i class="fas fa-plus text-white"> </i> Tambah dosen/instruktur
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah dosen/instruktur</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/add_akun_dosen'); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="nip">NIP</label>
                                                <input type="text" class="form-control" id="nip" name="nip" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="role">Role</label>
                                                <select class="form-control" id="role" name="role" required>
                                                    <option value="">Pilih Role</option>
                                                    <option value="2">Dosen</option>
                                                    <option value="3">Instruktur</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="instansi">Instansi</label>
                                                <input type="text" class="form-control" id="instansi" name="instansi" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status" required>
                                                    <option value="">Pilih Status</option>
                                                    <option value="Y">Aktif</option>
                                                    <option value="T">Tidak Aktif</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Instansi</th>
                                    <th>Jabatan</th>
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
                                        <td><?= $u['jabatan']; ?></td>
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