<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        
        $this->load->model('M_event');
        $this->load->model('M_login');
    }

    function index()
    {
        
        $this->global['PageTitle'] = 'Home';
        $data['head'] = $this->load->view('V_head', $this->global, true);
        $data['menuHeader'] = $this->load->view('V_menuHeader', '', true);
        // $data['header'] = $this->load->view('V_header', '', true);
        $data['data'] = $this->M_event->get_id();
        $data['foot'] = $this->load->view('V_footer', '', true);
        $data['script'] = $this->load->view('V_script', '', true);
        $this->load->view('V_home', $data);
    }
}
