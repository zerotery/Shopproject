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
			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			$data['user']=$this->session->userdata('loginname');
			$data['userid']=$this->session->userdata('memberid');	
			
			//$this->shop->showshop();
			$data['myshopname'] = $this->shop->showshop();
			$this->load->view('myshop',$data);
			
			}
		}

		public function logout(){
			$this->session->unset_userdata('loginname');
			$this->session->sess_destroy();
			$this->index();

		}

		public function gobackshop(){

			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			
			//$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			//$data['id']=$id;
			$nameshop = $this->session->userdata("$id");
			$this->session->set_userdata('shopname',$nameshop);
			$this->activeshop();
			//$this->load->view('backshop',$data);
			}
		}

		public function activeshop(){
			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);
			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{

			$data['user']=$this->session->userdata('loginname');
			$data['nameshop']=$this->session->userdata('shopname');
			$this->load->view('backshop',$data);
			}

		} 

		public function changemyshop($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/myshop', 'refresh');
			//$this->myshop();
			//redirect("","refresh");
		}
		public function changebackshop($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/activeshop', 'refresh');
		}	//$this->gobackshop();
			//redirect("","refresh");
		




	}





	



?>