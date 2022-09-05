<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar');
        $this->load->view('user/index');
        $this->load->view('template/footer');
    }
    public function ubah_password()
    {
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where(
            'users',
            ['email' => $this->session->userdata('email')]
        )->row_array();

        $this->form_validation->set_rules('pass_saat_ini', 'Password Saat Ini', 'required|trim');
        $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|trim|min_length[6]|matches[new_password2]');
        $this->form_validation->set_rules('ulangi_password', 'Ulangi Password', 'required|trim|min_length[6]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/ubah_password', $data);
            $this->load->view('template/footer');
        } else {
            $current_password = $this->input->post('pass_saat_ini');
            $new_password = $this->input->post('pass_baru');
            if (!password_verify($current_password, $data['user']['password'])) {
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
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('users');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Password Telah Di Ubah !
		  </div>');
                    redirect('user/ubah_password');
                }
            }
        }
    }
}
