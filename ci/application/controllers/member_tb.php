<?php

   class member_tb extends CI_Controller{
		            function __construct(){
			          parent::__construct();
                        $this->load->model('member','member');
	
		            }
                public function index() {
                       $data['error']="";
                       $this->load->view('register',$data);

		            }
                public function changelangreg($type){
                  $this->session->set_userdata('lang',$type);
                  redirect('member_tb/reg', 'refresh');
      



                }
                public function reg(){
                   $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                   $this->lang->load($lang,$lang);
                   $data['error']="";
                   $this->load->view('register',$data);
                 
                }

                public function checkusername(){

                  $username = trim(strtolower($_POST['username']));
                  //echo "$username";
                  $num=$this->member->checkuser("$username");
                  echo $num;
        
                }

                public function submit_data(){
                    if(empty($this->session->userdata('picture_name'))){
                      $fname=$this->input->post('firstname');
                      $lname=$this->input->post('lastname');
                      $email=$this->input->post('email');
                      $perid=$this->input->post('license');
                      $address=$this->input->post('address')." ".$this->input->post('province')." ".$this->input->post('postcode');
                      $username=$this->input->post('username');
                      $password=$this->input->post('password');
                      date_default_timezone_set("Asia/Bangkok");
                      $date = date('Y-m-d');
                      $ip=$this->input->ip_address();
                      $propic="defaulfuse.png";
                      $info=array(
                        'f_name' => "$fname",
                        'l_name' => "$lname",
                        'username' => "$username",
                        'password' => "$password",
                        'address' => "$address",
                        'license' => "$perid",
                        'e-mail' => "$email",
                        'profile_pic' => "$propic",
                        'member_ip' => "$ip",
                        'reg_date' => "$date"
                      );
                      $this->member->insertcustomer($info);
                      echo "loop 1<br>";
                      //echo "$fname"." "."$lname"." "."$email"." "."$perid"." "."$address"." "."$username"." "."$password"." "."$propic"." "."$ip";
                    }else {
                      echo "Loop 2<br>";
                      $fname=$this->input->post('firstname');
                      $lname=$this->input->post('lastname');
                      $email=$this->input->post('email');
                      $perid=$this->input->post('license');
                      $address=$this->input->post('address')." ".$this->input->post('province')." ".$this->input->post('postcode');
                      $username=$this->input->post('username');
                      $password=$this->input->post('password');
                      $ip=$this->input->ip_address();
                      date_default_timezone_set("Asia/Bangkok");
                      $date = date('Y-m-d');
                      $propic=$this->session->userdata('picture_name');
                      $info=array(
                        'f_name' => "$fname",
                        'l_name' => "$lname",
                        'username' => "$username",
                        'password' => "$password",
                        'address' => "$address",
                        'license' => "$perid",
                        'e-mail' => "$email",
                        'profile_pic' => "$propic",
                        'member_ip' => "$ip",
                        'reg_date' => "$date"
                      );
                      $this->member->insertcustomer($info);
                      $this->session->unset_userdata('picture_name');
                      $this->session->unset_userdata('prepic');
                      
                      

                    }




                }




                public function do_upload(){

                //echo var_dump(is_dir('./asset/uploads/'));
                 
                $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                $this->lang->load($lang,$lang);
                $config['upload_path'] ='./asset/uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '0';
                $config['max_width']  = '0';
                $config['max_height']  = '0';
                $this->upload->initialize($config);
                //$this->load->library('upload', $config);
                if($this->upload->do_upload('propicture')){
                      $data=array('upload_data' =>$this->upload->data());
                      //$ip=$this->input->ip_address();
                      //echo $ip;
                      $picname=$data['upload_data']['file_name']; 
                      $this->session->set_userdata('picture_name',"$picname");
                      $this->session->set_userdata('prepic','1');
                      $data['error']="Upload success";

                      $this->load->view('register',$data);
                  }else{
                      $data=array('error'=>$this->upload->display_errors());
                      $this->load->view('register',$data);
                      
                  }


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