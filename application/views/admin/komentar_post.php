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
                <div class="col-lg-4">
                    <div class="card card-primary mr-2 card-outline">
                        <div class="card-header">
                            <div class="col text-center">
                                <h5>Status</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td>Komentar Berita</td>
                                        <td class="text-center">
                                            <span class="badge bg-secondary">0</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Komentar Artikel</td>
                                        <td class="text-center">
                                            <span class="badge bg-secondary">0</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Komentar Pengumuman</td>
                                        <td class="text-center">
                                            <span class="badge bg-secondary">0</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header row">
                            <div class="col-6">
                                <form action="">
                                    <div class="input-group">
                                        <select name="" id="" class="form-control">
                                            <option value="">Berita</option>
                                            <option value="">Artikel</option>
                                            <option value="">Pengumuman</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="button-addon2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col text-white text-right">
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Komentar</th>
                                        <th>Tanggapan Untuk</th>
                                        <th>Dikirim Pada</th>
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
                                        <td>
                                            <a href="#" class="badge badge-pill badge-success"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Olahraga</td>
                                        <td>Olahraga</td>
                                        <td>Olahraga</td>
                                        <td>Olahraga</td>
                                        <td>
                                            <a href="#" class="badge badge-pill badge-success"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Olahraga</td>
                                        <td>Olahraga</td>
                                        <td>Olahraga</td>
                                        <td>Olahraga</td>
                                        <td>
                                            <a href="#" class="badge badge-pill badge-success"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="#" class="badge badge-pill badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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