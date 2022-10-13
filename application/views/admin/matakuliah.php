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
                                <i class="fas fa-plus text-white"> </i> Tambah matakuliah
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah matakuliah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/add_matkul'); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="kode_matkul">Kode Matakuliah</label>
                                                <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_matkul">Nama Matakuliah</label>
                                                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="sks">SKS</label>
                                                <input type="number" class="form-control" id="sks" name="sks" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                                <select class="form-control" id="tahun_ajaran" name="tahun_ajaran" required>
                                                    <option value="" selected disabled>Pilih Tahun Ajaran</option>
                                                    <?php foreach ($tahun_ajaran as $ta) : ?>
                                                        <option value="<?= $ta['id'] ?>"><?= $ta['tahun_ajaran'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
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
                                    <th>Kode Matakuliah</th>
                                    <th>Nama Matakuliah</th>
                                    <th>SKS</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($matakuliah as $m) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $m['kode_matkul']; ?></td>
                                        <td><?= $m['nama_matkul']; ?></td>
                                        <td><?= $m['sks']; ?></td>
                                        <td><?= $m['tahun_ajaran']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/hapus_akun_dosen/') . $m['id'] ?>" class="badge badge-danger" onclick="return confirm ('Hapus daftar?')">Hapus</a>
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