<?php

 Class User_model extendS CI_Model{
	 
	 // register user data to the database
	 	public function register(){
			$data= array(
						'first_name' => $this->input->post('first_name'),
						'last_name'	 => $this->input->post('last_name'),
						'email'		 => $this->input->post('email'),
						'username'   => $this->input->post('username'),
						'password'   => $this->input->post('password'),
						'role'		 => $this->input->post('type')
					);
			
			$insert = $this->db->insert('users', $data);
			
			//checking to ensure data is properly inserted
			if($insert){
				return true;
				}else{
					return false;
					}
				
			}
			
			
			
	 
	 }






?>