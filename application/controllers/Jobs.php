<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {


	public function index(){
		$data['title'] = 'Welcome to Jobfind Job Portal';
		
		$data['main_content'] = 'jobs';
		
		//getting all details of jobs
		$data['jobs'] = $this->Job_model->get_jobs();
		
		
		//loading the view file
		$this->load->view('layout/main', $data);
		
	}
	
	
	public function add(){
		// method that add new Jobs
		if(isset($_POST['submit'])){
			
			
			
			// validate jobs and add them to the database
			$this->form_validation->set_rules('name','Company Name','trim|required|min_length[2]');
			$this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
			$this->form_validation->set_rules('description','Description','trim|required');
			$this->form_validation->set_rules('requirement','Requirement','trim|required');
			$this->form_validation->set_rules('category', 'Category', 'trim|required');
			$this->form_validation->set_rules('city','City','trim|required|min_length[3]');
			
			//checking to ensure the rules are followed by all input form
			
			if($this->form_validation->run() == FALSE){
				$data['main_content'] = 'add_job';
				$this->load->view('layout/main', $data);
				//echo 'everything is  not working fine';
				
				}else{
				//collect all the data from the form and put in the db and redirect use to home page
				
				$data = array(
							'company_name' => $this->input->post('name'),
							'category_name'	   => $this->input->post('category'),	
							'title'		   => $this->input->post('title'),
							'description'  => $this->input->post('description'),
							'requirement'  => $this->input->post('requirement'),
							'city' 		   => $this->input->post('city')	
						);
						
						//save all details to the database
						$this->Job_model->add($data);
						
						
						//upon suceessfull data deployment to db
						redirect('jobs');
				
					
					}

			}else{
				
				$data['main_content'] = 'add_job';
				
				$this->load->view('layout/main', $data);
				}
		
		}
		
		
		public function search(){
			//echo "everything is working fine";
			
			if(isset($_POST['search'])){
				//collecting search terms
				$keyword  = $this->input->post('keyword');
				$state   = $this->input->post('state');
				$category = $this->input->post('category');
				
				//check to ensure all field are not empy
				if(!empty($keyword) AND !empty($state) AND !empty($category)){
					$data = array('Description' => $keyword, 
							'Category_name' => $category,
							'Company_name' => $keyword,
							'Requirement' => $keyword
							);
					
					$data['searchs'] = $this->Job_model->search($data);
					//echo 'everything is working fine up until this point';
					//die();
					$data['main_content'] = 'searchs';
					
					$this->load->view('layout/main', $data);
					
					}
				
				}else{
					$data['main_contain'] = 'jobs';
					$this->load->view('layout/main', $data);
					}
			
			}
			
			
			//view details of one job posting
			public function details(){
				$id = $this->uri->segment(3);
				
				
				$data['details'] = $this->Job_model->get_job_details($id);
				//exit(var_export($data['details']));
				
				$data['main_content'] = "details";
				
				$this->load->view('layout/main', $data);
				
				}
				
				
				
			//job booking method
			public function booking_job(){
				$id = $this->uri->segment(3);
				$data['data_book'] = $this->Job_model->get_job_details($id);
				
				if(isset($_POST['booking'])){
					
					
					
					$this->form_validation->set_rules('surname','Surname','trim|required|min_length[2]');
					$this->form_validation->set_rules('firstname','Firstname','trim|required|min_length[2]');
					$this->form_validation->set_rules('P_email','Primary Email Address','trim|required|valid_email[]');
					$this->form_validation->set_rules('qualification','Last Qualification','required');
					
					$this->form_validation->set_rules('Year_Q','Year Obtained','required');
					
					$this->form_validation->set_rules('company_name','Company Name','trim|required|min_length[2]');
					$this->form_validation->set_rules('year_e','Year','required');
					
					$this->form_validation->set_rules('city','Current City','trim|required');
					
					//$this->form_validation->set_rules('CV','Upload Your Cv','trim|required');
					
					
					//checking to ensure all validation is ok
					if($this->form_validation->run() == True){
						$id = $this->uri->segment(3);
						
						 
						 $data = array(
						 	'job_id'    => $this->input->post('job_id'),
						 	'firstname' => $this->input->post('firstname'),
							'surname'   => $this->input->post('surname'),
							'primary_email' => $this->input->post('P_email'),
							'qualification' => $this->input->post('qualification'),
							'year_q'	=> $this->input->post('Year_Q'),
							'company_name' 	=> $this->input->post('company_name'),
							'year_e'    => $this->input->post('year_e'),
							'city'		=> $this->input->post('city')
							
						 );
						 
						 
						 $booking = $this->Job_model->booking($data);
						 redirect('jobs');
						 
						 //after applying the job redirect them to them to thank you page and send 
						 // them a an email about their job
						
						//echo $id;
						
						}else{
						$id = $this->uri->segment(3);
						
						$data['data_book'] = $this->Job_model->get_job_details($id);
				
						
						$data['title'] = 'Booking page';
						$data['main_content'] = 'booking';
						$this->load->view('layout/main', $data);
							
							
							}
					
					}else{
						
				$id = $this->uri->segment(3);
				$data['data_book'] = $this->Job_model->get_job_details($id);
						
						
						$data['title'] = 'Booking page';
						$data['main_content'] = 'booking';
						$this->load->view('layout/main', $data);
						
						}
				
				}
		
	
}
