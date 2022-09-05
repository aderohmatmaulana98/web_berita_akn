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
                                    <th>Privasi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Olahraga</td>
                                    <td>Olahraga</td>
                                    <td>Olahraga</td>
                                    <td>Olahraga</td>
                                    <td>Olahraga</td>
                                    <td>Olahraga</td>
                                    <td class="text-center">
                                        <a href="#" class="badge badge-pill badge-success"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        <a href="#" class="badge badge-pill badge-primary"><i class="fas fa-trash"></i> Balas</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>