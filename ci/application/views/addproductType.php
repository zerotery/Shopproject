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
          <li><a href="<?php echo site_url('backshop/changeaddproductType/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">&nbsp&nbsp English</a></li>
          <li><a href="<?php echo site_url('backshop/changeaddproductType/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">&nbsp&nbsp Thai</a></li>
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
                 <div class="page-header-bp ">
                                              <div class="row">
                                              <div class="col-md-10 ">
                                                 <h3><?=$this->lang->line("p_type");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2">

                                                 
                                              </div>
                                              
                                             </div>
                                             </div>

                <form class="form-horizontal" name="product_type_select" id="profile" action="<?php echo site_url('backshop/productType'); ?>"  method="post" enctype="multipart/form-data">
                    <fieldset >

                               <div class="form-group ">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("ptype_select");?></label>
                                              <div class="col-lg-6">
                                                
                                                 <select class="form-control animated pulse">
                                                      <option value="one">One</option>
                                                      <option value="two">Two</option>
                                                      <option value="three">Three</option>
                                                      <option value="four">Four</option>
                                                      <option value="five">Five</option>
                                                 </select>
                                            </div>
                                  </div>

                                <div class="form-group ">
                                   <div class="col-lg-1">
                                     <input type="submit" class="btn btn-primary animated swing" id="btn_add" name="btnadd"  value="<?=$this->lang->line("addtype");?>" />
                                   </div>
                                   <div class="col-lg-1">
                                     <input type="submit" class="btn btn-danger animated swing" id="btn_cancel" name="cancel"  value="<?=$this->lang->line("cancel");?>"/>
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