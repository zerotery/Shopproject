<html>
    
    <head>  

<title>TB Shop|Back Office's</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="id=edge">

<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>style.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>bootflat.css">

</head>
<body style="background-image: url('<?php echo logo_pic;?>bg.jpg')">
      <!-- navbar top -->
    
    
    <nav class="navbar navbar-default  " role="navigation" style="height: 50px" >
        <div class="container-fluid "  >
      <ul>
    <div class="navbar-header ">
      <a class="navbar-brand" href="#">
          <img alt="Brand" img src="<?php echo logo_pic;?>logo-2.png" width="210px" height="30px">
      </a>
        
        </ul>
            
        <nav class="  navbar-right " role="navigation">
            <div class="container-fluid  " ><ul>
                    
        <div class="container btn-toolbar navbar " style="width:150px" align="right" >
            
            <a href="<?php echo site_url('backshop/logout');?>" class="button glow button-small button-caution button-pill" style="color:white;width:80px;height: 20px;font-size: 14px"> Log out</a>
      </div>
                    
                </ul>
                     

             </div>
        </nav>
              <!-- session id -->
     <nav class="  navbar-right " role="navigation">
         <div class="container-fluid  " >
             
             <ul>
                     
                 <div class="div3"><img src="<?php echo logo_pic;?>lock.png" alt="" style="position: relative; top:-2px;">&nbsp;<?=$this->lang->line("login");?> <span><?php echo $user; ?></span></div>
           
                    
                </ul>
         </div>
         
         
     </nav>
     <!-- end session id -->
     
     
     <!-- language -->
     <nav class="  navbar-right " role="navigation">
         <div class="container-fluid  " >
                  <ul>
                 
             <div>
         <td height="25" align="MIDDLE">
           <a href="<?php echo site_url('backshop/changebackshop/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></a>
           <a href="<?php echo site_url('backshop/changebackshop/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></a></td>
            </div> 
                 </ul>
         </div>
        
     </nav>
     <!-- end language -->
    </div>
  </div>
        
</nav>
   
     
    <!-- end navbar top -->
   
   <!--nav -->
   <ul class="nav nav-pills " role="tablist">
       
 <div class="btn-group ">
     <button type="button" class="btn btn-danger active " ><a href="#"><text style="color: ivory"><?=$this->lang->line("store");?></text></a></button>

  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      <?=$this->lang->line("product");?>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#"><?=$this->lang->line("product_type");?></a></li>
      <li><a href="#"><?=$this->lang->line("product_management");?></a></li>
      <li><a href="#"><?=$this->lang->line("option");?></a></li>
    </ul> 
  </div>
     <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
      <?=$this->lang->line("sell");?>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#"><?=$this->lang->line("order_buy");?></a></li>
      <li><a href="#"><?=$this->lang->line("bank");?></a></li>
    </ul> 
  </div>
     <div class="btn-group">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
      <?=$this->lang->line("report");?>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#"><?=$this->lang->line("selling");?></a></li>
      <li><a href="#"><?=$this->lang->line("payment");?></a></li>
      <li><a href="#"><?=$this->lang->line("mem_shop");?></a></li>
    </ul> 
  </div>
     <div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
      <?=$this->lang->line("system");?>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#"><?=$this->lang->line("setting");?></a></li>
      <li><a href="#"><?=$this->lang->line("management");?></a></li>
    </ul> 
  </div>
    
     
     
