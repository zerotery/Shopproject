<?php 
	class main extends CI_controller{
		function __construct(){
		parent::__construct();
            
            $this->load->model('member','member');
            $this->load->model('shop','shop');
	
		}
		public function index(){
			$status=NUll;
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);
			$status=$this->input->get('Status');
			if(!empty($status)){
				echo "$status";
			}else{
				$status=0;
				echo "$status";
			}
			$data['status']=$status;
			
			$this->load->view('main',$data);


		}

		public function login(){
			 $lang=$this->load_language->lang();
             $this->lang->load($lang,$lang);

			 $this->load->view('login');



		}

		public function login_check(){

			$username=$this->input->post('username');
			$password=$this->input->post('password');
			//echo "$username"." "."$password";
			$this->load->library('login_system');
			$this->login_system->check($username,$password);
			



		}


		public function chenge_lang($type){
			$this->load_language->change_lang($type);
			$page = $this->session->userdata('address');
			
			$temp = explode("/index.php/",$page);

			$url=$temp[0].'/'.$temp[1];
			
			//print_r($temp);
            //$picname_profile = "profile" . '.' .end($temp);
			header("Refresh: 0; url=$url");
			//redirect($page, 'refresh');
 			
		}

		














	}









?>
