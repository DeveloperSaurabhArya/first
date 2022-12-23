<?

class Student_model extends CI_Model
{
	public function insert_student()
	{
		$data = array('name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'mobile' => $this->input->post('mobile'),
						'address' => $this->input->post('address')
		);
		$this->db->insert('student',$data);
	}

	public function fetch_data()
	{
		$this->db->select('*');
		$s = $this->db->get('student');
		return $s;
	}

	

	public function edit_student($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$row = $this->db->get('student');
		return $row->row_array();
	}

	public function student_update($id)
	{
		$data = array('name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'mobile' => $this->input->post('mobile'),
						'address' => $this->input->post('address')
		);
		$this->db->where('id',$id);
		$this->db->update('student',$data);
		
	}

	public function delete_student($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('student');
	}

	public function insert_teacher()
	{
		$data = array('t_name' => $this->input->post('t_name'),
						't_email' => $this->input->post('t_email'),
						't_mobile' => $this->input->post('t_mobile'),
						'qualification' => $this->input->post('qualification')
		);
		$this->db->insert('teacher',$data);
	}

	function fetch_teacher()
	{
		$this->db->select('*');
		$sau = $this->db->get('teacher');
		return $sau;
	}

}

?>
