<?php
	
	class backshop extends CI_controller {
		function __construct(){
			parent::__construct();
			$this->load->model('member','member');
			$this->load->model('shop','shop');



		}

		public function index(){

			//$this->load->view('loginadmin');
			redirect('main/login');
			

		}

		public function myshop(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();

			$data['user']=$this->session->userdata('loginname');
			$data['userid']=$this->session->userdata('memberid');	
			
			//$this->shop->showshop();
			$data['myshop'] = $this->shop->showshop();
			//print_r($data['myshop'][0]);
			//echo "<br>".count($data['myshop']);
			
			$this->load->view('myshop',$data);
			
			
		}

		public function logout(){

			$this->login_system->logout();

		}

		public function gobackshop(){

			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();

			$data['user']=$this->session->userdata('loginname');
			
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}

			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('backshop',$data);
			
		}

		
		

		public function productType(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$s_ID=$shop[0]['s_ID'];
			$data['ptype']=$this->shop->get_ptype($s_ID);

			$this->load->view('productType',$data);
			
			
		}	

		public function add_cate(){
			

			$cate_p=$this->input->post('parent_category');
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			$s_ID=$shop[0]['s_ID'];

			$dateadd = date('Y-m-d');
			$datashop=$this->shop->getdata_catep($cate_p);
			//print_r($datashop);
			$cate_name_type_en=$datashop[0]['shop_name_type'];
			$cate_lang_en=$datashop[0]['lang_ID'];
			$cate_parent_en=$datashop[0]['shop_category_parent_ID'];

			$cate_name_type_th=$datashop[1]['shop_name_type'];
			$cate_lang_th=$datashop[1]['lang_ID'];
			$cate_parent_th=$datashop[1]['shop_category_parent_ID'];
			$cate_group_lang=$cate_p;


			$inputcate_en=array(

                        'product_category_name' => "$cate_name_type_en",
                        's_ID' => "$s_ID",
                        'lang_ID' => "$cate_lang_en",
                        'p_category_parent_ID' => "$cate_parent_en",
                        'p_category_create_date' => "$dateadd",
                        'grouplang' => "$cate_group_lang"
                        
                      );
			$inputcate_th=array(

                        'product_category_name' => "$cate_name_type_th",
                        's_ID' => "$s_ID",
                        'lang_ID' => "$cate_lang_th",
                        'p_category_parent_ID' => "$cate_parent_th",
                        'p_category_create_date' => "$dateadd",
                        'grouplang' => "$cate_group_lang"
                        
                        
                      );
			

			$status=$this->shop->insert_pcate($inputcate_en,$inputcate_th);
			//echo "<br>$cate_p"." ".$s_ID." ".$dateadd;
			if($status==1){

				redirect('backshop/productType');
			}

		
		}

		


		

		public function addproductType(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$s_ID=$shop[0]['s_ID'];

			$data['catep']=$this->shop->getcatedata($s_ID);
			
			
			

			//echo $s_ID;




			$this->load->view('addproductType',$data);

			
			
		}
		

		public function modifyproductType(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$grouplang=$this->input->get('grouplang');
			if($grouplang!=NULL){
			$this->session->set_userdata('glang',$grouplang);
			}

			$grouplang=$this->session->userdata('glang');
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$s_ID=$shop[0]['s_ID'];

			$data['catep']=$this->shop->getcatedata($s_ID);

			//echo $grouplang;
			$this->load->view('modifyproductType',$data);
			
			
		}

		public function modify_cate(){
           
           $cate_p=$this->input->post('mod_cate');
           $idset=$this->session->userdata('id');
			
		   $shop=$this->shop->getshop($idset);
		   $s_ID=$shop[0]['s_ID'];

		   	$datashop=$this->shop->getdata_catep($cate_p);
			//print_r($datashop);
			$cate_name_type_en=$datashop[0]['shop_name_type'];
			$cate_lang_en=$datashop[0]['lang_ID'];
			$cate_parent_en=$datashop[0]['shop_category_parent_ID'];

			$cate_name_type_th=$datashop[1]['shop_name_type'];
			$cate_lang_th=$datashop[1]['lang_ID'];
			$cate_parent_th=$datashop[1]['shop_category_parent_ID'];
			$cate_group_lang=$cate_p;
		   $idmod=$this->session->userdata('glang');	
		   $findidmod=$this->shop->get_idpcate($idmod);

		   $idupdate_en=array('product_category_ID'=>$findidmod[0]['product_category_ID']);
		   $idupdate_th=array('product_category_ID'=>$findidmod[1]['product_category_ID']);

		   $updatecate_en=array(

                        'product_category_name' => "$cate_name_type_en",
                        's_ID' => "$s_ID",
                        'lang_ID' => "$cate_lang_en",
                        'p_category_parent_ID' => "$cate_parent_en",
                        
                        'grouplang' => "$cate_group_lang"
                        
                      );
			$updatecate_th=array(

                        'product_category_name' => "$cate_name_type_th",
                        's_ID' => "$s_ID",
                        'lang_ID' => "$cate_lang_th",
                        'p_category_parent_ID' => "$cate_parent_th",
                        
                        'grouplang' => "$cate_group_lang"
                        
                        
                      );



		   $s_update_en=$this->shop->update_pcate_en($updatecate_en,$idupdate_en);
		   $s_update_th=$this->shop->update_pcate_th($updatecate_th,$idupdate_th);
		   if($s_update_en==1&&$s_update_th==1){
		   	redirect('backshop/productType','refresh');
		   }else{
		   	redirect('backshop/modifyproductType','refresh');
		   }
           

		}

		public function remove_productType(){
			$test=$this->input->post('checkall');
			$test2=$this->input->post('check1');
			if(!empty($this->input->post('check_list'))) {
				$i = 0;
    				foreach($this->input->post('check_list') as $check) {
    				$i++;	

            		 $data[$i]=$check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    				}
    				//print_r($data);
    				for($j=1; $j<=count($data);$j++){
    					
    					
    					$del=array('grouplang' => $data[$j]);
    					$this->shop->remove_pcate($del);
    				}
    				
    				redirect('backshop/productType','refresh');
    				//echo "$i"." ".count($data)."<br>";
    		
			}else{
				redirect('backshop/productType','refresh');
			}
			//echo "hello"." ".$test." ".$test2;
		}


		

		public function productManage(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('productManage',$data);
			
			
		}
		


		public function addproduct($error=null){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			$data['error']=$error;
			$data['nameshop']=$shop[0]['shop_name'];
			$s_ID=$shop[0]['s_ID'];

			$result=$this->shop->get_ptype($s_ID);
			$data['category_p']=$result;
			$this->load->view('addproduct',$data);
			
			
		}




		public function add_product(){
			
				  $e=null;

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
                  $config['max_width']  = '0';
                  $config['max_height']  = '0';
                  $this->upload->initialize($config);
                  
                  
                  if(!$this->upload->do_upload('mainproduct')){
                    //$data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
                    	  //echo $data['error'];
                    
                          if($_FILES['mainproduct']['error']==4){
                          $productmain_pic="item.png";
                          //$this->session->set_userdata('picture_name',"$picname");
                      
                          $set=1;
                          }else if($_FILES['mainproduct']['error']==0){
                          $set=null;
                      
                          $error="error";
                      
                          $this->addproduct($error);
                          }

                    }else{
                      $data=array('upload_data' =>$this->upload->data());
                      
                      $picnameold=$data['upload_data']['file_name']; 
                       $width=$data['upload_data']['image_width'];
                       $height=$data['upload_data']['image_height'];
                      
                      $temp = explode(".",$data['upload_data']['file_name']);
                      $productmain_pic = "main_product" . '.' .end($temp);
                      //$this->session->set_userdata('picture_name',"$picname");
                      rename ("./asset/temp/".$picnameold, "./asset/temp/".$productmain_pic);
                      
                      if($width>=500&&$height>=500){
                      $set=1;
                      }
                      else{
                      $error="min";
                      $this->addproduct($error);
                      }


                      //echo $width." ".$height;
                    }

                  $cols=$this->session->userdata('numberrow');
				  $config['upload_path'] ='./asset/temp/';
                  $config['allowed_types'] = 'gif|jpg|png';
                  $config['max_size'] = '0';
                  $config['max_width']  = '0';
                  $config['max_height']  = '0';
                  $this->upload->initialize($config);
                  for($i=0;$i<$cols;$i++){
                 		
                  	   if(!$this->upload->do_upload('pic_gallery'.$i)){
                    		//$data[$i]=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
                    	  		//echo $data[$i]['error']."<br>";
                    
                          	if($_FILES['pic_gallery'.$i]['error']==4){
                          		//$product_pic[$i]="item.png";
                          		$product_picarray[$i]="item.png";
                         		//$this->session->set_userdata('picture_name',"$picname");
                      
                          		$set1=1;
                          	}else if($_FILES['pic_gallery'.$i]['error']==0){
                         		$e=1;
                      		
                      			
                         	}

                       }else{
                       $data=array('upload_data' =>$this->upload->data());
                      
                       $picnameold=$data['upload_data']['file_name']; 
                       $width=$data['upload_data']['image_width'];
                       $height=$data['upload_data']['image_height'];
                      
                       $temp = explode(".",$data['upload_data']['file_name']);
                       $product_pic = "product".$i . '.' .end($temp);
                       //$this->session->set_userdata('picture_name'.$i,"$picname$i");
                       rename ("./asset/temp/".$picnameold, "./asset/temp/".$product_pic);
                       $product_picarray[$i]=$product_pic;
                      	  if($width>=500&&$height>=500){
                      		$set1=1;
                      	  }
                      	  else{
                      		$e=2;
                      		break;
                      	  }
                      	 


                      //echo $width." ".$height;
                    }

                    
                
                  		
                  }
                  
                  if($e==1){
                  $error="error";
                  $this->addproduct($error);
                  }else if($e==2){
                  $error="min";
                  $this->addproduct($error);
                  }
                    //move
                   
                  



                  }//end $do==1;
                  
                  $p_price=$this->input->post('p_price');
                  $p_quantity=$this->input->post('p_quantity');
                  $s_id=$this->session->userdata('id');
                  date_default_timezone_set("Asia/Bangkok");
                  $p_create_date=date('Y-m-d');
                  $p_update_date=date('Y-m-d');
                  
                  $insert_product=array(
                        'p_price' => "$p_price",
                        'p_quantity' => "$p_quantity",
                        's_ID' => "$s_id",
                        'p_create_date' => "$p_create_date",
                        'p_update_date' => "$p_update_date"
                        );

                  $ap1=$this->shop->insert_product($insert_product); //get 1 success. end add products

                  $s_id=$this->session->userdata('id');
                  $cateid=$this->input->post('p_cate');
                  $p_id=$this->shop->get_p_ID($s_id);
                  $product_category_ID=$this->shop->get_idpcate($cateid);
                  //print_r($product_category_ID);
                  $product_category_ID_en=$product_category_ID[0]['product_category_ID'];
                  $product_category_ID_th=$product_category_ID[1]['product_category_ID'];
                  $p_id=$p_id[0]['p_ID'];
                  $insert_productcateP_en=array(
                        'product_category_ID' => "$product_category_ID_en",
                        'p_ID' => "$p_id"
                  );
                  $insert_productcateP_th=array(
                        'product_category_ID' => "$product_category_ID_th",
                        'p_ID' => "$p_id"
                  );
                  $ap2=$this->shop->insertcatep($insert_productcateP_en,$insert_productcateP_th);
                  //echo $ap2; //get 1 success end product detail cate

                  $product_detail_en=$this->input->post('pro_den');
                  $product_detail_th=$this->input->post('pro_dth');
                      if($product_detail_en=="-"){
                        $product_detail_en=$product_detail_th;
                      }else if($product_detail_th=="-"){
                        $product_detail_th=$product_detail_en;
                      }else if($product_detail_en=="-" && $product_detail_th=="-"){
                        $product_detail_en="-";
                        $product_detail_th="-";
                      }
                 
                  $product_name_en=$this->input->post('p_name_en');
                  $product_name_th=$this->input->post('p_name_th');
                      if($product_name_en=="-"){
                        $product_name_en=$product_name_th;
                      }else if($product_name_th=="-"){
                        $product_name_th=$product_name_en;
                      }else if($product_name_en=="-" && $product_name_th=="-"){
                        $product_name_en="-";
                        $product_name_th="-";
                      }

                  $product_status=$this->input->post('p_status');
                  if($product_status=="1"){
                        $product_status_en="Have stock";
                        $product_status_th="มีสินค้า";

                  }else if($product_status=="2"){
                  		$product_status_en="Out of stock";
                        $product_status_th="สินค้าหมด";

                  }

                  $insert_product_datail_en=array(
                        'product_detail' => "$product_detail_en",
                        'product_name' => "$product_name_en",
                        'product_status' => "$product_status_en",
                        'p_ID' => "$p_id",
                        'lang_ID' => 1
                        );
                  $insert_product_datail_th=array(
                        'product_detail' => "$product_detail_th",
                        'product_name' => "$product_name_th",
                        'product_status' => "$product_status_th",
                        'p_ID' => "$p_id",
                        'lang_ID' => 2
                        );
                  $ap3=$this->shop->insert_product_detail($insert_product_datail_en,$insert_product_datail_th);
                  //echo "$ap3"; //add product detail end.


                  $insert_main_gallery=array(
                  	'pic_name' => "$productmain_pic",
                  	'p_ID' => "$p_id",
                  	's_ID' => "$s_id"
				  );
				  $ap4=$this->shop->insert_gallery($insert_main_gallery);
                  //echo "$ap4";

                  for($i=0;$i<count($product_picarray);$i++){
                  		$insert_gallery=array(
                  			'pic_name' => $product_picarray[$i],
                  			'p_ID' => "$p_id",
                  			's_ID' => "$s_id"
				  		);
                  		$check[$i]=$this->shop->insert_gallery($insert_gallery);
                  		if($check[$i]==0){
                  			$e=1;
                  			break;
                  		}
                  		
                  }
                  if($e==1){
                  $ap5=0;
              	  }else{
              	  $ap5=1;
              	  }
              	  	//resize picture
              	   $s_id=$this->session->userdata('id');
                   	date_default_timezone_set("Asia/Bangkok");
                   	$date = date('Y-m-d');
                   
                   			$numsave=$s_id%1000;
                   			$numproduct=$p_id%1000;
                   			//echo "$numproduct";
                                      $filename = "./uploads/products/".$date;

                                      if (file_exists($filename)) {
                                      $c_gallrery=1;
                                      }else {
                                      mkdir("./uploads/products/".$date);
                                      $c_gallrery=1;
                                      }
									  $filename1 = "./uploads/products/".$date."/".$numsave;
                                      if (file_exists($filename1)) {
                                      $c_gallrery1=1;
                                      }else {
                                      mkdir("./uploads/products/".$date."/".$numsave);
                                      $c_gallrery1=1;
                                      }
                                      $filename2 = "./uploads/products/".$date."/".$numsave."/".$numproduct;
                                      if (file_exists($filename2)) {
                                      $c_gallrery2=1;
                                      }else {
                                      mkdir("./uploads/products/".$date."/".$numsave."/".$numproduct);
                                      $c_gallrery2=1;
                                      }

                    if($c_gallrery==1 && $c_gallrery1==1 && $c_gallrery2==1){

								$config['image_library']='gd2';
                                if($productmain_pic=="item.png"){
                                    $config['source_image']='./asset/img/'.$productmain_pic;
                                }else{
                                    $config['source_image']='./asset/temp/'.$productmain_pic;
                                }
                                $config['width']=500;
                                $config['height']=500;
                                $config['new_image']='./uploads/products/'.$date.'/'.$numsave.'/'.$numproduct.'/'.$productmain_pic;
                                $this->image_lib->clear();
                                $this->image_lib->initialize($config);
                                $this->image_lib->resize();
                                    if(!$this->image_lib->resize()){
                                        echo $this->image_lib->display_errors();
                                    }else{
                                        if($productmain_pic!="item.png"){
                                          $hit='./asset/temp/'.$productmain_pic;
                                          unlink($hit);}
                                    }

                               	for($i=0;$i<count($product_picarray);$i++){
                    			$config['image_library']='gd2';
                                if($product_picarray[$i]=="item.png"){
                                    $config['source_image']='./asset/img/'.$product_picarray[$i];
                                }else{
                                    $config['source_image']='./asset/temp/'.$product_picarray[$i];
                                }
                                $config['width']=500;
                                $config['height']=500;
                                $config['new_image']='./uploads/products/'.$date.'/'.$numsave.'/'.$numproduct.'/'.$product_picarray[$i];
                                $this->image_lib->clear();
                                $this->image_lib->initialize($config);
                                $this->image_lib->resize();
                                    if(!$this->image_lib->resize()){
                                        echo $this->image_lib->display_errors();
                                    }else{
                                        if($product_picarray[$i]!="item.png"){
                                          $hit='./asset/temp/'.$product_picarray[$i];
                                          unlink($hit);}
                                    }
                                }    
                    			$this->session->unset_userdata('numberrow');
                    }

              	  if($ap1==1&&$ap2==1&&$ap3==1&&$ap4==1&&$ap5==1){
              	  	redirect('backshop/productManage','refresh');
              	  }else{
              	  	redirect('backshop/addproduct');
              	  }

		}

		public function cols(){
			$cols= $this->input->post('cols');
			
			$this->session->set_userdata('numberrow',$cols);
			return 1;
			
		}

		public function modifyproduct(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('modifyproduct',$data);
			
			
		}

		public function modify_gallery(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('modify_gallery',$data);
			
			
		}
                  

		public function orderManage(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('orderManage',$data);
			
			
		}

		public function modifyorder(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('modifyorder',$data);
			
			
		}

		public function bankManage(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('bankManage',$data);
			
			
		}

		public function bankmodify(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('bankmodify',$data);
			
			
		}

		public function sellreport(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('sell_report',$data);
			
			
		}


		public function paymentreport(){
			$lang=$this->load_language->lang();
            $this->lang->load($lang,$lang);

			$this->login_system->checklogin();
			$data['user']=$this->session->userdata('loginname');
			$id=$this->input->get('shopid');
			if($id!=NULL){
			$this->session->set_userdata('id',$id);
			}
			$idset=$this->session->userdata('id');
			
			$shop=$this->shop->getshop($idset);
			
			$data['nameshop']=$shop[0]['shop_name'];
			$this->load->view('payment_report',$data);
			
			
		}

	
		



}





	



?>