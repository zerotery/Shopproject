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

		

    //*** Function: close, Purpose: Close the connection ***
   		 







			//echo '<table width="100%" border="1"><tr><th>username</th><th>password</th></tr>';
			//foreach ($query as $row) {
				//echo '<tr><td>'.$row->username.'</td><td>'.$row->password.'</td></tr>';
			//	if(!($row->username&&$row->password)){

					//echo "wrong username and password!!!";
			//	}
			 

			
			//echo '</table>';
			
            
                   // public function register($ar){
                        
                     //   $this->db->insert("member",$ar);
                        
                        
                        
                        
                        
                        
                    //}





	}


?>