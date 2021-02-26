<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_event');
        $this->load->library('session');
    }

    function index()
    {
        $this->global['PageTitle'] = 'Events Schedule';
        $data['head'] = $this->load->view('V_head', $this->global, True);
        $data['menuHeader'] = $this->load->view('V_menuHeader', '', True);
        $data['data'] = $this->M_event->get_all_event();
        $data['header'] = $this->load->view('V_header', '', True);
        $data['foot'] = $this->load->view('V_footer', '', True);
        $data['script'] = $this->load->view('V_script', '', True);
        $this->load->view('V_events', $data);
    }

    function Read_more($id)
    {
        $this->global['PageTitle'] = 'Read More';
        $data['head'] = $this->load->view('V_head', $this->global, True);
        $data['menuHeader'] = $this->load->view('V_menuHeader', '', True);
        // $data['data'] = $this->M_event->get($id);
        $data['data'] = $this->M_event->get($id);
        // $data['header'] = $this->load->view('V_header', '', True);
        $data['foot'] = $this->load->view('V_footer', '', True);
        $data['script'] = $this->load->view('V_script', '', True);
        $this->load->view('V_read_more', $data);
    }
    
}
