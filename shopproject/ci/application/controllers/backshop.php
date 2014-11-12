<?php
	
	class backshop extends CI_controller{
		function __construct(){
			parent::__construct();
			$this->load->model('member','member');
			$this->load->model('shop','shop');



		}

		public function index(){

			$this->load->view('loginadmin');
			//$this->load->view('myshop.php');

		}

		public function checkup(){
			
			$user=$this->input->post('username');
			$pass=$this->input->post('password');
			$this->member->user=$user;
			$this->member->pass=$pass;
			$this->member->checkmember();
			if($this->session->userdata('status')=="t"){
				
				$this->session->set_userdata('loginname',"$user");
				$this->myshop();
				//echo "true username and password";

			}else{

				if($this->session->userdata('status')=="f"){
				echo '<script language="javascript">';
				echo 'alert("Wrong Username or Password")';
				echo '</script>';
				$this->index();
				}
				

			}

			

			
		}

		public function myshop(){


			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			$data['user']=$this->session->userdata('loginname');
			$data['userid']=$this->session->userdata('memberid');	
			$this->load->view('myshop',$data);
			
			}
		}

		public function logout(){
			$this->session->unset_userdata('loginname');
			$this->index();

		}

		public function testshop(){
			$this->load->view('backshop');
		}


	}





	



?>