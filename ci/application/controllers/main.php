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
			
			$status=$this->session->userdata('status',$status);
			if($status==1){
				//echo "$status";
				$status=1;
				$this->login_system->checklogin();
				$data['user']=$this->session->userdata('loginname');
     			$data['userid']=$this->session->userdata('memberid'); 
     			$result=$this->shop->get_shop_show();
     			$this->session->set_userdata('status',$status);
     			$data['shop_result']=$result;
     			//print_r($result);
				$this->cart->destroy();
			}else{
				$result=$this->shop->get_shop_show();
     			//print_r($result);
				$status=0;

				$data['shop_result']=$result;
				$this->session->set_userdata('status',$status);
				//echo "$status";
			}
			$data['status']=$status;
			
			$this->load->view('main',$data);


		}

		public function webboard(){
			$status=NUll;
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);
			$status=$this->session->userdata('status',$status);
			if($status==1){
				//echo "$status";
				$status=1;
				$this->login_system->checklogin();
				$data['user']=$this->session->userdata('loginname');
     			$data['userid']=$this->session->userdata('memberid'); 
     			$result=$this->shop->get_shop_show();
     			$this->session->set_userdata('status',$status);
     			$data['shop_result']=$result;
     			//print_r($result);
				$this->cart->destroy();
			}else{
				$result=$this->shop->get_shop_show();
     			//print_r($result);
				$status=0;

				$data['shop_result']=$result;
				$this->session->set_userdata('status',$status);
				//echo "$status";
			}
			$data['status']=$status;
			$this->load->view('webboard',$data);

		}

		public function help(){
			$status=NUll;
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);
			$status=$this->session->userdata('status',$status);
			if($status==1){
				//echo "$status";
				$status=1;
				$this->login_system->checklogin();
				$data['user']=$this->session->userdata('loginname');
     			$data['userid']=$this->session->userdata('memberid'); 
     			$result=$this->shop->get_shop_show();
     			$this->session->set_userdata('status',$status);
     			$data['shop_result']=$result;
     			//print_r($result);
				$this->cart->destroy();
			}else{
				$result=$this->shop->get_shop_show();
     			//print_r($result);
				$status=0;

				$data['shop_result']=$result;
				$this->session->set_userdata('status',$status);
				//echo "$status";
			}
			$data['status']=$status;
			$this->load->view('help',$data);

		}
		public function allShop($result=null){
			$status=NUll;
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);
			$status=$this->session->userdata('status',$status);
			if($status==1){
				//echo "$status";
				$status=1;
				$this->login_system->checklogin();
				$data['user']=$this->session->userdata('loginname');
     			$data['userid']=$this->session->userdata('memberid'); 
     			$this->session->set_userdata('status',$status);
     			if($result==null||$result=="all"){
     				$result=$this->shop->get_shop_show_all();
     				$data['shop_result']=$result;
     			}else{
     				$data['shop_result']=$result;
     			}
     			
     			$data['cate']=$this->member->type_category();

				$this->cart->destroy();
			}else{
				if($result==null||$result=="all"){
     				$result=$this->shop->get_shop_show_all();
     				$data['shop_result']=$result;
     			}else{
     				$data['shop_result']=$result;
     			}
     			
				$status=0;

				
				$data['cate']=$this->member->type_category();
				$this->session->set_userdata('status',$status);
				
			}
			$data['status']=$status;
			$this->load->view('allShop',$data);

		}

		public function search_cate(){
			
      		$cate_search = $this->input->post('search');
      		if($cate_search!=NULL){
			$this->session->set_userdata('cate_search',$cate_search);
			}

			$cate_search=$this->session->userdata('cate_search');
      		
      		
      		if($cate_search=="all"){
      			$this->allShop("all");
      		}else{

      			$result=$this->shop->search_shop($cate_search);
      			if(empty($result)){
      				
      				$this->allShop("all");
      			}else{
      				
      				$this->allShop($result);
      			
      			}
      			
      		}
      
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
