<html>
<head>  

<title>TB Shop|Back Office's</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<style>
body {
  font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.42857143;
  brackgound:#000000; 
  background:url("<?php echo logo_pic;?>bg_backshop.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  </style>


</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#" align="left">
    <img src="<?php echo logo_pic;?>logo2.png" width="100px" height="20px" >
    </a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li>
        <a href="<?php echo site_url('backshop/gobackshop');?>"><?=$this->lang->line("store");?></a>
      </li>

      <li>
        <a href="#"><?php echo $nameshop;?></a>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("product");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('backshop/productType');?>"><?=$this->lang->line("product_type");?></a></li>
          <li><a href="<?php echo site_url('backshop/productManage');?>"><?=$this->lang->line("product_management");?></a></li>
          <li><a href="#"><?=$this->lang->line("option");?></a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("sell");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?=$this->lang->line("order_buy");?></a></li>
          <li><a href="#"><?=$this->lang->line("bank");?></a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("report");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a href="#"><?=$this->lang->line("selling");?></a></li>
        <li><a href="#"><?=$this->lang->line("payment");?></a></li>
        <li><a href="#"><?=$this->lang->line("mem_shop");?></a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("system");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a href="#"><?=$this->lang->line("setting");?></a></li>
        <li><a href="#"><?=$this->lang->line("management");?></a></li>
        </ul>
      </li>


      
      
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('backshop/changeaddproduct/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">&nbsp&nbsp English</a></li>
          <li><a href="<?php echo site_url('backshop/changeaddproduct/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">&nbsp&nbsp Thai</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('backshop/myshop');?>"><span class="glyphicon glyphicon-home" >&nbsp<?=$this->lang->line("viewshop");?></span></a>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("login");?><b class="caret"></b></a>
        <ul class="dropdown-menu">

          
          <li><a href="<?php echo site_url('member_tb/profile');?>"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp<?php echo $user; ?></span></a></li>
          <li class="divider"></li>
          <li class="dropdown-header"><font color="white"><?=$this->lang->line("shop_name");?></font></li>
          <li><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true">&nbsp<?php echo $nameshop;?></span></a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('backshop/logout');?>"><span class="glyphicon glyphicon-off" >&nbspLogout</span></a>
      </li>
    </ul>
  </div>
</div>

<div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-s">
                      
                    </div>
                    </div>
                    </div>
<div class="container transbox" style="background-color:#777;">

<br>
<div class="page-header-bnb">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">

         <ol class="breadcrumb" style="background-color:#777;">
              <li><a href="<?php echo site_url('backshop/gobackshop');?>" style="color: white"><?=$this->lang->line("home");?></a></li>
              <li><a href="<?php echo site_url('backshop/productType');?>" style="color: white"><?=$this->lang->line("product_type");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
         <div class="col-lg-8 col-md-7 col-sm-6">
         </div>
      </div>
      <hr width="100%">
<div class="bs-docs-section clearfix">

  
        <div class="row">
        <div class="col-lg-1"></div>
          <div class="col-lg-10" style="border-style:solid;border-width:2px;">
                 <div class="page-header-bp " >
                                              <div class="row">
                                              <div class="col-md-8 ">
                                                 <h3><?=$this->lang->line("product_management");?></h3>
                                              </div>

                                            
                                             </div>
                                             </div>
     
                <form class="form-horizontal" name="product_type_select" id="profile"   method="post" enctype="multipart/form-data">
                    <fieldset >

                               <div class="form-group ">
                                     
                                         <ul class="nav nav-tabs nav-justified" id="myTab1">
                                            <li class="active"><a href="#home">Home</a></li>
                                            
                                            <li><a href="#messages" data-easein="fadeInDown">Messages</a></li>
                                            <li><a href="#settings" data-easein="fadeInUp">Settings</a></li>
                                          
                                        </ul>

                                        <div class="tab-content" id="tab-content1">
                                            <div class="tab-pane active" id="home">
                                              <div class="form-group"></div>

                                                      <div class="form-group">
                                                            <label  class="col-lg-2 control-label animated fadeInLeft"><?=$this->lang->line("product_name");?></label>
                                                            <div class="col-lg-4">
                                                              <input type="text" id="p_price_th" class="form-control animated fadeInLeft" name="product_name_th"  value="">
                                                            </div>
                                                            <div class="col-lg-1"><img src="<?php echo logo_pic;?>flag-th.jpg" width="35" height="25" border="0"></div>
                                                            


                                                      </div>

                                                      <div class="form-group">
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-4">
                                                            <input type="text" id="p_price_en" class="form-control animated fadeInLeft" name="product_name_en"  value="">
                                                            </div>
                                                            <div class="col-lg-1"><img src="<?php echo logo_pic;?>flag-en.jpg" width="35" height="25" border="0"></div>
                                                           
                                                      </div>

                                                      <div class="form-group">
                                                                      <label  class="col-lg-2 control-label"><?=$this->lang->line("product_detail");?></label>
                                                                      <div class="col-lg-5">
                                                                        <textarea rows="3" cols="60" class="form-control animated fadeInLeft" id="pro_dth" name="shopdetail_th" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?=$this->lang->line("dnote");?>"></textarea>
                                                                      </div>
                                                                      <label for="inputslang" class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-th.jpg" width="35" height="25" border="0"></label>
                                                      </div>

                                                      <div class="form-group">
                                                                     <div class="col-lg-2"></div>
                                                                     <div class="col-lg-5">
                                                                        <textarea rows="3" cols="60" class="form-control animated fadeInLeft" id="pro_den" name="shopdetail_en" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?=$this->lang->line("dnote");?>"></textarea>
                                                                      </div>
                                                                      <label for="inputslang" class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-en.jpg" width="35" height="25" border="0"></label>
                                                      </div>



                                                           
                                                            </div>
                                                            
                                                          

                                     


                                            <div class="tab-pane" id="messages">
                                                  <div class="form-group"></div>

                                                      <div class="form-group">
                                                            <label  class="col-lg-2 control-label animated fadeInLeft"><?=$this->lang->line("p_price");?></label>
                                                            <div class="col-lg-2">
                                                              <input type="text" id="p_price" class="form-control animated fadeInDown" name="product_price"  value="">
                                                            </div>
                                                            <div class="col-lg-2" ><label style="font-size:15pt;"><?=$this->lang->line("monetary");?></label></div>

                                                      </div>
                                                            
                                                          <div class="form-group">
                                                            <label  class="col-lg-2 control-label animated fadeInLeft"><?=$this->lang->line("p_quantity");?></label>
                                                            <div class="col-lg-2">
                                                              <input type="text" class="form-control animated fadeInDown" name="product_quantity" value="">
                                                            </div>
                                                            </div>

                                                          <div class="form-group ">
                                                          <label  class="col-lg-2 control-label animated fadeInLeft"><?=$this->lang->line("p_status");?></label>
                                                          <div class="col-lg-3">
                                                            
                                                             <select class="form-control animated fadeInDown">
                                                                  <option value="one">One</option>
                                                                  <option value="two">Two</option>
                                                                  <option value="three">Three</option>
                                                                  <option value="four">Four</option>
                                                                  <option value="five">Five</option>
                                                             </select>
                                                        </div>
                                                        </div>
                                                          <div class="form-group ">
                                                          <label  class="col-lg-2 control-label animated fadeInLeft"><?=$this->lang->line("pro_type");?></label>
                                                          <div class="col-lg-4">
                                                            
                                                             <select class="form-control animated fadeInDown">
                                                                  <option value="one">One</option>
                                                                  <option value="two">Two</option>
                                                                  <option value="three">Three</option>
                                                                  <option value="four">Four</option>
                                                                  <option value="five">Five</option>
                                                             </select>
                                                        </div>
                                                        </div>

                                              


                                            </div>
                                            <div class="tab-pane" id="settings">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti sint quisquam nemo iusto explicabo fugiat minus a necessitatibus</div>
                                        </div>
                                      

                                      
                                </div>

                               






                                  <div class="col-lg-9"></div>
                                  <div class="form-group">
                                  <div class="col-md-1 col-md-offset-1">
                                          <h4><input type="submit" class="btn btn-primary animated swing" id="btn_add" name="btnadd"  value="<?=$this->lang->line("addtype");?>" /></h4>
                                           
                                   </div >
                                     <div  >
                                         <h4><input type="submit" class="btn btn-danger animated swing" id="btn_cancel" name="cancel"  onclick="" value="<?=$this->lang->line("cancel");?>"/></h4>
                                     </div>
                                           
                                
                                </div>
                                

                                 

                    </fieldset>
                </form>

       <script type="text/javascript">
                checked=false;
                  function checkedAll (ckb) {var aa= document.getElementById('ckb'); if (checked == false)
                    {
                    checked = true
                    }
                    else {
                    checked = false
                    }
                    for (var i =0; i < aa.elements.length; i++){ aa.elements[i].checked = checked;}
                    }
        </script>
       
         
          </div>
          
        </div>
</div>
</div>
</div>
    <footer style=" position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;">

   
    <div class="powered-main" style="background-color: #FF4000">
    <div id="powered">
       
          <div style="font-size:11px; padding-bottom: 30px;color: #eee;" align="center">
              <a href="#" style="color: greenyellow" ><?=$this->lang->line("footer");?></a>
                        <?=$this->lang->line("footer1");?><b><?=$this->lang->line("footer2");?></b><?=$this->lang->line("footer3");?><a href="#" style="color: lawngreen"><?=$this->lang->line("footer4");?></a>
      
    </div>
    
    </div>

    </div>
       
    </footer>
    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    
    </body>
    
    

   
    
</html>