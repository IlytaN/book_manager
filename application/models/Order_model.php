<?php
Class Order_model extends CI_model {
	public function getOrders(){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->order_by("Order_ID", "asc");
    $this->db->join('books', 'books.BookID = orders.BookID');
		return $this->db->get()->result_array();
	}

	public function addOrders($insert_data){
		$this->db->insert('orders',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function deleteOrders($chosen_id) {
		$this->db->where('Order_ID',$chosen_id);
		$this->db->delete('orders');
	}

	public function updateOrders($update_data,$Order_ID){
		$this->db->where('Order_ID',$Order_ID);
		$this->db->update('orders',$update_data);

	}
}
