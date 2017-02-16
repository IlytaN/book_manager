<?php
Class Order_model extends CI_model {
	public function getOrders(){
		$this->db->select('*');
		$this->db->from('orders');
    $this->db->join('books', 'books.BookID = orders.BookID');
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
