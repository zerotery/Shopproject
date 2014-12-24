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

		public function getshop($s_id){
			$memberid=$this->session->userdata('memberid');
			$lang=$this->session->userdata('langdata');
			//$sql="SELECT s_ID,  FROM member WHERE username='$chuser' AND password='$chpass';";
			
			$sql="SELECT shop.s_ID,shop.memberID,shop.s_url,shop_detail.shop_name,shop_detail.lang_ID FROM shop,shop_detail WHERE shop.s_ID=shop_detail.s_ID AND shop_detail.lang_ID='$lang' AND shop.memberID='$memberid' AND shop.s_ID='$s_id';";
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
					
				}
			$data=array('sid' => $shopid,'spro'=>$shoppro,'sbg'=>$shopbg,'scover'=>$shopcover);
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

		public function getdata_catep($g_lang){
			$sql="SELECT * FROM shop_category WHERE shop_group_lang='$g_lang';";
			$query=$this->db->query($sql)->result_array();
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

		public function insert_product($data){
			if($this->db->insert('product',$data)){
    			 return 1;
    		}else{
    			 return 0;
    		}
		}

		public function remove_pcate($del){
			$this->db->delete('product_category',$del);
		}


		public function get_p_ID($s_ID){
			
			$sql="SELECT p_ID FROM product WHERE s_ID='$s_ID';";
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

		public function insert_gallery($data){

			if($this->db->insert('product_gallery',$data)){
				return 1;
			}else{
				return 0;
			}

		}














	}
?>