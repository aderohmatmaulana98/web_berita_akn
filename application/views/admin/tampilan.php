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
                        <div class="col text-white text-right">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tampilanModal">
                                <i class="fas fa-plus text-white"> </i> Tambah Tampilan
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="tampilanModal" tabindex="-1" aria-labelledby="tampilanModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tampilanModalLabel">Tambah Tampilan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/add_tampilan') ?>" method="POST">
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" id="judul" name="judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="judul">Link</label>
                                                <input type="text" class="form-control" id="link" name="link">
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" class="form-control" id="gambar" name="gambar">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
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
                                    <th>Judul</th>
                                    <th>Link</th>
                                    <th>Gambar</th>
                                    <th>Update Create</th>
                                    <th>Date Create</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tampilan as $tp) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $tp['judul'] ?></td>
                                    <td><?= $tp['link'] ?></td>
                                    <td><?= $tp['gambar'] ?></td>
                                    <td><?= $tp['update_created'] ?></td>
                                    <td><?= $tp['date_created'] ?></td>
                                    <td>
                                        <a href="#" class="badge badge-pill badge-success" data-toggle="modal"
                                            data-target="#edittampilan<?= $tp['id']; ?>"><i class="fas fa-edit"></i>
                                            Edit</a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="edittampilan<?= $tp['id']; ?>" tabindex="-1"
                                            aria-labelledby="edittampilanModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content col-lg-12">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="edittampilanModalLabel">Ubah
                                                            Tampilan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= base_url('admin/ubah_tampilan'); ?>"
                                                            method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="judul">Judul</label>
                                                                <input type="text" class="form-control" id="judul"
                                                                    name="judul" value="<?= $tp['judul']; ?>">
                                                                <input type="hidden" class="form-control" id="id"
                                                                    name="id" value="<?= $tp['id']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="judul">Link</label>
                                                                <input type="text" class="form-control" id="link"
                                                                    name="link" value="<?= $tp['link']; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gambar">Gambar</label>
                                                                <input type="file" class="form-control" id="gambar"
                                                                    name="gambar" value="<?= $tp['gambar']; ?>">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Ubah
                                                        </button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="<?php echo base_url('admin/hapus_tampilan/') . $tp['id'] ?>"
                                            class="badge badge-pill badge-danger"
                                            onclick="return confirm ('Hapus daftar?')"> <i class="fas fa-window-close">
                                            </i> Delete</a>
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