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
            <div class="row">
                <div class="card card-primary col card-outline">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($inbox as $i) :  ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= date('d-M-Y', $i['date_created']) ?></td>
                                        <td><?= $i['nama_lengkap'] ?></td>
                                        <td><?= $i['email'] ?></td>
                                        <td><?= $i['pertanyaan'] ?></td>
                                        <?php if ($i['status'] == 1) : ?>
                                            <td><span class="badge badge-success">Sudah dibalas</span></td>
                                        <?php else : ?>
                                            <td><span class="badge badge-success">Belum dibalas</span></td>
                                        <?php endif; ?>
                                        <td class="text-center">
                                            <a href="#" class="badge badge-pill badge-success"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            <a href="#" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#exampleModal1<?= $i['id'] ?>"><i class="fas fa-trash"></i> Balas</a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal1<?= $i['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Balas Pesan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            <form action="<?= base_url('admin/balas_pesan') ?>" method="POST" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label for="balas_pesan">Pesan Balasan</label> <br>
                                                                    <textarea name="balas_pesan" id="balas_pesan" class="form-control" cols="30" rows="10"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label> <br>
                                                                    <input type="text" name="email" id="email" value="<?= $i['email'] ?>" readonly class="form-control">
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
                                        </td>
                                    </tr>
                                <?php endforeach;  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>