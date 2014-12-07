<?php
	
	class member extends CI_model{
		public $user;
		public $pass;
		public $theQuery;


		function __construct(){
			parent::__construct();

		}
		public function checkmember(){

			
			$chuser=$this->user;
			$chpass=$this->pass;
			$sql="SELECT username,password,memberID FROM member WHERE username='$chuser' AND password='$chpass';";
			$query=$this->db->query($sql)->result();
			if(empty($query)){
				$this->session->set_userdata('status','f');


			}else{
				$this->session->set_userdata('status','t');
				foreach($query as $row){
					$memberid=$row->memberID;
					$this->session->set_userdata('memberid',"$memberid");
					
				}
			}
		}


		public function checkuser($username) {
		$username=$username;
		$query = "SELECT username FROM member WHERE username = '$username' LIMIT 1;";
       	$query=$this->db->query($query)->result();
        if(empty($query)){
        	$num=0;
        }else{
        	$num=1;
        }


        return $num;

    	}

    	public function insertcustomer($data){

    		if($this->db->insert('member',$data)){
    			echo "success";
    		}else{
    			echo "fail insert";
    		}



    	}


    	public function type_category(){
    		$tlang=$this->session->userdata('langreg');
    		$sql="SELECT * FROM shop_category WHERE shop_category_ID=shop_category_parent_ID AND lang_ID='$tlang';";
    		$query=$this->db->query($sql)->result();
    		return $query;





    	} 



		

    
	}


?>