<?php

 Class Admin_model extends CI_Model{
	 
	 	// Full detyails from the database
	 	public function jobs(){
			$this->db->select('jobs.*, categories.*, types.*, users.*');
			$this->db->from('jobs');
			$this->db->join('categories', 'jobs.category_id = categories.category_id');
			$this->db->join('types', 'jobs.type_id = types.type_id');
			$this->db->join('users', 'jobs.user_id = users.user_id');
			
			// ruuniojg the query
			$query = $this->db->get();
			return $query->result_array();
			}
	 
			
			
			//login method
			public function login($username, $password){
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where('username', $username);
				$this->db->where('password', $password);
				$this->db->limit(1);
				
				$query = $this->db->get();
				
				if($query->num_rows() == 1){
					return $query->row()->user_id;
					}else{
						return false;
						}
				
				}
				
				public function sections(){
					$this->db->select('*');
					$this->db->from('categories');
					
					// run the quoery
					$query = $this->db->get();
					return $query->result_array();
					
					}
					
			 public function modes(){
				 $this->db->select('*');
				 $this->db->from('types');
				 
				 //run the query
				 $query = $this->db->get();
				 return $query->result_array();
				
				 }	
				 
			 public function add($data){
				 $insert = $this->db->insert('jobs', $data);
				 
				 if($insert){
					 return True;
					 }else{
						 return False;	
						 }
				 
				 }	
				 
			public function details($id){
				$this->db->select('jobs.*, categories.*, types.*');
				$this->db->from('jobs');
				$this->db->where('id', $id);
				$this->db->join('categories', 'jobs.category_id = categories.category_id');
				$this->db->join('types', 'jobs.type_id = types.type_id');
			//$this->db->where('id', $id);
						
				$query = $this->db->get();
				return $query->row();
				
				}	  	
	 
	 public function update($id, $data){
		 $this->db->where('id', $id);
		 $this->db->update('jobs', $data);
		 
		 }
		 
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('jobs');
		
		}	 
	 
	 
	 }






?>