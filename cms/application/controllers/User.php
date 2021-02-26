<?php
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('Administrator');
			redirect($url);
		};

		$this->API = 'http://localhost/Eticket/cms/';
		$this->load->model('M_user');
		$this->load->library('curl');
		$this->load->helper('security');
		header('Access-Control-Allow-Origin: *');
	}


	function index()
	{
		$kode = $this->session->userdata('idadmin');
		$x['user'] = $this->M_user->get_user_login($kode);
		$x['data'] = json_decode($this->curl->simple_get($this->API . '/data-user'), true);
		if ($this->session->userdata('access') == '0') {
			redirect('Dashboard');
		}
		$this->load->view('V_user', $x);
	}
	function tambah()
	{
		$kode = $this->session->userdata('idadmin');
		$x['user'] = $this->M_user->get_user_login($kode);
		$x['data'] = $this->M_user->get_all_user();
		$this->load->view('V_add_user', $x);
	}

	function save_user()
	{

		$id = str_replace("'", "", $this->input->post('id'));
		$password = str_replace("'", "", $this->input->post('password'));
		$confirm_password = str_replace("'", "", $this->input->post('password2'));
		$name = str_replace("'", "", $this->input->post('name'));
		$access = str_replace("'", "", $this->input->post('access'));
		json_decode($this->curl->simple_post($this->API . '/insert'), true);

		if ($password <> $confirm_password) {
			echo $this->session->set_flashdata('msg', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Password and Repeat Password not same.</div>');
			redirect('User');
		} else {
			$id = $this->security->xss_clean($id);
			$password = $this->security->xss_clean($password);
			$name = $this->security->xss_clean($name);
			$access = $this->security->xss_clean($access);
			$this->M_user->save_user($id, $password, $name, $access);
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>User <b>' . $name . '</b> Successfully added to database.</div>');
			redirect('User');
		}
	}
	function update($id)
	{
		$kode = $this->session->userdata('idadmin');
		$x['user'] = $this->M_user->get_user_login($kode);
		$x['data'] = $this->M_user->get($id);
		$this->load->view('V_edit_user', $x);
	}
	function update_user()
	{
		$id = str_replace("'", "", $this->input->post('id'));
		$password = str_replace("'", "", $this->input->post('password'));
		$confirm_password = str_replace("'", "", $this->input->post('password2'));
		$name = str_replace("'", "", $this->input->post('name'));
		$access = str_replace("'", "", $this->input->post('access'));
		if (empty($password) && empty($confirm_password)) {
			$id = $this->security->xss_clean($id);
			$password = $this->security->xss_clean($password);
			$name = $this->security->xss_clean($name);
			$access = $this->security->xss_clean($access);

			$this->M_user->update_user_no_pass($id, $password, $name, $access);
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>User <b>' . $name . '</b> Successfully changed in database.</div>');
			redirect('User');
		} elseif ($password <> $confirm_password) {
			echo $this->session->set_flashdata('msg', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Password and Repeat Password not same.</div>');
			redirect('User');
		} else {
			$id = $this->security->xss_clean($id);
			$password = $this->security->xss_clean($password);
			$name = $this->security->xss_clean($name);
			$access = $this->security->xss_clean($access);
			$this->M_user->update_user($id, $password, $name, $access);
			echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>User <b>' . $name . '</b> Successfully changed in database.</div>');
			redirect('User');
		}
	}




	function delete_user()
	{
		$id = $this->input->post('id');
		$name = str_replace("'", "", $this->input->post('name'));
		$id = $this->security->xss_clean($id);
		$name = $this->security->xss_clean($name);
		$this->M_user->delete_user($id);
		echo $this->session->set_flashdata('msg', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>User <b>' . $name . '</b> Successfully deleted from database.</div>');
		redirect('User');
	}
}
