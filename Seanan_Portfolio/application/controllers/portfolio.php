<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portfolio extends CI_Controller {
	public function index()
	{
		$this->home();
	}

	public function home(){
		$this->load->model("model_get");
		$data["results"] = $this->model_get->getData("home");

		$this->load->view("nav");
		$this->load->view("home", $data);
	}

	public function aboutme(){
		$this->load->model("model_get");
		$data["results"] = $this->model_get->getData("aboutme");

		$this->load->view("nav");
		$this->load->view("aboutme", $data);
	}

	public function contact(){
		$this->load->view("nav");
		$this->load->view("contact");
	}

	public function projects(){
		$this->load->model("model_get");
		$data["results"] = $this->model_get->getData("projects");

		$this->load->view("nav");
		$this->load->view("projects", $data);
	}

	public function resume(){
		$this->load->view("nav");
		$this->load->view("resume");
	}

	public function login(){
		$this->load->view("nav");
		$data["message"] = "";
		$this->load->view("login", $data);
	}
	public function admin(){
		$this->load->view("nav");
		$this->load->view("admin");
	}

	public function login_validation(){
			$user = $this->input->post('username');
			$pass = $this->input->post('password');

			//aqquire the database values
			$query = $this->db->query("SELECT * FROM users");
			foreach ($query->result_array() as $row)
			{
				$username = $row['username'];
				$password = $row['password'];
				$salt = $row['salt'];
			}

			//append the salt and the entered password
			$pass .= $salt;

			//hash the appended salt and entered password
			//check if it matches the database values
			if(md5($pass) == $password && $username == $user){
				redirect('portfolio/admin');
			}
			else{
				?>
				<script>alert('The username or password you\'ve entered is invalid.')</script>
				<?php
				$this->login();
			}
}
}
?>
