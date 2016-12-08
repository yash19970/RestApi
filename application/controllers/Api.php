<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Api extends REST_Controller{
	
	public function index_get(){
		$this->load->view('userdata');

	}
	public function data_post(){
		$this->load->model('Api_model');
		$bookname = $this->input->post('bookname');
		$bookprice = $this->input->post('bookprice');
		$bookauthor = $this->input->post('bookauthor');
		$data = array('book_name'=>$bookname,'book_price'=>$bookprice,'book_author'=>$bookauthor);
		$result = $this->Api_model->insert_data($data);
		//return redirect('Api/viewp');
		$this->response("SUCCESS");
	}
	public function viewp_get(){
		$this->load->model('Api_model');
		$id = $this->uri->segment(3);
		$result = $this->Api_model->read($id);
		if($result){
			$this->response($result);
		}else{
			$this->response("FALSE");
		}
	}
	public function viewall_get(){
		$this->load->model('Api_model');
		$result['value'] = $this->Api_model->readall();
		$this->load->view('alldata',$result);
	}
	public function update_post(){
		$this->load->model('Api_model');
		$data = array('book_name'=>$this->input->post('bookname'),'book_price'=>$this->input->post('bookprice'),'book_author'=>$this->input->post('bookauthor'));
		$id = $this->input->post('id');
		$result = $this->Api_model->update_data($data,$id);
		return redirect('Api/viewall');
	}
	public function updatedata_get(){
		$id['value'] = $this->uri->segment(3);
		$this->load->view('update_data',$id);
	}
	public function delete_get(){
		$this->load->model('Api_model');
		$id = $this->uri->segment(3);
		$result = $this->Api_model->delete_data($id);
		return redirect('Api/viewall');
	}
}?>