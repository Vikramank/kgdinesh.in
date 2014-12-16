<?php
class Messages_model extends CI_Model {

	function get_messages()
	{
		$query = $this->db->get('messages');
		return $query->result();
	}
	
	function add_message($message, $name)
	{
		$data = array('id' => null, 'message' => $message, 'user' => $name);
		$this->db->insert('messages', $data);
	}
}
?>