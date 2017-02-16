<?php
Class Sold_model extends CI_model {
	public function getSold(){
		$this->db->select('*');
		$this->db->from('sold');
    $this->db->join('books', 'books.BookID = sold.BookID');
		return $this->db->get()->result_array();
	}

	public function addSold($insert_data){
		$this->db->insert('sold',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function deleteSold($chosen_id) {
		$this->db->where('BookID',$chosen_id);
		$this->db->delete('sold');
	}

	public function updateSold($update_data,$BookID){
		$this->db->where('BookID',$BookID);
		$this->db->update('sold',$update_data);

	}
}
