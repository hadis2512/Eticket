<?php
class M_news extends CI_Model
{

    function get_all_news()
    {
        $sql = "SELECT * FROM news  ORDER BY ID ;";
        $res = $this->db->query($sql);
        return $res->result_array();
    }
    function get($id)
    {        

        $this->db->where('id', $id);
        $res = $this->db->get('news');
        return $res;
    }
}
   ?>