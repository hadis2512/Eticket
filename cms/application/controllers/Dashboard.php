<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('M_user');
	
	}

	function index(){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->M_user->get_user_login($kode);
		$this->load->view('V_dashboard',$x);
	}

}