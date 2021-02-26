<?php
class Ticket extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Administrator');
			redirect($url);
		};
		$this->load->model('M_ticket');
		$this->load->model('M_user');
		$this->load->library('upload');
		$this->load->helper('url');
		$this->load->helper('security');
	}

	function index()
	{
		$kode = $this->session->userdata('idadmin');
		$x['user'] = $this->M_user->get_user_login($kode);
		$x['data'] = $this->M_ticket->get_all_ticket();
		$this->load->view('V_ticket', $x);
	}

	function detail($id_event)
	{
		$kode = $this->session->userdata('idadmin');
		$x['user'] = $this->M_user->get_user_login($kode);
		$x['data'] = $this->M_ticket->get_ticket_used($id_event);
		$this->load->view('V_ticket-detail', $x);
	}
	
}
