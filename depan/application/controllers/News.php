<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_news');
        $this->load->library("Curl");
        $this->load->helper("url");
        header('Access-Control-Allow-Origin: *');
    }


    function index()
    {
        $this->global['PageTitle'] = 'News';
        $data['head'] = $this->load->view('V_head', $this->global, True);
        $data['menuHeader'] = $this->load->view('V_menuHeader', '', True);
        $data['data'] = $this->M_news->get_all_news();
        $data['header'] = $this->load->view('V_header', '', True);
        $data['foot'] = $this->load->view('V_footer', '', True);
        $data['script'] = $this->load->view('V_script', '', True);
        $this->load->view('V_news', $data);
    }
    function Read_more($id)
    {
        $this->global['PageTitle'] = 'Read More News';
        $data['head'] = $this->load->view('V_head', $this->global, True);
        $data['menuHeader'] = $this->load->view('V_menuHeader', '', True);
        // $data['data'] = $this->M_event->get($id);
        $data['data'] = $this->M_news->get($id);
        // $data['header'] = $this->load->view('V_header', '', True);
        $data['foot'] = $this->load->view('V_footer', '', True);
        $data['script'] = $this->load->view('V_script', '', True);
        $this->load->view('V_read_more_news', $data);
    }
}
