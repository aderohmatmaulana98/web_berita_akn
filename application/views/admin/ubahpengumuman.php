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

            <div class="col-lg">
                <div class="card card-primary card-outline">
                    <div class="card-header row">
                        <div class="col-6">
                            <h5>Tulisan Baru</h5>
                        </div>
                        <div class="col-6 text-white text-right">
                            <a href="<?= base_url('admin/list_berita') ?>" class="btn btn-primary">
                                <i class="fas fa-angle-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
							<div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" id="judul" name="judul" value="<?= $pengumuman['judul']; ?>" >
                                            </div>
                                <div class="col">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">Simpan</button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-primary card-outline mr-1">
                        <div class="card-header row">
                            <h6>Konten Pengumuman</h6>
                        </div>
                        <div class="card-body">
                            <!-- This container will become the editable. -->
                            <textarea name="editor1" id="editor1" value="<?= $pengumuman['konten_pengumuman']; ?>"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header row">
                            <h6>Pengaturan Lainnya</h6>
                        </div>
                        <div class="card-body">
						<div class="form-group">
                                                <label for="thumbnail">Gambar Thumbnail</label>
                                                <input type="file" class="form-control" id="thumbnail" class="form-control" name="thumbnail" value="<?= $pengumuman['gambar_thumbnail']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="lampiran">File Lampiran</label>
                                                <input type="file" class="form-control" id="lampiran" class="form-control" name="lampiran">
                                                <small>Tipe File yang diizinkan (jpg,png,pdf). Ukuran Maksimal 3MB.</small>
                                            </div>
                            
                           
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>

<script>
    CKEDITOR.replace('editor1');
</script>
