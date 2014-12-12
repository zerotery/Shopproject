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
                public function reg($error=null){
                   $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                   $this->lang->load($lang,$lang);
                   $data['error']=$error;
                   $this->load->view('register',$data);
                 
                }

                public function autoload(){

                  $name=$this->session->flashdata('username');
                  


                  $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                  $this->lang->load($lang,$lang);
                  if($lang=="english"){
                    $this->session->set_userdata('langreg',1);
                  }
                  else if($lang=="thailand"){
                    $this->session->set_userdata('langreg',2);
                  }

                  $memberID=$this->member->get_memID($name);
                  $picname=$memberID['picname'];
                  $email=$memberID['e_mail'];
                  $id=$memberID['memberid'];
                  $token = md5($id.private_key);
                  $this->session->set_userdata('datapic',$picname);
                  
                  $ci = get_instance();
                  $ci->load->library('email');
                  $config['protocol'] = "smtp";
                  $config['smtp_host'] = "ssl://smtp.gmail.com";
                  $config['smtp_port'] = "465";
                  $config['smtp_user'] = "tbshop.project@gmail.com"; 
                  $config['smtp_pass'] = "Zerotery2012";
                  $config['charset'] = "utf-8";
                  $config['mailtype'] = "html";
                  $config['newline'] = "\r\n";

                  $ci->email->initialize($config);

                  $ci->email->from('tbshop.project@gmail.com', 'Active TBshop member.');
                  $list = array($email);
                  $ci->email->to($list);  
                  if($lang=="english"){
                    $ci->email->subject('Active TBshop member.');
                    $ci->email->message('Please Active Tbshop member follow URL link'."   ".anchor(site_url('member_tb/active_member/').'/?memberid='.urlencode($id).'&token='.$token.'','Active member.') );
                    if($ci->email->send()){
                    $this->load->view('autoload');
                    }else{
                      $this->load->view('activateFail');
                    }
                  }else if($lang=="thailand"){
                    $ci->email->subject('กรุณาทำการยื่นยัดการสมัครสามาชิก');
                    $ci->email->message('กรุณาทำการยื่นยัดการสมัครสามาชิกโดยกดตาม URL link นี้'."   ".anchor(site_url('member_tb/active_member/').'/?memberid='.urlencode($id).'&token='.$token.'','Active member.') );
                    if($ci->email->send()){
                    $this->load->view('autoload');
                    }else{
                      $this->load->view('activateFail');
                    }
                  }
                  
                  
                  //$this->session->set_userdata('picname',"$picname");
                  //$this->active_member($memberID);
                  }
              public function loading(){
                 $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                  $this->lang->load($lang,$lang);
                  if($lang=="english"){
                    $this->session->set_userdata('langreg',1);
                  }
                  else if($lang=="thailand"){
                    $this->session->set_userdata('langreg',2);
                  }
                $this->load->view('loading');

                 
                  }

               






                public function checkusername(){

                  $username = trim(strtolower($_POST['username']));
                  //echo "$username";
                  $num=$this->member->checkuser("$username");
                  echo $num;
        
                }

                public function submit_data(){

                  $config['upload_path'] ='./asset/temp/';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = '0';
                  $config['max_width']  = '1024';
                  $config['max_height']  = '768';
                  $this->upload->initialize($config);
                  
                  
                  if(!$this->upload->do_upload('imgpro')){
                    $data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
                    
                          if($_FILES['imgpro']['error']==4){
                          $picname="defaulfuse.png";
                          $this->session->set_userdata('picture_name',"$picname");
                      
                          $set=1;
                          }else if($_FILES['imgpro']['error']==0){
                          $set=null;
                      
                          $error="error";
                      
                          $this->reg($error);
                          }

                    }else{
                      $data=array('upload_data' =>$this->upload->data());
                      
                      $picname=$data['upload_data']['file_name']; 
                      $this->session->set_userdata('picture_name',"$picname");
                      $set=1;
                    
                    }


                      if($set==1){
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
                        'email' => "$email",
                        'profile_pic' => "$propic",
                        'member_ip' => "$ip",
                        'reg_date' => "$date"
                      );
                      
                      $this->member->insertcustomer($info);

                      
                      
                      
                    
                      
                      $this->session->unset_userdata('picture_name');
                      $this->session->set_flashdata('username', "$username");
                      redirect('member_tb/autoload');
                      

                    }
                  }

               


                public function active_member(){
                  
                  $expected = md5($this->input->get('memberid').private_key);
                  if ($expected != $this->input->get('token')) {
                     $lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
                     $this->lang->load($lang,$lang);
                    
                    
                    $this->load->view('activateFail');
                  } else {
                   
                   $idmem=$this->input->get('memberid');
                   
                   $datapic=$this->session->userdata('datapic');
                   $numsave=$idmem%1000;
                   $flgCreate = mkdir("./uploads/profiles/".$numsave);
                    if($flgCreate)
                     {
                       $config['image_library']='gd2';
                       if($datapic=="defaulfuse.png"){
                       $config['source_image']='./asset/img/'.$datapic;
                       }else{
                       $config['source_image']='./asset/temp/'.$datapic;
                       }
                       $config['width']=180;
                       $config['height']=180;
                       $config['new_image']='./uploads/profiles/'.$numsave.'/'.$datapic;
                       $this->image_lib->clear();
                       $this->image_lib->initialize($config);
                       $this->image_lib->resize();
                       if(!$this->image_lib->resize()){
                        echo $this->image_lib->display_errors();
                       }else{
                          $status=$this->member->active_member($idmem);
                          $hit='./asset/temp/'.$datapic;
                          unlink($hit);
                          redirect('main/login');
                          
                         //$this->session->unset_userdata('picname');
                       }
                     }else{

                     }
                }
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
                        $this->logout();
                      }else{
                      $data['user']=$this->session->userdata('loginname');
                      $data['userid']=$this->session->userdata('memberid'); 
                      $data['cate']=$this->member->type_category();
                      $this->load->view('register_shop',$data);
                      
                      }



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
                      
                    
                      /////update//////
                    /* 
                      $up=array(
                        'f_name' => "$fname",
                        'l_name' => "$lname",
                        'address' => "$address",
                        'license' => "$perid",
                        'email' => "$email",
                        
                      );
                    $this->member->updatecustomer($up);
                      */
                      
                      $this->load->view('profile',$data);
                      
                      }
                            
             }
                


                          
                

                 
                


                 public function changelangprofile($type){
                          $this->session->set_userdata('lang',$type);
                          redirect('member_tb/profile', 'refresh');
              



                }



             

}
                 


                

              



               
                 


    

      


                 
?>