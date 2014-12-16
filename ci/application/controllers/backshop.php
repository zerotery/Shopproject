<?php
	
	class backshop extends CI_controller {
		function __construct(){
			parent::__construct();
			$this->load->model('member','member');
			$this->load->model('shop','shop');



		}

		public function index(){

			//$this->load->view('loginadmin');
			redirect('main/login');
			

		}

		public function myshop(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();

			$data['user']=$this->session->userdata('loginname');
			$data['userid']=$this->session->userdata('memberid');	
			
			//$this->shop->showshop();
			$data['myshop'] = $this->shop->showshop();
			//print_r($data['myshop'][0]);
			//echo "<br>".count($data['myshop']);
			
			$this->load->view('myshop',$data);
			
			
		}

		public function logout(){

			$this->login_system->logout();

		}

		public function gobackshop(){

			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();

			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('backshop',$data);
			
		}

		
		

		public function productType(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('productType',$data);
			
			
		}	




		

		public function addproductType(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('addproductType',$data);
			
			
		}
		

		public function modifyproductType(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('modifyproductType',$data);
			
			
		}
		

		public function productManage(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('productManage',$data);
			
			
		}
		


		public function addproduct(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('addproduct',$data);
			
			
		}
		



}





	



?>