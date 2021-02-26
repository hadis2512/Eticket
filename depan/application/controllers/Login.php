<?php
class Login extends CI_Controller{
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        
    }
    function index()
    {    	
        $this->load->view('auth/V_login');        
    }

    function masuk(){
    	$email = strip_tags(str_replace("'", "", $this->input->post('email')));
        
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));
        $email = $email;
        $password = $password;
        $email = $this->security->xss_clean($email);
        $password = $this->security->xss_clean($password);

        $cadmin = $this->M_login->cekadmin($email, $password);
        if ($cadmin->num_rows() > 0) {
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('email', $email);
            $xcadmin = $cadmin->row_array();
            $idadmin = $xcadmin['email'];
            $id = $xcadmin['id'];
            // $first_nama = $xcadmin['first_name'];            
            $nama = $xcadmin['first_name'] ." ". $xcadmin['last_name'];        
            $status = $xcadmin['status'];
            $this->session->set_userdata('email', $idadmin);
            $this->session->set_userdata('id', $id);
            $this->session->set_userdata('name', $nama);
            $this->session->set_userdata('status', $status);
            if ($this->session->userdata('masuk') == true && $status == 1) {
            redirect('Login/berhasillogin');
            }else {
                redirect('Login/belomaktif');
            }
        }else {

            redirect('Login/gagallogin');
            
        }
    }

    function berhasillogin(){
        $url = base_url('');
        redirect($url);
    }
    
    function belomaktif(){
        $url = base_url('Login');
        echo $this->session->set_flashdata('message', 'Your account is not active yet ');
        redirect($url);
    }

    function gagallogin(){
    	$url = base_url('Login');
        echo $this->session->set_flashdata('message', 'Incorrect Username or Password ');
        redirect($url);
    }


	function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }



}
?>