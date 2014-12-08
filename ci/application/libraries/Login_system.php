<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Login_system {

	function __construct(){
		


	}
	

    public function check($user,$pass){
    	$CI =& get_instance();
    	$CI->load->model('member','member');
    	$CI->member->checkmember($user,$pass);
    	//echo $CI->session->userdata('status')." ".$CI->session->userdata('status_shop');
    	if($CI->session->userdata('status')=='t' && $CI->session->userdata('status_shop')=='t'){
    		$CI->session->set_userdata('loginname',"$user");
    		redirect('backshop/myshop');
    	}else if($CI->session->userdata('status')=='t' && $CI->session->userdata('status_shop')=='f'){
    		$CI->session->set_userdata('loginname',"$user");
            redirect('main/index', 'refresh');
    	}else{
    		echo '<script language="javascript">';
			echo 'alert("Wrong Username or Password")';
			echo '</script>';
    		redirect('main/login','refresh');
    	}
    	
    }



}

?>