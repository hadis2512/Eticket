<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kritik_saran');
        $this->load->library('session');
    }

    function index()
    {
        $this->global['PageTitle'] = 'Contact';
        $data['head'] = $this->load->view('V_head', $this->global, True);
        $data['menuHeader'] = $this->load->view('V_menuHeader', '', True);
        $data['header'] = $this->load->view('V_header', '', True);
        $data['foot'] = $this->load->view('V_footer', '', True);
        $data['script'] = $this->load->view('V_script', '', True);
        $this->load->view('V_contact', $data);
    }

    function kirim_pesan(){
        $name = str_replace("'", "", $this->input->post('name'));
        $email = str_replace("'", "", $this->input->post('email'));
        $subject = str_replace("'", "", $this->input->post('subject'));
        $message = str_replace("'", "", $this->input->post('message'));

        $name = $this->security->xss_clean($name);
        $email = $this->security->xss_clean($email);
        $subject = $this->security->xss_clean($subject);
        $message = $this->security->xss_clean($message);
        $this->M_kritik_saran->pesan($name, $email, $subject, $message);
        echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Terima Kasih Atas  Kritik dan Sarannya.</div>');
        redirect('Contact');
    }
    
}
