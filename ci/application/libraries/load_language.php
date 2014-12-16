<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class load_language {

	function __construct(){
		


	}
	

    public function lang(){
    	$CI =& get_instance();
        $lang=$CI->session->userdata('lang')==null?"english":$CI->session->userdata('lang');
        //$this->lang->load($lang,$lang);
         if($lang=="english"){
                    $CI->session->set_userdata('langdata',1);
                  }
         else if($lang=="thailand"){
                    $CI->session->set_userdata('langdata',2);
        }
    	return $lang;
    	
    	
    }

    public function change_lang($type){
      $CI =& get_instance();
      $CI->session->set_userdata('lang',$type);
    }
    


}

?>