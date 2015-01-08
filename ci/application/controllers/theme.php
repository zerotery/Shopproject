<?php
	
	class theme extends CI_controller {
		function __construct(){
			parent::__construct();
			$this->load->model('member','member');
			$this->load->model('shop','shop');



		}

		public function index(){


		}

		  public function theme1($error=null){
                  
                   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);

                   $data['error']=$error;
                   $this->load->view('theme1',$data);
                 
                }

		

}





	



?>