<html>
    
<head>
<title>TB Shop - Registration</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">

<meta http-equiv="Content-Type" content="text/html ; charset=utf-8">
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>shortcodes.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>transition.css">










<style type="text/css">
body{
  background:url("<?php echo logo_pic;?>reg_bg.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

 }

</style>
<style type="text/css">
header {
  background: url("<?php echo logo_pic;?>header1.jpg") no-repeat center top ; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    vertical-align: middle;

}


</style>



</head>

<body>

<?php echo $this->load->view('header/navbar_nlog')?>




<div class="divider-all" >
<div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-show">
                      
                    </div>
                    </div>
                    </div>



<div class="bs-docs-section clearfix">

        <div class="row">
          <div class="col-lg-12">
                <!-- Wrap all page content here -->

              <div id="divider-left" class="padding-0" >
                
              </div>
              <div  id="divider-right" >
                  <div class="col-xs-4 col-sm-4 ">             
                  <a ><ul class="nav nav-stacked affix-top " id="cart" >
                           <h3 class="color cart-margin"><i class="glyphicon glyphicon-shopping-cart space"></i><?=$this->lang->line("cart");?>
                           
                           <li><label class="color">0</label><?=$this->lang->line("cart_count");?></li></h3>
                                                                              
                              
                                                                                        


                   </ul></a>                                                                                                       
                  </div> 
              </div>

              <div id="divider-center"> 


                      <header>
                          
                      </header>

              <div class="divider-nav">
                 <div class="col-xs-12 padding-0">
                      <!-- Fixed navbar -->
                      <div class="navbar navbar-custom navbar-inverse">
                          

                 
                              <ul class="nav navbar-nav nav-justified">
                                <li><a href="#">Home</a></li>
                                <li><a href="#section2" >Product</a></li>
                                <li><a href="#section3" >News</a></li>
                                <li class="active"><a href="#section1"><strong>Big Brand</strong></a></li>
                                <li><a href="#section4">About</a></li>
                               
                             
                              </ul>
                           
                       
                      </div><!--/.navbar -->

                   </div>
              </div>

          
                      <!-- Begin page content -->
               <div class="page-header-shop padding-0">
                    <div class="rowz">
                      <div class="col-lg-8 col-md-7 col-sm-6">

                      <ol class="breadcrumb-shop" >
                          <li><a href="<?php echo site_url('backshop/gobackshop');?>"  ><?=$this->lang->line("home");?></a></li>
                          
                      </ol>
                      
                      
                        
                      <!--<div class="col-lg-4 col-md-5 col-sm-6">
                          <h6>What the ?</h6>
                      </div>-->
                    </div>
                     
                  </div>
                </div>
   
                  
                      
                
                      
                          
                     
  
  

                      

                                              
                                               
                                             
            <div class="divider-content">                                   
              <div class="row">             
                 <div class="col-xs-3" >
                     <!-- left -->
                    
                            
                       <ul class="nav nav-stacked affix-top" id="sidebar" >
                        <h3><i class="glyphicon glyphicon-book space"></i><?=$this->lang->line("category");?></h3>
                            
                                      <li><a href="#"><i class="glyphicon glyphicon-flash"></i> Alerts</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-link"></i> Links</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-book"></i> Books</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Tools</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>


                                    </ul>
                                    
                                 
                                    
                </div> 
                                   
                                
     <div class="col-xs-9  ">
            <div class="row">
          <div class="col-lg-12  ">
           <div class="page-header-s">
                    
                    </div>
              </div>
          </div>

          <h2 id="sec0"><div id="divl" ><?=$this->lang->line("product");?></div> <div id="divr" ><a><?=$this->lang->line("view_all_product");?></a></div></h2>

                <div class="row">
                            <div class="col-xs-4 col-sm-4">
                              <div class="box-product " >
                                 <div class="inner" >
                                  <div class="image thumbnailz "><a href="#"><img src="<?php echo logo_pic;?>item.png" ></a>
                                  </div>
                                  <div class="name"><a href="#">Golden ring one</a></div>
                                  <div class="price">$199.99</div>
                                  </div>
                                  
                                  <div  class="abs"  >
                                  <div class="cart ">
                                  <a class="button1 animated fadeInLeft " title="<?=$this->lang->line("add_to_cart");?>"  href="productdetail.html"><span></span></a>
                                  <a class="btn-detail ml10 animated fadeInRight " title="<?=$this->lang->line("view_product");?>" href="productdetail.html"><span></span></a>
                                  </div>        
                              </div>
                              </div>
                              
                            </div>
                           <div class="col-xs-4  col-sm-4">
                             <div class="box-product " >
                                 <div class="inner" >
                                  <div class="image thumbnailz "><a href="#"><img src="<?php echo logo_pic;?>item.png"></a>
                                  </div>
                                  <div class="name"><a href="#">Golden ring one</a></div>
                                  <div class="price">$199.99</div>
                                  </div>
                                  
                                  <div  class="abs"  >
                                  <div class="cart ">
                                  <a class="button1 animated fadeInLeft " title="<?=$this->lang->line("add_to_cart");?>" href="productdetail.html"><span ><?=$this->lang->line("add_to_cart");?></span></a>
                                  <a class="btn-detail ml10 animated fadeInRight " title="<?=$this->lang->line("view_product");?>" href="productdetail.html"><span><?=$this->lang->line("view_product");?></span></a>
                                  </div>        
                              </div>
                              </div>


                            </div>
                                 <div class="col-xs-4 col-sm-4">
                                   <div class="box-product " >
                                       <div class="inner" >
                                        <div class="image thumbnailz "><a href="#"><img src="<?php echo logo_pic;?>item.png" ></a>
                                        </div>
                                        <div class="name"><a href="#">Golden ring one</a></div>
                                        <div class="price">$199.99</div>
                                        </div>
                                        
                                        <div  class="abs"  >
                                        <div class="cart ">
                                        <a class="button1 animated fadeInLeft " title="<?=$this->lang->line("add_to_cart");?>" href="productdetail.html"><span><?=$this->lang->line("add_to_cart");?></span></a>
                                        <a class="btn-detail ml10 animated fadeInRight " title="<?=$this->lang->line("view_product");?>" href="productdetail.html"><span><?=$this->lang->line("view_product");?></span></a>
                                        </div>        
                                    </div>
                                    </div>


                                 </div>
                </div>
    
                
                
              
              
                <div class="row">
                                    <div class="col-xs-4 col-sm-4">
                                      <div class="box-product " >
                                         <div class="inner" >
                                          <div class="image thumbnailz "><a href="#"><img src="<?php echo logo_pic;?>item.png" ></a>
                                          </div>
                                          <div class="name"><a href="#">Golden ring one</a></div>
                                          <div class="price">$199.99</div>
                                          </div>
                                          
                                          <div  class="abs"  >
                                          <div class="cart ">
                                          <a class="button1 animated fadeInLeft " title="<?=$this->lang->line("add_to_cart");?>" href="productdetail.html"><span><?=$this->lang->line("add_to_cart");?></span></a>
                                          <a class="btn-detail ml10 animated fadeInRight " title="<?=$this->lang->line("view_product");?>" href="productdetail.html"><span><?=$this->lang->line("view_product");?></span></a>
                                          </div>        
                                      </div>
                                      </div>
                                      
                                    </div>
                                   <div class="col-xs-4  col-sm-4">
                                     <div class="box-product " >
                                         <div class="inner" >
                                          <div class="image thumbnailz "><a href="#"><img src="<?php echo logo_pic;?>item.png" ></a>
                                          </div>
                                          <div class="name"><a href="#">Golden ring one</a></div>
                                          <div class="price">$199.99</div>
                                          </div>
                                          
                                          <div  class="abs"  >
                                          <div class="cart ">
                                          <a class="button1 animated fadeInLeft " title="<?=$this->lang->line("add_to_cart");?>" href="productdetail.html"><span ><?=$this->lang->line("add_to_cart");?></span></a>
                                          <a class="btn-detail ml10 animated fadeInRight " title="<?=$this->lang->line("view_product");?>" href="productdetail.html"><span><?=$this->lang->line("view_product");?></span></a>
                                          </div>        
                                      </div>
                                      </div>


                                   </div>
                                   <div class="col-xs-4 col-sm-4">
                                     <div class="box-product " >
                                         <div class="inner" >
                                          <div class="image thumbnailz "><a href="#"><img src="<?php echo logo_pic;?>item.png" ></a>
                                          </div>
                                          <div class="name"><a href="#">Golden ring one</a></div>
                                          <div class="price">$199.99</div>
                                          </div>
                                          
                                          <div  class="abs"  >
                                          <div class="cart ">
                                          <a class="button1 animated fadeInLeft "title="<?=$this->lang->line("add_to_cart");?>" href="productdetail.html"><span><?=$this->lang->line("add_to_cart");?></span></a>
                                          <a class="btn-detail ml10 animated fadeInRight " title="<?=$this->lang->line("view_product");?>" href="productdetail.html"><span><?=$this->lang->line("view_product");?></span></a>
                                          </div>        
                                      </div>
                                      </div>


                                   </div>
                </div>
                   <div class="row">
          <div class="col-lg-12  ">
           <div class="page-header-x">
                    
                    </div>
             <div class="page-header">
                    
                    </div>
                    </div>

                    </div>                                     
                            
      </div><!--/col-->             
            
            </div>
          </div>       

          
    



                        


  
  </div>
  </div> 
  </div>
  </div>  
  </div>              

  



<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

 <?php echo $this->load->view('footer/footer')?>
                      


                     







<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
<script src="<?php echo JS_URL;?>bootstrap.js"></script>

<script src="<?php echo JS_THEME1;?>scripts.js"></script>

</body>


</html>