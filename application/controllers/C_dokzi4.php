<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dokzi4 extends CI_Controller
{



    public function index()
    {
        $this->load->view('v_head');
        $this->load->view('v_menu');
        $this->load->view('v_dokzi4');
        $this->load->view('v_footer');
    }
}
