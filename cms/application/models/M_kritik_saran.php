<?php
class M_kritik_saran extends CI_Model{

    function get_all(){
		$sql="SELECT * FROM kritik_saran";
		$this->db->order_by("id", "desc");
		$hsl=$this->db->query($sql);
		return $hsl;	
	}
}