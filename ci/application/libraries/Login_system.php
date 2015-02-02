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
            $CI->session->set_userdata('status',1);
    		redirect('main/index?Status=1');
    	}else if($CI->session->userdata('status')=='t' && $CI->session->userdata('status_shop')=='f'){
    		$CI->session->set_userdata('loginname',"$user");
            $CI->session->set_userdata('status',1);
            redirect('main/index?Status=1', 'refresh');
    	}else{
    		echo '<script language="javascript">';
			echo 'alert("Wrong Username or Password or no active member.")';
			echo '</script>';
    		redirect('main/login','refresh');
    	}
    	
    }
    public function checklogin(){
        $CI =& get_instance();
        if($CI->session->userdata('loginname')==""){
        $this->logout();
        }
                    
    }

    public function logout(){

                  $CI =& get_instance();
                  $CI->session->unset_userdata('loginname');
                  $CI->session->sess_destroy();
                  redirect('main/login');

    }



}

?>