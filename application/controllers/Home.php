<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		// $this->db->limit(3, 'ASC');

		// $data['artikel'] = $this->db->order_by('id', 'DESC');
		// $data['artikel'] = $this->db->limit(3)->get('artikel')->result_array();

		$data['berita'] = $this->db->order_by('id', 'DESC');
		$data['berita'] = $this->db->limit(1)->get('berita')->result_array();

		$data['beritaa'] = $this->db->order_by('id', 'DESC');
		$data['beritaa'] = $this->db->limit(2, 1)->get('berita')->result_array();

		$data['pengumuman'] = $this->db->order_by('id', 'DESC');

		$data['pengumuman'] = $this->db->limit(3)->get('pengumuman')->result_array();

		$artikel = "SELECT * FROM artikel WHERE status_tulisan = 'publish' ORDER BY id DESC 
		LIMIT 3";
		$data['artikel'] = $this->db->query($artikel)->result_array();

		$berita = "SELECT * FROM berita WHERE status_tulisan = 'publish' ORDER BY id DESC 
		LIMIT 1";
		$data['berita'] = $this->db->query($berita)->result_array();

		$beritaa = "SELECT * FROM berita WHERE status_tulisan = 'publish' ORDER BY id DESC 
		LIMIT 1,2";
		$data['beritaa'] = $this->db->query($beritaa)->result_array();

		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

	public function search()
	{
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
		}
	}

	/*======================================PROFIL============================================= */
	public function profile()
	{

		$this->load->view('templates/header');
		$this->load->view('home/profile');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}
	public function visimisi()
	{

		$this->load->view('templates/header');
		$this->load->view('home/visimisi');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function sejarah()
	{

		$this->load->view('templates/header');
		$this->load->view('home/sejarah');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function fasilitas()
	{

		$this->load->view('templates/header');
		$this->load->view('home/fasilitas');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function komisisenat()
	{

		$this->load->view('templates/header');
		$this->load->view('home/komisisenat');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function organisasi()
	{

		$this->load->view('templates/header');
		$this->load->view('home/organisasi');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	/*======================================PRODI============================================= */

	public function tari()
	{

		$this->load->view('templates/header');
		$this->load->view('home/tari');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}
	public function karawitan()
	{

		$this->load->view('templates/header');
		$this->load->view('home/karawitan');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}
	public function kriya()
	{

		$this->load->view('templates/header');
		$this->load->view('home/kriya');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}


	public function artikel()
	{

		$this->load->model('Base_model', 'artikel');

		$data['artikel'] = $this->db->order_by('id', 'DESC');
		$data['artikel'] = $this->db->get('artikel')->result_array();


		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost:8080/aknsby/home/artikel/';
		$config['total_rows'] = $this->artikel->countAllArtikel();

		$config['per_page'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		// $data['artikel'] = $this->db->limit($config['per_page'])->get('artikel')->result_array();

		$data['start'] = $this->uri->segment(3);

		$data['artikel'] = $this->artikel->getArtikel($config['per_page'], $data['start']);

		//echo $this->pagination->create_links();

		// $artikel = "SELECT * FROM artikel WHERE status_tulisan = 'publish' ORDER BY id DESC";
		// $data['artikel'] = $this->db->query($artikel)->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('home/artikel', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/footer', $data);
	}

	public function detailartikel($id)
	{

		$data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();

		$this->load->view('templates/header');
		$this->load->view('home/detailartikel', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function berita()
	{

		// $data['berita'] = $this->db->order_by('id', 'DESC');
		// $data['berita'] = $this->db->get('berita')->result_array();

		// $berita = "SELECT * FROM berita WHERE status_tulisan = 'publish' ORDER BY id DESC ";
		// $data['berita'] = $this->db->query($berita)->result_array();


		$this->load->model('Base_model', 'berita');

		$data['berita'] = $this->db->order_by('id', 'DESC');
		$data['berita'] = $this->db->get('berita')->result_array();


		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost:8080/aknsby/home/berita/';
		$config['total_rows'] = $this->berita->countAllBerita();

		$config['per_page'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		// $data['artikel'] = $this->db->limit($config['per_page'])->get('artikel')->result_array();

		$data['start'] = $this->uri->segment(3);

		$data['berita'] = $this->berita->getBerita($config['per_page'], $data['start']);

		$this->load->view('templates/header');
		$this->load->view('home/berita', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function detailberita($id)
	{


		$data['berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();

		$data['beritaa'] = $this->db->get_where('berita', ['id' => $id])->row_array();

		$this->load->view('templates/header');
		$this->load->view('home/detailberita', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function pengumuman()
	{

		// $data['pengumuman'] = $this->db->order_by('id', 'DESC');
		// $data['pengumuman'] = $this->db->get('pengumuman')->result_array();

		$this->load->model('Base_model', 'pengumuman');

		$data['pengumuman'] = $this->db->order_by('id', 'DESC');
		$data['pengumuman'] = $this->db->get('pengumuman')->result_array();


		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost:8080/aknsby/home/pengumuman/';
		$config['total_rows'] = $this->pengumuman->countAllPengumuman();

		$config['per_page'] = 4;

		//styling
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		// $data['artikel'] = $this->db->limit($config['per_page'])->get('artikel')->result_array();

		$data['start'] = $this->uri->segment(3);

		$data['pengumuman'] = $this->pengumuman->getPengumuman($config['per_page'], $data['start']);

		$this->load->view('templates/header');
		$this->load->view('home/pengumuman', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function detailpengumuman($id)
	{


		$data['pengumuman'] = $this->db->get_where('pengumuman', ['id' => $id])->row_array();


		$this->load->view('templates/header');
		$this->load->view('home/detailpengumuman', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function detail()
	{

		$this->load->view('templates/header');
		$this->load->view('home/detail');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
	}

	public function kontak()
	{

		$this->load->view('templates/header');
		$this->load->view('home/kontak');
		$this->load->view('templates/footer');
	}
	public function mahasiswa_kriya()
	{
		$this->load->view('templates/header');
		$this->load->view('home/mahasiswa_kriya');
		$this->load->view('templates/footer');
	}
	public function kirim_pesan()
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$pertanyaan = $this->input->post('pertanyaan');

		$data = [
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'pertanyaan' => $pertanyaan,
			'jawaban' => NULL,
			'status' => 0,
			'date_created' => time()
		];

		$this->db->insert('inbox', $data);
		$this->session->set_flashdata('success', "<script>
		swal({
		text: 'Pesan telah dikirim, balasan akan masuk ke email yang dimasukan.',
		icon: 'success'
		});
	</script>");
		redirect('home/kontak');
	}

	public function mencari_mahasiswa()
	{

		$data['users'] = $this->db->query("SELECT * FROM users WHERE role_id = 4 AND nip = NULL")->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('home/mencari_mahasiswa', $data);
		$this->load->view('templates/footer', $data);
	}
	public function mencari_mahasiswa1()
	{
		$nip = $this->input->post('nim');
		if ($nip != NULL) {
			$data['users'] = $this->db->query("SELECT * FROM users WHERE role_id = 4 AND nip = $nip")->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('home/mencari_mahasiswa', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$this->session->set_flashdata('message', '<div>
        Data tidak ditemukan !
      </div>');
			redirect('home/mencari_mahasiswa');
		}
	}

	public function lulusan()
	{
		$this->load->view('templates/header');
		$this->load->view('home/lulusan');
		$this->load->view('templates/footer');
	}

	public function dosen_kriya()
	{
		$this->load->view('templates/header');
		$this->load->view('home/dosen_kriya');
		$this->load->view('templates/footer');
	}

	public function datadosen()
	{
		$data['data_dosen'] = $this->db->query('SELECT * FROM users WHERE role_id = 2')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('home/datadosen', $data);
		$this->load->view('templates/footer', $data);
	}


	public function kepuasan()
	{
		$this->load->view('templates/header');
		$this->load->view('home/kepuasan');
		$this->load->view('templates/footer');
	}
	public function kepuasan_dosen()
	{
		$this->load->view('templates/header');
		$this->load->view('home/kepuasan_dosen');
		$this->load->view('templates/footer');
	}


	public function galeri_kriya()
	{
		$this->load->view('templates/header');
		$this->load->view('home/galeri_kriya');
		$this->load->view('templates/footer');
	}

	public function detail_galeri()
	{
		$this->load->view('templates/header');
		$this->load->view('home/detail_galeri');
		$this->load->view('templates/footer');
	}

	public function detail_project()
	{
		$this->load->view('templates/header');
		$this->load->view('home/detail_project');
		$this->load->view('templates/footer');
	}
}
