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
			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);
			if($lang=="english"){
                    $this->session->set_userdata('langmyshop',1);
            }
            else if($lang=="thailand"){
                    $this->session->set_userdata('langmyshop',2);
            }

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			$data['user']=$this->session->userdata('loginname');
			$data['userid']=$this->session->userdata('memberid');	
			
			//$this->shop->showshop();
			$data['myshop'] = $this->shop->showshop();
			//print_r($data['myshop'][0]);
			//echo "<br>".count($data['myshop']);
			
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
			if($lang=="english"){
                    $this->session->set_userdata('langmyshop',1);
            }
            else if($lang=="thailand"){
                    $this->session->set_userdata('langmyshop',2);
            }

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			
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
		}

		
		public function changemyshop($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/myshop', 'refresh');
			
		}
		public function changebackshop($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/gobackshop', 'refresh');
		}	


		public function productType(){
			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);
			if($lang=="english"){
                    $this->session->set_userdata('langmyshop',1);
            }
            else if($lang=="thailand"){
                    $this->session->set_userdata('langmyshop',2);
            }

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			
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
			
		}	




		public function changeproductType($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/productType', 'refresh');
		}

		public function addproductType(){
			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);
			if($lang=="english"){
                    $this->session->set_userdata('langmyshop',1);
            }
            else if($lang=="thailand"){
                    $this->session->set_userdata('langmyshop',2);
            }

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			
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
			
		}
		public function changeaddproductType($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/addproductType', 'refresh');
		}

		public function modifyproductType(){
			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);
			if($lang=="english"){
                    $this->session->set_userdata('langmyshop',1);
            }
            else if($lang=="thailand"){
                    $this->session->set_userdata('langmyshop',2);
            }

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			
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
			
		}
		public function changemodifyproductType($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/modifyproductType', 'refresh');
		}

		public function productManage(){
			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);
			if($lang=="english"){
                    $this->session->set_userdata('langmyshop',1);
            }
            else if($lang=="thailand"){
                    $this->session->set_userdata('langmyshop',2);
            }

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			
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
			
		}
		public function changeproductManage($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/productManage', 'refresh');
		}

		public function addproduct(){
			$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
			
			$this->lang->load($lang,$lang);
			if($lang=="english"){
                    $this->session->set_userdata('langmyshop',1);
            }
            else if($lang=="thailand"){
                    $this->session->set_userdata('langmyshop',2);
            }

			if($this->session->userdata('loginname')==""){
				$this->index();
			}else{
			
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
		public function changeaddproduct($type){
			$this->session->set_userdata('lang',$type);
			redirect('backshop/addproduct', 'refresh');
		}



}





	



?>