<?php
	class shop extends CI_model{
		function __construct(){
			parent::__construct();
		
		}
		public function showshop(){
			$memberid=$this->session->userdata('memberid');
			//$sql="SELECT s_ID,  FROM member WHERE username='$chuser' AND password='$chpass';";
			$sql="SELECT shop.s_ID,shop.memberID,shop.s_url,shop_detail.shop_name,language.lang_name FROM shop,shop_detail,language WHERE shop.s_ID=shop_detail.s_ID AND shop_detail.lang_ID=language.lang_ID AND shop.memberID='$memberid';";
			$query=$this->db->query($sql)->result();
			if(empty($query)){
				$this->session->set_userdata('shop_status','f');
				$data=" ";

			}else{
				$i=0;
				foreach($query as $row){
					$shopname=$row->shop_name;
					$shopid=$row->s_ID;
					$data[$i]['shopname']="$shopname";
					$data[$i]['shopid']="$shopid";
					//$this->session->set_userdata('shopname',"$shopname");
					//$this->session->set_userdata('shopid',"$shopid");
					$i++;
				}

				
			}
			return $data;
		}

		public function inputshop($data){
			if($this->db->insert('shop',$data)){
				$memid=$data['memberID'];
    			$sql="SELECT s_ID FROM shop WHERE memberID='$memid';";
   				$query=$this->db->query($sql)->result();
   				foreach($query as $row){
					$shopid=$row->s_ID;
					
				}
			$data=array('sid' => $shopid);
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



















	}
?>