<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sold extends CI_Controller {
	public function show_sold(){
		$this->load->model('Sold_model');
		$data['sold']=$this->Sold_model->getSold();
		$data['page']='sold/show_sold';
		$this->load->view('menu/content',$data);
	}

	public function add_sold() {
		$this->load->model('Sold_model');
		$this->load->model('Book_model');
		$data['books']=$this->Book_model->getBooks();
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$insert_data=array(
				"Bill_ID"=>$this->input->post('Bill_ID'),
				"BookID"=>$this->input->post('BookID'),
				"Sold_number"=>$this->input->post('Sold_number')
				);
			$data['sold']=$this->Sold_model->addSold($insert_data);

		}
		$data['page']='sold/add_sold';
		$this->load->view('menu/content',$data);
	}

	public function delete_sold() {
		//this method will show the sold books
		$this->load->model('Sold_model');
		$data['sold']=$this->Sold_model->getSold();
		$data['page']='sold/delete_sold';
		$this->load->view('menu/content',$data);
	}

	public function remove_sold($chosen_id){
		$this->load->model('Sold_model');
		$this->Sold_model->deleteSold($chosen_id);
		$this->delete_sold();
	}

	public function update_sold() {
		$this->load->model('Sold_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$Sold_number=$this->input->post('Sold_number');
			$Bill_ID=$this->input->post('Bill_ID');
			//calculate rows
			$rows=0;
			foreach ($Bill_ID as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(
					"Sold_number"=>$Sold_number[$x]
					);
				$this->Sold_model->updateSold($update_data,$Bill_ID[$x]);
			}

		}

		$data['sold']=$this->Sold_model->getSold();
		$data['page']='sold/update_sold';
		$this->load->view('menu/content',$data);
	}
}
