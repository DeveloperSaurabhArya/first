<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
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
			$this->Student_model->insert_data();
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

	// public function teacher()
	// {
	// 	$this->load->view('teacher');
	// }


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

}
