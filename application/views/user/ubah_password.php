<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?= $this->session->flashdata('message');  ?>
                <div class="card p-3 col-lg-10 shadow">
                    <?= $this->session->flashdata('message');  ?>
                    <form action="<?= base_url('user/ubah_password') ?>" method="POST">
                        <div class="form-group">
                            <label for="pass_saat_ini">Password Saat Ini</label>
                            <input type="text" class="form-control" id="pass_saat_ini" name="pass_saat_ini">
                        </div>
                        <div class="form-group">
                            <label for="pass_baru">Password Baru</label>
                            <input type="text" class="form-control" name="pass_baru" id="pass_baru">
                        </div>
                        <div class="form-group">
                            <label for="ulangi_password">Ulangi Password</label>
                            <input type="text" class="form-control" name="ulangi_password" id="ulangi_password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>