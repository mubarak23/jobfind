<?php
Class Job_model extends CI_Model{
	
	//getting the jos from the database
		public function get_jobs(){
			
			
			$this->db->select('jobs.*, categories.*, types.*, users.*');
			$this->db->from('jobs');
			$this->db->join('categories', 'jobs.category_id = categories.category_id');
			$this->db->join('types', 'jobs.type_id = types.type_id');
			$this->db->join('users', 'jobs.user_id = users.user_id');
		
			
			$q = $this->db->get();
			return $q->result_array();
			
			
			}
			
			
			//adding new job to the database
			public function add($data){
				$insert = $this->db->insert('jobs', $data);
				
				//checking to ensure data is fully submitted to db
				if($insert){
					return true;
					
					}else{
						return false;
						}
				}
				
			//search of keyword, state category
			public function search($data){
				$this->db->select('*');
				$this->db->from('jobs');
				$this->db->like($data);
				
				//run the query
				$query = $this->db->get();
				return $query->row();
				
				}	
				
				
				//get details each job
				public function get_job_details($id){
						$this->db->select('jobs.*, categories.*, types.*');
						$this->db->where('id', $id);
						$this->db->from('jobs');
						$this->db->join('categories', 'jobs.category_id = categories.category_id');
						$this->db->join('types', 'jobs.type_id = types.type_id');
						//$this->db->where('id', $id);
						
						$query = $this->db->get();
						return $query->row();
					
					//$this->db->select('*');
					//$this->db->where('id', $id);
					//$this->db->from('jobs');
					
					//$query = $this->db->get();
					//return $query->row();
					
					
				//$this->db->select('categories.*, jobs.*');
//				$this->db->where('id',$id);
//				$this->db->from('jobs');
//				$this->db->join('categories', 'jobs.category_id = categories.category_id');
//				$query = $this->db->get();
//				return $query->result_array();
//					
				}
				
				
				public function booking($data){
					$insert = $this->db->insert('booking', $data);
					
					//check to ensure all data in stored in the db
					if($insert){
						true;
						}else{
							false;
							}
					}
	
	
	}


?>