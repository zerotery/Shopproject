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
                public function login() {
                        $this->load->view('loginmem');

                }

                public function checkup_mem(){
      
                   $user=$this->input->post('username');
                   $pass=$this->input->post('password');
                   $this->member->user=$user;
                   $this->member->pass=$pass;
                   $this->member->checkmember();
                   if($this->session->userdata('status')=="t"){
        
                        $this->session->set_userdata('loginname',"$user");
                        $this->regshop();
        //echo "true username and password";

      }             else{

                        if($this->session->userdata('status')=="f"){
                        $this->load->view('error_login');
                        $this->login();
                          }
        

                         }

      

      
    }
                
                public function regshop(){
                  
                  $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                  $this->lang->load($lang,$lang);
                  if($this->session->userdata('loginname')==""){
                        $this->login();
                      }else{
                      $data['user']=$this->session->userdata('loginname');
                      $data['userid']=$this->session->userdata('memberid'); 
                      $this->load->view('register_shop',$data);
                      
                            }



                }

                public function logout(){
                  $this->session->unset_userdata('loginname');
                  $this->session->sess_destroy();
                  $this->login();

    }

                public function changelangshopreg($type){
                  $this->session->set_userdata('lang',$type);
                  redirect('member_tb/regshop', 'refresh');
      



                }

                 





               
                 







                 }
?>