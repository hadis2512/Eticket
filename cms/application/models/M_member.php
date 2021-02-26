<?php
class M_member extends CI_Model{

    function get_all_member(){
		$sql="SELECT * FROM member";
		$hsl=$this->db->query($sql);
		return $hsl;	
	}
	
    
}