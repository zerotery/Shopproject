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

							    <li class=" button"><a style="color:black" href="<?php echo site_url('main');?>"><?=$this->lang->line("main");?></a></li>
                                <li class="button"><a style="color:black" href="<?php echo site_url('member_tb/regshop');?>"  ><?=$this->lang->line("oshop");?></a></li>
                                <li class="active button" ><a style="color:black" href="<?php echo site_url('main/allShop');?>"><?=$this->lang->line("shop");?></a></li>
                                <li  class="button"><a  style="color:black" href="<?php echo site_url('main/webboard');?>" ><?=$this->lang->line("webboard");?></a></li>
                                <li class="button" ><a style="color:black" href="<?php echo site_url('main/help');?>"><?=$this->lang->line("help");?></a></li>
                                
 							</ul>

           	        
 				 </div>
				   
				   </div>
				</div></section>
				<h2 class="h2space"></h2>

				  <div class="col-xs-12 col-sm-12 padding-0">

					  
								  
								  
								  
								  <h3 id="sec1" class="h2space"><div id="divl" style="color:#8b4513" ><?=$this->lang->line("shop");?></div> </h3>
								  <div class="col-xs-12 col-sm-12 mborder ">

								  		 <div class="row">
													          <div class="col-lg-12  ">
													           
													             <div class="page-header-s">
													                    
													                    </div>
													                    </div>

													                    </div>

					                    <form id="search_shop" name="search_shop" method="post" enctype="multipart/form-data">
								  		<div class="col-xs-6 col-sm-6">
							 	
												<select id="search" name="store" style="color:black;width:192px;height:42px;float:left">
												  <option value="audi" selected><?=$this->lang->line("shop-search");?></option>
												  <option value="volvo">Volvo</option>
												  <option value="saab">Saab</option>
												  <option value="vw">VW</option>
												  
												</select> 
												<a id="search_store" name="search_store" class="btn btn-info glyphicon glyphicon-search" style="width:60px;height:41px;"></a>

										</div>
										</form>
														  <div class="row">
													          <div class="col-lg-12  ">
													           
													             <div class="page-header-s">
													                    
													                    </div>
													                    </div>

													                    </div>
														   <div class="row">
									                            <div class="col-xs-4  col-sm-4">
											                             <div class="box-product " >
											                                 <div class="inner"  >
											                                  <div class="image thumbnailz "><a href="#"><img style="height:180px" src="<?php echo logo_pic;?>Avatar.png"></a>
											                                  </div>
											                                  <div class="name"><a href="#">Golden ring one</a></div>
											                                  <div class="price" align="left"> </div>
											                                  </div>
											                                  
											                                  <div  class="abs"  >
											                                  <div class="cart animated fadeInUp ">
											                                  <a class="btn btn-info" style="font-family: TX Timesquare;font-size:17pt;height:40px"><?=$this->lang->line("shop_go");?></a>
											                                  </div>        
											                              </div>
											                              </div>


											                            </div>

									                            <div class="col-xs-4  col-sm-4">
												                             <div class="box-product " >
												                                 <div class="inner" >
												                                  <div class="image thumbnailz "><a href="#"><img style="height:180px" src="<?php echo logo_pic;?>Avatar.png"></a>
												                                  </div>
												                                  <div class="name"><a href="#">Golden ring one</a></div>
												                                  <div class="price"></div>
												                                  </div>
												                                  
												                                  <div  class="abs "  >
												                                  <div class="cart animated fadeInUp ">
												                                  <a class="btn btn-info " style="font-family: TX Timesquare;font-size:17pt;height:40px"><?=$this->lang->line("shop_go");?></a>
												                                  </div>        
												                              </div>
												                              </div>


												                            </div>

												                <div class="col-xs-4  col-sm-4">
											                             <div class="box-product " >
											                                 <div class="inner"  >
											                                  <div class="image thumbnailz "><a href="#"><img style="height:180px" src="<?php echo logo_pic;?>Avatar.png"></a>
											                                  </div>
											                                  <div class="name"><a href="#">Golden ring one</a></div>
											                                  <div class="price" align="left"> </div>
											                                  </div>
											                                  
											                                  <div  class="abs"  >
											                                  <div class="cart animated fadeInUp ">
											                                  <a class="btn btn-info" style="font-family: TX Timesquare;font-size:17pt;height:40px"><?=$this->lang->line("shop_go");?></a>
											                                  </div>        
											                              </div>
											                              </div>


											                            </div>            
														  </div>
														  <div class="row">
									                            <div class="col-xs-4  col-sm-4">
											                             <div class="box-product " >
											                                 <div class="inner"  >
											                                  <div class="image thumbnailz "><a href="#"><img style="height:180px" src="<?php echo logo_pic;?>Avatar.png"></a>
											                                  </div>
											                                  <div class="name"><a href="#">Golden ring one</a></div>
											                                  <div class="price" align="left"> </div>
											                                  </div>
											                                  
											                                  <div  class="abs"  >
											                                  <div class="cart animated fadeInUp ">
											                                  <a class="btn btn-info" style="font-family: TX Timesquare;font-size:17pt;height:40px"><?=$this->lang->line("shop_go");?></a>
											                                  </div>        
											                              </div>
											                              </div>


											                            </div>

									                            <div class="col-xs-4  col-sm-4">
												                             <div class="box-product " >
												                                 <div class="inner" >
												                                  
												                                  <div class="image thumbnailz "><a href="#"><img style="height:180px" src="<?php echo logo_pic;?>Avatar.png"></a>
												                                  </div>
												                                  <div class="name"><a href="#">Golden ring one</a></div>
												                                  <div class="price"></div>
												                                  </div>
												                                  
												                                  <div  class="abs "  >
												                                  <div class="cart animated fadeInUp ">
												                                  <a class="btn btn-info" style="font-family: TX Timesquare;font-size:17pt;height:40px"><?=$this->lang->line("shop_go");?></a>
												                                  </div>        
												                              </div>
												                              </div>


												                            </div>

												                <div class="col-xs-4  col-sm-4">
											                             <div class="box-product " >
											                                 <div class="inner"  >
											                                  <div class="image thumbnailz "><a href="#"><img style="height:180px" src="<?php echo logo_pic;?>Avatar.png"></a>
											                                  </div>
											                                  <div class="name"><a href="#">Golden ring one</a></div>
											                                  <div class="price" align="left"> </div>
											                                  </div>
											                                  
											                                  <div  class="abs"  >
											                                  <div class="cart animated fadeInUp ">
											                                  <a class="btn btn-info" style="font-family: TX Timesquare;font-size:17pt;height:40px"><?=$this->lang->line("shop_go");?></a>
											                                  </div>        
											                              </div>
											                              </div>


											                            </div>            
														  </div>

														 



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