<?php
class M_transaksi extends CI_Model
{


    function save($member_id, $event_id, $jumlah)
    {
        $sql1 = "SELECT id FROM member WHERE email = ?";
        $query1 = $this->db->query($sql1, $member_id)->result_array();
        foreach($query1 as $key){
            $wew = $key['id'];
        }

            $sql = "INSERT INTO transaksi (member_id, event_id, jumlah, active) VALUES ($wew, $event_id, $jumlah, 0)";
            $hsl = $this->db->query($sql);
            return $hsl;
        
    } 
    public function checkTicket($member_id, $event_id, $jumlah)
    {

        $sql = "SELECT id FROM transaksi WHERE member_id = $member_id AND event_id = $event_id";
        $hsl = $this->db->query($sql);

        if ($hsl->num_rows() > 0) {
            $sql1 = "UPDATE transaksi SET active = 1 WHERE member_id = $member_id AND event_id = $event_id";
            $hsl1 = $this->db->query($sql1);

            $sql2="UPDATE event set quota = quota - $jumlah, ticket = ticket + $jumlah WHERE id = $event_id";
            $hsl2 = $this->db->query($sql2);


            return "berhasil";
        } else {
            return "gagal";
        }
    }

    public function get_id_member($member_id){
        $sql1 = "SELECT id FROM member WHERE email = ?";
        $query1 = $this->db->query($sql1, $member_id)->result_array();
        foreach($query1 as $key){
            $wew = $key['id'];
        }
        return $wew;
    }

    function getTransactionNA($member_id, $event_id){
        $sql = "SELECT * FROM transaksi WHERE member_id = $member_id AND event_id = $event_id AND active = 0";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

}
