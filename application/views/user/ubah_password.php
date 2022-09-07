<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <?= $this->session->flashdata('message');  ?>
            <div class="row">
                <div class="card p-3 col-lg-10 shadow">
                    <form action="<?= base_url('admin/ubah_password') ?>" method="POST">
                        <div class="form-group">
                            <label for="current_password">Password Saat Ini</label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="new_password1">Password Baru</label>
                            <input type="password" class="form-control" name="new_password1" id="new_password1">
                            <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="new_password2">Ulangi Password</label>
                            <input type="password" class="form-control" name="new_password2" id="new_password2">
                            <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>