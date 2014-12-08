<?php 
	class main extends CI_controller{
		function __construct(){
		parent::__construct();
            
            $this->load->model('member','member');
            $this->load->model('shop','shop');
	
		}
		public function index(){

			echo "main page";


		}

		public function login(){

			$this->load->view('login');



		}

		public function login_check(){

			$username=$this->input->post('username');
			$password=$this->input->post('password');
			//echo "$username"." "."$password";
			$this->load->library('login_system');
			$this->login_system->check($username,$password);
			



		}

		














	}









?>
