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
				"BookID"=>$this->input->post('BookID'),
				"Book_name"=>$this->input->post('Book_name'),
				"Price_per_item"=>$this->input->post('Price_per_item'),
				"Number"=>$this->input->post('Number')
				);
			$data['books']=$this->Book_model->addBook($insert_data);

		}
		$data['page']='book/add_books';
		$this->load->view('menu/content',$data);
	}

	public function delete_books() {
		//this method will show the books
		$this->load->model('Book_model');
		$data['books']=$this->Book_model->getBooks();
		$data['page']='book/delete_books';
		$this->load->view('menu/content',$data);
	}
	public function show_remove_books ($chosen_id) {
		$this->load->model('Book_model');
		$data['books']=$this->Book_model->getRemoveBooks($chosen_id);
		$data['page']='book/show_delete_books';
		$this->load->view('menu/content',$data);
	}
	public function remove_books($chosen_id){
		$this->load->model('Book_model');
		$this->Book_model->deleteBook($chosen_id);
		$this->delete_books();
	}

	public function update_books() {
		$this->load->model('Book_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$Price_per_item=$this->input->post('Price_per_item');
			$Book_name=$this->input->post('Book_name');
			$Number=$this->input->post('Number');
			$BookID=$this->input->post('BookID');
			//calculate rows
			$rows=0;
			foreach ($BookID as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(
					"Price_per_item"=>$Price_per_item[$x],
					"Book_name"=>$Book_name[$x],
					"Number"=>$Number[$x]
					);
				$this->Book_model->updateBook($update_data,$BookID[$x]);
			}

		}

		$data['books']=$this->Book_model->getBooks();
		$data['page']='book/update_books';
		$this->load->view('menu/content',$data);
	}
}
