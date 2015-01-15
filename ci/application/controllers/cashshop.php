<?php
	
	class cashshop extends CI_controller {
		function __construct(){
			parent::__construct();
			$this->load->model('member','member');
			$this->load->model('shop','shop');



		}

		public function index(){


		}

		  public function goshop($s_id=null,$stheme=null){
                  
                   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $this->login_system->checklogin();

                  
                   $data['user']=$this->session->userdata('loginname');
                   $data['userid']=$this->session->userdata('memberid'); 
                   
                   if(!empty($s_id)){
                   	 $result=$this->shop->get_picshop($s_id);
                   	 
                   	 $data['pic_header']=$result[0]['shop_pic_header'];
                   	 $data['pic_bg']=$result[0]['shop_pic_bg'];
                   	 $data['s_id']=$s_id;
                   	 	$layout=$this->shop->get_layout($s_id);
                   	

                  if(empty($layout)){
                  	$data['layout']=0;
                  }else{
                  	$data['layout']=$layout;
                  }

                  $category_shop=$this->shop->get_shop_category($s_id);
                  $category_product=$this->shop->get_product_category($s_id);
                  $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
                  $data['cate_product']= $category_product;
				  $data['all_product']= $all_product;
				  $product=$this->shop->get_product_show($s_id);
				  $data['product']=$product; 

				 print_r($product);
				 echo "<br>".count($product);
                  // echo $s_id." ".$stheme;
                   if($stheme==1){


                   //$this->load->view('theme1_home',$data);
                   
                   }else{

                   

                   }
                   }else{
                   	echo "<center>You Visit This Page without login</center>";
                   }
                   

                   
                 
                 
          }

          public function how2order_theme1($s_id=null){
                  
                   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $this->login_system->checklogin();
                   $data['user']=$this->session->userdata('loginname');
                   $data['userid']=$this->session->userdata('memberid'); 

                   if(!empty($s_id)){
                   	 $result=$this->shop->get_picshop($s_id);
                   	 
                   	 $data['pic_header']=$result[0]['shop_pic_header'];
                   	 $data['pic_bg']=$result[0]['shop_pic_bg'];
                   	 $data['s_id']=$s_id;
                   	 	$layout=$this->shop->get_layout($s_id);
                   	

                  if(empty($layout)){
                  	$data['layout']=0;
                  }else{
                  	$data['layout']=$layout;
                  }

                  $category_shop=$this->shop->get_shop_category($s_id);
                  $category_product=$this->shop->get_product_category($s_id);
                  $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
                  $data['cate_product']= $category_product;
				  $data['all_product']= $all_product;
				  $product=$this->shop->get_product_show($s_id);
				  $data['product']=$product; 
				  $bank=$this->shop->get_bankdetail($s_id);
				  $data['bank']=$bank;
				  //print_r($bank);

                  
                   
                  $this->load->view('theme1_how2order',$data);
                   }else{
                   	echo "<center>You Visit This Page without login</center>";
                   }
                   
                 
          }

           public function informpayment_theme1($s_id=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $this->login_system->checklogin();
                   $data['user']=$this->session->userdata('loginname');
                   $data['userid']=$this->session->userdata('memberid'); 

                   if(!empty($s_id)){
                   	 $result=$this->shop->get_picshop($s_id);
                   	 
                   	 $data['pic_header']=$result[0]['shop_pic_header'];
                   	 $data['pic_bg']=$result[0]['shop_pic_bg'];
                   	 $data['s_id']=$s_id;
                   	 	$layout=$this->shop->get_layout($s_id);
                   	

                  if(empty($layout)){
                  	$data['layout']=0;
                  }else{
                  	$data['layout']=$layout;
                  }

                  $category_shop=$this->shop->get_shop_category($s_id);
                  $category_product=$this->shop->get_product_category($s_id);
                  $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
                  $data['cate_product']= $category_product;
				  $data['all_product']= $all_product;
				  $product=$this->shop->get_product_show($s_id);
				  $data['product']=$product; 
				  $bank=$this->shop->get_bankdetail($s_id);
				  $data['bank']=$bank;
                   
                  $this->load->view('theme1_informpayment',$data);
                   }else{
                   	echo "<center>You Visit This Page without login</center>";
                   }
                   
            }

            public function aboutus_theme1($s_id=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $this->login_system->checklogin();
                   $data['user']=$this->session->userdata('loginname');
                   $data['userid']=$this->session->userdata('memberid'); 

                   if(!empty($s_id)){
                   	 $result=$this->shop->get_picshop($s_id);
                   	 
                   	 $data['pic_header']=$result[0]['shop_pic_header'];
                   	 $data['pic_bg']=$result[0]['shop_pic_bg'];
                   	 $data['s_id']=$s_id;
                   	 $layout=$this->shop->get_layout($s_id);
                   	

                  if(empty($layout)){
                  	$data['layout']=0;
                  }else{
                  	$data['layout']=$layout;
                  }

                  $category_shop=$this->shop->get_shop_category($s_id);
                  $category_product=$this->shop->get_product_category($s_id);
                  $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
                  $data['cate_product']= $category_product;
				  $data['all_product']= $all_product;
				  $product=$this->shop->get_product_show($s_id);
				  $data['product']=$product; 
                  $about=$this->shop->about_shop($s_id);
                  //print_r($about);
                  $data['about']=$about;

                  $this->load->view('theme1_aboutus',$data);
                   }else{
                   	echo "<center>You Visit This Page without login</center>";
                   }
                   	
            }

            public function contactus_theme1($s_id=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $this->login_system->checklogin();
                   $data['user']=$this->session->userdata('loginname');
                   $data['userid']=$this->session->userdata('memberid'); 

                   if(!empty($s_id)){
                   	 $result=$this->shop->get_picshop($s_id);
                   	 
                   	 $data['pic_header']=$result[0]['shop_pic_header'];
                   	 $data['pic_bg']=$result[0]['shop_pic_bg'];
                   	 $data['s_id']=$s_id;
                   	 $layout=$this->shop->get_layout($s_id);
                   	

                  if(empty($layout)){
                  	$data['layout']=0;
                  }else{
                  	$data['layout']=$layout;
                  }

                  $category_shop=$this->shop->get_shop_category($s_id);
                  $category_product=$this->shop->get_product_category($s_id);
                  $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
                  $data['cate_product']= $category_product;
				  $data['all_product']= $all_product;
				  $product=$this->shop->get_product_show($s_id);
				  $data['product']=$product; 
                  $about=$this->shop->about_shop($s_id);
                  //print_r($about);
                  $data['about']=$about;
                  $this->load->view('theme1_contactus',$data);
                   }else{
                   	echo "<center>You Visit This Page without login</center>";
                   }
                   	
            }


         /*
           

          

		
           

              
            

            public function category($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme1_category',$data);
            }

            public function product($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme1_product',$data);
            }
	*/
		

}





	



?>