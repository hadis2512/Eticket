<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Speakers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->global['PageTitle'] = 'Speaker';
        $data['head'] = $this->load->view('V_head', $this->global, True);
        $data['menuHeader'] = $this->load->view('V_menuHeader', '', True);
        $data['header'] = $this->load->view('V_header', '', True);
        $data['foot'] = $this->load->view('V_footer', '', True);
        $data['script'] = $this->load->view('V_script', '', True);
        $this->load->view('V_speaker', $data);
    }
}
