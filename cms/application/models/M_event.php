<?php
class M_event extends CI_Model
{

	function get_all_event()
	{
		// $sql = "SELECT * FROM event";
		// $hsl = $this->db->query($sql);
		// return $hsl;
		// $sql = "SELECT * FROM event";

		$this->db->order_by("id", "desc");
		$res = $this->db->get('event');
		$data = array();


		// foreach ($res->result() as $a) {
		// 	$data['id'][] = $a->id;
		// 	$data['name'][] = $a->name;
		// 	$data['venue'][] = $a->venue;;
		// 	$data['start'][] = $a->start;
		// 	$data['end'][] = $a->end;
		// 	$data['quota'][] = $a->quota;
		// 	$data['picture'][] = $a->picture;
		// }
		return $res;
	}
	function get($id)
	{
		// $sql = "SELECT * FROM event WHERE id=?";
		// $hsl = $this->db->query($sql, array($id));
		// return $hsl;

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
		// 	$data = array(
		// 		'name' => $name,
		// 		'venue' => $venue,
		// 		'start' => $start1,
		// 		'end' => $end1,
		// 		'picture' => $picture,
		// 		'content' => $content,
		// 		'quota' => $quota,
		// 		'speaker' => $speaker,
		// 		'moderator' => $moderator
		// 	);

		// 	$this->db->where('id', $id);
		// 	$this->db->update('event', $data);
	}

	function update_event1($id, $name, $venue, $start1, $end1, $content, $quota, $speaker, $moderator)
	{
		$sql = "UPDATE event set name=?, venue=?, start=?, end=?, content=?, quota= ?,speaker=?, moderator=? WHERE id=?";
		$hsl = $this->db->query($sql, array($name, $venue, $start1, $end1, $content, $quota, $speaker, $moderator, $id));
		return $hsl;
		// $data = array(
		// 	'name' => $name,
		// 	'venue' => $venue,
		// 	'start' => $start1,
		// 	'end' => $end1,
		// 	'content' => $content,
		// 	'quota' => $quota,
		// 	'speaker' => $speaker,
		// 	'moderator' => $moderator
		// );

		// $this->db->where('id', $id);
		// $this->db->update('event', $data);
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
