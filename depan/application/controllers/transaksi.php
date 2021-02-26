<?php
class transaksi extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('M_event');        
        $this->load->model('M_transaksi');
        $this->load->library("session");
    }
    function beli_tiket()
    {                                                    

                    $member_id = $this->session->userdata('email');
                    $idmember = $this->M_transaksi->get_id_member($member_id);
                            // $data= $this->M_login->get_user_login($member_id);
                            // $member_id = str_replace("'", "", $this->input->post('member_id'));     
                            $event_id = str_replace("'", "", $this->input->post('id_event')); 

                            $jumlah=str_replace("'", "", $this->input->post('jumlah'));
                             
                            // $member_id=$this->security->xss_clean($member_id);                            
                            // $event_id=$this->security->xss_clean($event_id);
                            // $jumlah=$this->security->xss_clean($jumlah);
                $data = $this->M_transaksi->getTransactionNA($idmember, $event_id);
                if(!$data){
                    $this->M_transaksi->save($member_id, $event_id, $jumlah);
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
                $mail->addAddress($member_id);
                // Email subject
                $mail->Subject = 'please Verification your email';
                // Set email format to HTML
                $mail->isHTML(true);

                // Email body content
                $mailContent = "<h1 >Dear,</h1>
                <p>This is your ticket verification in order to finish your transaction. Best regards</p>" . "<a href=" . base_url() . "Transaksi/active?member_id=" . $idmember . "&event_id=" . $event_id . "&jumlah=" . $jumlah .  ">Click Here To Activate</a>";
                $mail->Body = $mailContent;
                $send = $mail->send();
                if ($send) {
                    $this->session->set_flashdata('msg', "<div class=\"alert alert-success text-center\" role=\"alert\">
                    Ticket berhasil di pesan, silahkan cek email anda untuk verifikasi!
                    </div>");
                    redirect('Events');
                }else{
                    $this->session->set_flashdata('message', '"<div class=\"alert alert-Danger text-center\" role=\"alert\">
                    Something wrong with our system :(
                    </div>"');
                    redirect('Events');
                }    
                }else{
                    $this->session->set_flashdata('msg', "<div class=\"alert alert-danger text-center\" role=\"alert\">
                    Anda belum memverifikasi transaksi anda sebelumnya!, silahkan verifikasi terlebih dahulu!</div>");
                    redirect('Events');
                }
                            // echo $this->session->set_flashdata('msg','
                            //     <div class="alert col-6 mx-auto   text-center alert-success">
                            //      Transaksi Berhasil.
                            //     </div>
                            //     ');
                            // redirect('Events/');                  
    }
    

    public function active()
    {
        $member_id = $this->input->get('member_id');
        $event_id = $this->input->get('event_id');
        $jumlahTiket = $this->input->get('jumlah');

        $cek = $this->M_transaksi->checkTicket($member_id, $event_id, $jumlahTiket);
        if ($cek == "berhasil") {
            $this->session->set_flashdata('message', '<p class="text-success label-material" role="alert">Your Transaction success</p>');
            redirect('Events');
        } else {
            $this->session->set_flashdata('message', '<small class="text-danger label-material" role="alert">Invalid Transaction!</small>');
            redirect('Events');
        }
    }

    function deny(){

    }
}
?>
