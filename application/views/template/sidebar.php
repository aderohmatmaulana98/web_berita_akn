<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link text-center">
        <img class="mx-auto d-block img-fluid" src="<?= base_url('assets_admin/img/logo_akn_tulisan_putih.png') ?>" width="100" alt="">
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="mt-2">
            <div class="text-center mx-auto brand-link text-center">
                <img class="mx-auto d-block img-fluid" src="<?= base_url('assets_admin/img/logo_akn_tulisan_putih.png') ?>" width="100" alt="">
                <p class="text-center mx-auto">AKN SENI DAN BUDAYA <br> YOGYAKARTA</p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php if ($user['role_id'] == 1) : ?>
                    <li class="nav-header">ADMINISTRATOR</li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin') ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Post Berita dan Artikel
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/list_berita') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Berita</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/list_artikel') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Artikel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/kategori') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/pengumuman') ?>" class="nav-link">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>
                                Pengumuman
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/agenda') ?>" class="nav-link">
                            <i class="nav-icon fas fa-calendar"></i>
                            <p>
                                Agenda
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/komentar_post') ?>" class="nav-link">
                            <i class="nav-icon fas fa-comment"></i>
                            <p>Komentar Post</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Master Data
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/data_fakultas') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Fakultas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/data_prodi') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Prodi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/buat_akun_dosen') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dosen/Instruktur</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/buat_akun_mahasiswa') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Mahasiswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/matakuliah') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Mata Kuliah</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/inbox') ?>" class="nav-link">
                            <i class="nav-icon fas fa-envelope"></i>
                            <p>Inbox</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tv"></i>
                            <p>
                                Tampilan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/slide') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slide</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php else : ?>

                    <li class="nav-header">Dosen</li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin') ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Penilaian
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('dosen/input_nilai') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Input Nilai</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/list_artikel') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Input Sikap</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <li class="nav-header">USER</li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/my_profile') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>My Profil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/ubah_password') ?>" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>Ubah Password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    </div>
    <!--
 /.sideb
ar -->


</aside>