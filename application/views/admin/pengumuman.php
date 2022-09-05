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
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-plus text-white"> </i> Tambah Pengumuman
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content col-lg-12">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/add_pengumuman'); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" id="judul" name="judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="kontent_pengumuman">Konten Pengumuman</label>
                                                <textarea name="kontent_pengumuman" id="editor1" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="thumbnail">Gambar Thumbnail</label>
                                                <input type="file" class="form-control" id="thumbnail" class="form-control" name="thumbnail">
                                            </div>
                                            <div class="form-group">
                                                <label for="lampiran">File Lampiran</label>
                                                <input type="file" class="form-control" id="lampiran" class="form-control" name="lampiran">
                                                <small>Tipe File yang diizinkan (jpg,png,pdf). Ukuran Maksimal 3MB.</small>
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
                                    <th>Judul</th>
                                    <th>Tanggal Post</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($pengumuman as $p) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $p['judul']; ?></td>
                                        <td><?= (date("d F Y", $p['date_created'])); ?></td>
                                        <td>
                                            <a href="#" class="badge badge-pill badge-success" data-toggle="modal" data-target="#editpengumuman<?= $p['id']; ?>"><i class="fas fa-edit"></i> Edit</a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="editpengumuman<?= $p['id']; ?>" aria-labelledby="editpengumumanModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content col-lg-12">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editpengumumanModalLabel">Ubah Pengumuman</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url('admin/ubah_pengumuman'); ?>" method="POST" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label for="judul" class="form-label">Judul</label>
                                                                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $p['judul']; ?>" required>
                                                                    <input type="text" class="form-control" id="id" name="id" value="<?= $p['id']; ?>" hidden required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kontent_pengumuman">Konten Pengumuman</label>
                                                                    <textarea name="editor2" class="myClassName" id="editor2" cols="30" rows="10" required><?= $p['konten_pengumuman'] ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="thumbnail">Gambar Thumbnail</label>
                                                                    <input type="file" class="form-control" id="thumbnail" class="form-control" name="thumbnail" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="lampiran">File Lampiran</label>
                                                                    <input type="file" class="form-control" id="lampiran" class="form-control" name="lampiran" required>
                                                                    <small>Tipe File yang diizinkan (jpg,png,pdf). Ukuran Maksimal 3MB.</small>
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

                    <a href="<?php echo base_url('admin/hapus_pengumuman/') . $p['id'] ?>" class="badge badge-danger" onclick="return confirm ('Hapus daftar?')">Delete</a>
                    </td>
                    </tr>
                    <?php $i++;  ?>
                <?php endforeach; ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    CKEDITOR.replace('editor1');
</script>

<script>
    CKEDITOR.replaceAll('myClassName');
</script>

<script>
    window.pressed = function() {
        var a = document.getElementById('thumbnail');
        if (a.value == "") {
            fileLabel.innerHTML = "Chose file";
        } else {
            var theSplit = a.value.split('\\');
            fileLabel.innerHTML = theSplit[theSplit.length - 1];
        }
    };
</script>