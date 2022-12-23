<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function login()
	{
		$this->load->view('login');
	}

	public function index()
	{
		$this->load->view('index'); 
	}

	function add_student()
	{
		// $this->load->view('add_student');

		$this->load->model('Student_model');
		if($this->input->post()){
			$this->Student_model->insert_student();
			redirect(current_url());
		}
		else
			$this->load->view('add_student');

	}

	public function list_student() 
	{
		// $this->load->view('list_student');
		$this->load->model('Student_model');
		$data['fetch'] = $this->Student_model->fetch_data();
		$this->load->view('list_student',$data);
	}

	public function edit_student()
	{
		$this->load->model('Student_model');
		$data['edit'] = $this->Student_model->edit_student($this->uri->segment('3'));
		$this->load->view('edit_student', $data);
		
	}

	public function update()
	{
		$this->Student_model->student_update($this->uri->segment('3'));

	}
	
	public function delete()
	{
		$this->Student_model->delete_student($this->uri->segment('3'));
		// $this->list_student();
	}

	function teacher()
	{
		// $this->load->view('add_student');

		$this->load->model('Student_model');
		if($this->input->post()){
			$this->Student_model->insert_teacher(); 
			redirect(current_url());
		}
		else
			$this->load->view('teacher');

	}

	function list_teacher()
		{
			$this->load->model('Student_model');
			$data['fetch'] = $this->Student_model->fetch_teacher();
			$this->load->view('list_teacher',$data);

		}
	

		public function ajax()
			{
				$return = array();
				if($post = $this->input->post() )
				{
					switch ($post['status'])
					{
						
								case 'delete_teacher':
									$this->db->where('id',$post["id"])->delete("teacher");
									$return['status'] = '<div class="alert alert-danger"><h4>Delete Employee Successfully..</h4></div>';
									redirect(current_url());
								break;

					}
					echo json_encode($return); 
				}
			}

}
