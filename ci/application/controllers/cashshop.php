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

                   }else{
                   	echo "<center>You Visit This Page without login</center>";
                   }
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
				 // print_r($product);
                  // echo $s_id." ".$stheme;
                   if($stheme==1){


                   	$this->load->view('theme1_home',$data);
                   
                   }else{

                   }

                   
                 
                 
          }

         /*
           public function home($error=null){
                  
                   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);

                   $data['error']=$error;
                   $this->load->view('theme1_home',$data);
                 
                }

           public function how2order($error=null){
                  
                   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);

                   $data['error']=$error;
                   $this->load->view('theme1_how2order',$data);
                 
                }

		
            public function informpayment($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme1_informpayment',$data);
            }

              public function aboutus($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme1_aboutus',$data);
            }
            public function contactus($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme1_contactus',$data);
            }

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