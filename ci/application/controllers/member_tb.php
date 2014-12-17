<?php

   class member_tb extends CI_Controller{
                
		            function __construct(){
			          parent::__construct();
                        $this->load->model('member','member');
                        $this->load->model('shop','shop');
	
		            }
                public function index() {

                }


                
                public function reg($error=null){
                  
                   $lang=$this->load_language->lang();
                   $this->lang->load($lang,$lang);

                   $data['error']=$error;
                   $this->load->view('register',$data);
                 
                }

                public function autoload(){

                  $name=$this->session->flashdata('username');
                  $lang=$this->load_language->lang();
                  $this->lang->load($lang,$lang);

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
                $lang=$this->load_language->lang();
                $this->lang->load($lang,$lang);
                $this->load->view('loading');

                 
              }

               public function checkusername(){

                  $username = trim(strtolower($_POST['username']));
                  //echo "$username";
                  $num=$this->member->checkuser("$username");
                  echo $num;
        
                }

                public function test_pic(){

                  $filename = "./asset/temp";
                    
                  if (file_exists($filename)) {
                    $do=1;                
                  }else {
                    mkdir("./asset/temp");
                    $do=1;                  
                  }

                  if($do==1){
                  $config['upload_path'] ='./asset/temp/';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = '0';
                  $config['max_width']  = '1600';
                  $config['max_height']  = '1200';
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
                      
                      $picnameold=$data['upload_data']['file_name']; 
                       $width=$data['upload_data']['image_width'];
                       $height=$data['upload_data']['image_height'];
                      
                      $temp = explode(".",$data['upload_data']['file_name']);
                      $picname = "mem_profile" . '.' .end($temp);
                      $this->session->set_userdata('picture_name',"$picname");
                      rename ("./asset/temp/".$picnameold, "./asset/temp/".$picname);
                      $set=1;


                      echo $width." ".$height;
                    }

                    $do=0;
                  }else{
                    echo "error";
                  }

                }

                public function submit_data(){

                  $filename = "./asset/temp";
                    
                  if (file_exists($filename)) {
                    $do=1;                
                  }else {
                    mkdir("./asset/temp");
                    $do=1;                  
                  }

                  if($do==1){
                  $config['upload_path'] ='./asset/temp/';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = '0';
                  $config['max_width']  = '1600';
                  $config['max_height']  = '1200';
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
                      
                      $picnameold=$data['upload_data']['file_name']; 
                      $width=$data['upload_data']['image_width'];
                      $height=$data['upload_data']['image_height'];
                      $temp = explode(".",$data['upload_data']['file_name']);
                      $picname = "mem_profile" . '.' .end($temp);
                      $this->session->set_userdata('picture_name',"$picname");
                      rename ("./asset/temp/".$picnameold, "./asset/temp/".$picname);
                      if($width>=180&&$height>=180){
                      $set=1;
                      }
                      else{
                      $error="min";
                      $this->reg($error);
                      }
                    }

                    $do=0;
                  }else{
                    echo "error";
                  }

                      if($set==1){
                      $fname=$this->input->post('firstname');
                      $lname=$this->input->post('lastname');
                      $email=$this->input->post('email');
                      $perid=$this->input->post('license');
                      $address=$this->input->post('address');
                      $province=$this->input->post('province');
                      $postcode=$this->input->post('postcode');
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
                        'province' => "$province",
                        'postcode' => "$postcode",

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
                     $lang=$this->load_language->lang();
                     $this->lang->load($lang,$lang);
                    
                    
                    $this->load->view('activateFail');
                  } else {
                   
                   $idmem=$this->input->get('memberid');
                   
                   $datapic=$this->session->userdata('datapic');
                   $numsave=$idmem%1000;
                   $filename = "./uploads/profiles/".$numsave;

                   if (file_exists($filename)) {
                      $s=1;
                   }else {
                      mkdir("./uploads/profiles/".$numsave);
                      $s=1;
                   }

                  
                    if($s==1)
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
                          if($datapic!="defaulfuse.png"){
                          $hit='./asset/temp/'.$datapic;
                          unlink($hit);
                          redirect('main/login');}
                          
                         //$this->session->unset_userdata('picname');
                       }
                       $s=0;
                     }else{
                          $this->load->view('activateFail');
                     }
                }
              }    

                
                
                public function regshop($error=null){
                  
                  $lang=$this->load_language->lang();
                  $this->lang->load($lang,$lang);
                  $this->login_system->checklogin();

                  
                      $data['user']=$this->session->userdata('loginname');
                      $data['userid']=$this->session->userdata('memberid'); 
                      $data['cate']=$this->member->type_category();
                      $data['error']=$error;


                      $this->load->view('register_shop',$data);
                      
                      



                }
                public function test(){
                  $filename = "./asset/temp";

                  if (file_exists($filename)) {
                           echo "have";           
                  }else {
                    mkdir("./asset/temp");
                          echo "create na";               
                  } 

                }
                

                public function submit_shop(){
                  //profile shop
                  $filename = "./asset/temp";
                    
                  if (file_exists($filename)) {
                    $do=1;                 
                  }else {
                    mkdir("./asset/temp");
                    $do=1;                  
                  }

                  if($do==1){
                  $config['upload_path'] ='./asset/temp/';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = '0';
                  $config['max_width']  = '1600';
                  $config['max_height']  = '1200';
                  $this->upload->initialize($config);
                  
                  
                  if(!$this->upload->do_upload('select_shopprofile')){
                    $data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
                    
                          if($_FILES['select_shopprofile']['error']==4){
                          $picname="Avatar.png";
                          $this->session->set_userdata('picturesp_name',"$picname");
                      
                          $set1=1;
                          }else if($_FILES['select_shopprofile']['error']==0){
                          $set1=null;
                      
                          $error1="error1";
                      
                          $this->regshop($error1);
                          }

                    }else{
                      $data=array('upload_data' =>$this->upload->data());
                      
                      $picnameold=$data['upload_data']['file_name']; 
                      $width=$data['upload_data']['image_width'];
                      $height=$data['upload_data']['image_height'];
                      $temp = explode(".",$data['upload_data']['file_name']);
                      $picname = "profile" . '.' .end($temp);
                      $this->session->set_userdata('picturesp_name',"$picname");
                      rename ("./asset/temp/".$picnameold, "./asset/temp/".$picname);
                      if($width>=180&&$height>=180){
                      $set1=1;
                      }
                      else{
                      $error1="min";
                      $this->regshop($error1);
                      }
                    
                    }

                    //background picture

                  
                  if(!$this->upload->do_upload('select_shopbg')){
                    $data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
                    
                          if($_FILES['select_shopbg']['error']==4){
                          $picname="bg_shop.jpg";
                          $this->session->set_userdata('picturesbg_name',"$picname");
                      
                          $set2=1;
                          }else if($_FILES['select_shopbg']['error']==0){
                          $set2=null;
                      
                          $error2="error2";
                      
                          $this->regshop($error2);
                          }

                    }else{
                      $data=array('upload_data' =>$this->upload->data());
                      
                      $picnameold=$data['upload_data']['file_name']; 
                      $width=$data['upload_data']['image_width'];
                      $height=$data['upload_data']['image_height'];
                      $temp = explode(".",$data['upload_data']['file_name']);
                      $picname = "bg" . '.' .end($temp);
                      $this->session->set_userdata('picturesbg_name',"$picname");
                      rename ("./asset/temp/".$picnameold, "./asset/temp/".$picname);
                      if($width>=1366&&$height>=768){
                      $set2=1;
                      }
                      else{
                      $error2="min";
                      $this->regshop($error2);
                      }
                    
                    }

                    //cover picture

                 
                  
                  
                  if(!$this->upload->do_upload('select_shopcover')){
                    $data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
                    
                          if($_FILES['select_shopcover']['error']==4){
                          $picname="pic_cover.jpg";
                          $this->session->set_userdata('picturesc_name',"$picname");
                      
                          $set3=1;
                          }else if($_FILES['select_shopcover']['error']==0){
                          $set3=null;
                      
                          $error3="error3";
                      
                          $this->regshop($error3);
                          }

                    }else{
                      $data=array('upload_data' =>$this->upload->data());
                      
                      $picnameold=$data['upload_data']['file_name'];
                      $width=$data['upload_data']['image_width'];
                      $height=$data['upload_data']['image_height']; 
                      $temp = explode(".",$data['upload_data']['file_name']);
                      $picname = "cover" . '.' .end($temp);
                      $this->session->set_userdata('picturesc_name',"$picname");
                      rename ("./asset/temp/".$picnameold, "./asset/temp/".$picname);
                      if($width>=600&&$height>=240){
                      $set3=1;
                      }
                      else{
                      $error3="min";
                      $this->regshop($error3);
                      }
                    
                    }
                    $do=0;

                  }else{
                    echo "error";
                  }
                 

                  



                    if($set1==1&&$set2==1&&$set3==1){

                      $shopname_en=$this->input->post('shopname_en');
                      $shopname_th=$this->input->post('shopname_th');
                      if($shopname_en=="-"){
                        $shopname_en=$shopname_th;
                      }else if($shopname_th=="-"){
                        $shopname_th=$shopname_en;
                      }else if($shopname_en=="-" && $shopname_th=="-"){
                        $shopname_en="-";
                        $shopname_th="-";
                      }

                      $URL="www.myaday.net/Project/TBShop/".$this->input->post('urlname');
                      $category=$this->input->post('category');
                      $shopdetail_en=$this->input->post('shopdetail_en');
                      $shopdetail_th=$this->input->post('shopdetail_th');
                      if($shopdetail_en=="-"){
                        $shopdetail_en=$shopdetail_th;
                      }else if($shopdetail_th=="-"){
                        $shopdetail_th=$shopdetail_en;
                      }else if($shopdetail_en=="-" && $shopdetail_th=="-"){
                        $shopdetail_en="-";
                        $shopdetail_th="-";
                      }
                      $fanpage=$this->input->post('fanpageshop');
                      $theme=$this->input->post('theme');
                      $profile=$this->session->userdata('picturesp_name');

                      $bg=$this->session->userdata('picturesbg_name');
                      $cover=$this->session->userdata('picturesc_name');
                      date_default_timezone_set("Asia/Bangkok");
                      $shopdate = date('Y-m-d');
                      $idmember=$this->session->userdata('memberid'); 
                      $inputshop=array(
                        's_theme' => "$theme",
                        'shop_pic_header' => "$cover",
                        'shop_pic_bg' => "$bg",
                        'shop_pic' => "$profile",
                        'memberID' => "$idmember",
                        's_url' => "$URL",
                        'shop_create_date' => "$shopdate",
                        
                      );

                     

                      $result=$this->shop->inputshop($inputshop);
                      $s_id=$result['sid'];
                      $profile=$result['spro'];
                      $bg=$result['sbg'];
                      $cover=$result['scover'];
                       $this->session->unset_userdata('picturesp_name');
                       $this->session->unset_userdata('picturesc_name');
                       $this->session->unset_userdata('picturesbg_name');
                      //echo $s_id;
                      $input_shop_cate=array(
                        's_ID' => "$s_id",
                        'shop_category_ID' => "$category"
                        
                      );

                      $inputshop_detailen=array(
                        'shop_name' => "$shopname_en",
                        'shop_detail_data' => "$shopdetail_en",
                        's_ID' => "$s_id",
                        'lang_ID' => 1,
                        
                        
                      );

                      $inputshop_detailth=array(
                        'shop_name' => "$shopname_th",
                        'shop_detail_data' => "$shopdetail_th",
                        's_ID' => "$s_id",
                        'lang_ID' => 2,
                        
                        
                      );

                      $r1=$this->shop->inputcate($input_shop_cate);
                      $r2=$this->shop->inputdetailen($inputshop_detailen);
                      $r3=$this->shop->inputdetailth($inputshop_detailth);

                    if($r1=="success"&&$r2=="success"&&$r2=="success"){
                                      //echo "$r1<br>$r2<br>$r3";
                                      $numsave=$s_id%1000;
                                      $filename = "./uploads/shops/".$numsave;

                                      if (file_exists($filename)) {
                                      $s=1;
                                      }else {
                                      mkdir("./uploads/shops/".$numsave);
                                      $s=1;
                                      }


                                      
                    }else{
                                  echo "have problem";
                    }

                      if($s==1){
                                $config['image_library']='gd2';
                                if($profile=="Avatar.png"){
                                    $config['source_image']='./asset/img/'.$profile;
                                }else{
                                    $config['source_image']='./asset/temp/'.$profile;
                                }
                                $config['width']=180;
                                $config['height']=180;
                                $config['new_image']='./uploads/shops/'.$numsave.'/'.$profile;
                                $this->image_lib->clear();
                                $this->image_lib->initialize($config);
                                $this->image_lib->resize();
                                    if(!$this->image_lib->resize()){
                                        echo $this->image_lib->display_errors();
                                    }else{
                                        if($profile!="Avatar.png"){
                                          $hit='./asset/temp/'.$profile;
                                          unlink($hit);}
                                    }

                                 $config['image_library']='gd2';
                                  if($bg=="bg_shop.jpg"){
                                    $config['source_image']='./asset/img/'.$bg;
                                  }else{
                                    $config['source_image']='./asset/temp/'.$bg;
                                  }
                                $config['width']=1366;
                                $config['height']=768;
                                $config['new_image']='./uploads/shops/'.$numsave.'/'.$bg;
                                $this->image_lib->clear();
                                $this->image_lib->initialize($config);
                                  $this->image_lib->resize();
                                  if(!$this->image_lib->resize()){
                                    echo $this->image_lib->display_errors();
                                  }else{
                                    if($bg!="bg_shop.jpg"){
                                    $hit='./asset/temp/'.$bg;
                                    unlink($hit);
                                    }
                                  }   

                                $config['image_library']='gd2';
                                if($cover=="pic_cover.jpg"){
                                    $config['source_image']='./asset/img/'.$cover;
                                }else{
                                    $config['source_image']='./asset/temp/'.$cover;
                                }
                               $config['width']=600;
                               $config['height']=240;
                               $config['new_image']='./uploads/shops/'.$numsave.'/'.$cover;
                               $this->image_lib->clear();
                               $this->image_lib->initialize($config);
                               $this->image_lib->resize();
                                if(!$this->image_lib->resize()){
                                    echo $this->image_lib->display_errors();
                                }else{
                                    if($cover!="pic_cover.jpg"){
                                        $hit='./asset/temp/'.$cover;
                                        unlink($hit);
                                    }
                                }

                               

                      $s=0;
                      redirect('member_tb/loading');

                      }else{
                        echo "failure create folder";
                      }

                      }else{
                        echo "have problem!!!";
                      }
                }

                

                public function logout(){
                  $this->login_system->logout();
                }

                public function profile($error=NULL){
                  
                  $lang=$this->load_language->lang();
                  $this->lang->load($lang,$lang);
                  $this->login_system->checklogin();

                  
                      $data['user']=$this->session->userdata('loginname');
                      $data['userid']=$this->session->userdata('memberid');
                      $id=$this->session->userdata('memberid');
                      
                       $rs=$this->member->member_detail();
                       $pic=$this->member->get_picture($id);
                       $picname=$pic['picname'];

                       $this->session->set_userdata('namepic',$picname);
                       //$data['rs']= $rs->result_array();
                       $data['namepicture']=$picname;

                      if($rs->num_rows()==0){
                        //redirect('member_tb/test');
                      }
                      else{
                        $data['rs']=$rs->row_array();
                        $data['error']=$error;
                        $fname=$this->input->post('firstname');
                        $lname=$this->input->post('lastname');
                        $address=$this->input->post('address');
                        $province=$this->input->post('province');
                        $postcode=$this->input->post('postcode');
                        $perid=$this->input->post('license');
                        $email=$this->input->post('email');
                        $up=array(
                        'f_name' => "$fname",
                        'l_name' => "$lname",
                        'address' => "$address",
                        'province' => "$province",
                        'postcode' => "$postcode",
                        'license' => "$perid",
                        'email' => "$email",
                        
                        );
                        if($fname!=NULL&&$fname!=NULL&&$lname!=NULL&&$address!=NULL&&$province!=NULL&&$postcode!=NULL&&$perid!=NULL&&$email!=NULL){
                        $this->member->updatecustomer($up);
                        redirect('member_tb/profile','refresh');
                        }  
                        
                        
                       
                        }
                       
                        $this->load->view('profile',$data);
                      
                    

                      
                      
                    }
                            

                 public function changeprofile(){
                  $np=$this->session->userdata('namepic');
                  if (file_exists($filename)) {
                    $do=1;                 
                  }else {
                    mkdir("./asset/temp");
                    $do=1;                  
                  }
                  if($do==1){
                  $config['upload_path'] ='./asset/temp/';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = '0';
                  $config['max_width']  = '1024';
                  $config['max_height']  = '768';
                  $this->upload->initialize($config);
                  
                  
                  if(!$this->upload->do_upload('update_profile')){
                    $data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
                    
                          if($_FILES['update_profile']['error']==4){
                          redirect('member_tb/profile','refresh');
                          }else if($_FILES['update_profile']['error']==0){
                          
                      
                          $error="error";
                      
                          $this->profile($error);
                          }

                    }else{
                      $data=array('upload_data' =>$this->upload->data());
                      
                      $picname=$data['upload_data']['file_name']; 
                      $width=$data['upload_data']['image_width'];
                      $height=$data['upload_data']['image_height'];
                      //$this->session->set_userdata('picture_name',"$picname");
                      $memID=$this->session->userdata('memberid');
                      $numsave=$memID%1000;
                      $pic=$this->session->userdata('namepic');
                      if($width>=180&&$height>=180){
                      $set=1;
                      }
                      else{
                      $error="min";
                      $this->profile($error);
                      }
                      



                      if($set==1){
                      $config['image_library']='gd2';
                       
                      
                       if($picname=="defaulfuse.png"){
                       $config['source_image']='./asset/img/'.$picname;
                       }else{
                       $config['source_image']='./asset/temp/'.$picname;
                       }
                       
                       
                       $config['width']=180;
                       $config['height']=180;
                       $config['new_image']='./uploads/profiles/'.$numsave.'/'.$pic;
                       $this->image_lib->clear();
                       $this->image_lib->initialize($config);
                       $this->image_lib->resize();
                       if(!$this->image_lib->resize()){
                        echo $this->image_lib->display_errors();
                       }else{
                          if($picname!="defaulfuse.png"){
                          $hit='./asset/temp/'.$picname;
                          unlink($hit);
                          }
                          
                           redirect('member_tb/profile','refresh');
                          
                         //$this->session->unset_userdata('picturesp_name');
                       }
                      //$set=1;
                    //echo "$picname";
                    }
                    $do=0;
                  }
                 }

                 



}
                 


                

              



               
                 


    

      


                 
?>