<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function show_orders(){
		$this->load->model('Order_model');
		$data['orders']=$this->Order_model->getOrders();
		$data['page']='order/show_orders';
		$this->load->view('menu/content',$data);
	}

	public function add_orders() {
		$this->load->model('Order_model');
		$this->load->model('Book_model');
		$data['books']=$this->Book_model->getBooks();
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$insert_data=array(
				"Order_ID"=>$this->input->post('Order_ID'),
				"BookID"=>$this->input->post('BookID'),
				"Order_date"=>$this->input->post('Order_date'),
				"Transport_time"=>$this->input->post('Transport_time'),
				"Number_of_books"=>$this->input->post('Number_of_books'),
				"Payment"=>$this->input->post('Payment')
				);
			$data['orders']=$this->Order_model->addOrders($insert_data);

		}
		$data['page']='order/add_orders';
		$this->load->view('menu/content',$data);
	}

	public function delete_orders() {
		$this->load->model('Order_model');
		$data['orders']=$this->Order_model->getOrders();
		$data['page']='order/delete_orders';
		$this->load->view('menu/content',$data);
	}

	public function show_remove_order ($chosen_id) {
		$this->load->model('Order_model');
		$data['orders']=$this->Order_model->getRemoveOrders($chosen_id);
		$data['page']='order/show_delete_orders';
		$this->load->view('menu/content',$data);
	}
	public function remove_order($chosen_id){
		$this->load->model('Order_model');
		$this->Order_model->deleteOrders($chosen_id);
		$this->delete_orders();
	}

	public function update_orders() {
		$this->load->model('Order_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$Order_date=$this->input->post('Order_date');
			$Transport_time=$this->input->post('Transport_time');
			$Number_of_books=$this->input->post('Number_of_books');
			$Payment=$this->input->post('Payment');
			$Order_ID=$this->input->post('Order_ID');
			//calculate rows
			$rows=0;
			foreach ($Order_ID as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(
					"Order_date"=>$Order_date[$x],
					"Transport_time"=>$Transport_time[$x],
					"Number_of_books"=>$Number_of_books[$x],
					"Payment"=>$Payment[$x]
					);
				$this->Order_model->updateOrders($update_data,$Order_ID[$x]);
			}

		}

		$data['orders']=$this->Order_model->getOrders();
		$data['page']='order/update_orders';
		$this->load->view('menu/content',$data);
	}
}
