<?php
class Kritik_saran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Administrator');
			redirect($url);
		};
		$this->load->model('M_user');
		$this->load->model('M_kritik_saran');		
		$this->load->helper('security');
	}

	function index()
	{
		
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->M_user->get_user_login($kode);
		$x['data']=$this->M_kritik_saran->get_all();
		$this->load->view('V_kritik_saran',$x);
	}

	
	
}
