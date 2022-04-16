<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_login');
    }


    public function index()
    {
        $this->load->view('login');
    }

    public function cek_login()
    {
        $aktif = 'Y';
        $data = array(
            'email' => $this->input->post('email', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
            'is_aktif' => $aktif
        );

        // // echo "<pre>";
        //  print_r($data);
        // die;
        //  echo "<pre>";

        $hasil = $this->M_login->cek_user($data);

        // echo "<pre>";
        // print_r($hasil);
        // die;
        // echo "<pre>";


        if ($hasil->num_rows() == 0) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['cek_login'] = 'oke';
                $sess_data['email'] = $sess->email;
                $sess_data['full_name'] = $sess->full_name;
                $sess_data['id_user_level'] = $sess->id_user_level;
            }
            $this->session->userdata();
            redirect('C_home');
        } else {
            echo "gagal login";
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        session_destroy();
        redirect('Login');
    }
}
