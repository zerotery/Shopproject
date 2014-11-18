<?php
	
	class member extends CI_model{
		public $user;
		public $pass;

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

			//echo '<table width="100%" border="1"><tr><th>username</th><th>password</th></tr>';
			//foreach ($query as $row) {
				//echo '<tr><td>'.$row->username.'</td><td>'.$row->password.'</td></tr>';
			//	if(!($row->username&&$row->password)){

					//echo "wrong username and password!!!";
			//	}
			 

			
			//echo '</table>';
			
			

		}





	}


?>