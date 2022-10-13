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
                <div class="card p-3 col-lg shadow">
                    <form action="<?= base_url('admin/aksi_add_mahasiswa'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="instansi">Instansi</label>
                            <input type="text" class="form-control" name="instansi" id="instansi" value="Akademi Komunitas Negeri Seni dan Budaya Yogyakarta" readonly>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Program Studi</label>
                            <select class="form-control" id="prodi" name="prodi">
                                <option value="" selected disabled>Pilih Prodi</option>
                                <?php foreach ($prodi as $p) : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['nama_prodi']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <!-- <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div> -->
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="aktif">Aktif</label>
                            <select class="form-control" id="aktif" name="aktif">
                                <option value="" selected disabled>Pilih Status</option>
                                <option value="Y">Aktif</option>
                                <option value="T">Tidak AKtif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>