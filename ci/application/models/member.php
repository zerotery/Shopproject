<?php
	
	class member extends CI_model{
		
		public $theQuery;




		function __construct(){
			parent::__construct();

		}
		public function checkmember($user,$pass){
			
			$sql="SELECT username,password,memberID,status FROM member WHERE username='$user' AND password='$pass' AND status=1;";
			$query=$this->db->query($sql)->result();
			if(empty($query)){
				$this->session->set_userdata('status','f');


			}else{
				$this->session->set_userdata('status','t');
				foreach($query as $row){
					$memberid=$row->memberID;
					$this->session->set_userdata('memberid',"$memberid");
					
				}
				$memberid=$this->session->userdata('memberid');
				$sql="SELECT memberID FROM shop WHERE memberID='$memberid';";
				$query=$this->db->query($sql)->result();
				if(empty($query)){
				$this->session->set_userdata('status_shop','f');
				}
				else{
				$this->session->set_userdata('status_shop','t');
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

    	

    	public function active_member($id){
    		$sql="UPDATE member SET status=1 WHERE memberID='$id';";
    		if($this->db->query($sql)){ return "success!";}else{ return "fail!";}


    	}


    	public function type_category(){
    		$tlang=$this->session->userdata('langdata');
    		$sql="SELECT * FROM shop_category WHERE shop_category_status=1 AND lang_ID='$tlang';";
    		$query=$this->db->query($sql)->result();
    		return $query;
		}





    	public function member_detail() {
		    
		     $rs=$this->db->get_where('member', array('memberID' => $this->session->userdata('memberid')));
  
        return $rs;

    	} 


   		public function get_memID($username){
   			$sql="SELECT memberID,profile_pic,email FROM member WHERE username='$username';";
   			$query=$this->db->query($sql)->result();
   			foreach($query as $row){
					$memberid=$row->memberID;
					$picname=$row->profile_pic;
					$email=$row->email;

					
					
			}
			$data=array('memberid' => $memberid,'picname' => $picname, 'e_mail' => $email );
			return $data;

   		}




			public function updatecustomer($data){
    			$this->db->update('member',$data,array('memberID' => $this->session->userdata('memberid')));




    	}

    	public function get_picture($memID){
   			$sql="SELECT profile_pic FROM member WHERE memberID='$memID';";
   			$query=$this->db->query($sql)->result();
   			foreach($query as $row){
					
					$picname=$row->profile_pic;
					

					
					
			}
			$data=array('picname' => $picname);
			return $data;

   		}










   }
?>