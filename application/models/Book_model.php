<?php
Class Book_model extends CI_model {
	public function getBooks(){
		$this->db->select('*');
		$this->db->from('books');
		return $this->db->get()->result_array();
	}

	public function addBook($insert_data){
		$this->db->insert('books',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function deleteBook($chosen_id) {
		$this->db->where('BookID',$chosen_id);
		$this->db->delete('books');
	}

	public function updateBook($update_data,$BookID){
		$this->db->where('BookID',$BookID);
		$this->db->update('books',$update_data);

	}
}
