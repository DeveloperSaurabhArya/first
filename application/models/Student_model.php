<?

class Student_model extends CI_Model
{
	public function insert_data()
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
}

?>
