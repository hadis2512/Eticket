<?php 
class M_kritik_saran extends CI_Model{

    function pesan( $name, $email, $subject, $message){
        $data=array(
        'name' =>$name,
        'email'=>$email,
        'subject'=>$subject,
        'message'=>$message
    );
    $this->db->insert('kritik_saran',$data);

    }
    


}