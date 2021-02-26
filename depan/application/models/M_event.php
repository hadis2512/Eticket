<?php
class M_event extends CI_Model
{

    function get_all_event()
    {
        $sql = "SELECT * FROM event  ORDER BY ID ;";
        $res = $this->db->query($sql);
        return $res->result_array();
    }
    function get_id()
    {
        $sql = "select * from event ORDER BY ID DESC limit 1 ";
        $res = $this->db->query($sql);
        return $res;
    }

    function get($id)
    {        

        $this->db->where('id', $id);
        $res = $this->db->get('event');
        return $res;
    }

    function save_event($name, $venue, $start1, $end1, $picture, $content, $quota, $speaker, $moderator)
    {
        // $sql = "INSERT INTO event (name,venue,start,end,picture,content,quota,speaker,moderator) VALUES (?,?,?,?,?,?,?,?,?)";
        // $hsl = $this->db->query($sql, array($name, $venue, $start1, $end1, $picture, $content, $quota, $speaker, $moderator));
        // return $hsl;
        $data = array(
            'name' => $name,
            'venue' => $venue,
            'start' => $start1,
            'end' => $end1,
            'picture' => $picture,
            'content' => $content,
            'quota' => $quota,
            'speaker' => $speaker,
            'moderator' => $moderator
        );
        $this->db->insert('event', $data);
    }

    function save_event1($name, $venue, $start1, $end1, $content, $quota, $speaker, $moderator)
    {
        // $sql = "INSERT INTO event (name,venue,start,end,content,quota,speaker,moderator) VALUES (?,?,?,?,?,?,?,?)";
        // $hsl = $this->db->query($sql, array($name, $venue, $start1, $end1, $content, $quota, $speaker, $moderator));
        // return $hsl;
        $data = array(
            'name' => $name,
            'venue' => $venue,
            'start' => $start1,
            'end' => $end1,
            'content' => $content,
            'quota' => $quota,
            'speaker' => $speaker,
            'moderator' => $moderator
        );
        $this->db->insert('event', $data);
    }

    function update_event($id, $name, $venue, $start1, $end1, $picture, $content, $quota, $speaker, $moderator)
    {
        $sql = "UPDATE event set name=?, venue=?, start=?, end=?, picture=?, content=?, quota= ?,speaker=?, moderator=? WHERE id=?";
        $hsl = $this->db->query($sql, array($name, $venue, $start1, $end1, $picture, $content, $quota, $speaker, $moderator, $id));
        return $hsl;        
    }

    function update_event1($id, $name, $venue, $start1, $end1, $content, $quota, $speaker, $moderator)
    {
        $sql = "UPDATE event set name=?, venue=?, start=?, end=?, content=?, quota= ?,speaker=?, moderator=? WHERE id=?";
        $hsl = $this->db->query($sql, array($name, $venue, $start1, $end1, $content, $quota, $speaker, $moderator, $id));
        return $hsl;        
    }

    function delete_event($id)
    {
        // $sql = "DELETE FROM event where id=?";
        // $hsl = $this->db->query($sql, array($id));
        // return $hsl;
        $this->db->delete('event', array('id' => $id));
    }
    function save($name, $venue)
    {
        $data = array(
            'name' => $name,
            'venue' => $venue
        );
        $this->db->insert('event', $data);
    }
}
