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
                                <i class="fas fa-plus text-white"> </i> Tambah Agenda
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Agenda</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/add_agenda'); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="nama_agenda">Nama Agenda</label>
                                                <input type="text" class="form-control" id="nama_agenda" name="nama_agenda">
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" id="deskripsi" name="deskripsi" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="mulai">Mulai</label>
                                                <input type="date" class="form-control" id="mulai" name="mulai">
                                            </div>
                                            <div class="form-group">
                                                <label for="selesai">Selesai</label>
                                                <input type="date" class="form-control" id="selesai" name="selesai">
                                            </div>
                                            <div class="form-group">
                                                <label for="tempat">Tempat</label>
                                                <input type="text" class="form-control" id="tempat" name="tempat">
                                            </div>
                                            <div class="form-group">
                                                <label for="waktu">Waktu</label>
                                                <input type="time" class="form-control" id="waktu" name="waktu">
                                            </div>
                                            <div class="form-group">
                                                <label for="waktu">Ketetangan</label>
                                                <textarea class="form-control" name="keterangan" id="keterangan" name="keterangan" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" class="form-control" id="gambar" name="gambar">
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
                                    <th>Agenda</th>
                                    <th>Deskripsi</th>
                                    <th>Mulai</th>
                                    <th>Selesai</th>
                                    <th>Tempat</th>
                                    <th>Waktu</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                    <th>Author</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($agenda as $a) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $a['nama_agenda']; ?></td>
                                        <td><?= $a['deskripsi']; ?></td>
                                        <td><?= $a['mulai']; ?></td>
                                        <td><?= $a['selesai']; ?></td>
                                        <td><?= $a['tempat']; ?></td>
                                        <td><?= $a['waktu']; ?></td>
                                        <td><?= $a['keterangan']; ?></td>
                                        <td><img src="<?= base_url('assets_admin/img/agenda/') . $a['gambar']; ?>" alt="" srcset="" height="50" width="50"></td>
                                        <td><?= $a['author']; ?></td>
                                        <td>
                                            <!-- <a href="#" class="badge badge-pill badge-success" data-toggle="modal"
                                            data-target="#editagenda<?= $a['id']; ?>"><i class="fas fa-edit"></i>
                                            Edit</a> -->

                                            <a href="#" class="badge badge-pill badge-success" data-toggle="modal" data-target="#editagenda<?= $a['id']; ?>"><i class="fas fa-edit"></i>
                                                Edit</a>


                                            <!-- Modal -->
                                            <div class="modal fade" style="display: none" id="editagenda<?= $a['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editagendaModalLabel" aria-hidden="true">
                                                <div class="modal-dialog col-lg-12" role="document">
                                                    <div class=" modal-content ">
                                                        <div class=" modal-header">
                                                            <h5 class="modal-title" id="editagendaModalLabel">Ubah agenda
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body ">
                                                            <div action="<?= base_url('admin/ubah_agenda'); ?>" method="POST" enctype="multipart/form-data">

                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">

                                                                            <div class="form-group">
                                                                                <label for="nama_agenda" class="form-label">Nama
                                                                                    Agenda</label>
                                                                                <input type="text" class="form-control" id="nama_agenda" name="nama_agenda" value="<?= $a['nama_agenda']; ?>" required>
                                                                                <input type="text" class="form-control" id="id" name="id" value="<?= $a['id']; ?>" hidden required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="deskripsi">Deskripsi</label>
                                                                                <textarea class="form-control" name="deskripsi" id="deskripsi" name="deskripsi" value="<?= $a['deskripsi']; ?>" cols="30" rows="10"><?= $a['deskripsi'] ?></textarea>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="mulai">Mulai</label>
                                                                                <input type="date" class="form-control" id="mulai" name="mulai" value="<?= $a['mulai']; ?>"><?= $a['mulai'] ?>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="selesai">Selesai</label>
                                                                                <input type="date" class="form-control" id="selesai" name="selesai" value="<?= $a['selesai']; ?>"><?= $a['selesai'] ?>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="tempat">Tempat</label>
                                                                                <input type="text" class="form-control" id="tempat" name="tempat" value="<?= $a['tempat']; ?>"><?= $a['tempat'] ?>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="waktu">Waktu</label>
                                                                                <input type="time" class="form-control" id="waktu" name="waktu" value="<?= $a['waktu']; ?>"><?= $a['waktu'] ?>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="waktu">Ketetangan</label>
                                                                                <textarea class="form-control" name="keterangan" id="keterangan" name="keterangan" value="<?= $a['keterangan']; ?>" cols="30" rows="10"><?= $a['keterangan'] ?></textarea>
                                                                            </div>



                                                                            <div class="form-group">

                                                                                <label for="gambar">Gambar</label>












                                                                                <input type="file" class="form-control" id="gambar" name="gambar">

                                                                            </div>
                                                                        </div>


                                                                    </div>
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

                                            </div>

                                            <a href="<?php echo base_url('admin/hapus_agenda/') . $a['id'] ?>" class="badge badge-danger" onclick="return confirm ('Hapus daftar?')">Hapus</a>
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