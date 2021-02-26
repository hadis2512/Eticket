<?php
class M_news extends CI_Model{

    function get_all(){
		$sql = "SELECT * FROM news";
		$hsl =$this->db->query($sql);
		return $hsl;
	}
	function get($id)
	{
		// $sql = "SELECT * FROM event WHERE id=?";
		// $hsl = $this->db->query($sql, array($id));
		// return $hsl;

		$this->db->where('id', $id);
		$res = $this->db->get('news');
		return $res;
	}

	function save_news($topic, $author, $picture, $content){
		$set_date = date_default_timezone_set("Asia/Jakarta");
		$date = date("d-m-Y H:i:s");

	$sql = "INSERT INTO news(topic, author, date, picture, content) values (?,?,?,?,?)";
	$hsl=$this->db->query($sql, array($topic, $author, $date, $picture, $content));
	return $hsl;
	}

	function save_news1($topic, $author, $date, $content){
	$sql = "INSERT INTO news(topic, author, date, content) values (?,?,?,?)";
	$hsl=$this->db->query($sql, array($topic, $author, $date, $content));
	return $hsl;
	}


	function update_news($id, $topic, $author, $picture, $content)
	{
		$sql = "UPDATE news set topic=?, author=?, picture=?, content=? WHERE id=?";
		$hsl = $this->db->query($sql, array($topic, $author, $picture, $content, $id));
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

	function update_news1($id, $topic, $author, $date, $content)
	{
		$sql = "UPDATE news set topic=?, author=?, content=? WHERE id=?";
		$hsl = $this->db->query($sql, array($topic, $author, $content, $id));
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

	function delete_news($id)
	{
		// $sql = "DELETE FROM event where id=?";
		// $hsl = $this->db->query($sql, array($id));
		// return $hsl;
		$this->db->delete('news', array('id' => $id));
	}
}