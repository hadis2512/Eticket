<?php 
class M_login extends CI_Model{
    function cekadmin($email,$password){
        $sql="SELECT * FROM member WHERE email=? AND password=md5(?)";
		$hsl=$this->db->query($sql, array($email,$password));
		return $hsl;
        
    }

    function save($email, $password, $first_name, $last_name, $jenis_kelamin, $phone, $address1, $city, $zip_code){
    	$data= array(
    		'email' =>$email ,
    		'password' => $password,
    		'first_name' => $first_name,
    		'last_name' => $last_name,
    		'jenis_kelamin' =>$jenis_kelamin,
    		'phone' => $phone,
    		'address1' => $address1,
    		'city' => $city,
    		'zip_code' => $zip_code
    	);
    	$this->db->insert('member', $data);
    }
    function get_user_login($kode)
    {
        $sql = "SELECT * FROM member WHERE email=?";
        $hsl = $this->db->query($sql, array($kode));
        return $hsl;
    }
     function get($id)
    {        

        $this->db->where('id', $id);
        $res = $this->db->get('member');
        return $res;
    }
    // function ngambil($email){
    //     $this->db->get_where('member', ['email' => $email])->row_array();
    // }
}