</div>
  
  <nav class=" navbar navbar-right " role="navigation" style="width:680px" >
     
            <div class="container-fluid  " ><ul>
                    
        <div class="container btn-toolbar navbar-right" style="width:250px" align="right" >
            
           <div> 
               
            <a href="<?php echo site_url('backshop/myshop');?>" class="button button-rounded button-flat-highlight center-block" style="color:white;width:150px;height: 22px;font-size: 14px; "><?=$this->lang->line("viewshop");?></a>
           </div>
           </div>
                    
                </ul>
                     
           <!-- session shop id -->
            <nav class="  navbar-right " role="navigation">
         <div class="container-fluid  " >
             
             <ul>
                     
             <div class="div3"><img src="<?php echo logo_pic;?>Icon-Shop.ico" alt="" style="position: relative; top:-2px; width:18px ;height:18px ">&nbsp;<?=$this->lang->line("shop_name");?>&nbsp;&nbsp;<span><?php echo $nameshop;?></span></div>
           
                    
                </ul>
         </div>
         
         
     </nav>
            
           <!-- end session shop id -->
             </div>
        </nav>
  </ul>
    
   <!-- end nav -->
    <div class="breadcrumb">
        <a href="#"><?=$this->lang->line("home");?></a>
      

  
    <!--  Fixed layout -->
  
   
    <div class="container ">
        <br>
        <div class="modal-body" >
            <form class="form col-md-12 center-block" style=" background-color: #CCCCCC">
              <br><br>
        <!--ภาพรวม -->
 <div class="panel panel-default">
           <div class="panel-heading"> <h4><?=$this->lang->line("overview");?></h4></div>
        <div class="panel-body">
              <div class="dashboard-content">
                  <table style="font-size: larger"   width=100% height=20%>
            <tbody><tr>
              <td><?=$this->lang->line("sell_t");?></td>
              <td>4,359,050.00 ฿</td>
            </tr>
            <tr>
              <td><?=$this->lang->line("sell_y");?></td>
              <td>3,558,100.00 ฿</td>
            </tr>
            <tr>
              <td><?=$this->lang->line("order_t");?></td>
              <td>449</td>
            </tr>
            <tr>
              <td><?=$this->lang->line("num_m");?></td>
              <td>687</td>
            </tr>
            <tr>
              <td><?=$this->lang->line("mem_w");?></td>
              <td>0</td>
            </tr>
            <tr>
              <td><?=$this->lang->line("ally");?></td>
              <td>13</td>
            </tr>
            <tr>
              <td><?=$this->lang->line("ally_w");?></td>
              <td>1</td>
            </tr>
            
          </tbody></table>
        </div>
                        </div>
         </div>
     <!-- จบ ภาพรวม -->
     <br>
     <!-- 10คำสั่งซื้อ -->
       <!--ภาพรวม -->
 <div class="panel panel-default">
           <div class="panel-heading"> <h4><?=$this->lang->line("top_order");?></h4></div>
        <div class="panel-body">
                            <div class="dashboard-content" style="background-image: url(<?php echo logo_pic;?>bg-table.jpg)">
                 <table class="list" border=1  width=100% height=20% >
            <thead>
                <tr  >
                <td class="right"><?=$this->lang->line("order");?></td>
                <td class="left"><?=$this->lang->line("mem_name");?></td>
                <td class="left"><?=$this->lang->line("mem_status");?></td>
                <td class="left"><?=$this->lang->line("date");?></td>
                <td class="right"><?=$this->lang->line("total_price");?></td>
                <td class="right">a<?=$this->lang->line("action_v");?></td>
              </tr>
            </thead>
            <tbody>
                                          <tr>
                <td class="right">599</td>
                <td class="left">Pattamas Promduang</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">09/11/2014</td>
                <td class="right">5,600.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">598</td>
                <td class="left">อรสาต์ วีระจิตต์</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">08/11/2014</td>
                <td class="right">16,800.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">597</td>
                <td class="left">ดรุณี สุริยันรัตกร</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">06/11/2014</td>
                <td class="right">38,400.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">596</td>
                <td class="left">วิชิต วิริยธำรงกุล</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">03/11/2014</td>
                <td class="right">11,800.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">595</td>
                <td class="left">วิชิต วิริยธำรงกุล</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">03/11/2014</td>
                <td class="right">10,000.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">593</td>
                <td class="left">ฐิตาภรณ์ ศิริศรี</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">28/10/2014</td>
                <td class="right">14,200.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">592</td>
                <td class="left">ฐิตาภรณ์ ศิริศรี</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">28/10/2014</td>
                <td class="right">16,400.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">591</td>
                <td class="left">อรวรรณ บุญรัตน์</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">21/10/2014</td>
                <td class="right">1,900.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">589</td>
                <td class="left">นุสรา ดวดไธสง</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">18/10/2014</td>
                <td class="right">3,600.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon"><?=$this->lang->line("view");?></a> ]
                  </td>
              </tr>
                            <tr>
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
     
     <!-- จบ 10คำสั่งซื้อ -->
     
     
     
    <div class="modal-footer">
          <div style="font-size:11px; padding-bottom: 30px;" align="center">
      <a href="#"><b style="color:#333"><?=$this->lang->line("footer");?></b></a>
      <?=$this->lang->line("footer1");?> <b><?=$this->lang->line("footer2");?></b><?=$this->lang->line("footer3");?><a href="#"><?=$this->lang->line("footer4");?></a>
      
    </div>
    </div>
            </form>
            
        
        
    </div>
    <!-- end Fixed layout -->
    </div>
    
    </body>
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo BI;?>jquery.js"></script>
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    <script src="<?php echo JS_URL;?>buttons.js"></script>
    <script src="<?php echo JS_URL;?>all.js"></script>
  
    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script src="<?php echo JS_URL;?>icheck.min.js"></script>
    <script src="<?php echo JS_URL;?>jquery.fs.selecter.min.js"></script>
</html>