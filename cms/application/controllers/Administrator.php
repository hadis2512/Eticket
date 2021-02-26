<?php
class Administrator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    function index()
    {
        $this->load->view('V_login');
        $this->load->helper('security');
    }
    function auth()
    {
        $id = strip_tags(str_replace("'", "", $this->input->post('id')));
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));
        $u = $id;
        $p = $password;
        $u = $this->security->xss_clean($u);
        $p = $this->security->xss_clean($p);

        $cadmin = $this->M_login->cekadmin($u, $p);
        if ($cadmin->num_rows() > 0) {
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('user', $u);
            $xcadmin = $cadmin->row_array();
            $idadmin = $xcadmin['id'];
            $user_nama = $xcadmin['nama'];
            $access = $xcadmin['access'];
            $this->session->set_userdata('idadmin', $idadmin);
            $this->session->set_userdata('nama', $user_nama);
            $this->session->set_userdata('access', $access);
        }

        if ($this->session->userdata('masuk') == true) {
            redirect('Administrator/berhasillogin');
        } else {
            redirect('Administrator/gagallogin');
        }
    }
    function berhasillogin()
    {
        redirect('beranda');
    }
    function gagallogin()
    {
        $url = base_url('Administrator');
        echo $this->session->set_flashdata('msg', 'Incorrect Username or Password ');
        redirect($url);
    }
    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('Administrator');
        redirect($url);
    }

  
}
