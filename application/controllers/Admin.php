<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	Class Admin extends CI_Controller{
		
		
		// index method that full and setup the admin dashboard
			public function index(){
				if(!$this->session->userdata('logged_in')){
					redirect('admin/login');
					}
				
				$data['title'] = "Welcome to Admin Dashboard";
				
				$data['main_content'] = "admin/dashboard";
				
				//pull activity data from the database
				$data['jobs'] = $this->Admin_model->jobs();
				//var_dump($data['jobs']);
			
				
				
				$this->load->view('admin/layout/main', $data);
				
				}
						
			
		public function login(){
				If(isset($_POST['login'])){
					
					$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');
					$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
					
					if($this->form_validation->run() == false){
						
						$data['main_content'] = 'login';
						
						$this->load->view('admin/login', $data);
						
						}else{
							$username = $this->input->post('username');
							$password = $this->input->post('password');
							
							$user_id = $this->Admin_model->login($username, $password);
							
								if($user_id){
									
									$user_data = array(
											'user_id'  => $user_id,
											'username' => $username,
											'logged_in'	   => true,
											);
									//setting user data session
									$this->session->set_userdata($user_data);
									
									// a success message of login
									$this->session->set_flashdata('Success', 'You are logged in');
									
									//redirect to admin view section
									redirect('admin');
											
									}else{
										redirect('admin/login');
										//echo ' unbale to login at this time due to db error';
										//die();
											
										}
							
							}
					
					
					}else{
						// setting needed dates
						
						$data['title'] = 'Admin Login View';
						
						$data['main_content'] = "admin/login";
						
						$this->load->view('admin/login', $data);
						
						}
			
			}
			
			
			public function logout(){
				
				// unsetting all session
				$this->session->unset_userdata('user_id');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('logged_in');
				
				// a success message of login
				$this->session->set_flashdata('Success', 'You are logged out');
				redirect('admin/login');
				
				}
				
				
				
				//method all postin new job opennning by admin
				public function add(){
					
					if(!$this->session->userdata('logged_in')){
							redirect('admin/login');
						}
					
					if(isset($_POST['add_job'])){
						$this->form_validation->set_rules('name', 'Company Name', 'required|min_length[3]|trim');
						$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|trim');
						$this->form_validation->set_rules('description', 'Description', 'required|min_length[3]|trim');
						$this->form_validation->set_rules('requirement', 'Requirement', 'required|min_length[3]|trim');
						$this->form_validation->set_rules('category', 'Category', 'required|trim');
						$this->form_validation->set_rules('type', 'Mode of Employment', 'required|trim');
						$this->form_validation->set_rules('city', 'City', 'required|trim');
						$this->form_validation->set_rules('email', 'Contact Email', 'required|valid_email');
						
						//checking to ensure all form validation rulws are made
						if($this->form_validation->run() == TRUE){
							//collect all dat from the form and store them the db and redirect to
							// dashboard
							
							$data = array(
								'category_id'	 => $this->input->post('category'),
								'user_id'	 => $this->session->user_id,
								'type_id'    => $this->input->post('type'),
								'company_name'  => $this->input->post('name'),
								'title' => $this->input->post('title'),
								'description' => $this->input->post('description'),
								'requirement' => $this->input->post('requirement'),
								'city'		 => $this->input->post('city'),
								'contact_email' => $this->input->post('email')	
								
								);
								
								$add = $this->Admin_model->add($data);
								
								if($add){
										redirect('admin');
									}else{
										return False;
										}
							
							}else{
								$data['title'] = 'Welcome to add New Job Section';
								$data['main_content'] = 'admin/add';
								
								$data['categories'] = $this->Admin_model->sections();
								$data['types'] = $this->Admin_model->modes();
							
								
								$this->load->view('admin/layout/main', $data);
								
								}
						
						
						}else{
							$data['title'] = 'Welcome to Add  New Job Section';
							$data['main_content'] = 'admin/add';
							$data['categories'] = $this->Admin_model->sections();
							$data['types'] = $this->Admin_model->modes();
							
							
							$this->load->view('admin/layout/main', $data);
								
							
							
							//var_dump($data['jobs']);
		//exit(var_export($data['jobs']));
							}
					
					
					}
					
					
			public function edit(){
				
				if(!$this->session->userdata('logged_in')){
					redirect('admin/login');
					}
					
					if(isset($_POST['edit'])){
						
						$this->form_validation->set_rules('name', 'Company Name', 'required|min_length[3]|trim');
						$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|trim');
						$this->form_validation->set_rules('description', 'Description', 'required|min_length[3]|trim');
						$this->form_validation->set_rules('requirement', 'Requirement', 'required|min_length[3]|trim');
						$this->form_validation->set_rules('category_id', 'Category', 'required|trim');
						$this->form_validation->set_rules('type_id', 'Mode of Employment', 'required|trim');
						$this->form_validation->set_rules('city', 'City', 'required|trim');
						$this->form_validation->set_rules('email', 'Contact Email', 'required|valid_email');
						
						if($this->form_validation->run() == false){
							// redirect user to the edit page and show the error  for correction
							 $id = $this->uri->segment(3);
							
							
							$data['title'] = 'Edit Job';
							$data['main_content'] = 'admin/edit';
							$data['category'] = $this->Admin_model->sections();
							$data['types']  = $this->Admin_model->modes();
							$data['edit_job'] = $this->Admin_model->details($id);
							
							
							}else{
							//collect all data into an array and pass them to the model
							
							$id = $this->uri->segment(3);
							//die();
							$data = array(
								'company_name' => $this->input->post('name'),
								'title'		   => $this->input->post('title'),
								'description'  => $this->input->post('description'),
								'Requirement'  => $this->input->post('requirement'),
								'category_id' => $this->input->post('category_id'),
								'user_id'     => $this->session->user_id,
								'type_id'	  => $this->input->post('type_id'),
								'city'		   => $this->input->post('city'),
								'contact_email' => $this->input->post('email')	
							
							);
							
							//var_dump($data);
						$edit = $this->Admin_model->update($id, $data);
							//echo 'Welcome Home';
							//die;
							redirect('admin');
					
								}
						}else{
						 $id = $this->uri->segment(3);
						// echo $id;
						 //die;
						 $data['title'] = 'Edit of Job';
						 $data['main_content']  = "admin/edit";
						 
						 $data['categories'] = $this->Admin_model->sections();
						 $data['types'] = $this->Admin_model->modes();
						 $data['edit_job'] = $this->Admin_model->details($id);
						 
						 $this->load->view('admin/layout/main', $data);	
							
						 }
				}
				public function delete(){
					$id = $this->uri->segment(3);
					
					
					$data['title'] = "delete a job";
					
					$delete = $this->Admin_model->delete($id);
					
					redirect('admin');
					}		
						
		
		}







?>