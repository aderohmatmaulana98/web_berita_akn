<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
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

        if ($data['user']['role_id'] != 2) {
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

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('template/footer');
    }
}
