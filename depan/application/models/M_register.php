<?php 
class M_register extends CI_Model{

    function save($email, $password, $first_name, $last_name, $jenis_kelamin, $phone, $address1, $city, $zip_code){
        $date = date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'email' =>$email ,
            'password' =>md5($password),
            'first_name' => $first_name,
            'last_name' => $last_name,
            'jenis_kelamin' =>$jenis_kelamin,
            'phone' => $phone,
            'address1' => $address1,
            'city' => $city,
            'zip_code' => $zip_code,
            'status' => 2,            
            'date' => date('d-m-Y H:i:s')
        );
        $this->db->insert('member', $data);
    }
    
    public function checkUser($email)
    {

        $sql = "SELECT * FROM member WHERE email = ?";
        $hsl = $this->db->query($sql, $email);

        if ($hsl->num_rows() > 0) {
            $sql1 = "UPDATE member SET status = 1 WHERE email = ?";
            $hsl1 = $this->db->query($sql1, $email);
            return "berhasil";
        } else {
            return "gagal";
        }
    }
}