<?php
class M_ticket extends CI_Model{

	function get_all_ticket(){
		$sql="SELECT id, name, quota, ticket FROM event";
		$hsl=$this->db->query($sql);
		return $hsl;	
	}

	function get_ticket_used($id_event){
		$sql="SELECT a.id, b.email, c.name, a.jumlah, a.active FROM transaksi a, member b, event c WHERE a.member_id = b.id and a.event_id = c.id and a.event_id = ? ";
		$hsl=$this->db->query($sql, array($id_event));
		return $hsl;		
	}
	
}