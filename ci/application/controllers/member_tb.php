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
                  $data=array('error'=>$this->upload->display_errors());
                //$this->load->library('upload', $config);
                if($this->upload->do_upload('imgpro')){
                      $data=array('upload_data' =>$this->upload->data());
                      
                      $picname=$data['upload_data']['file_name']; 
                      $this->session->set_userdata('picture_name',"$picname");
                      $set=1;
                     

                      
                  }else if(print_r($data['error'])=="You did not select a file to upload." && print_r($data['error']) != 1){
                      
                      $picname="defaulfuse.png";
                      $this->session->set_userdata('picture_name',"$picname");
                      //echo print_r($data['error']);
                      $set=1;
                      

                      //echo "don't upload ".$this->upload->display_errors();
                      
                  }else if(print_r($data['error'])==1){
                      $set=null;
                      //echo "full size";
                      $error="error";
                      $this->reg($error);

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
                        'e-mail' => "$email",
                        'profile_pic' => "$propic",
                        'member_ip' => "$ip",
                        'reg_date' => "$date"
                      );
                      //$this->member->insertcustomer($info);

                      $this->session->unset_userdata('picture_name');
                      
                      echo "success save data!!!";
                     // $memberID=$this->member->get_memID($username);
                      //$this->active_member('$memberID');
                      

                    }
                  }

                public function testactive(){
                  $name="gintoki";
                  $memberID=$this->member->get_memID($name);
                  $picname=$memberID['picname'];

                  $this->session->set_userdata('picname',"$picname");
                  $this->active_member($memberID);
                  
                }   


                public function active_member($memberID){
                  
                  $memberID=$memberID['memberid'];
                  $pic=$this->session->userdata('picname');
                  
                  $numsave=$memberID%1000;
                  //$flgCreate = mkdir("./uploads/profiles/".$numsave);
                    //if($flgCreate)
                     //{
                       $config['image_library']='gd2';
                       $config['source_image']='./asset/temp/'.$pic;
                       $config['width']=180;
                       $config['height']=180;
                       $config['new_image']='./uploads/profiles/'.$numsave.'/'.$pic;
                       $this->image_lib->clear();
                       $this->image_lib->initialize($config);
                       $this->image_lib->resize();
                       if(!$this->image_lib->resize()){
                        echo $this->image_lib->display_errors();
                       }else{
                        
                       /*$filename = './uploads/profiles/'.$numsave.'/'.$pic; check file 
                       var_dump(is_dir('./asset/temp/'.$pic)) check path in com
                        if(file_exists($filename)){
                          echo "have";
                        }else{
                          echo "no";
                        }*/

                        echo img($config['source_image']);
                        echo img($config['new_image']);
                        $this->session->unset_userdata('picname');
                       }
      
                     //}else{
                       // echo "Folder Not Create.";
                     //}





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