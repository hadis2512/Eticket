<?php 
class M_login extends CI_Model{
    function cekadmin($u,$p){
        $sql="SELECT * FROM user WHERE id=? AND password=md5(?)";
		$hsl=$this->db->query($sql, array($u,$p));
		return $hsl;
    }
}
