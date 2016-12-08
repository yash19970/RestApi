<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Api_model extends CI_Model{
	public function read($id){
		$q = $this->db->query("SELECT * FROM books WHERE id= '$id' ");
		if($q->num_rows() >0){
			return $q->result_array();
		}else{
			return FALSE;
		}	
	}
	public function readall(){
		$q = $this->db->query("SELECT * FROM books");
		if($q->num_rows() >0){
			return $q->result_array();
		}else{
			return FALSE;
		}	
	}
	public function insert_data($data){
		$q = $this->db->insert('books',$data);
		if($q){
			return TRUE;}
			else{
				return FALSE;
			}
	}
	public function update_data($data,$id){
		$this->db->where('id',$id);
		$this->db->update('books',$data);
	}
	public function delete_data($id){
		$this->db->delete('books',array('id'=>$id));
	}
}?>