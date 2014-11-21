<?php
	
	class modelpc extends CI_Model{

		public function getnum($table){
			$rs=$this->db->get($table);
			return $rs->num_rows();

		}



	}




?>