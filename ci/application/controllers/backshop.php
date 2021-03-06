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
		$data['myshop'] = $this->shop->showshop();
		$this->cart->destroy();
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
		$result=$this->shop->get_success_order($idset);
		$data['nameshop']=$shop[0]['shop_name'];
		$result_1=$this->shop->get_memberOrder($idset);
		$sumOrder=count($result);
		$sumMember=count($result_1);
		$sumPrice=0;
		for($i=0;$i<count($result);$i++){
			$Price=$result[$i]['order_sum_price'];
			$sumPrice+=$Price;
		}
		$data_order=$this->shop->order_detail($idset);
		$data['result_2']=$data_order;
		$data['sumPrice']=$sumPrice;
		$data['sumOrder']=$sumOrder;
		$data['sumMember']=$sumMember;
		
		
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
		$check_list=$this->input->post('check_list');
		if(!empty($check_list)) {
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
            		
            		
            	}else{
            		redirect('backshop/productType','refresh');
            	}
            	
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
            	$result=null;
            	$namepic=null;
            	$shop=$this->shop->getshop($idset);
			//print_r($shop);
            	$s_id=$shop[0]['s_ID'];
            	$p_id=$this->shop->getall_pid($s_id);
			//$n_g=$this->session->userdata('n_g');


            	for($i=0;$i<count($p_id);$i++){

            		$result[$i]=$this->shop->dataproduct($p_id[$i]['p_ID']);
            		$namepic[$i]=$this->shop->get_gallery($p_id[$i]['p_ID']);

            	}
			//print_r($namepic);
            	
            	$data['shopid']=$s_id;
            	$data['nameshop']=$shop[0]['shop_name'];
            	$data['dataproduct']=$result;
            	$data['namepic']=$namepic;
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

            public function remove_product(){
            	$check_list=$this->input->post('check_list');
            	if(!empty($check_list)) {
            		$i = 0;
            		foreach($this->input->post('check_list') as $check) {
            			$i++;	

            		 $data[$i]=$check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
            		}
            		
            		for($j=1; $j<=count($data);$j++){ 
            			
            			
    					//echo $data[$j].'<br>';
            			$d[$j]=$this->shop->data_del($data[$j]);
            		}
    						//echo count($d);
    						//print_r($d);
            		for($j=1; $j<=count($d);$j++){
            			$filename[$j] = "./uploads/products".'/'.$d[$j][0]['p_create_date'].'/'.$d[$j][0]['s_ID'].'/'.$d[$j][0]['p_ID'];
            			$filename1[$j]= "./uploads/products".'/'.$d[$j][0]['p_update_date'].'/'.$d[$j][0]['s_ID'].'/'.$d[$j][0]['p_ID'];
            		}
            		for($i=1;$i<=count($filename);$i++){
            			if (file_exists($filename[$i])) {
            				$files = glob($filename[$i].'/'.'*');
    							foreach($files as $file){ // iterate files
    								if(is_file($file))
    							unlink($file); // delete file
    					}
    					rmdir($filename[$i]);

    				}
    				else{

    					if (file_exists($filename1[$i])) {
    						$files = glob($filename1[$i].'/'.'*');
    							foreach($files as $file){ // iterate files
    								if(is_file($file))
    							unlink($file); // delete file
    					}
    					rmdir($filename1[$i]);

    				}	
    				
    			}

    			
    		}

    		for($j=1; $j<=count($data);$j++){
    			
    			
    			$del=array('p_ID' => $data[$j]);
    			$s=$this->shop->remove_product($del);
    			if($s==0){
    				$e=1;
    				break;
    			}else{
    				$e=0;
    			}
    		}
    		if($e==1){
    			$s1=0;
    		}else{
    			$s1=1;
    				} // delete product;
    				
    				for($j=1; $j<=count($data);$j++){
    					
    					
    					$del=array('p_ID' => $data[$j]);
    					$s=$this->shop->remove_product_cate_detail($del);
    					if($s==0){
    						$e=1;
    						break;
    					}else{
    						$e=0;
    					}
    				}
    				if($e==1){
    					$s2=0;
    				}else{
    					$s2=1;
    				}

    				for($j=1; $j<=count($data);$j++){
    					
    					
    					$del=array('p_ID' => $data[$j]);
    					$s=$this->shop->remove_product_detail($del);
    					if($s==0){
    						$e=1;
    						break;
    					}else{
    						$e=0;
    					}
    				}
    				if($e==1){
    					$s3=0;
    				}else{
    					$s3=1;
    				}

    				for($j=1; $j<=count($data);$j++){
    					
    					
    					$del=array('p_ID' => $data[$j]);
    					$s=$this->shop->remove_product_gallery($del);
    					if($s==0){
    						$e=1;
    						break;
    					}else{
    						$e=0;
    					}
    				}
    				if($e==1){
    					$s4=0;
    				}else{
    					$s4=1;
    				}

    				if($s1==1&&$s2==1&&$s3==1&&$s4==1){
    					
    					
    					redirect('backshop/productManage','refresh');
    					
    				}
    			}else{
    				
    				redirect('backshop/productManage','refresh');
    			}

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
    						$productmain_pic="profile_product.jpg";
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

                  
              	  	//resize picture
                  $s_id=$this->session->userdata('id');
                  date_default_timezone_set("Asia/Bangkok");
                  $date = date('Y-m-d');
                  
                  $numsave=$s_id%1000;
                  $numproduct=$p_id%1000;
                   			//echo "$numproduct";
                  $filename0 = "./uploads/products";

                  if (file_exists($filename0)) {
                  	
                  }else {
                  	mkdir("./uploads/products");
                  	
                  }

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
                  	if($productmain_pic=="profile_product.jpg"){
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
                  		if($productmain_pic!="profile_product.jpg"){
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

                  				if($product_picarray[$i]=="item.png"){
                  					$p=$product_picarray[$i];
                  					$temp[$i] = explode(".",$p);
                  					$product_picarray_new[$i] = "item".$i. '.' .end($temp[$i]);

                     					//$this->session->set_userdata('picture_name',"$picname");
                  					rename ('./uploads/products/'.$date.'/'.$numsave.'/'.$numproduct.'/'.$product_picarray[$i],'./uploads/products/'.$date.'/'.$numsave.'/'.$numproduct.'/'.$product_picarray_new[$i]);
                  					$product_picarray[$i]="item".$i. '.' .end($temp[$i]);
                  					
                  				}	

                  				if($product_picarray[$i]!="item".$i.".png"){
                  					$hit='./asset/temp/'.$product_picarray[$i];
                  					unlink($hit);}
                  				}
                  			}
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

                  	public function modifyproduct($error=null){
                  		$lang=$this->load_language->lang();
                  		$this->lang->load($lang,$lang);
                  		$data['error']=$error;
                  		$this->login_system->checklogin();
                  		
                  		$data['user']=$this->session->userdata('loginname');

                  		
                  		$p_id=$this->input->get('p_id');
                  		if($p_id!=NULL){
                  			$this->session->set_userdata('p_id',$p_id);
                  		}

                  		$p_id=$this->session->userdata('p_id');
                  		$idset=$this->session->userdata('id');
                  		
                  		$shop=$this->shop->getshop($idset);
                  		
                  		$result=$this->shop->dataproduct($p_id);
                  		$namepic=$this->shop->get_gallery($p_id);
                  		$s_ID=$shop[0]['s_ID'];
                  		$datatype=$this->shop->get_ptype($s_ID);
                  		$datadetail=$this->shop->get_product_detail($p_id);
                  		
                  		$data['category_p']=$datatype;
                  		$data['data_p']=$result;
                  		$data['data_pn']=$namepic;
                  		$data['s_id']=$s_ID;
                  		$data['detail']=$datadetail;
                  		$data['nameshop']=$shop[0]['shop_name'];
                  		$this->load->view('modifyproduct',$data);
                  		
                  		
                  	}


                  	public function update_product(){
                  		$p_price=$this->input->post('p_price');
                  		$p_quantity=$this->input->post('p_quantity');
                  		date_default_timezone_set("Asia/Bangkok");
                  		$p_update_date=date('Y-m-d');
                  		$p_id=$this->session->userdata('p_id');
                  		$cateid=$this->input->post('p_cate');
                  		$p_status=$this->input->post('p_status');
                  		$product_detail_en=$this->input->post('pdetail_en');
                  		$product_detail_th=$this->input->post('pdetail_th');
                  		$product_name_en=$this->input->post('p_name_en');
                  		$product_name_th=$this->input->post('p_name_th');
                  		
                  		$result=$this->shop->dataproduct($p_id);
                  		$oldupdate=$result[0]['p_update_date'];
           //start update product
                  		$dataup_product=array(
                  			'p_price' => $p_price,
                  			'p_quantity' => $p_quantity,
                  			'p_update_date' => $p_update_date


                  			);


                  		$where_product=array('p_ID' => $p_id );
                  		$s_product=$this->shop->update_product($dataup_product,$where_product);
                  		$result=$this->shop->dataproduct($p_id);
                  		$update=$result[0]['p_update_date'];
                  		$s_id=$this->session->userdata('id');
                  		$namepic=$this->shop->get_gallery($p_id);
                  		
           //start update
                  		$findidmod=$this->shop->get_idpcate($cateid);
                  		$get_idcatedetail=$this->shop->get_catedetail($p_id);
                  		$id_gd_en=$get_idcatedetail[0]['product_cat_detail_ID'];
                  		$id_gd_th=$get_idcatedetail[1]['product_cat_detail_ID'];
                  		$idupdate_en=$findidmod[0]['product_category_ID'];
                  		$idupdate_th=$findidmod[1]['product_category_ID'];
                  		$this->shop->update_cate_datail($idupdate_en,$id_gd_en);
                  		$this->shop->update_cate_datail($idupdate_th,$id_gd_th);
                  		
		   //end update cate.

                  		if($p_status=="1"){
                  			$product_status_en="Have stock";
                  			$product_status_th="มีสินค้า";

                  		}else if($p_status=="2"){
                  			$product_status_en="Out of stock";
                  			$product_status_th="สินค้าหมด";

                  		}
                  		$update_product_datail_en=array(
                  			'product_detail' => "$product_detail_en",
                  			'product_name' => "$product_name_en",
                  			'product_status' => "$product_status_en",
                  			
                  			'lang_ID' => 1
                  			);
                  		$update_product_datail_th=array(
                  			'product_detail' => "$product_detail_th",
                  			'product_name' => "$product_name_th",
                  			'product_status' => "$product_status_th",
                  			
                  			'lang_ID' => 2
                  			);

                  		
                  		$idproduct=$this->shop->get_pdetail($p_id);
                  		if($product_detail_en!=NULL&&$product_detail_th!=NULL&&$product_name_en!=NULL&&$product_name_th!=NULL){
                  			$result_update1=$this->shop->update_product_detail( $idproduct[0]['product_detail_ID'],$update_product_datail_en);       
                  			$result_update2=$this->shop->update_product_detail( $idproduct[1]['product_detail_ID'],$update_product_datail_th); 
                  		}


                  		
                  		$numsave=$s_id%1000;
                  		$numproduct=$p_id%1000;
                   			//echo "$numproduct";
                  		$filename0 = "./uploads/products";

                  		if (file_exists($filename0)) {
                  			
                  		}else {
                  			mkdir("./uploads/products");
                  			
                  		}

                  		$filename = "./uploads/products/".$update;

                  		if (file_exists($filename)) {
                  			$c_gallrery=1;
                  		}else {
                  			mkdir("./uploads/products/".$update);
                  			$c_gallrery=1;
                  		}
                  		$filename1 = "./uploads/products/".$update."/".$numsave;
                  		if (file_exists($filename1)) {
                  			$c_gallrery1=1;
                  		}else {
                  			mkdir("./uploads/products/".$update."/".$numsave);
                  			$c_gallrery1=1;
                  		}
                  		$filename2 = "./uploads/products/".$update."/".$numsave."/".$numproduct;
                  		if (file_exists($filename2)) {
                  			$c_gallrery2=1;
                  		}else {
                  			mkdir("./uploads/products/".$update."/".$numsave."/".$numproduct);
                  			$c_gallrery2=1;
                  		}
                  		if($c_gallrery==1&&$c_gallrery1==1&&$c_gallrery2=1){
                  			
                  			for($i=0;$i<count($namepic);$i++){
                  				$path[$i]="./uploads/products/".$oldupdate."/".$s_id."/".$p_id."/".$namepic[$i]['pic_name'];
                  				$copyto[$i]="./uploads/products/".$result[0]['p_update_date']."/".$s_id."/".$p_id."/".$namepic[$i]['pic_name'];
                  				copy($path[$i], $copyto[$i]);
                  			}
                  			$set=0;	

                  			$config['upload_path'] ='./asset/temp/';
                  			$config['allowed_types'] = 'gif|jpg|png';
                  			$config['max_size'] = '0';
                  			$config['max_width']  = '0';
                  			$config['max_height']  = '0';
                  			$this->upload->initialize($config);
                  			
                  			
                  			if(!$this->upload->do_upload('update_modproduct')){
                    //$data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
                    	  //echo $data['error'];
                  				
                  				if($_FILES['update_modproduct']['error']==4){
                  					$productmain_pic=$namepic[0]['pic_name'];
                  					
                          //$this->session->set_userdata('picture_name',"$picname");
                  					
                  					$set=2;
                  				}else if($_FILES['update_modproduct']['error']==0){
                  					$set=null;
                  					
                  					$error="error";
                  					
                  					$this->modifyproduct($error);
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
                  					$set=null;
                  					$error="min";
                  					$this->modifyproduct($error);
                  					
                  				}


                      //echo $width." ".$height;
                  			}	

                  			if($set==1){

                  				$id_g=$namepic[0]['gallery_product_ID'];
                  				$where_g=array('gallery_product_ID' => "$id_g"  );
                  				$update_g=array(
                  					'pic_name' => "$productmain_pic"
                  					
                  					
                  					);
                  				$this->shop->update_gallery($update_g,$where_g);
                  				$namepic=$this->shop->get_gallery_all($p_id);
                  				$productmain_pic=$namepic[0]['pic_name'];

                  				$config['image_library']='gd2';
                  				if($productmain_pic=="profile_product.jpg"){
                  					$config['source_image']='./asset/img/'.$productmain_pic;
                  				}else{
                  					$config['source_image']='./asset/temp/'.$productmain_pic;
                  				}
                  				
                  				
                  				$config['width']=500;
                  				$config['height']=500;
                  				$config['new_image']="./uploads/products/".$result[0]['p_update_date']."/".$s_id."/".$p_id."/".$productmain_pic;
                  				$this->image_lib->clear();
                  				$this->image_lib->initialize($config);
                  				$this->image_lib->resize();
                  				if(!$this->image_lib->resize()){
                  					echo $this->image_lib->display_errors();
                  				}else{
                  					if($productmain_pic!='profile_product.jpg'){
                  						$hit='./asset/temp/'.$productmain_pic;
                  						unlink($hit);
                  						$filename_product ="./uploads/products/".$result[0]['p_update_date']."/".$s_id."/".$p_id."/"."profile_product.jpg";;
                  						if (file_exists($filename_product)) {
                  							unlink($filename_product);
                  						}
                  					}
                  					$id_g=$namepic[0]['gallery_product_ID'];
                  					$where_g=array('gallery_product_ID' => "$id_g"  );
                  					$update_g=array(
                  						'pic_name' => "$productmain_pic"
                  						
                  						
                  						);
                  					$this->shop->update_gallery($update_g,$where_g);

                  					redirect('backshop/productManage');
                  					
                  					
                  					
                  					
                  				}
                  			}else if($set==2){
                                redirect('backshop/productManage');
                            }
                  		}
                  	}

                  	



                  	public function modify_gallery($error=NULL){
                  		$lang=$this->load_language->lang();
                  		$this->lang->load($lang,$lang);

                  		$this->login_system->checklogin();
                  		
                  		$data['user']=$this->session->userdata('loginname');
                  		$id_g=$this->input->get('pg_id');
                  		$data['error']=$error;
                  		if($id_g!=NULL){
                  			$this->session->set_userdata('pg_id',$id_g);
                  		}


                  		$idset=$this->session->userdata('id');
                  		
                  		$shop=$this->shop->getshop($idset);
                  		
                  		$data['nameshop']=$shop[0]['shop_name'];
                  		$this->load->view('modify_gallery',$data);
                  		
                  		
                  	}
                  	public function process_modify(){
                  		$p_id=$this->session->userdata('p_id');
                  		$s_id=$this->session->userdata('id');
                  		$id_g=$this->session->userdata('pg_id');
                  		
                  		$gallery=$this->shop->get_gdetail($id_g);
                  		$update=$gallery[0]['p_update_date'];
                  		$name_pic=$gallery[0]['pic_name'];
                  		$n_g=$this->session->userdata('n_g');

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
                  			
                  			
                  			if(!$this->upload->do_upload('modify_gallery')){
                  				if($_FILES['modify_gallery']['error']==4){
                  					$product_pic=$gallery[0]['pic_name'];
                  					$set=1;
                  				}else if($_FILES['modify_gallery']['error']==0){
                  					$set=null;
                  					$error="error";
                  					
                  					$this->modify_gallery($error);
                  				}

                  			}else{
                  				$data=array('upload_data' =>$this->upload->data());
                  				
                  				$picnameold=$data['upload_data']['file_name']; 
                  				$width=$data['upload_data']['image_width'];
                  				$height=$data['upload_data']['image_height'];
                  				$temp = explode(".",$data['upload_data']['file_name']);
                  				$namepic = explode(".",$gallery[0]['pic_name']);
                  				$product_pic = $namepic[0].'.' .end($temp);
                  				rename ("./asset/temp/".$picnameold, "./asset/temp/".$product_pic);
                  				
                  				if($width>=500&&$height>=500){

                  					$set=1;
                  				}
                  				else{
                  					$error="min";
                  					$this->modify_gallery($error);
                  				}


                      //echo $width." ".$height;
                  			}
                  			
                  		}
                  		
                  		if($set==1){
                  			$numsave=$s_id%1000;
                  			$numproduct=$p_id%1000;
                   			//echo "$numproduct";
                  			$filename0 = "./uploads/products";

                  			if (file_exists($filename0)) {
                  				
                  			}else {
                  				mkdir("./uploads/products");
                  				
                  			}

                  			$filename = "./uploads/products/".$update;

                  			if (file_exists($filename)) {
                  				$c_gallrery=1;
                  			}else {
                  				mkdir("./uploads/products/".$update);
                  				$c_gallrery=1;
                  			}
                  			$filename1 = "./uploads/products/".$update."/".$numsave;
                  			if (file_exists($filename1)) {
                  				$c_gallrery1=1;
                  			}else {
                  				mkdir("./uploads/products/".$update."/".$numsave);
                  				$c_gallrery1=1;
                  			}
                  			$filename2 = "./uploads/products/".$update."/".$numsave."/".$numproduct;
                  			if (file_exists($filename2)) {
                  				$c_gallrery2=1;
                  			}else {
                  				mkdir("./uploads/products/".$update."/".$numsave."/".$numproduct);
                  				$c_gallrery2=1;
                  			}

                  			if($c_gallrery==1 && $c_gallrery1==1 && $c_gallrery2==1){

                  				$config['image_library']='gd2';
                  				if($product_pic==$gallery[0]['pic_name']){
                  					$config['source_image']='./uploads/products/'.$update.'/'.$numsave.'/'.$numproduct.'/'.$product_pic;
                  				}else{
                  					$config['source_image']='./asset/temp/'.$product_pic;
                  				}
                  				$config['width']=500;
                  				$config['height']=500;
                  				$config['new_image']='./uploads/products/'.$update.'/'.$numsave.'/'.$numproduct.'/'.$product_pic;
                  				$this->image_lib->clear();
                  				$this->image_lib->initialize($config);
                  				$this->image_lib->resize();
                  				if(!$this->image_lib->resize()){
                  					echo $this->image_lib->display_errors();
                  				}else{

                  					

                  					if($product_pic!=$gallery[0]['pic_name']){
                  						$hit='./asset/temp/'.$product_pic;
                  						unlink($hit);
                  						$filename_product = './uploads/products/'.$update.'/'.$numsave.'/'.$numproduct.'/'.$gallery[0]['pic_name'];
                  						if (file_exists($filename_product)) {
                  							unlink($filename_product);
                  						}
                  					}

                  					$where_g=array('gallery_product_ID' => "$id_g"  );
                  					$update_g=array(
                  						'pic_name' => "$product_pic",
                  						);
                  					$this->shop->update_gallery($update_g,$where_g);
                  					redirect('backshop/edit_gallery');
                  					$this->session->set_userdata('p_rf',1);
                  				}
                  			}
                  		}
                  		

                  	}
                  	

                  	public function orderManage(){
                  		$lang=$this->load_language->lang();
                  		$this->lang->load($lang,$lang);

                  		$this->login_system->checklogin();
                  		$data['user']=$this->session->userdata('loginname');
                  		$idset=$this->session->userdata('id');
                  		
                  		$shop=$this->shop->getshop($idset);
                  		
                  		$data['nameshop']=$shop[0]['shop_name'];
                  		$data_order=$this->shop->order_detail($idset);
                  		$data['result']=$data_order;
                  		
                  		$this->load->view('orderManage',$data);
                  		
                  		
                  	}

                  	public function delete_order(){
                  		$s_id=$this->session->userdata('id');
                  		$check_list=$this->input->post('check_list');
                  		if(!empty($check_list)) {

                  			$i = 0;
                  			foreach($this->input->post('check_list') as $check) {
                  				

            		 $data[$i]=$check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
            		 
                     $i++; //in your case, it would echo whatever $row['Report ID'] is equivalent to.
                 }

                 
                 
                 for($i=0;$i<count($data);$i++){
                 	$this->shop->delete_order($data[$i]);
                 	$this->shop->delete_order_product($data[$i]);
                 	$filename = "./uploads/orders".'/'.$s_id.'/'.$data[$i];
                 	if (file_exists($filename)) {
                 		$files = glob($filename.'/'.'*');
    							foreach($files as $file){ // iterate files
    								if(is_file($file))
    							unlink($file); // delete file
    					}
    					rmdir($filename);

    				}
    			}
    			redirect('backshop/orderManage');
    		}else{
    			redirect('backshop/orderManage');
    		}
    	}

    	public function delete_bank(){
    		$check_list=$this->input->post('check_list');
    		if(!empty($check_list)) {
    			$i = 0;
    			foreach($this->input->post('check_list') as $check) {
    				

            		 $data[$i]=$check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
            		 
                     $i++; //in your case, it would echo whatever $row['Report ID'] is equivalent to.
                 }
                 
                 for($i=0;$i<count($data);$i++){
                 	$this->shop->delete_bank($data[$i]);
                 	
                 }
                 redirect('backshop/bankManage');
             }else{
             	redirect('backshop/bankManage');
             }
         }

         public function modifyorder(){
         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();
         	$data['user']=$this->session->userdata('loginname');
         	$o_id=$this->input->get('o_id');
         	if($o_id!=NULL){
         		$this->session->set_userdata('o_id',$o_id);
         	}
         	$o_id=$this->session->userdata('o_id');
         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);
         	$data_order=$this->shop->get_allorder($o_id);
         	$data_product=$this->shop->get_product_order($o_id);
         	$data_shipping=$this->shop->get_shipping($o_id);
         	$data['result']=$data_order;
         	
         	$data['data_shipping']=$data_shipping;
         	$data['product_order']=$data_product;
         	
         	$data['nameshop']=$shop[0]['shop_name'];
         	//print_r($data_product);
         	$this->load->view('modifyorder',$data);
         	
         	
         }

         public function update_order(){
         	$o_id=$this->session->userdata('o_id');
         	$status_order=$this->input->post('order_status');
         	date_default_timezone_set("Asia/Bangkok");
         	$order_update_date=date('Y-m-d');
         	$where_order=array('order_ID' => "$o_id"  );
         	$update_order=array(
         		'order_status' => "$status_order",
         		'order_update_date' => "$order_update_date"
         		
         		
         		);
         	$s=$this->shop->update_order($update_order,$where_order);
         	if($s==1){
         		
         		redirect('backshop/orderManage');
         	}else{
         		redirect('backshop/modifyorder');
         	}
         }

         public function bankManage(){
         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();
         	$data['user']=$this->session->userdata('loginname');
         	
         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);
         	$result=$this->shop->get_bankdetail($idset);
         	
         	$data['nameshop']=$shop[0]['shop_name'];
         	$data['result']=$result;
         	$this->load->view('bankManage',$data);
         	
         	
         }

         public function bankmodify(){
         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();
         	$data['user']=$this->session->userdata('loginname');
         	
         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);
         	
         	$data['nameshop']=$shop[0]['shop_name'];
         	$this->load->view('bankmodify',$data);
         	
         	
         }

         public function process_addbank(){

         	$bank_account=$this->input->post('bank_account');
         	$bank=$this->input->post('bank_selected');
         	$name_account=$this->input->post('account_name');
         	$bank_branch=$this->input->post('bank_branch');
         	$bank_type=$this->input->post('acc_t');
         	$s_id=$this->session->userdata('id');
         	$insert_bank=array(
         		'bank_account' => $bank_account,
         		'owner_bank_select' => $bank,
         		'name_account' => $name_account,
         		'bank_branch' => $bank_branch,
         		'bank_type' => $bank_type,
         		's_ID' => $s_id

         		);
         	$s=$this->shop->insert_bank($insert_bank);
         	if($s==1){
         		redirect('backshop/bankManage');
         	}else{
         		redirect('backshop/bankmodify');
         	}
         	
         }

         public function sellreport(){
         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();
         	$data['user']=$this->session->userdata('loginname');
         	
         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);
         	
         	$data['nameshop']=$shop[0]['shop_name'];
         	$result=$this->shop->get_success_order($idset);
         	
         	$data['result']=$result;
         	$this->load->view('sell_report',$data);
         	
         	
         }


         public function paymentreport(){
         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();
         	$data['user']=$this->session->userdata('loginname');
         	
         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);

         	$result=$this->shop->get_payreport($idset);
         	
         	$data['nameshop']=$shop[0]['shop_name'];
         	$data['result']=$result;
         	$this->load->view('payment_report',$data);
         	
         	
         }

         public function edit_gallery(){

         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();

         	
         	
         	$data['user']=$this->session->userdata('loginname');
         	
         	$p_id=$this->input->get('p_id');
         	if($p_id!=NULL){
         		$this->session->set_userdata('p_id',$p_id);
         	}

         	$p_id=$this->session->userdata('p_id');
         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);
			//echo "$p_id";
         	$result=$this->shop->dataproduct($p_id);
         	$s_ID=$shop[0]['s_ID'];
         	$get_gallery=$this->shop->get_pgallery($p_id);
         	$data['data_p']=$result;
         	$data['s_id']=$s_ID;
         	$data['get_gallery']=$get_gallery;
			//echo '<br>';
			//print_r($get_gallery);
         	$data['number_g']=count($get_gallery);
         	$data['nameshop']=$shop[0]['shop_name'];
         	$this->load->view('edit_gallery',$data);
         	
         	
         }

         public function add_gallery($error=NULL){

         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();
         	$data['user']=$this->session->userdata('loginname');
         	$data['error']=$error;
         	$n_g=$this->input->get('num_g');
         	$p_id=$this->input->get('p_id');

         	if($p_id!=NULL&&$n_g!=NULL){
         		$this->session->set_userdata('p_id',$p_id);
         		$this->session->set_userdata('n_g',$n_g);
         	}
         	$n_g=$this->session->userdata('n_g');
         	$p_id=$this->session->userdata('p_id');
         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);
         	
         	
         	
         	
         	$data['nameshop']=$shop[0]['shop_name'];
         	$this->load->view('add_gallery',$data);



         }

         public function process_add(){
         	
         	$n_g=$this->session->userdata('n_g');
         	$p_id=$this->session->userdata('p_id');
         	$s_id=$this->session->userdata('id');
         	$result=$this->shop->get_product($p_id);
         	$oldupdate=$result[0]['p_update_date'];

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
         		
         		
         		if(!$this->upload->do_upload('addp_gallery')){
         			if($_FILES['addp_gallery']['error']==4){
         				$product_pic="item.png";
         				$set=1;
         			}else if($_FILES['addp_gallery']['error']==0){
         				$set=null;
         				$error="error";
         				
         				$this->add_gallery($error);
         			}

         		}else{
         			$data=array('upload_data' =>$this->upload->data());
         			
         			$picnameold=$data['upload_data']['file_name']; 
         			$width=$data['upload_data']['image_width'];
         			$height=$data['upload_data']['image_height'];
         			
         			$temp = explode(".",$data['upload_data']['file_name']);
         			$product_pic = "product".$n_g . '.' .end($temp);
                      //$this->session->set_userdata('picture_name',"$picname");
         			rename ("./asset/temp/".$picnameold, "./asset/temp/".$product_pic);
         			
         			if($width>=500&&$height>=500){
         				$set=1;
         			}
         			else{
         				$set=1;
         				$error="min";
         				$this->add_gallery($error);
         			}


                      //echo $width." ".$height;
         		}
         		
         	}

         	if($set==1){

         		$numsave=$s_id%1000;
         		$numproduct=$p_id%1000;
                   			//echo "$numproduct";
         		$filename0 = "./uploads/products";

         		if (file_exists($filename0)) {
         			
         		}else {
         			mkdir("./uploads/products");
         			
         		}

         		$filename = "./uploads/products/".$oldupdate;

         		if (file_exists($filename)) {
         			$c_gallrery=1;
         		}else {
         			mkdir("./uploads/products/".$oldupdate);
         			$c_gallrery=1;
         		}
         		$filename1 = "./uploads/products/".$oldupdate."/".$numsave;
         		if (file_exists($filename1)) {
         			$c_gallrery1=1;
         		}else {
         			mkdir("./uploads/products/".$oldupdate."/".$numsave);
         			$c_gallrery1=1;
         		}
         		$filename2 = "./uploads/products/".$oldupdate."/".$numsave."/".$numproduct;
         		if (file_exists($filename2)) {
         			$c_gallrery2=1;
         		}else {
         			mkdir("./uploads/products/".$oldupdate."/".$numsave."/".$numproduct);
         			$c_gallrery2=1;
         		}

         		if($c_gallrery==1 && $c_gallrery1==1 && $c_gallrery2==1){

         			$config['image_library']='gd2';
         			if($product_pic=="item.png"){
         				$config['source_image']='./asset/img/'.$product_pic;
         			}else{
         				$config['source_image']='./asset/temp/'.$product_pic;
         			}
         			$config['width']=500;
         			$config['height']=500;
         			$config['new_image']='./uploads/products/'.$oldupdate.'/'.$numsave.'/'.$numproduct.'/'.$product_pic;
         			$this->image_lib->clear();
         			$this->image_lib->initialize($config);
         			$this->image_lib->resize();
         			if(!$this->image_lib->resize()){
         				echo $this->image_lib->display_errors();
         			}else{
         				if($product_pic=="item.png"){
         					$temp = explode(".",$product_pic);
         					$product_pic_new = "item".$n_g . '.' .end($temp);

                     					//$this->session->set_userdata('picture_name',"$picname");
         					rename ('./uploads/products/'.$oldupdate.'/'.$numsave.'/'.$numproduct.'/'.$product_pic, './uploads/products/'.$oldupdate.'/'.$numsave.'/'.$numproduct.'/'.$product_pic_new);
         					$product_pic= "item".$n_g . '.' .end($temp);
         				}

         				if($product_pic!="item.png"){
         					$hit='./asset/temp/'.$product_pic;
         					unlink($hit);}

         					$insert_g=array(
         						'pic_name' => "$product_pic",
         						'p_ID' => "$p_id",
         						's_ID' => "$s_id"
         						
         						);

         					$this->shop->add_gallery($insert_g);  
         					redirect('backshop/edit_gallery');
         					
         				}
         			}

         		}
         	}

         	public function delete_gallery(){
         		$p_id=$this->session->userdata('p_id');
         		$s_id=$this->session->userdata('id');
         		$check_list=$this->input->post('check_list');
         		if(!empty($check_list)) {
         			$i = 0;
         			foreach($this->input->post('check_list') as $check) {
         				$i++;	

            		 $data[$i]=$check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
            		}
            		for($j=1; $j<=count($data);$j++){
            			$gallery[$j]=$this->shop->get_gdetail($data[$j]);
            		}
            		
            		for($j=1; $j<=count($data);$j++){
            			
            			if($gallery[$j][0]['pic_name']=="item.png"){
            				$del=array('gallery_product_ID' => $data[$j]);
            				$this->shop->remove_gallery($del);
            			}else{
            				$filename = "./uploads/products".'/'.$gallery[$j][0]['p_update_date'].'/'.$s_id.'/'.$p_id;
            				$files = glob($filename.'/'.$gallery[$j][0]['pic_name']);
    							foreach($files as $file){ // iterate files
    								if(is_file($file))
    							unlink($file); // delete file
    					}
    					$del=array('gallery_product_ID' => $data[$j]);
    					$this->shop->remove_gallery($del);
    				}
    				
    			}
    			
    			
    			redirect('backshop/edit_gallery','refresh');
    			
    		}else{
    			redirect('backshop/edit_gallery','refresh');
    		}


    		
    		
    	}

    	public function memberreport(){
    		$lang=$this->load_language->lang();
    		$this->lang->load($lang,$lang);

    		$this->login_system->checklogin();
    		$data['user']=$this->session->userdata('loginname');
    		
    		
    		$idset=$this->session->userdata('id');
    		
    		$shop=$this->shop->getshop($idset);
    		$get_memberID=$this->shop->get_memberOrder($idset);
    		
    		for($i=0;$i<count($get_memberID);$i++){
    			$result[$i]=$this->shop->getdatail_mem($get_memberID[$i]['memberID']);
    		}
    		

    		$data['nameshop']=$shop[0]['shop_name'];

    		if(!empty($result)){
    			$data['result']=$result;
    		}else{
    			$data['result']=null;
    		}
    		
    		$this->load->view('member_report',$data);
    		
    		
    	}
    	
    	public function setting($error=null){
    		$lang=$this->load_language->lang();
    		$this->lang->load($lang,$lang);

    		$this->login_system->checklogin();
    		$data['user']=$this->session->userdata('loginname');
    		
    		
    		$idset=$this->session->userdata('id');
    		
    		$shop=$this->shop->getshop($idset);
    		
    		$shopdetail=$this->shop->getshopdertail($idset);
    		$shopall=$this->shop->getshopfanpage($idset);
    		
    		$path_profile_pic=$idset.'/'.$shopall[0]['shop_pic'];
    		$path_header_pic=$idset.'/'.$shopall[0]['shop_pic_header'];
    		$path_bg_pic=$idset.'/'.$shopall[0]['shop_pic_bg'];


    		$data['nameshop']=$shop[0]['shop_name'];
    		
    		$temp = explode("/",$shop[0]['s_url']);
    		$data['url']=$temp[4];

    		$data['name_en']=$shopdetail[0]['shop_name'];
    		$data['name_th']=$shopdetail[1]['shop_name'];
    		$data['detail_en']=$shopdetail[0]['shop_detail_data'];
    		$data['detail_th']=$shopdetail[1]['shop_detail_data'];
    		$data['fanpage']=$shopall[0]['shop_fanpage'];
    		
    		$data['profile']=$path_profile_pic;
    		$data['header']=$path_header_pic;
    		$data['bg']=$path_bg_pic;

    		$data['cate']=$this->member->type_category();
    		$data['error']=$error;
    		$this->load->view('setting',$data);
    		
    		
    	}

    	public function process_update_setting(){
    		$idset=$this->session->userdata('id');
    		$shopall=$this->shop->getshopfanpage($idset);
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
    			$config['max_width']  = '0';
    			$config['max_height']  = '0';
    			$this->upload->initialize($config);
    			
    			
    			if(!$this->upload->do_upload('select_shopprofile')){
    				$data=array('error'=>$this->upload->display_errors());
    				if($_FILES['select_shopprofile']['error']==4){
    					$pic_profile=$shopall[0]['shop_pic'];
    					
    					
    					$set1=2;
    				}else if($_FILES['select_shopprofile']['error']==0){
    					
    					$set1=null;
    					
    					$error1="error1";
    					
    					$this->setting($error1);
    				}

    			}else{
    				$data=array('upload_data' =>$this->upload->data());
    				
    				$picnameold=$data['upload_data']['file_name']; 
    				$width=$data['upload_data']['image_width'];
    				$height=$data['upload_data']['image_height'];
    				$temp = explode(".",$data['upload_data']['file_name']);
    				$pic_profile = "profile" . '.' .end($temp);
    				
    				rename ("./asset/temp/".$picnameold, "./asset/temp/".$pic_profile);
    				if($width>=180&&$height>=180){
    					$set1=1;
    				}
    				else{
    					$error1="min";
    					$set1=null;
    					$this->setting($error1);
    				}
    				
    			}

                    //background picture

    			
    			if(!$this->upload->do_upload('select_shopbg')){
    				$data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
    				
    				if($_FILES['select_shopbg']['error']==4){
    					$pic_bg=$shopall[0]['shop_pic_bg'];
    					
    					
    					$set2=2;
    				}else if($_FILES['select_shopbg']['error']==0){
    					$set2=null;
    					
    					$error2="error2";
    					
    					$this->setting($error2);
    				}

    			}else{
    				$data=array('upload_data' =>$this->upload->data());
    				
    				$picnameold=$data['upload_data']['file_name']; 
    				$width=$data['upload_data']['image_width'];
    				$height=$data['upload_data']['image_height'];
    				$temp = explode(".",$data['upload_data']['file_name']);
    				$pic_bg = "bg" . '.' .end($temp);
    				
    				rename ("./asset/temp/".$picnameold, "./asset/temp/".$pic_bg);
    				if($width>=1366&&$height>=768){
    					$set2=1;
    				}
    				else{
    					$error2="min";
    					$set2=null;
    					$this->setting($error2);
    				}
    				
    			}

                    //cover picture

    			
    			
    			
    			if(!$this->upload->do_upload('select_shopcover')){
    				$data=array('error'=>$this->upload->display_errors());
                    //0 loop 3 4 loop 2
    				
    				if($_FILES['select_shopcover']['error']==4){
    					$pic_cover=$shopall[0]['shop_pic_header'];
    					
    					
    					$set3=2;
    				}else if($_FILES['select_shopcover']['error']==0){
    					$set3=null;
    					
    					$error3="error3";
    					
    					$this->setting($error3);
    				}

    			}else{
    				$data=array('upload_data' =>$this->upload->data());
    				
    				$picnameold=$data['upload_data']['file_name'];
    				$width=$data['upload_data']['image_width'];
    				$height=$data['upload_data']['image_height']; 
    				$temp = explode(".",$data['upload_data']['file_name']);
    				$pic_cover= "cover" . '.' .end($temp);
    				
    				rename ("./asset/temp/".$picnameold, "./asset/temp/".$pic_cover);
    				if($width>=600&&$height>=240){
    					$set3=1;
    				}
    				else{
    					$error3="min";
    					$set3=null;
    					$this->setting($error3);
    				}
    				
    			}
    			


    			

    		}

    		if($set1!=null&&$set2!=null&&$set3!=null){
    			
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
                $idset=$this->session->userdata('id');
                $shop=$this->shop->getshop($idset);
                $temp = explode("/",$shop[0]['s_url']);
                
                
    			$URL="www.myaday.net/Project/TBShop/Shop/".$this->input->post('urlname')."/".$temp[5]."/".$temp[6];
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
    			
    			$profile=$pic_profile;

    			$bg=$pic_bg;
    			$cover=$pic_cover;
                      //echo $shopname_en." ".$shopname_th." ".$URL." ".$category." ".$category." ".$shopdetail_en." ".$shopdetail_th."". $fanpage." ".$profile." ".$bg." " .$cover;
    			$updateshop=array(
    				
    				'shop_pic_header' => "$cover",
    				'shop_pic_bg' => "$bg",
    				'shop_pic' => "$profile",
    				
    				's_url' => "$URL",
    				
    				'shop_fanpage' => "$fanpage"
    				
    				);

    			$where_update=array('s_ID'=>"$idset");
                      //print_r($where_update);
    			if(!empty($updateshop)){
    				$s1=$this->shop->update_shop($updateshop, $where_update);
    			}

    			$update_shop_cate=array(
    				
    				'shop_category_ID' => "$category"
    				
    				);
    			if(!empty($update_shop_cate)){
    				$s2=$this->shop->update_cate($update_shop_cate, $where_update);
    			}

    			$where_update_datail=array('s_ID'=>"$idset",'lang_ID' => 1);

    			$updateshop_detailen=array(
    				'shop_name' => "$shopname_en",
    				'shop_detail_data' => "$shopdetail_en",
    				);
    			if(!empty( $updateshop_detailen)){
    				$s3=$this->shop->update_detail_en($updateshop_detailen, $where_update_datail);
    			}
    			$where_update_datail=array('s_ID'=>"$idset",'lang_ID' => 2);
    			$updateshop_detailth=array(
    				'shop_name' => "$shopname_th",
    				'shop_detail_data' => "$shopdetail_th",
    				
    				
    				
    				);
    			if(!empty( $updateshop_detailth)){
    				$s4=$this->shop->update_detail_th($updateshop_detailth, $where_update_datail);
    			}

    		}

    		


    		if(($set1==1)||($set2==1)||($set3==1)||($set1==1&&$set2==1)||($set1==1&&$set3==1)||($set2==1&&$set3==1)||($set1==1&&$set2==1&&$set3==1)){

    			$numsave=$idset%1000;
    			$filename = "./uploads/shops/".$numsave;

    			if (file_exists($filename)) {
    				$s=1;
    			}else {
    				mkdir("./uploads/shops/".$numsave);
    				$s=1;
    			}

    			if($s==1){
    				$hit='./uploads/shops/'.$numsave.'/'.$profile;
    				unlink($hit);
    				$config['image_library']='gd2';
    				$config['source_image']='./asset/temp/'.$profile;
    				$config['width']=180;
    				$config['height']=180;
    				$config['new_image']='./uploads/shops/'.$numsave.'/'.$profile;
    				$this->image_lib->clear();
    				$this->image_lib->initialize($config);
    				$this->image_lib->resize();
    				if(!$this->image_lib->resize()){
    					echo $this->image_lib->display_errors();
    				}else{
    					
    					$hit='./asset/temp/'.$profile;
    					unlink($hit);
    				}
    				$hit='./uploads/shops/'.$numsave.'/'.$bg;
    				unlink($hit);
    				$config['image_library']='gd2';
    				$config['source_image']='./asset/temp/'.$bg;
    				$config['width']=1366;
    				$config['height']=768;
    				$config['new_image']='./uploads/shops/'.$numsave.'/'.$bg;
    				$this->image_lib->clear();
    				$this->image_lib->initialize($config);
    				$this->image_lib->resize();
    				if(!$this->image_lib->resize()){
    					echo $this->image_lib->display_errors();
    				}else{
    					
    					$hit='./asset/temp/'.$bg;
    					unlink($hit);
    					
    				}   
    				$hit='./uploads/shops/'.$numsave.'/'.$cover;
    				unlink($hit);
    				$config['image_library']='gd2';
    				$config['source_image']='./asset/temp/'.$cover;
    				$config['width']=600;
    				$config['height']=240;
    				$config['new_image']='./uploads/shops/'.$numsave.'/'.$cover;
    				$this->image_lib->clear();
    				$this->image_lib->initialize($config);
    				$this->image_lib->resize();
    				if(!$this->image_lib->resize()){
    					echo $this->image_lib->display_errors();
    				}else{
    					
    					$hit='./asset/temp/'.$cover;
    					unlink($hit);
    					
    				}

    				

    				$s=0;

    				redirect('backshop/myshop');
                      //echo $s1." ".$s2." ".$s3." ".$s4;
    			}
    			


    		}else if(($set1==2)||($set2==2)||($set3==2)||($set1==2&&$set2==2)||($set1==2&&$set3==2)||($set2==2&&$set3==2)||($set1==2&&$set2==2&&$set3==2)){
    			redirect('backshop/myshop');
                    	//echo $s1." ".$s2." ".$s3." ".$s4;
    		}else{
    			redirect('backshop/setting');
                    	//echo "fail";
    		}

    		
    		
    		

    	}

    	public function delete_shop(){
    		
    		$s_id=$this->session->userdata('id');
    		$shopall=$this->shop->getshopfanpage($s_id);

    		
    		$delete=array('s_ID'=>"$s_id");
    		$h1=$this->shop->checkshop($s_id);
    		if($h1==1){
    			$filename= "./uploads/shops".'/'.$s_id;

    			if (file_exists($filename)) {
    				$files = glob($filename.'/'.'*');
    							foreach($files as $file){ // iterate files
    								if(is_file($file))
    							unlink($file); // delete file
    					}
    					rmdir($filename);

    				}
    				$this->shop->delete_shop($delete);
    			}
    			$h2=$this->shop->checkshop_cate_detail($s_id);
    			if($h2==1){
    				$this->shop->delete_cate_detail($delete);
    			}
    			$h3=$this->shop->checkshop_detail($s_id);
    			if($h3==1){
    				$this->shop->delete_shop_detail($delete);
    			}
    			$h4=$this->shop->checkshop_payment($s_id);
    			if($h4==1){
    				$this->shop->delete_shop_payment($delete);
    			}
    			$h5=$this->shop->checkshop_tranfer($s_id);
    			if($h5==1){
    				$this->shop->delete_shop_tranfer($delete);
    			}
    			$h6=$this->shop->checkproduct($s_id);
    			if($h6==1){
    				$d=$this->shop->data_del_1($s_id);
    				for($i=0;$i<count($d);$i++){
    					$filename = "./uploads/products".'/'.$d[$i]['p_create_date'].'/'.$d[$i]['s_ID'].'/'.$d[$i]['p_ID'];
    					$filename1= "./uploads/products".'/'.$d[$i]['p_update_date'].'/'.$d[$i]['s_ID'].'/'.$d[$i]['p_ID'];
    					

    					if (file_exists($filename)) {
    						$files = glob($filename.'/'.'*');
    							foreach($files as $file){ // iterate files
    								if(is_file($file))
    							unlink($file); // delete file
    					}
    					rmdir("./uploads/products".'/'.$d[$i]['p_create_date'].'/'.$d[$i]['s_ID']);

    				}
    				else{

    					if (file_exists($filename1)) {
    						$files = glob($filename1.'/'.'*');
    							foreach($files as $file){ // iterate files
    								if(is_file($file))
    							unlink($file); // delete file
    					}
    					rmdir("./uploads/products".'/'.$d[$i]['p_update_date'].'/'.$d[$i]['s_ID']);

    				}	
    			}

    			$this->shop->delete_product($d[$i]['p_ID']);
    		}
    	}
    	$h7=$this->shop->checkproduct_cate($s_id);
    	if($h7==1){
    		$this->shop->delete_product_cate($delete);
    	}
    	
    	$h9=$this->shop->checkorder($s_id);

    	if($h9==1){
    		$d=$this->shop->data_del_order($s_id);
    		for($i=0;$i<count($d);$i++){
    			$filename = "./uploads/orders".'/'.$d[$i]['s_ID'].'/'.$d[$i]['order_ID'];
    			if (file_exists($filename)) {
    				$files = glob($filename.'/'.'*');
    							foreach($files as $file){ // iterate files
    								if(is_file($file))
    							unlink($file); // delete file
    					}
    					rmdir("./uploads/orders".'/'.$d[$i]['s_ID']);

    				}
    				$this->shop->delete_order_all($d[$i]['order_ID']);
    			}
    		}
    		redirect('backshop/myshop');



    		//echo $h1." ".$h2." ".$h3." ".$h4." ".$h4." ".$h5." ".$h6." ".$h7." ".$h8." ".$h9;
    		
    	}

    	

    	

    	public function management(){
    		$lang=$this->load_language->lang();
    		$this->lang->load($lang,$lang);

    		$this->login_system->checklogin();
    		$data['user']=$this->session->userdata('loginname');
    		$id=$this->input->get('shopid');
    		
    		$idset=$this->session->userdata('id');
    		
    		$shop=$this->shop->getshop($idset);
    		$result=$this->shop->get_datamanagement($idset);
    		
    		$data['result']=$result;
    		$data['nameshop']=$shop[0]['shop_name'];
    		$this->load->view('management',$data);
    		
    		
    	}

    	public function delete_management(){
    		$check_list=$this->input->post('check_list');
    		if(!empty($check_list)) {
    			$i = 0;
    			foreach($this->input->post('check_list') as $check) {
    				

            		 $data[$i]=$check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
            		 
                     $i++; //in your case, it would echo whatever $row['Report ID'] is equivalent to.
                 }

                 
                 
                 for($i=0;$i<count($data);$i++){
                 	$this->shop->delete_management($data[$i]);
                 	
                 	
                 }
                 redirect('backshop/management');
             }else{
             	redirect('backshop/management');
             }
         }

         public function topic_manage(){
         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();
         	$data['user']=$this->session->userdata('loginname');

         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);
         	
         	$data['nameshop']=$shop[0]['shop_name'];
         	$this->load->view('topic_management',$data);
         	
         	
         }

         public function insert_data_management(){
         	$type_management=$this->input->post('select_topic');
         	$datail_th=$this->input->post('area1');
         	$datail_en=$this->input->post('area2');
         	$s_id=$this->session->userdata('id');
         	
         	$insert_data_management_en=array(
         		'type_layout'=>$type_management,
         		'layout_detail'=>$datail_en,
         		'lang_ID'=>1,
         		's_ID'=>$s_id

         		);
         	$insert_data_management_th=array(
         		'type_layout'=>$type_management,
         		'layout_detail'=>$datail_th,
         		'lang_ID'=>2,
         		's_ID'=>$s_id

         		);

         	$s=$this->shop->insert_data_management($insert_data_management_en,$insert_data_management_th);
         	if($s==1){
         		redirect('backshop/management');
         	}else{
         		redirect('backshop/topic_manage');
         	}

         }

         
         public function modify_manage(){
         	$lang=$this->load_language->lang();
         	$this->lang->load($lang,$lang);

         	$this->login_system->checklogin();
         	$data['user']=$this->session->userdata('loginname');
         	$layout_type=$this->input->get('layout_type');
         	if($layout_type!=NULL){
         		$this->session->set_userdata('layout',$layout_type);
         	}
         	$type_layout=$this->session->userdata('layout');
         	$idset=$this->session->userdata('id');
         	
         	$shop=$this->shop->getshop($idset);
         	$result=$this->shop->get_datamanagement_show($type_layout);
			//print_r($result);
         	$data['result']=$result;
         	$data['nameshop']=$shop[0]['shop_name'];
         	$this->load->view('modify_management',$data);
         	
         	
         }

         public function update_manage(){
         	$idset=$this->session->userdata('id');
         	$type_layout=$this->session->userdata('layout');
         	$id_man=$this->shop->get_idman($type_layout);
         	
         	$whereupdate_man_en=array('layout_shop_ID'=>$id_man[0]['layout_shop_ID']);
         	$whereupdate_man_th=array('layout_shop_ID'=>$id_man[1]['layout_shop_ID']);
         	
         	$type_management=$this->input->post('select_topic');
         	$datail_th=$this->input->post('area1');
         	$datail_en=$this->input->post('area2');

         	$insert_data_management_en=array(
         		'type_layout'=>$type_management,
         		'layout_detail'=>$datail_en

         		);
         	$insert_data_management_th=array(
         		'type_layout'=>$type_management,
         		'layout_detail'=>$datail_th

         		);

         	$s=$this->shop->update_management($insert_data_management_en,$insert_data_management_th,$whereupdate_man_en,$whereupdate_man_th);
         	if($s==1){
         		redirect('backshop/management');
         	}else{
         		redirect('backshop/modify_manage');
         	}
         }
         
         



     }





     



     ?>