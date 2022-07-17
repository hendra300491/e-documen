<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dokzilke extends CI_Controller
{



    public function index()
    {
        $this->load->view('v_head');
        $this->load->view('v_menu');
        $this->load->view('v_dokzilke');
        $this->load->view('v_footer');
    }
}
