<?php

   class member_tb extends CI_Controller{
		            function __construct(){
			          parent::__construct();
                        $this->load->model('member','member');
	
		            }
                public function index() {
                        /*$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                        $this->lang->load($lang,$lang);
                        if($this->input->post('btnsave')!=null){
                           $ar =array(
                                "f_name" => $this->input->post("firstname") ,
                                "l_name" => $this->input->post("lastname") ,
                                "username" => $this->input->post("username") ,
                                "password" => $this->input->post("password") ,
                                "address" => $this->input->post("address")." ".$this->input->post("city")." ".$this->input->post("postcode") ,
                                
                                "license" => $this->input->post("license") ,
                                "e-mail" => $this->input->post("email") ,
                                "profile_pic" => $this->input->post("profile_pic") );
                                $this->member->register($ar);
                           redirect("member_tb","refresh");
                           exit();
                        }

			                   $this->load->view('register');

		            */}
                public function changelangreg($type){
                  $this->session->set_userdata('lang',$type);
                  redirect('member_tb/reg', 'refresh');
      



                }
                public function reg(){
                   $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                   $this->lang->load($lang,$lang);
                   $this->load->view('register');
                 
                }

                public function checkusername(){

                  $username = trim(strtolower($_POST['username']));
                  //echo "$username";
                  $num=$this->member->checkuser("$username");
                  echo $num;
                
                  
                     
                  

                  




                }

               
                 







                 }
?>