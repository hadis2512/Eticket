<?php
class transaksi extends CI_Controller{
    function __construct(){
        parent::__construct() ;
        $this->load->model('M_event');        
        $this->load->model('M_transaksi');
    }
    function beli_tiket()
    {                                                    
                            $id=str_replace("'", "", $this->input->post('id'));
                            $member_id=str_replace("'", "", $this->input->post('member_id'));                            
                            $event_id=str_replace("'", "", $this->input->post('event_id')); 
                            $jumlah=str_replace("'", "", $this->input->post('jumlah'));
                            $active=str_replace("'", "", $this->input->post('active'));
                            
                            
                            

                            $id=$this->security->xss_clean($id);
                            $member_id=$this->security->xss_clean($member_id);                            
                            $event_id=$this->security->xss_clean($event_id);
                            $jumlah=$this->security->xss_clean($jumlah);
                            $active=$this->security->xss_clean($active);
                            

                            $this->M_transaksi->save($id, $member_id, $event_id, $jumlah, $active);
                            // $this->M_ticket->book($id,$name,$venue,$start1,$end1,$picture,$content,$quota,$speaker,$moderator,$status);
                            echo $this->session->set_flashdata('msg','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;'.'</b> Transaksi Berhasil.</div>');
                            redirect('transaksi/berhasilbeli');        
    }
    function berhasilbeli(){
        $url = 'http://localhost/Eticket/depan/Event';
        redirect($url);
    }
}
?>
