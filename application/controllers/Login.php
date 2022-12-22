<?
class Login extends CI_Controller
{
	
	function __construct() 
	{
		parent::__construct();
		// phpinfo();
	}

	function index(){
		$this->check_login(); 
	}

	function check_login()
	{
		if($p = $this->input->post())
		{
			$login = $this->db->get_where('login',['username'=>$p['username'],'password'=>$p['password']]);
			if($login->num_rows())
			{
				$row = $login->row();
				$sau = array(
								'id'=>$row->id,
								'username'=>$row->username,
								'password'=>$row->password,
								'user_login'=>true,
				);
				
				$this->session->set_userdata($sau);
				redirect(site_url('Welcome'));
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Invalid Login</div>');
				redirect(site_url('welcome/login'));
			}
		}
		else
		{
			redirect(site_url('welcome'));
		}
	}
}
?>