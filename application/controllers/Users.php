<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Users extends CI_controller{

		//Dashboard Method
		
		
	// register methods
	public function register(){
		if(isset($_POST['register'])){
			$this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[2]|trim');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[2]|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[2]');
			$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[2]|matches[password2]');
			$this->form_validation->set_rules('password', 'Confirm_Password', 'required|trim|min_length[2]|matches[password]');
			$this->form_validation->set_rules('type', 'Select Account Type');
    
		//echo 'Everything is working fine from this ends';
		
		//checking to ensure all user registration data are valid
		if($this->form_validation->run() == false){
			$data['main_content'] = 'register';
			$this->load->view('layout/main', $data);
			
			}else{
					/*save all user registreation data to the database abd redirect him to user
					* dashboard or home page
				`   */
				$this->User_model->register();
				
				redirect('jobs');
				}
		
			
			
			}else{
				$data['main_content'] = 'register';
				
				$this->load->view('layout/main', $data);
				
				}
		
		
		}
		

	
}



?>