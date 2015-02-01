<?php
	
	class theme2 extends CI_controller {
		function __construct(){
			parent::__construct();
			$this->load->model('member','member');
			$this->load->model('shop','shop');



		}

		public function index(){


		}

		  public function t2_home($error=null){
                  
                   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);

                   $data['error']=$error;
                   $this->load->view('theme2_home',$data);
                 
                }

           public function t2_how2order($error=null){
                  
                   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);

                   $data['error']=$error;
                   $this->load->view('theme2_how2order',$data);
                 
                }

		
            public function t2_informpayment($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme2_informpayment',$data);
            }

              public function t2_aboutus($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme2_aboutus',$data);
            }
            public function t2_contactus($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme2_contactus',$data);
            }

            public function t2_category($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme2_category',$data);
            }

            public function t2_product($error=null){


            	   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('theme2_product',$data);
            }



}





	



?>