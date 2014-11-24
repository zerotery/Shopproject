<html>
<head>  

<title>TB Shop|Back Office's</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<style>
body {
  font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.42857143;
  brackgound:#000000; 
  background:url("<?php echo logo_pic;?>bg.jpg") no-repeat center center fixed;
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
        <a href="#"><?=$this->lang->line("store");?></a>
      </li>

      <li>
        <a href="#"><?php echo $nameshop;?></a>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("product");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?=$this->lang->line("product_type");?></a></li>
          <li><a href="#"><?=$this->lang->line("product_management");?></a></li>
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
          <li><a href="<?php echo site_url('backshop/changebackshop/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">&nbsp&nbsp English</a></li>
          <li><a href="<?php echo site_url('backshop/changebackshop/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">&nbsp&nbsp Thai</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('backshop/myshop');?>"><span class="glyphicon glyphicon-home" >&nbsp<?=$this->lang->line("viewshop");?></span></a>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("login");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp<?php echo $user; ?></span></a></li>
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


<div class="container" style="background-color:#CCFFCC;">
<br>
<div class="page-header">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
          <a href="#"><?=$this->lang->line("home");?></a>
          
            
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
          <div class="col-lg-12">
             <div class="panel panel-default">
           <div class="panel-heading" style="background-color:green;"><h4><?=$this->lang->line("overview");?></h4></div>
        
              
            <table class="table table-striped table-hover " style="font-size: larger"   width=100% height=20%>
            <tbody><tr class="success">
              <td><?=$this->lang->line("sell_t");?></td>
              <td>4,359,050.00 ฿</td>
            </tr>
            <tr class="success">
              <td><?=$this->lang->line("sell_y");?></td>
              <td>3,558,100.00 ฿</td>
            </tr>
            <tr class="success">
              <td><?=$this->lang->line("order_t");?></td>
              <td>449</td>
            </tr>
            <tr class="success">
              <td><?=$this->lang->line("num_m");?></td>
              <td>687</td>
            </tr>
            <tr class="success">
              <td><?=$this->lang->line("mem_w");?></td>
              <td>0</td>
            </tr>
            <tr class="success">
              <td><?=$this->lang->line("ally");?></td>
              <td>13</td>
            </tr>
            <tr class="success">
              <td><?=$this->lang->line("ally_w");?></td>
              <td>1</td>
            </tr>
            
          </tbody>
          </table>
       
       
         </div>
          </div>
          <div class="col-lg-12">
          
            <table class="table table-striped table-hover " border=1  width=100% height=20% >
            <thead>
                <tr style="background-color:green;">
                <td class="right"><font color="black"><?=$this->lang->line("order");?></font></td>
                <td class="left"><?=$this->lang->line("mem_name");?></td>
                <td class="left"><?=$this->lang->line("mem_status");?></td>
                <td class="left"><?=$this->lang->line("date");?></td>
                <td class="right"><?=$this->lang->line("total_price");?></td>
                <td class="right"><?=$this->lang->line("action_v");?></td>
              </tr>
            </thead>
            <tbody>
              <tr class="success">
                <td class="right">599</td>
                <td class="left">Pattamas Promduang</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">09/11/2014</td>
                <td class="right">5,600.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
              <tr class="success">
                <td class="right">598</td>
                <td class="left">อรสาต์ วีระจิตต์</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">08/11/2014</td>
                <td class="right">16,800.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
              <tr class="success">
                <td class="right">597</td>
                <td class="left">ดรุณี สุริยันรัตกร</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">06/11/2014</td>
                <td class="right">38,400.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
              <tr class="success">
                <td class="right">596</td>
                <td class="left">วิชิต วิริยธำรงกุล</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">03/11/2014</td>
                <td class="right">11,800.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
              <tr class="success">
                <td class="right">595</td>
                <td class="left">วิชิต วิริยธำรงกุล</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">03/11/2014</td>
                <td class="right">10,000.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                <tr class="success">
                <td class="right">593</td>
                <td class="left">ฐิตาภรณ์ ศิริศรี</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">28/10/2014</td>
                <td class="right">14,200.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
              </td>
              </tr>
              <tr class="success">
                <td class="right">592</td>
                <td class="left">ฐิตาภรณ์ ศิริศรี</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">28/10/2014</td>
                <td class="right">16,400.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
              <tr class="success">
                <td class="right">591</td>
                <td class="left">อรวรรณ บุญรัตน์</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">21/10/2014</td>
                <td class="right">1,900.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
              <tr class="success"> 
                <td class="right">589</td>
                <td class="left">นุสรา ดวดไธสง</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">18/10/2014</td>
                <td class="right">3,600.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
              <tr class="success">
                <td class="right">587</td>
                <td class="left">ฉวีวรรณ แหวนวิเศษ</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">17/10/2014</td>
                <td class="right">8,400.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
              </tbody>
          </table>
       



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