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
			$s_ID=$shop[0]['s_ID'];
			$data['ptype']=$this->shop->get_ptype($s_ID);

			$this->load->view('productType',$data);
			
			
		}	

		public function add_cate(){

			$cate_p=$this->input->post('parent_category');
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			$s_ID=$shop[0]['s_ID'];

			$dateadd = date('Y-m-d');
			$datashop=$this->shop->getdata_catep($cate_p);
			//print_r($datashop);
			$cate_name_type_en=$datashop[0]['shop_name_type'];
			$cate_lang_en=$datashop[0]['lang_ID'];
			$cate_parent_en=$datashop[0]['shop_category_parent_ID'];

			$cate_name_type_th=$datashop[1]['shop_name_type'];
			$cate_lang_th=$datashop[1]['lang_ID'];
			$cate_parent_th=$datashop[1]['shop_category_parent_ID'];
			$cate_group_lang=$cate_p;


			$inputcate_en=array(

                        'product_category_name' => "$cate_name_type_en",
                        's_ID' => "$s_ID",
                        'lang_ID' => "$cate_lang_en",
                        'p_category_parent_ID' => "$cate_parent_en",
                        'p_category_create_date' => "$dateadd",
                        'grouplang' => "$cate_group_lang"
                        
                      );
			$inputcate_th=array(

                        'product_category_name' => "$cate_name_type_th",
                        's_ID' => "$s_ID",
                        'lang_ID' => "$cate_lang_th",
                        'p_category_parent_ID' => "$cate_parent_th",
                        'p_category_create_date' => "$dateadd",
                        'grouplang' => "$cate_group_lang"
                        
                        
                      );
			

			$status=$this->shop->insert_pcate($inputcate_en,$inputcate_th);
			//echo "<br>$cate_p"." ".$s_ID." ".$dateadd;
			if($status==1){
				redirect('backshop/productType','refresh');
			}else{
				redirect('backshop/addproductType','refresh');
			}
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
			$s_ID=$shop[0]['s_ID'];

			$data['catep']=$this->shop->getcatedata($s_ID);
			
			
			

			//echo $s_ID;




			$this->load->view('addproductType',$data);

			
			
		}
		

		public function modifyproductType(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$grouplang=$this->input->get('grouplang');
			if($grouplang!=NULL){
			$this->session->set_userdata('glang',$grouplang);
			}

			$grouplang=$this->session->userdata('glang');
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$s_ID=$shop[0]['s_ID'];

			$data['catep']=$this->shop->getcatedata($s_ID);

			//echo $grouplang;
			$this->load->view('modifyproductType',$data);
			
			
		}

		public function modify_cate(){
           
           $cate_p=$this->input->post('mod_cate');
           $idset=$this->session->userdata('id');
			
		   $shop=$this->shop->getshop($idset);
		   $s_ID=$shop[0]['s_ID'];

		   	$datashop=$this->shop->getdata_catep($cate_p);
			//print_r($datashop);
			$cate_name_type_en=$datashop[0]['shop_name_type'];
			$cate_lang_en=$datashop[0]['lang_ID'];
			$cate_parent_en=$datashop[0]['shop_category_parent_ID'];

			$cate_name_type_th=$datashop[1]['shop_name_type'];
			$cate_lang_th=$datashop[1]['lang_ID'];
			$cate_parent_th=$datashop[1]['shop_category_parent_ID'];
			$cate_group_lang=$cate_p;
		   $idmod=$this->session->userdata('glang');	
		   $findidmod=$this->shop->get_idpcate($idmod);

		   $idupdate_en=array('product_category_ID'=>$findidmod[0]['product_category_ID']);
		   $idupdate_th=array('product_category_ID'=>$findidmod[1]['product_category_ID']);

		   $updatecate_en=array(

                        'product_category_name' => "$cate_name_type_en",
                        's_ID' => "$s_ID",
                        'lang_ID' => "$cate_lang_en",
                        'p_category_parent_ID' => "$cate_parent_en",
                        
                        'grouplang' => "$cate_group_lang"
                        
                      );
			$updatecate_th=array(

                        'product_category_name' => "$cate_name_type_th",
                        's_ID' => "$s_ID",
                        'lang_ID' => "$cate_lang_th",
                        'p_category_parent_ID' => "$cate_parent_th",
                        
                        'grouplang' => "$cate_group_lang"
                        
                        
                      );



		   $s_update_en=$this->shop->update_pcate_en($updatecate_en,$idupdate_en);
		   $s_update_th=$this->shop->update_pcate_th($updatecate_th,$idupdate_th);
		   if($s_update_en==1&&$s_update_th==1){
		   	redirect('backshop/productType','refresh');
		   }else{
		   	redirect('backshop/modifyproductType','refresh');
		   }
           

		}

		public function remove_productType(){
			$test=$this->input->post('checkall');
			$test2=$this->input->post('check1');
			if(!empty($this->input->post('check_list'))) {
				$i = 0;
    				foreach($this->input->post('check_list') as $check) {
    				$i++;	

            		 $data[$i]=$check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    				}
    				print_r($data);
    				for($j=1; $j<=count($data);$j++){
    					
    					
    					$del=array('grouplang' => $data[$j]);
    					$this->shop->remove_pcate($del);
    				}
    				redirect('backshop/productType','refresh');
    				//echo "$i"." ".count($data)."<br>";
    		
			}
			//echo "hello"." ".$test." ".$test2;
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