<?php

   class member_tb extends CI_Controller{
		            function __construct(){
			          parent::__construct();
                        $this->load->model('member','member');
	
		            }
                public function index() {
                      
                       $this->load->view('register',$data);

		            }
                public function changelangreg($type){
                  $this->session->set_userdata('lang',$type);
                  redirect('member_tb/reg', 'refresh');
      



                }
                public function reg(){
                   $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                   $this->lang->load($lang,$lang);
                   $this->load->view('register',$data);
                 
                }

                public function checkusername(){

                  $username = trim(strtolower($_POST['username']));
                  //echo "$username";
                  $num=$this->member->checkuser("$username");
                  echo $num;
        
                }

                public function submit_data(){

                  $config['upload_path'] ='./asset/uploads/';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = '0';
                  $config['max_width']  = '0';
                  $config['max_height']  = '0';
                  $this->upload->initialize($config);
                //$this->load->library('upload', $config);
                if($this->upload->do_upload('imgpro')){
                      $data=array('upload_data' =>$this->upload->data());
                      
                      $picname=$data['upload_data']['file_name']; 
                      $this->session->set_userdata('picture_name',"$picname");
                      
                     

                      
                  }else{
                      //$data=array('error'=>$this->upload->display_errors());
                      $picname="defaulfuse.png";
                      $this->session->set_userdata('picture_name',"$picname");
                      //echo "don't upload ".$this->upload->display_errors();
                      
                  }

                      
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





                public function login() {
                        $this->load->view('login');

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

                        
                    //echo "true username and password"; 
                    }else{

                        if($this->session->userdata('status')=="f"){
                        $this->load->view('error_login');
                        $this->login();
                          }
        

                         }

      
                      echo "success save data!!!";
                      //echo "$fname"." "."$lname"." "."$email"." "."$perid"." "."$address"." "."$username"." "."$password"." "."$propic"." "."$ip";
                   }

                
                
                public function regshop(){
                  
                  $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                  $this->lang->load($lang,$lang);
                  if($lang=="english"){
                    $this->session->set_userdata('langreg',1);
                  }
                  else if($lang=="thailand"){
                    $this->session->set_userdata('langreg',2);
                  }



                  if($this->session->userdata('loginname')==""){
                        $this->login();
                      }else{
                      $data['user']=$this->session->userdata('loginname');
                      $data['userid']=$this->session->userdata('memberid'); 
                      $data['cate']=$this->member->type_category();
                      $this->load->view('register_shop',$data);
                      
                      }



                }

                public function test_category(){

                      /*$Shopname_en=$this->input->post('shopname_en');
                      $Shopname_th=$this->input->post('shopname_th');
                      $Shopname_url=$this->input->post('shopname_th');
                      $Shopname_cate=$this->input->post('shopname_th');
                      $Shopname_th=$this->input->post('shopname_th');
                      $Shopname_th=$this->input->post('shopname_th');
                      $Shopname_th=$this->input->post('shopname_th');*/
                       $this->load->library('login_system');
                       $this->login_system->test();
                       $data=$this->member->type_category();
                       $tlang=$this->session->userdata('langreg');
                       echo "$tlang";

                       echo "<html><head><meta http-equiv=Content-Type content=\"text/html; charset=utf-8\"></head><table><tr><th>1</th><th>2</th><th>3</th><th>4</th></tr>";
                      foreach ($data as $value) {
                         echo "<tr><td>".$value->shop_category_ID."</td><td>".$value->shop_name_type."</td><td>".$value->shop_category_parent_ID."</td><td>".$value->lang_ID."</td></tr>";
                       }
                       echo "</table></html>";


                }


                public function logout(){
                  $this->session->unset_userdata('loginname');
                  $this->session->sess_destroy();
                  redirect('main/login');

                }

                public function changelangshopreg($type){
                  $this->session->set_userdata('lang',$type);
                  redirect('member_tb/regshop', 'refresh');
      



                }

                public function profile(){
                  
                  $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                  $this->lang->load($lang,$lang);

                  if($this->session->userdata('loginname')==""){
                        $this->login();
                      }
                      else{
                    $data['user']=$this->session->userdata('loginname');
                      $data['userid']=$this->session->userdata('memberid'); 
                      
                       $rs=$this->member->member_detail();

                       $data['rs']= $rs->result_array();
                      if($rs->num_rows()==0){
                        $data['rs']=array();
                      }
                      else{
                        $data['rs']=$rs->row_array();
                      }
                      
                      $this->load->view('profile',$data);
                      
                            }

}

                          
                

                 
                


                 public function changelangprofile($type){
                          $this->session->set_userdata('lang',$type);
                          redirect('member_tb/profile', 'refresh');
              



                }


                 


                

              



               
                 







                 }
?>