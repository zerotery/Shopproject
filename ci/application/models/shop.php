<?php
	class shop extends CI_model{
		function __construct(){
			parent::__construct();
		
		}
		public function showshop(){
			$memberid=$this->session->userdata('memberid');
			$lang=$this->session->userdata('langdata');
			//$sql="SELECT s_ID,  FROM member WHERE username='$chuser' AND password='$chpass';";
			
			$sql="SELECT shop.s_ID,shop.memberID,shop.s_url,shop_detail.shop_name,shop_detail.lang_ID FROM shop,shop_detail WHERE shop.s_ID=shop_detail.s_ID AND shop_detail.lang_ID='$lang' AND shop.memberID='$memberid';";
			$query=$this->db->query($sql)->result_array();
			return $query;

		}

		public function get_picshop($s_id){

			//$sql="SELECT s_ID,  FROM member WHERE username='$chuser' AND password='$chpass';";
			
			$sql="SELECT shop_pic_bg,shop_pic_header FROM shop WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_layout($s_id){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM layout_shop WHERE s_ID='$s_id' AND lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function getshop($s_id){
			$memberid=$this->session->userdata('memberid');
			$lang=$this->session->userdata('langdata');
			//$sql="SELECT s_ID,  FROM member WHERE username='$chuser' AND password='$chpass';";
			
			$sql="SELECT shop.s_ID,shop.memberID,shop.s_url,shop_detail.shop_name,shop_detail.lang_ID FROM shop,shop_detail WHERE shop.s_ID=shop_detail.s_ID AND shop_detail.lang_ID='$lang' AND shop.memberID='$memberid' AND shop.s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;

		}

		public function getshopdertail($idset){
			$sql="SELECT * FROM shop_detail WHERE s_ID='$idset';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function getshopfanpage($idset){
			$sql="SELECT * FROM shop WHERE s_ID='$idset';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function inputshop($data){
			if($this->db->insert('shop',$data)){
				$memid=$data['memberID'];
    			$sql="SELECT * FROM shop WHERE memberID='$memid';";
   				$query=$this->db->query($sql)->result();
   				foreach($query as $row){
					$shopid=$row->s_ID;
					$shoppro=$row->shop_pic;
					$shopbg=$row->shop_pic_bg;
					$shopcover=$row->shop_pic_header;
					$shoptheme=$row->s_theme;
					
				}
			$data=array('sid' => $shopid,'spro'=>$shoppro,'sbg'=>$shopbg,'scover'=>$shopcover,'stheme'=>$shoptheme);
			return $data;


    		}else{
    			echo "fail insert";
    		}
    	}

    	public function inputcate($data){

    		if($this->db->insert('shop_category_detail',$data)){
    			return "success";
    		}else{
    			return "fail insert";
    		}






    	}


    	public function inputdetailen($data){

    		if($this->db->insert('shop_detail',$data)){
    			return "success";
    		}else{
    			return "fail insert";
    		}


    	}

    	public function validate_add_cart_item(){

    		$lang=$this->session->userdata('langdata');
			$s_id = $this->input->post('shop_id');
    		$p_id = $this->input->post('product_id');

			$sql="SELECT * FROM product,product_detail WHERE product.p_ID='$p_id' AND product.p_ID=product_detail.p_ID AND product_detail.lang_ID='$lang' AND (product_detail.product_status='Have stock' OR product_detail.product_status='มีสินค้า') LIMIT 1;";
			$query=$this->db->query($sql)->result_array();
			
			if(count($query) > 0){
     			 $data = array(
     			 	   'id'      => $p_id,
                       'qty'     => 1,
                       'price'   => $query[0]['p_price'],
                       'name'    => $query[0]['product_name'] 	
                
            	);
 
            // Add the data to the cart using the insert function that is available because we loaded the cart library
            $this->cart->insert($data); 
             
            return TRUE;
     		  }else{
       		return FALSE;
    		  }

    	}

    	public function inputdetailth($data){

    		if($this->db->insert('shop_detail',$data)){
    			return "success";
    		}else{
    			return "fail insert";
    		}
		}

		public function getcatedata($s_ID){
			$sql="SELECT shop_category_detail.s_ID,shop_category_detail.shop_category_ID,shop_category.shop_category_ID,shop_category.shop_category_parent_ID FROM shop_category_detail,shop_category WHERE shop_category_detail.shop_category_ID=shop_category.shop_category_ID AND shop_category_detail.s_ID='$s_ID';";
			$query=$this->db->query($sql)->result_array();
			$catep_ID=$query[0]['shop_category_parent_ID'];
			$lang=$this->session->userdata('langdata');
			$sql="SELECT shop_name_type,shop_category_parent_ID,shop_category_status,shop_group_lang,lang_ID FROM shop_category WHERE shop_category_parent_ID='$catep_ID' AND shop_category_status=0 AND lang_ID='$lang';";
			$query=$this->db->query($sql)->result();
			return $query;

		}

		public function get_product_show($s_id){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT product.s_ID,product.p_ID,product.p_price,product.p_update_date,product_detail.product_name,product_gallery.pic_name FROM product,product_detail,product_gallery WHERE product.s_ID='$s_id' AND product.p_ID=product_gallery.p_ID AND product.p_ID=product_detail.p_ID AND (product_gallery.pic_name='main_product.jpg' OR product_gallery.pic_name='profile_product.jpg')  AND product_detail.lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		

		public function get_all_product($s_id){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM product WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			return count($query);
		}

		public function get_select_product($s_id,$category_id,$g_lang){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM product,product_category,product_detail,product_gallery,product_category_detail WHERE product.s_ID='$s_id' AND product_category_detail.p_ID=product.p_ID AND product_detail.p_ID=product.p_ID AND product.p_ID=product_gallery.p_ID AND product.s_ID=product_category.s_ID AND (product_category_detail.product_category_ID='$category_id' OR product_category.grouplang='$g_lang') AND product_category_detail.product_category_ID=product_category.product_category_ID AND product_category.lang_ID='$lang' AND product_detail.lang_ID='$lang' AND product_detail.lang_ID='$lang' AND (product_detail.product_status='Have stock' OR product_detail.product_status='มีสินค้า') AND (product_gallery.pic_name='main_product.jpg' OR product_gallery.pic_name='profile_product.jpg');";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_all_product_show($p_ID){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM product,product_detail WHERE product.p_ID='$p_ID' AND product.p_ID=product_detail.p_ID AND product_detail.lang_ID='$lang' AND (product_detail.product_status='Have stock' OR product_detail.product_status='มีสินค้า');";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_name_category($category_id,$g_lang){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM product_category WHERE (product_category_ID='$category_id' OR grouplang='$g_lang') AND lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_grouplang_category($category_id){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT grouplang FROM product_category WHERE product_category_ID='$category_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_product_category($s_id){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM product_category WHERE s_ID='$s_id' AND lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();

			for($i=0;$i<count($query);$i++){
            	$product_category_ID=$query[$i]['product_category_ID'];
            	$sql="SELECT * FROM product_category_detail WHERE product_category_ID='$product_category_ID';";
				$sum_p_cate[$i]=$this->db->query($sql)->result_array();
				$result_sum[$i]=count($sum_p_cate[$i]);
				array_push($query[$i],$result_sum[$i]);

                                          
            }


			
			return $query;
		}

		
		public function get_shop_category($s_id){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM shop_category,shop_category_detail WHERE shop_category_detail.s_ID='$s_id' AND shop_category_detail.shop_category_ID=shop_category.shop_category_ID AND lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();
			
			return $query;
		}


		public function getdata_catep($g_lang){
			$sql="SELECT * FROM shop_category WHERE shop_group_lang='$g_lang';";
			$query=$this->db->query($sql)->result_array();
			return $query;

		}

		public function about_shop($s_id){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT shop.memberID,shop.s_url,shop.shop_fanpage,shop_detail.shop_name,shop_detail.shop_detail_data FROM shop,shop_detail WHERE shop.s_ID='$s_id' AND shop.s_ID=shop_detail.s_ID AND shop_detail.lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();
			$m_id=$query[0]['memberID'];
			$sql="SELECT f_name,l_name,email FROM member WHERE memberID='$m_id';";
			$member=$this->db->query($sql)->result_array();
			array_push($query,$member);
			return $query;
		}

		public function insert_pcate($en,$th){

			if($this->db->insert('product_category',$en)){
    			 $s=1;
    		}else{
    			$s=0;
    		}
    		if($this->db->insert('product_category',$th)){
    			 $s1=1;
    		}else{
    			$s1=0;
    		}

    		if($s==1&&$s1==1){
    			return 1;
    		}
    		else{
    			return 0;
    		}


		}

		public function get_ptype($s_ID){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM product_category WHERE s_ID='$s_ID' AND lang_ID='$lang';";

			$query=$this->db->query($sql)->result_array();
			return $query;
		}	

		public function get_idpcate($idmod){
			$sql="SELECT product_category_ID FROM product_category WHERE grouplang='$idmod';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function update_pcate_en($updatecate_en,$idupdate_en){
			if($this->db->update('product_category',$updatecate_en,$idupdate_en)){
				return 1;
			}else{
				return 0;
			}

		}



		public function update_pcate_th($updatecate_th,$idupdate_th){
			if($this->db->update('product_category',$updatecate_th,$idupdate_th)){
				return 1;
			}else{
				return 0;
			}

		}

		

		public function update_gallery($update_g,$where_g){
			$this->db->update('product_gallery',$update_g,$where_g);
		}

		public function insert_product($data){
			if($this->db->insert('product',$data)){
    			 return 1;
    		}else{
    			 return 0;
    		}
		}

		public function insert_bank($data){
			if($this->db->insert('shop_payment',$data)){
    			 return 1;
    		}else{
    			 return 0;
    		}
		}

		public function add_gallery($insert_g){
			if($this->db->insert('product_gallery',$insert_g)){
    			 return 1;
    		}else{
    			 return 0;
    		}
		}

		public function remove_pcate($del){
			$this->db->delete('product_category',$del);
		}

		public function remove_product($del){
			if($this->db->delete('product',$del)){
				return 1;
			}else{
				return 0;
			}

		}

		public function remove_product_cate_detail($del){
			if($this->db->delete('product_category_detail',$del)){
				return 1;
			}else{
				return 0;
			}
		}
		public function remove_product_detail($del){
			if($this->db->delete('product_detail',$del)){
				return 1;
			}else{
				return 0;
			}
		}
		public function remove_gallery($del){
			$this->db->delete('product_gallery',$del);
		}
		public function remove_product_gallery($del){
			if($this->db->delete('product_gallery',$del)){
				return 1;
			}else{
				return 0;
			}
		}
		public function delete_order($data){
			$this->db->delete('order',array('order_ID' => $data ));
		}

		public function delete_management($data){
			$this->db->delete('layout_shop',array('type_layout' => $data ));
		}

		public function delete_order_product($data){
			$this->db->delete('order_product',array('order_ID' => $data ));
		}

		public function delete_bank($data){
			$this->db->delete('shop_payment',array('bank_ID' => $data ));
		}

		public function delete_order_all($data){
			$this->db->delete('order',array('order_ID' => $data ));
			$this->db->delete('order_product',array('order_ID' => $data ));
			$this->db->delete('order_shipping',array('order_ID' => $data ));
		}

		public function data_del($data){
			$sql="SELECT * FROM product WHERE p_ID='$data';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function data_del_1($data){
			$sql="SELECT * FROM product WHERE s_ID='$data';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function checkshop($s_id){
			$sql="SELECT * FROM shop WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			if(empty($query)){
				return 0;
			}else{
				return 1;
			}
			
		}

		public function get_idman($type_layout){

			$sql="SELECT layout_shop_ID FROM layout_shop WHERE type_layout='$type_layout';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function delete_shop($delete){
			$this->db->delete('shop',$delete);
		}

		public function delete_cate_detail($delete){
			$this->db->delete('shop_category_detail',$delete);
		}

		public function delete_shop_detail($delete){
			$this->db->delete('shop_detail',$delete);
		}

		public function delete_shop_payment($delete){
			$this->db->delete('shop_payment',$delete);
		}

		public function delete_shop_tranfer($delete){
			$this->db->delete('tranfer_detail',$delete);
		}

		public function delete_product($delete){
			$this->db->delete('product',array('order_ID' => $delete ));
			$this->db->delete('product_category_detail',array('order_ID' => $delete));
			$this->db->delete('product_detail',array('order_ID' => $delete));
			$this->db->delete('product_gallery',array('order_ID' => $delete));

		}

		public function delete_product_cate($delete){
			$this->db->delete('product_category',$delete);
		}


		public function checkshop_cate_detail($s_id){
			$sql="SELECT * FROM shop_category_detail WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			if(empty($query)){
				return 0;
			}else{
				return 1;
			}
		}

		public function checkproduct($s_id){
			$sql="SELECT * FROM product WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			if(empty($query)){
				return 0;
			}else{
				return 1;
			}
		}

		public function checkshop_detail($s_id){
			$sql="SELECT * FROM shop_detail WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			if(empty($query)){
				return 0;
			}else{
				return 1;
			}
		}

		public function checkshop_payment($s_id){
			$sql="SELECT * FROM shop_payment WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			if(empty($query)){
				return 0;
			}else{
				return 1;
			}
		}

		public function checkshop_tranfer($s_id){
			$sql="SELECT * FROM tranfer_detail WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			if(empty($query)){
				return 0;
			}else{
				return 1;
			}
		}

		public function checkproduct_cate($s_id){
			$sql="SELECT * FROM product_category WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			if(empty($query)){
				return 0;
			}else{
				return 1;
			}
		}

		

		public function checkorder($s_id){
			$sql="SELECT * FROM `order` WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			if(empty($query)){
				return 0;
			}else{
				return 1;
			}
		}



		public function get_p_ID($s_ID){
			
			$sql="SELECT p_ID FROM product WHERE s_ID='$s_ID' ORDER BY p_ID DESC LIMIT 1;";
			$query=$this->db->query($sql)->result_array();
			return $query;

		}

		public function getall_pid($s_id){
			$sql="SELECT p_ID FROM product WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_bankdetail($s_id){
			$sql="SELECT * FROM shop_payment WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function dataproduct($p_id){
			$lang=$this->session->userdata('langdata');

			$sql="SELECT product.p_ID,product.p_price,product.p_update_date,product.p_quantity,product_detail.product_name,product_detail.product_status FROM product,product_detail WHERE product.p_ID=product_detail.p_ID AND product.p_ID='$p_id' AND product_detail.lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}
        public function get_gdetail($data){
        	$sql="SELECT product.p_update_date,product_gallery.pic_name FROM product,product_gallery WHERE product.p_ID=product_gallery.p_ID AND product_gallery.gallery_product_ID='$data';";
			$query=$this->db->query($sql)->result_array();
			return $query;
        }
		public function get_product($p_id){
			$sql="SELECT p_update_date FROM product WHERE p_ID='$p_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_product_detail($p_id){
			$sql="SELECT product_name,product_detail,lang_ID FROM product_detail WHERE p_ID='$p_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_pgallery($p_id){
			$sql="SELECT * FROM product_gallery WHERE p_ID='$p_id' AND pic_name!='main_product.jpg' AND pic_name!='profile_product.jpg';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function data_del_order($s_id){
			$sql="SELECT * FROM `order` WHERE s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_gallery($p_id){
			$sql="SELECT pic_name,gallery_product_ID FROM product_gallery WHERE p_ID='$p_id' AND (pic_name='main_product.jpg' OR pic_name='profile_product.jpg');";
			$query=$this->db->query($sql)->result_array();
			return $query;
			/*if(empty($query)){
				return "item.png";
			}else{
				return "main_product.jpg";
			}*/
			

		}



		public function get_gallery_all($p_id){
			$sql="SELECT pic_name FROM product_gallery WHERE p_ID='$p_id' ;";
			$query=$this->db->query($sql)->result_array();
			return $query;
			/*if(empty($query)){
				return "item.png";
			}else{
				return "main_product.jpg";
			}*/
			

		}

		public function get_success_order($s_id){
			
			$sql="SELECT * FROM `order` WHERE order_status='1' AND s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_payreport($idset){
			$sql="SELECT * FROM tranfer_detail WHERE s_ID='$idset';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_memberOrder($idset){

			$sql="SELECT DISTINCT memberID FROM `order` WHERE s_ID='$idset' AND order_status='1';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_shipping($o_id){
			$sql="SELECT * FROM order_shipping WHERE order_ID='$o_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function getdatail_mem($memberID){
			$sql="SELECT memberID,f_name,l_name,email FROM member WHERE memberID='$memberID';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}



		public function insertcatep($insert_productcateP_en,$insert_productcateP_th){
			if($this->db->insert('product_category_detail',$insert_productcateP_en)){
    			$s=1;
    		}else{
    			$s=0;
    		}
    		if($this->db->insert('product_category_detail',$insert_productcateP_th)){
    			 $s1=1;
    		}else{
    			$s1=0;
    		}

    		if($s==1&&$s1==1){
    			return 1;
    		}
    		else{
    			return 0;
    		}
		}

		public function insert_data_management($insert_data_management_en,$insert_data_management_th){
			if($this->db->insert('layout_shop',$insert_data_management_en)){
    			$s=1;
    		}else{
    			$s=0;
    		}
    		if($this->db->insert('layout_shop',$insert_data_management_th)){
    			 $s1=1;
    		}else{
    			$s1=0;
    		}

    		if($s==1&&$s1==1){
    			return 1;
    		}
    		else{
    			return 0;
    		}
		}

		public function get_datamanagement($idset){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM layout_shop WHERE s_ID='$idset' AND lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function insert_product_detail($insert_product_datail_en,$insert_product_datail_th){
			if($this->db->insert('product_detail',$insert_product_datail_en)){
    			$s=1;
    		}else{
    			$s=0;
    		}
    		if($this->db->insert('product_detail',$insert_product_datail_th)){
    			 $s1=1;
    		}else{
    			$s1=0;
    		}

    		if($s==1&&$s1==1){
    			return 1;
    		}
    		else{
    			return 0;
    		}
		}

		public function update_management($insert_data_management_en,$insert_data_management_th,$whereupdate_man_en,$whereupdate_man_th){
			if($this->db->update('layout_shop',$insert_data_management_en,$whereupdate_man_en)){
    			$s=1;
    		}else{
    			$s=0;
    		}
    		if($this->db->update('layout_shop',$insert_data_management_th,$whereupdate_man_th)){
    			 $s1=1;
    		}else{
    			$s1=0;
    		}

    		if($s==1&&$s1==1){
    			return 1;
    		}
    		else{
    			return 0;
    		}
		}

		public function insert_gallery($data){

			if($this->db->insert('product_gallery',$data)){
				return 1;
			}else{
				return 0;
			}

		}

		public function get_email($memberid){
			$sql="SELECT email FROM member WHERE memberID='$memberid';";
			$query=$this->db->query($sql)->result_array();
			return $query[0]['email'];
		}

		public function insert_order($data){

			if($this->db->insert('order',$data)){
				//$sql="SELECT MAX(order_ID) as order_ID FROM order;";
				//$query=$this->db->query($sql)->result_array();
				return mysql_insert_id();
			}else{
				return 0;
			}

		}

		public function insert_tranfer($data){
			if($this->db->insert('tranfer_detail',$data)){
				
				return 1;
			}else{
				return 0;
			}
		}

		public function insert_shipping($data){
			if($this->db->insert('order_shipping',$data)){
				
				return 1;
			}else{
				return 0;
			}
		}

		public function find_order($order_ID){
			$sql="SELECT order_ID,s_ID,memberID,order_date FROM `order` WHERE order_ID='$order_ID';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function insert_order_product($data){
			if($this->db->insert('order_product',$data)){
				//$sql="SELECT MAX(order_ID) as order_ID FROM order;";
				//$query=$this->db->query($sql)->result_array();
				return 'true';
			}else{
				return 'fail';
			}
		}

		public function get_catedetail($p_id){
			$sql="SELECT product_cat_detail_ID FROM product_category_detail WHERE p_ID='$p_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function gettype_product_cate($p_id){
			$lang=$this->session->userdata('langdata');
			$sql="SELECT product_category.product_category_name FROM product_category,product_category_detail WHERE product_category.product_category_ID=product_category_detail.product_category_ID AND product_category_detail.p_ID='$p_id' AND product_category.lang_ID='$lang';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_datamanagement_show($type_layout){
			$sql="SELECT * FROM layout_shop WHERE type_layout='$type_layout';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function update_cate_datail($idupdate_en,$id_gd_en){
			if($this->db->update('product_category_detail',array('product_category_ID' => $idupdate_en),array('product_cat_detail_ID' => $id_gd_en ))){
				return 1;
			}else{
				return 0;
			}

		}

		public function update_shop($updateshop, $where_update){
			if($this->db->update('shop',$updateshop,$where_update)){
				return 1;
			}else{
				return 0;
			}
		}

		public function update_cate($update_shop_cate, $where_update){
			if($this->db->update('shop_category_detail',$update_shop_cate,$where_update)){
				return 1;
			}else{
				return 0;
			}
		}

		public function update_detail_en($updateshop_detailen, $where_update_datail){
			if($this->db->update('shop_detail',$updateshop_detailen, $where_update_datail)){
				return 1;
			}else{
				return 0;
			}
		}

		public function update_detail_th($updateshop_detailth, $where_update_datail){
			if($this->db->update('shop_detail',$updateshop_detailth, $where_update_datail)){
				return 1;
			}else{
				return 0;
			}
		}

		public function get_pdetail($p_id){
			$sql="SELECT product_detail_ID FROM product_detail WHERE p_ID='$p_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function update_product_detail($p_id,$update_product_datail){
			if($this->db->update('product_detail',$update_product_datail,array('product_detail_ID' => $p_id))){
				return 1;
			}else{
				return 0;
			}
		}
		public function update_product($dataup_product,$where_product){
			if($this->db->update('product',$dataup_product,$where_product)){
				return 1;
			}else{
				return 0;
			}
		}

		public function update_order($update_order,$where_order){
			if($this->db->update('order',$update_order,$where_order)){
				return 1;
			}else{
				return 0;
			}
		}

		public function order_detail($s_id){
			$sql="SELECT order.order_ID,order.order_status,order.order_sum_price,order.order_date,order.order_update_date,member.f_name,member.l_name FROM member,`order` WHERE order.memberID=member.memberID AND order.s_ID='$s_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}
		public function get_allorder($o_id){
			$sql="SELECT * FROM member,`order` WHERE order.memberID=member.memberID AND order_ID='$o_id';";
			$query=$this->db->query($sql)->result_array();
			return $query;
		}

		public function get_product_order($o_id){
			$sql="SELECT p_ID,product_order_quantity,product_order_description FROM order_product WHERE order_ID='$o_id';";
			$query=$this->db->query($sql)->result_array();
			
			for($i=0;$i<count($query);$i++){
			$p_id[$i]=$query[$i]['p_ID'];
			$quantity[$i]=$query[$i]['product_order_quantity'];
			$description[$i]=$query[$i]['product_order_description'];

			$lang=$this->session->userdata('langdata');
			$sql="SELECT * FROM product_detail WHERE  p_ID='$p_id[$i]' AND lang_ID='$lang';";

			$query[$i]=$this->db->query($sql)->result_array();
			
			$sql="SELECT * FROM product WHERE  p_ID='$p_id[$i]';";

			$query1[$i]=$this->db->query($sql)->result_array();
			}
			if(!empty($query)&&!empty($query1)&&!empty($quantity)&&!empty($description)){
			$result=array('name' => $query,
						  'price'=> $query1,
						  'quantity'=>$quantity,
						  'description'=>$description );
			}else{
				$result=NULL;
			}
			return $result;

		}









	}
?>