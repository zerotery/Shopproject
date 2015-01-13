<?php
	
	class theme1 extends CI_controller {
		function __construct(){
			parent::__construct();
			$this->load->model('member','member');
			$this->load->model('shop','shop');



		}

		public function index(){


		}

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



}





	



?>