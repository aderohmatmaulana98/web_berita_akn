<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		date_default_timezone_set('Asia/Jakarta');
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		if ($data['user']['role_id'] != 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login dulu!</div>');
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$j_artikel = $this->db->get('artikel')->result_array();
		$data['j_artikel'] = count($j_artikel);

		$j_berita = $this->db->get('berita')->result_array();
		$data['j_berita'] = count($j_berita);

		$j_pengumuman = $this->db->get('pengumuman')->result_array();
		$data['j_pengumuman'] = count($j_pengumuman);

		$j_agenda = $this->db->get('agenda')->result_array();
		$data['j_agenda'] = count($j_agenda);

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');
	}
	public function list_berita()
	{
		$data['title'] = 'List Berita';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['berita'] = $this->db->get('berita')->result_array();

		$sql = 'SELECT COUNT(berita.`status_tulisan`) AS jumlah FROM berita WHERE berita.`status_tulisan` =  "Pending"';
		$data['status'] = $this->db->query($sql)->row_array();

		$sqla = 'SELECT COUNT(berita.`status_tulisan`) AS jumlaha FROM berita WHERE berita.`status_tulisan` =  "Publish"';
		$data['statusa'] = $this->db->query($sqla)->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/list_berita', $data);
		$this->load->view('template/footer');
	}
	public function list_artikel()
	{
		$data['title'] = 'List Artikel';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['artikel'] = $this->db->get('artikel')->result_array();

		$sql = 'SELECT COUNT(artikel.`status_tulisan`) AS jumlah FROM artikel WHERE artikel.`status_tulisan` =  "Pending"';
		$data['status'] = $this->db->query($sql)->row_array();

		$sqla = 'SELECT COUNT(artikel.`status_tulisan`) AS jumlaha FROM artikel WHERE artikel.`status_tulisan` =  "Publish"';
		$data['statusa'] = $this->db->query($sqla)->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/list_artikel', $data);
		$this->load->view('template/footer');
	}
	public function kategori()
	{
		$data['title'] = 'Kategori';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['kategori'] = $this->db->get('kategori')->result_array();

		// var_dump($data['kategori']);
		// die;

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/kategori', $data);
		$this->load->view('template/footer');
	}
	public function pengumuman()
	{
		$data['title'] = 'Pengumuman';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['pengumuman'] = $this->db->get('pengumuman')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/pengumuman', $data);
		$this->load->view('template/footer');
	}
	public function add_pengumuman()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$judul = $this->input->post('judul');
		$konten_pengumuman = $this->input->post('kontent_pengumuman');
		$thumbnail = $_FILES['thumbnail'];

		if ($thumbnail = '') {
		} else {
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets_admin/img/thumbnail_pengumuman/';
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('thumbnail')) {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap isi thumbnail</div>');
				redirect('admin/pengumuman');
			} else {

				$thumbnail = $this->upload->data('file_name');
			}
		}

		$lampiran = $_FILES['lampiran'];

		if ($lampiran = '') {
		} else {
			$config['allowed_types']        = 'jpg|png|jpeg|pdf';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets_admin/img/lampiran/';
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('lampiran')) {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap isi file lampiran</div>');
				redirect('admin/pengumuman');
			} else {

				$lampiran = $this->upload->data('file_name');
			}
		}

		$data = [
			'judul' => $judul,
			'konten_pengumuman' => $konten_pengumuman,
			'gambar_thumbnail' => $thumbnail,
			'file_lampiran' => $lampiran,
			'date_created' => time()
		];

		$this->db->insert('pengumuman', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Pengumuman berhasil ditambahkan !
      </div>');
		redirect('admin/pengumuman');
	}
	public function agenda()
	{
		$data['title'] = 'Agenda';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['agenda'] = $this->db->get('agenda')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/agenda', $data);
		$this->load->view('template/footer');
	}
	public function add_agenda()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$author = $data['user']['nama'];

		$nama_agenda = $this->input->post('nama_agenda');
		$deskripsi = $this->input->post('deskripsi');
		$mulai = $this->input->post('mulai');
		$selesai = $this->input->post('selesai');
		$tempat = $this->input->post('tempat');
		$waktu = $this->input->post('waktu');
		$keterangan = $this->input->post('keterangan');

		$gambar = $_FILES['gambar'];

		if ($gambar = '') {
		} else {
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets_admin/img/agenda/';
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('gambar')) {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap isi gambar</div>');
				redirect('admin/agenda');
			} else {

				$gambar = $this->upload->data('file_name');
			}
		}

		$data = [
			'nama_agenda' => $nama_agenda,
			'deskripsi' => $deskripsi,
			'mulai' => $mulai,
			'selesai' => $selesai,
			'tempat' => $tempat,
			'waktu' => $waktu,
			'keterangan' => $keterangan,
			'gambar' => $gambar,
			'author' => 'Administrator'
		];
		$this->db->insert('agenda', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Agenda berhasil ditambahkan !
      </div>');
		redirect('admin/agenda');
	}
	public function komentar_post()
	{
		$data['title'] = 'Komentar Post';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/komentar_post', $data);
		$this->load->view('template/footer');
	}
	public function data_fakultas()
	{
		$data['title'] = 'Data Fakultas';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['fakultas'] = $this->db->get('fakultas')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/data_fakultas', $data);
		$this->load->view('template/footer');
	}
	public function add_fakultas()
	{
		$nama_fakultas = $this->input->post('nama_fakultas');
		$kode_fakultas = $this->input->post('kode_fakultas');

		$data = [
			'nama_fakultas' => $nama_fakultas,
			'kode_fakultas' => $kode_fakultas
		];

		$this->base_model->add_fakultas($data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Fakultas berhasil ditambahkan !
      </div>');
		redirect('admin/data_fakultas');
	}
	public function data_prodi()
	{
		$data['title'] = 'Data Prodi';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['fakultas'] = $this->db->get('fakultas')->result_array();

		$data['prodi'] = $this->base_model->tampil_prodi();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/data_prodi', $data);
		$this->load->view('template/footer');
	}
	public function add_prodi()
	{
		$id = $this->input->post('id');
		$id_fakultas = $this->input->post('id_fakultas');
		$nama_prodi = $this->input->post('nama_prodi');
		$kode_prodi = $this->input->post('kode_prodi');

		$data = [
			'id_fakultas' => $id_fakultas,
			'nama_prodi' => $nama_prodi,
			'kode_prodi' => $kode_prodi
		];

		$this->base_model->add_prodi($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Prodi berhasil ditambahkan !
      </div>');
		redirect('admin/data_prodi');
	}
	public function inbox()
	{
		$data['title'] = 'Inbox';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['inbox'] = $this->db->get('inbox')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/inbox', $data);
		$this->load->view('template/footer');
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Logout Berhasil !
		  </div>');
		redirect('auth');
	}
	public function add_kategori()
	{
		$kategori = $this->input->post('kategori');

		$data = ['nama_kategori' => $kategori];

		$this->base_model->add_kategori($data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Kategori Berhasil Disimpan !
		  </div>');
		redirect('admin/kategori');
	}
	public function post_berita()
	{
		$data['title'] = 'Post Berita';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['kategori'] = $this->db->get('kategori')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/post_berita', $data);
		$this->load->view('template/footer');
	}
	public function add_post_artikel()
	{
		$data['title'] = 'Post Artikel';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['artikel'] = $this->db->get('artikel')->result_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();

		$author = $data['user']['nama'];

		$judul = $this->input->post('judul');
		//htmlspecialchars(trim($this->input->post('isi_konten')));
		$isi_konten = $this->input->post('isi_konten');
		// $tipe_tulisan = $this->input->post('tipe_tulisan');
		$kategori = $this->input->post('kategori');
		$status_tulisan = $this->input->post('status_tulisan');

		$gambar = $_FILES['gambar'];

		if ($gambar = '') {
		} else {
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets_admin/img/artikel/';
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('gambar')) {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap isi gambar</div>');
				redirect('admin/list_artikel');
			} else {

				$gambar = $this->upload->data('file_name');
			}
		}

		$data = [
			'judul' => $judul,
			'isi_konten' => $isi_konten,
			'tipe_tulisan' => 'Artikel',
			'id_kategori' => $kategori,
			'status_tulisan' => $status_tulisan,
			'date_created' => time(),
			'author' => 'Administrator',
			'meta_keyword' => 1,
			'meta_deskripsi' => 1,
			'gambar' => $gambar
		];

		$this->db->insert('artikel', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Artikel berhasil ditambahkan !
      </div>');
		redirect('admin/list_artikel');
	}

	public function post_artikel()
	{
		$data['title'] = 'Post Artikel';
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['kategori'] = $this->db->get('kategori')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/post_artikel', $data);
		$this->load->view('template/footer');
	}

	public function add_post_berita()
	{

		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$data['berita'] = $this->db->get('berita')->result_array();


		$judul = $this->input->post('judul');
		$isi_konten = $this->input->post('isi_konten');
		// $tipe_tulisan = $this->input->post('tipe_tulisan');
		$kategori = $this->input->post('kategori');
		$status_tulisan = $this->input->post('status_tulisan');
		$nama = $data['user']['nama'];

		$gambar = $_FILES['gambar'];

		if ($gambar = '') {
		} else {
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets_admin/img/berita/';
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('gambar')) {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap isi gambar</div>');
				redirect('admin/list_berita');
			} else {

				$gambar = $this->upload->data('file_name');
			}
		}

		$data = [
			'judul' => $judul,
			'isi_konten' => $isi_konten,
			'tipe_tulisan' => 'Berita',
			'id_kategori' => $kategori,
			'status_tulisan' => $status_tulisan,
			'date_created' => time(),
			'meta_keyword' => 1,
			'meta_deskripsi' => 1,
			'author' => $nama,
			'gambar' => $gambar
		];

		$this->db->insert('berita', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berita berhasil ditambahkan !
      </div>');
		redirect('admin/list_berita');
	}

	public function ubah_berita($id)
	{
		$data['title'] = 'Ubah Berita';
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$data['ubah_berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['kategori1'] = $this->db->get_where('kategori', ['id', $id])->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/ubah_berita', $data);
		$this->load->view('template/footer');
	}

	public function aksi_ubah_berita()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi_konten = $this->input->post('isi_konten');
		$tipe_tulisan = $this->input->post('tipe_tulisan');
		$kategori = $this->input->post('kategori');
		$status_tulisan = $this->input->post('status_tulisan');
		//cek jika ada gambar yang akan diupload
		$gambar = $_FILES['gambar']['name'];

		$data['berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();

		//ika ada gambar yang di upload

		if ($gambar) {
			$config['upload_path']          = './assets_admin/img/berita';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2048;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')) {
				$old_image = $data['berita']['gambar'];
				if ($old_image != 'default.png') {
					unlink(FCPATH, './assets_admin/img/berita/' . $old_image);
				}

				$new_image = $this->upload->data('file_name');
				$this->db->query("UPDATE berita SET berita.gambar = '$new_image' WHERE berita.id = $id");
			} else {
				die;
			}
		}

		$data = [
			'judul' => $judul,
			'isi_konten' => $isi_konten,
			'tipe_tulisan' => $tipe_tulisan,
			'id_kategori' => $kategori,
			'update_create' => time(),
			'status_tulisan' => $status_tulisan
		];

		$this->db->where('id', $id);
		$this->db->update('berita', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Berita telah <strong>diubah.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect('admin/list_berita/');
	}

	public function hapus_pengumuman($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pengumuman');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pengumuman telah <strong>dihapus.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect("admin/pengumuman");
	}

	public function hapus_agenda($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('agenda');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pengumuman telah <strong>dihapus.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect("admin/agenda");
	}

	public function hapus_fakultas($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('fakultas');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pengumuman telah <strong>dihapus.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect("admin/data_fakultas");
	}

	public function hapus_prodi($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('prodi');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pengumuman telah <strong>dihapus.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect("admin/data_prodi");
	}

	public function hapus_berita($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('berita');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Berita telah <strong>dihapus.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect("admin/list_berita/");
	}

	public function hapus_artikel($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('artikel');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Artikel telah <strong>dihapus.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect("admin/list_artikel/");
	}
	public function ubah_artikel($id)
	{
		$data['title'] = 'Ubah Artikel';
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$data['ubah_artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$data['kategori1'] = $this->db->get_where('kategori', ['id', $id])->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/ubah_artikel', $data);
		$this->load->view('template/footer');
	}

	public function aksi_ubah_artikel()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi_konten = ($this->input->post('isi_konten'));
		$tipe_tulisan = $this->input->post('tipe_tulisan');
		$kategori = $this->input->post('kategori');
		$status_tulisan = $this->input->post('status_tulisan');
		//cek jika ada gambar yang akan diupload
		$gambar = $_FILES['gambar']['name'];

		$data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();

		//ika ada gambar yang di upload

		if ($gambar) {
			$config['upload_path']          = './assets_admin/img/artikel';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2048;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')) {
				$old_image = $data['artikel']['gambar'];
				if ($old_image != 'default.png') {
					unlink(FCPATH, './assets_admin/img/artikel/' . $old_image);
				}

				$new_image = $this->upload->data('file_name');
				$this->db->query("UPDATE artikel SET artikel.gambar = '$new_image' WHERE artikel.id = $id");
			} else {
				die;
			}
		}

		$data = [
			'judul' => $judul,
			'isi_konten' => $isi_konten,
			'tipe_tulisan' => 'Artikel',
			'id_kategori' => $kategori,
			'upadate_created' => time(),
			'status_tulisan' => $status_tulisan
		];

		$this->db->where('id', $id);
		$this->db->update('artikel', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Artikel telah <strong>diubah.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
		redirect('admin/list_artikel/');
	}

	public function ubah_pengumuman()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$konten_pengumuman = $this->input->post('editor2');

		$data['pengumuman'] = $this->db->get_where('pengumuman', ['id' => $id])->row_array();

		$thumbnail = $_FILES['thumbnail']['name'];
		$file_lampiran = $_FILES['lampiran']['name'];

		if ($thumbnail) {
			$config['upload_path']          = './assets_admin/img/thumbnail_pengumuman';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2048;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('thumbnail')) {
				$old_image = $data['pegumuman']['gambar_thumbnail'];
				if ($old_image != 'default.png') {
					unlink(FCPATH, './assets_admin/img/thumbnail_pengumuman/' . $old_image);
				}

				$new_image = $this->upload->data('file_name');
				$this->db->query("UPDATE pengumuman SET pengumuman.gambar_thumbnail = '$new_image' WHERE pengumuman.id = $id");
			} else {
				die;
			}
		}

		if ($file_lampiran) {
			$config['upload_path']          = './assets_admin/img/lampiran';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']             = 2048;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('thumbnail')) {
				$old_image = $data['pegumuman']['thumbnail'];
				if ($old_image != 'default.png') {
					unlink(FCPATH, './assets_admin/img/lampiran/' . $old_image);
				}

				$new_image = $this->upload->data('file_name');
				$this->db->query("UPDATE pengumuman SET pengumuman.file_lampiran = '$new_image' WHERE pengumuman.id = $id");
			} else {
				die;
			}
		}

		$isi = [
			'judul' => $judul,
			'konten_pengumuman' => $konten_pengumuman
		];

		$this->db->where('id', $id);
		$this->db->update('pengumuman', $isi);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Pengumuman berhasil diubah! !
		  </div>');
		redirect('admin/pengumuman');
	}

	public function ubah_agenda()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$author = $data['user']['nama'];

		$id = $this->input->post('id');
		$nama_agenda = $this->input->post('nama_agenda');
		$deskripsi = $this->input->post('deskripsi');
		$mulai = $this->input->post('mulai');
		$selesai = $this->input->post('selesai');
		$tempat = $this->input->post('tempat');
		$waktu = $this->input->post('waktu');
		$keterangan = $this->input->post('keterangan');

		$gambar = $_FILES['gambar'];

		if ($gambar = '') {
		} else {
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets_admin/img/agenda/';
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('gambar')) {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap isi gambar</div>');
				redirect('admin/agenda');
			} else {

				$gambar = $this->upload->data('file_name');
			}
		}

		$data = [
			'nama_agenda' => $nama_agenda,
			'deskripsi' => $deskripsi,
			'mulai' => $mulai,
			'selesai' => $selesai,
			'tempat' => $tempat,
			'waktu' => $waktu,
			'keterangan' => $keterangan,
			'gambar' => $gambar,
			'author' => 'Administrator'
		];

		$this->db->where('id', $id);
		$this->db->update('agenda', $data);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Agenda berhasil diubah! !
		  </div>');
		redirect('admin/agenda');
	}

	public function ubah_fakultas()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$author = $data['user']['nama'];

		$id = $this->input->post('id');
		$nama_fakultas = $this->input->post('nama_fakultas');
		$kode_fakultas = $this->input->post('kode_fakultas');

		$data = [
			'nama_fakultas' => $nama_fakultas,
			'kode_fakultas' => $kode_fakultas
		];

		$this->db->where('id', $id);
		$this->db->update('fakultas', $data);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Fakultas berhasil diubah! !
		  </div>');
		redirect('admin/data_fakultas');
	}

	public function ubah_prodi()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$author = $data['user']['nama'];

		$id = $this->input->post('id');
		$id_fakultas = $this->input->post('id_fakultas');
		$nama_prodi = $this->input->post('nama_prodi');
		$kode_prodi = $this->input->post('kode_prodi');

		$data = [
			'id_fakultas' => $id_fakultas,
			'nama_prodi' => $nama_prodi,
			'kode_prodi' => $kode_prodi
		];

		$this->db->where('id', $id);
		$this->db->update('prodi', $data);


		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Prodi berhasil diubah! !
		  </div>');
		redirect('admin/data_prodi');
	}

	public function my_profile()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();
		$data['title'] = 'My Profile';

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/my_profile', $data);
		$this->load->view('template/footer');
	}
	public function ubah_password()
	{
		$data['title'] = 'Ubah Password';
		$data['users'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();

		$this->form_validation->set_rules('current_password', 'Password Saat Ini', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[6]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Ulangi Password', 'required|trim|min_length[6]|matches[new_password1]');

		if ($this->form_validation->run() == false) {

			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('user/ubah_password', $data);
			$this->load->view('template/footer');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['users']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Password Saat Ini Salah !
		  </div>');
				redirect('user/ubah_password');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Password Jangan Sama Dengan Saat Ini !
		  </div>');
					redirect('user/ubah_password');
				} else {
					$pasword_hash = password_hash($new_password, PASSWORD_DEFAULT);
					$this->db->set('password', $pasword_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('users');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Password Telah Di Ubah !
		  </div>');
					redirect('user/ubah_password');
				}
			}
		}
	}
	public function kirim_balasan()
	{
		$email = $this->input->post('email');
		$balasan = $this->input->post('balas_pesan');
	}
	public function buat_akun_dosen()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();
		$data['title'] = 'Buat akun dosen/instruktur';

		$data['users'] = $this->db->query("SELECT users.* FROM users WHERE users.role_id = 2 OR users.role_id = 3")->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/buat_akun_dosen', $data);
		$this->load->view('template/footer');
	}
	public function add_akun_dosen()
	{
		$nip = $this->input->post('nip');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$role = $this->input->post('role');
		$instansi = $this->input->post('instansi');
		$status = $this->input->post('status');
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');

		$data = [
			'nip' => $nip,
			'nama' => $nama_lengkap,
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'role_id' => $role,
			'instansi' => $instansi,
			'status' => $status,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'is_active' => 1,
			'date_created' => time(),
			'image' => 'profil.png'
		];

		$this->db->insert('users', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Akun berhasi dibuat!
		  </div>');
		redirect('admin/buat_akun_dosen');
	}
	public function buat_akun_mahasiswa()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();
		$data['title'] = 'Data mahasiswa';

		$data['users'] = $this->db->get_where('users', ['role_id' => 4])->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/buat_akun_mahasiswa', $data);
		$this->load->view('template/footer');
	}
	public function add_mahasiswa()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();
		$data['title'] = 'Buat akun mahasiswa';

		$data['prodi'] = $this->db->get('prodi')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/form_add_mahasiswa', $data);
		$this->load->view('template/footer');
	}
	public function aksi_add_mahasiswa()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$instansi = $this->input->post('instansi');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$alamat = $this->input->post('alamat');
		$aktif = $this->input->post('aktif');
		$prodi = $this->input->post('prodi');

		$data = [
			'nip' => $nim,
			'nama' => $nama,
			'username' => $username,
			'email' => $email,
			'is_active' => 1,
			'instansi' => $instansi,
			'password' => $password,
			'alamat' => $alamat,
			'status' => $aktif,
			'image' => 'profil.png',
			'date_created' => time(),
			'role_id' => 4,
			'jabatan' => 'Mahasiswa',
			'id_prodi' => $prodi
		];

		$this->db->insert('users', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Akun berhasi dibuat!
		  </div>');
		redirect('admin/add_mahasiswa');
	}
	public function matakuliah()
	{
		$data['user'] = $this->db->get_where(
			'users',
			['email' => $this->session->userdata('email')]
		)->row_array();
		$data['title'] = 'Matakuliah';

		$data['tahun_ajaran'] = $this->db->get('tahun_ajaran')->result_array();
		$data['matakuliah'] = $this->db->query("SELECT matakuliah.id,matakuliah.kode_matkul, matakuliah.nama_matkul, matakuliah.sks, tahun_ajaran.tahun_ajaran
													FROM matakuliah, tahun_ajaran
													WHERE matakuliah.id_tahun_ajaran = tahun_ajaran.id")->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/matakuliah', $data);
		$this->load->view('template/footer');
	}
	public function add_matkul()
	{
		$kode_matkul = $this->input->post('kode_matkul');
		$nama_matkul = $this->input->post('nama_matkul');
		$sks = $this->input->post('sks');
		$tahun_ajaran = $this->input->post('tahun_ajaran');

		$data = [
			'kode_matkul' => $kode_matkul,
			'nama_matkul' => $nama_matkul,
			'sks' => $sks,
			'id_tahun_ajaran' => $tahun_ajaran
		];

		$this->db->insert('matakuliah', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Matakuliah berhasi dibuat!
		  </div>');
		redirect('admin/matakuliah');
	}
}
