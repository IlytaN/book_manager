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
		$this->db->where('Bill_ID',$chosen_id);
		$this->db->delete('sold');
	}

	public function updateSold($update_data,$Bill_ID){
		$this->db->where('Bill_ID',$Bill_ID);
		$this->db->update('sold',$update_data);

	}
}
