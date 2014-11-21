<?php
	class pc extends CI_controller{
		//public function __construct(){
		//	parent::__construct();
		//}

		public function index(){
			
			$data['num1'] = array(1,2,3,4,5,6);
			$data['m']=$this->modelpc->getnum('product');

		$this->load->view('vc', $data);


		}






	}
?>
