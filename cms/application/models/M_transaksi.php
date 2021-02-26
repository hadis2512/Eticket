<?php
class M_transaksi extends CI_Model
{

    function save($id, $member_id, $event_id, $jumlah, $active)
    {
        // $sql = "INSERT INTO event (name,venue,start,end,picture,content,quota,speaker,moderator) VALUES (?,?,?,?,?,?,?,?,?)";
        // $hsl = $this->db->query($sql, array($name, $venue, $start1, $end1, $picture, $content, $quota, $speaker, $moderator));
        // return $hsl;
        $data = array(
            'id' => $id,
            'member_id' => $member_id,
            'event_id' => $event_id,
            'jumlah' => $jumlah,
            'active' => 0
        );
        $this->db->insert('transaksi', $data);
    } 
}
