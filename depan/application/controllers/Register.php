<?php
class Register extends CI_Controller{
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_register');
        $this->load->library('form_validation');
        $this->load->library('phpmailer_lib');
    }

    function index()
    {    	
        $this->load->view('auth/V_regis');        
    }


	function daftar(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[member.email]', [
			'is_unique' => 'This email has already used!'
		]);
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[4]|matches[password1]',
			[
				'matches' => 'password doesnt match', 'min_length' => 'password too short'
			]
		);
		$this->form_validation->set_rules('password1', 'Password1', 'required|trim|matches[password]');

		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');

		$this->form_validation->set_rules('phone', 'Phone', 'required|trim');

		$this->form_validation->set_rules('address1', 'Address', 'required|trim');
		$this->form_validation->set_rules('city', 'City', 'required|trim');
		$this->form_validation->set_rules('zip_code', 'Zip Code', 'required|trim');

		

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/V_regis');			
		}else{
            
            $email = strip_tags(str_replace("'", "", $this->input->post('email')));
            $first_name = strip_tags(str_replace("'", "", $this->input->post('first_name')));
            $last_name = strip_tags(str_replace("'", "", $this->input->post('last_name')));
            $password = strip_tags(str_replace("'", "", $this->input->post('password')));
            $jenis_kelamin = strip_tags(str_replace("'", "", $this->input->post('jenis_kelamin')));
            $phone = strip_tags(str_replace("'", "", $this->input->post('phone')));
            $address1 = strip_tags(str_replace("'", "", $this->input->post('address1')));
            $city = strip_tags(str_replace("'", "", $this->input->post('city')));
            $zip_code = strip_tags(str_replace("'", "", $this->input->post('zip_code')));



            $this->M_register->save($email, $password, $first_name, $last_name, $jenis_kelamin, $phone, $address1, $city, $zip_code);
                
                // Load PHPMailer library
                $this->load->library('phpmailer_lib');

                // PHPMailer object
                $mail = $this->phpmailer_lib->load();

                // SMTP configuration
                $mail->isSMTP();
                $mail->Host     = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'gheaalways.x@gmail.com';
                $mail->Password = 'B3245UIT';
                $mail->SMTPSecure = 'tls';
                $mail->Port     = 587;

                $mail->setFrom('gheaalways.x@gmail.com', 'Ghealways');

                // Add a recipient
                $mail->addAddress($this->input->post('email'));
                // Email subject
                $mail->Subject = 'please Verification your email';
                // Set email format to HTML
                $mail->isHTML(true);

                // Email body content
                $mailContent = "<h1 >Dear,</h1>
                <p>This is your email verification in order to activate your account. Best regards</p>" . "<a href=" . base_url() . "Register/active?code=". $email . ">Click Here To Activate</a>";
                $mail->Body = $mailContent;
                $send = $mail->send();
                if ($send) {
                    $this->session->set_flashdata('msg', "<div class=\"alert alert-success\" role=\"alert\">
                    Akun Berhasil didaftarkan, silahkan cek email anda untuk verifikasi!
                    </div>");
                    redirect('Login');
                }else{
                    $this->session->set_flashdata('message', '"<div class=\"alert alert-success\" role=\"alert\">
                    Something wrong with our system :(
                    </div>"');
                    redirect('Register');
                }
        }
	}
    // function berhasil(){
    //     $url=base_url("Login");
    //     echo $this->session->set_flashdata('msg', 'Akun anda berhasil didaftarkan');
    //     redirect($url); 

    // }


    public function active()
    {
        $email = $this->input->get('code');

        $cek = $this->M_register->checkUser($email);
        if ($cek == "berhasil") {
            $this->session->set_flashdata('message', '<p class="text-success label-material" role="alert">Activation Success</p>');
            redirect('Login');
        } else {
            $this->session->set_flashdata('message', '<small class="text-danger label-material" role="alert">Invalid Email!</small>');
            redirect('Register');
        }
    }

	function logout()
    {
        $this->session->sess_destroy();
        // $url = base_url('Home');
        redirect('');
    }



}
?>