<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <?= $this->session->flashdata('message');  ?>
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
            <div class="row">
                <div class="card card-primary col card-outline">
                    <div class="card-header row">
                        <div class="col text-left">
                            <!-- Button trigger modal -->
                            <div class="text-right">
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-plus text-white"> </i> Tambah Prodi
                                </a>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Prodi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('admin/add_prodi'); ?>" method="POST">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Fakultas</label>
                                                    <select class="form-control" id="id_fakultas" name="id_fakultas">
                                                        <option value="" disabled selected>--Pilih Fakultas--</option>
                                                        <?php foreach ($fakultas as $f) : ?>
                                                            <option value="<?= $f['id'] ?>"><?= $f['nama_fakultas'] ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_prodi">Nama Prodi</label>
                                                    <input type="text" class="form-control" id="nama_prodi" name="nama_prodi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kode_prodi">Kode Prodi</label>
                                                    <input type="text" class="form-control" id="kode_prodi" name="kode_prodi">
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
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Fakultas</th>
                                    <th>Nama Prodi</th>
                                    <th>Kode Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($prodi as $p) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['nama_fakultas']; ?></td>
                                        <td><?= $p['nama_prodi']; ?></td>
                                        <td><?= $p['kode_prodi']; ?></td>
                                        <td>
                                            <a href="#" class="badge badge-pill badge-success" data-toggle="modal" data-target="#editprodi<?= $p['id_prodi']; ?>"><i class="fas fa-edit"></i>
                                                Edit</a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="editprodi<?= $p['id_prodi']; ?>" tabindex="-1" aria-labelledby="editprodiModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content col-lg-12">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editprodiModalLabel">Ubah
                                                                Prodi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url('admin/ubah_prodi'); ?>" method="POST" enctype="multipart/form-data">



                                                                <div class="form-group">
                                                                    <label for="id_fakultas">Nama Fakultas</label>
                                                                    <select class="form-control" id="id_fakultas" name="id_fakultas">
                                                                        <option value="" disabled selected>--Pilih
                                                                            Fakultas--
                                                                        </option>
                                                                        <?php foreach ($fakultas as $f) : ?>
                                                                            <option <?= ($f['id'] == $p['id_fakultas']) ? 'selected' : '' ?> value="<?= $f['id']; ?>">
                                                                                <?= $f['nama_fakultas'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>

                                                                <div class=" form-group">
                                                                    <label for="nama_prodi" class="form-label">Nama
                                                                        Prodi</label>
                                                                    <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="<?= $p['nama_prodi']; ?>" required>
                                                                </div>
                                                                <div class="form-group" hidden>
                                                                    <label for="nama_prodi" class="form-label">ID</label>
                                                                    <input type="text" class="form-control" id="id" name="id" value="<?= $p['id_prodi']; ?>" hidden required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="kode_prodi" class="form-label">Kode
                                                                        Prodi</label>
                                                                    <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" value="<?= $p['kode_prodi']; ?>" required>

                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url('admin/hapus_prodi/') . $p['id_prodi'] ?>" class="badge badge-pill badge-danger" onclick="return confirm ('Hapus daftar?')"><i class="fas fa-window-close"></i> Delete</a>
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