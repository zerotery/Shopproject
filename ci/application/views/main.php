<html>
	<head></head>
	<body>

	<?php echo $this->load->view('header/navbar_nlog')?>
		<center><h2><a href="<?php echo site_url('member_tb/regshop'); ?>">Regiter Shop!!</a></h2></center>

		<?php
		if($status==1){
			echo '<center><h2><a href="'.site_url('backshop/myshop').'">my Shop!!!</a></h2><h2><a href="'.site_url('member_tb/regshop').'">Regiter Shop!!!</a></h2><h2><a href="'.site_url('member_tb/logout').'">Log out!!</a></h2></center>';
		}else{
			echo '<center><h2><a href="'.site_url('member_tb/reg').'">Regiter member!!</a></h2><h2><a href="'.site_url('main/login').'">Log in!!</a></h2></center>';
		}



		?>
		

	</body>



</html>