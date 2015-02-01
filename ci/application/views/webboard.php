<html>
	<head>
	<title>TB Shop</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>shortcodes.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>transition.css">
<style>
body {
  font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.42857143;
  
  background:url("<?php echo logo_pic;?>bg_main.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  </style>
 


	</head>
<body>

			
				<div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-webboard">
                      
                    </div>
                    </div>

                    </div>

                    
          

          

				<div class="container " >
					<div id="divider-head">
				    <div class="col-xs-12 col-sm-12 padding-0">


							 <header>
							  
							   <div  id="logo">
			           			<img style="width:280px" src="<?php echo logo_pic;?>TBshop_new_logo.png">
			           		   </div>
			           		   <div id="shopbox">
			           		   	
			           		   	<a href="<?php echo site_url('member_tb/regshop');?>" class="btn btnz " style="width:142px;height:80px;"><span  ><img  src="<?php echo logo_pic;?>icon_openshop_s.png">&nbsp;<span style="width: 50px; height: 50px;font-size:18pt;color:#D2691E"><?=$this->lang->line("content-sell");?></span><div style="color:#D2691E"><?=$this->lang->line("content-op");?></div> </span></a>
			           		   </div>
			           		   <div id="content-center">
			           		   	<h2 style="color:#bbb; font-size: 14px;  height: 20px; margin-top: 20px;margin-left:1px;"><?=$this->lang->line("content");?></h2>
			           		   </div>
			           	
			                 </header>
			                 <div class="spacenav"></div>
           	        </div>
					</div>
           	      <section><div id="divider-nav">
           	      <div class="col-xs-12 padding-0">

           	      <div class="navbar navbar-custom ">

							<ul class="nav nav-pills  nav-justified"  >

							    <li class="button"><a style="color:black" href="<?php echo site_url('main');?>"><?=$this->lang->line("main");?></a></li>
                                <li class="button"><a style="color:black" href="<?php echo site_url('member_tb/regshop');?>"  ><?=$this->lang->line("oshop");?></a></li>
                                <li class="button" ><a style="color:black" href="<?php echo site_url('main/allShop');?>"><?=$this->lang->line("shop");?></a></li>
                                <li  class="active button"><a  style="color:black" href="<?php echo site_url('main/webboard');?>" ><?=$this->lang->line("webboard");?></a></li>
                                <li class="button" ><a style="color:black" href="<?php echo site_url('main/help');?>"><?=$this->lang->line("help");?></a></li>
                                
 							</ul>

           	        
 				 </div>
				   
				   </div>
				</div></section>
				<h2 class="h2space"></h2>

				  <div class="col-xs-12 col-sm-12 padding-0">


							<img style="width:960;height:auto" src="<?php echo logo_pic;?>coming-soon.png" >
														 



										 <div class="row">
								          <div class="col-lg-12  ">
								           
								             <div class="page-header-s">
								                    
								                    </div>
								                    </div>

								                    </div>


				                  </div>
								  
				</div>








		







	<?php echo $this->load->view('header/navbar_nlog')?>
		
		<div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-m">
                      
                    </div>
                    </div>

                    </div>



    <?php echo $this->load->view('footer/footer')?>

    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    <script src="<?php echo JS_URL;?>jquery.snow.js"></script>
    <script type="text/javascript">
    $(document).ready( function(){
        $.fn.snow({ minSize: 10, maxSize: 25, newOn: 1500});
	});

    </script>
  
    

	</body>



</html>