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
            
            <a href="#" class="button glow button-small button-caution button-pill" style="color:white;width:80px;height: 20px;font-size: 14px"> Log out</a>
      </div>
                    
                </ul>
                     

             </div>
        </nav>
              <!-- session id -->
     <nav class="  navbar-right " role="navigation">
         <div class="container-fluid  " >
             
             <ul>
                     
                 <div class="div3"><img src="<?php echo logo_pic;?>lock.png" alt="" style="position: relative; top:-2px;">&nbsp;คุณเข้าระบบในชื่อ <span></span></div>
           
                    
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
           <a href="#"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></a>
           <a href="#"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></a></td>
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
     <button type="button" class="btn btn-danger active " ><a href="#"><text style="color: ivory">แผงหลังร้าน</text></a></button>

  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      สินค้า
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">หมวดหมู่สินค้า</a></li>
      <li><a href="#">จัดการสินค้า</a></li>
      <li><a href="#">option</a></li>
    </ul> 
  </div>
     <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
      งานขาย
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">คำสั่งซื้อ</a></li>
      <li><a href="#">ธนาคาร</a></li>
    </ul> 
  </div>
     <div class="btn-group">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
      รายงาน
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">การขาย</a></li>
      <li><a href="#">การชำระเงิน</a></li>
      <li><a href="#">สมาชิกร้าน</a></li>
    </ul> 
  </div>
     <div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
      ระบบ
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">ตั้งค่า</a></li>
      <li><a href="#">Management</a></li>
    </ul> 
  </div>
    
     
     
</div>
  
  <nav class=" navbar navbar-right " role="navigation" style="width:680px" >
     
            <div class="container-fluid  " ><ul>
                    
        <div class="container btn-toolbar navbar-right" style="width:250px" align="right" >
            
           <div> 
               
            <a href="#" class="button button-rounded button-flat-highlight center-block" style="color:white;width:150px;height: 22px;font-size: 14px; ">ดูหน้าร้าน</a>
           </div>
           </div>
                    
                </ul>
                     
           <!-- session shop id -->
            <nav class="  navbar-right " role="navigation">
         <div class="container-fluid  " >
             
             <ul>
                     
             <div class="div3"><img src="<?php echo logo_pic;?>Icon-Shop.ico" alt="" style="position: relative; top:-2px; width:18px ;height:18px ">&nbsp;ร้าน <span></span></div>
           
                    
                </ul>
         </div>
         
         
     </nav>
            
           <!-- end session shop id -->
             </div>
        </nav>
  </ul>
    
   <!-- end nav -->
    <div class="breadcrumb">
        <a href="http://www.weloveandaman.com/admin/index.php?route=common/home&amp;token=843aff502f13406339ba73862c6c463a">หน้าแรก</a>
      

  
    <!--  Fixed layout -->
  
   
    <div class="container ">
        <br>
        <div class="modal-body" >
            <form class="form col-md-12 center-block" style=" background-color: #CCCCCC">
              <br><br>
        <!--ภาพรวม -->
 <div class="panel panel-default">
           <div class="panel-heading"> <h4>ภาพรวม</h4></div>
   			<div class="panel-body">
              <div class="dashboard-content">
                  <table style="font-size: larger"   width=100% height=20%>
            <tbody><tr>
              <td>ยอดขายทั้งหมด:</td>
              <td>4,359,050.00 ฿</td>
            </tr>
            <tr>
              <td>ยอดขายของปีนี้:</td>
              <td>3,558,100.00 ฿</td>
            </tr>
            <tr>
              <td>รวมคำสั่งซื้อ:</td>
              <td>449</td>
            </tr>
            <tr>
              <td>จำนวนลูกค้า:</td>
              <td>687</td>
            </tr>
            <tr>
              <td>ลูกค้ารอการอนุมัติ:</td>
              <td>0</td>
            </tr>
            <tr>
              <td>ข้อคิดเห็นรอการอนุมัติ:</td>
              <td>13</td>
            </tr>
            <tr>
              <td>จำนวนพันธมิตร:</td>
              <td>1</td>
            </tr>
            <tr>
              <td>พันธมิตรรอการอนุมัติ:</td>
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
           <div class="panel-heading"> <h4>10 คำสั่งซื้อล่าสุด</h4></div>
   			<div class="panel-body">
                            <div class="dashboard-content" style="background-image: url(<?php echo logo_pic;?>bg-table.jpg)">
                 <table class="list" border=1  width=100% height=20% >
            <thead>
                <tr  >
                <td class="right">รหัสคำสั่งซื้อ</td>
                <td class="left">ชื่อลูกค้า</td>
                <td class="left">สถานะ</td>
                <td class="left">วันที่สั่ง</td>
                <td class="right">รวม</td>
                <td class="right">การกระทำ</td>
              </tr>
            </thead>
            <tbody>
                                          <tr>
                <td class="right">599</td>
                <td class="left">Pattamas Promduang</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">09/11/2014</td>
                <td class="right">5,600.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">598</td>
                <td class="left">อรสาต์ วีระจิตต์</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">08/11/2014</td>
                <td class="right">16,800.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">597</td>
                <td class="left">ดรุณี สุริยันรัตกร</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">06/11/2014</td>
                <td class="right">38,400.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">596</td>
                <td class="left">วิชิต วิริยธำรงกุล</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">03/11/2014</td>
                <td class="right">11,800.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">595</td>
                <td class="left">วิชิต วิริยธำรงกุล</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">03/11/2014</td>
                <td class="right">10,000.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">593</td>
                <td class="left">ฐิตาภรณ์ ศิริศรี</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">28/10/2014</td>
                <td class="right">14,200.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">592</td>
                <td class="left">ฐิตาภรณ์ ศิริศรี</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">28/10/2014</td>
                <td class="right">16,400.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">591</td>
                <td class="left">อรวรรณ บุญรัตน์</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">21/10/2014</td>
                <td class="right">1,900.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">589</td>
                <td class="left">นุสรา ดวดไธสง</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">18/10/2014</td>
                <td class="right">3,600.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
                  </td>
              </tr>
                            <tr>
                <td class="right">587</td>
                <td class="left">ฉวีวรรณ แหวนวิเศษ</td>
                <td class="left">รอการชำระเงิน</td>
                <td class="left">17/10/2014</td>
                <td class="right">8,400.00 ฿</td>
                <td class="right">                  [ <a href="#" style="color: maroon">ดู</a> ]
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
			<a href="#"><b style="color:#333">TBShop.com</b></a>
			เว็บไซต์ให้บริการ <b>เปิดร้านค้าออนไลน์ฟรี</b> ด้วยการตกแต่งร้านค้าแนวใหม่ พร้อมระบบหลังร้าน ไม่จำกัดพื้นที่เว็บ ไม่จำกัดจำนวนสินค้า พร้อมทีมงานช่วยเหลือทุกวัน <a href="#">สร้างเว็บขายของฟรี</a>
			
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