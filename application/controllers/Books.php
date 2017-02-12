<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
	public function show_books(){
		$this->load->model('Book_model');
		$data['books']=$this->Book_model->getBooks();
		$data['page']='book/show_books';
		$this->load->view('menu/content',$data);
	}

	public function add_books() {
		$this->load->model('Book_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$insert_data=array(
				"fname"=>$this->input->post('fn'),
				"lname"=>$this->input->post('ln')
				);
			$data['test']=$this->Book_model->addBook($insert_data);

		}
		$data['page']='book/add_books';
		$this->load->view('menu/content',$data);
	}

	public function delete_books() {
		//this method will show the customers
		$this->load->model('Books_model');
		$data['books']=$this->Book_model->getCustomers();
		$data['page']='book/delete_books';
		$this->load->view('menu/content',$data);
	}

	public function remove_book($chosen_id){
		$this->load->model('Book_model');
		$this->Book_model->deleteBook($chosen_id);
		$this->show_books();
	}

	public function update_customers() {
		$this->load->model('Book_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$a_fname=$this->input->post('fn');
			$a_lname=$this->input->post('ln');
			$id_customers=$this->input->post('id');
			//calculate rows
			$rows=0;
			foreach ($id_customers as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(
					"fname"=>$a_fname[$x],
					"lname"=>$a_lname[$x]
					);
				$this->Book_model->updateBook($update_data,$id_customers[$x]);
			}

		}

		$data['customers']=$this->Customer_model->getCustomers();
		$data['page']='customer/update_customers';
		$this->load->view('menu/content',$data);
	}
}
