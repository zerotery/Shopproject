<html>
    
    <head>  

<title>TB Shop|My shop's</title>
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
          <img alt="Brand" img src="<?php echo logo_pic;?>logo-3.png" width="210px" height="30px">
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
                     
                 <div class="div3"><img src="<?php echo logo_pic;?>lock.png" alt="" style="position: relative; top:-2px;">&nbsp;คุณเข้าระบบในชื่อ <span><?php echo $user." ".$userid; ?></span></div>
           		
                    
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
   

    <!--  Fixed layout -->
  
   
    <div class="container ">
        
        <div class="modal-body" >
            <form class="form col-md-12 center-block" style=" background-color: #CCCCCC">
                    <table class="table">
                        <br>
                        <p style="font-family: Curlz MT, serif; font-size:25pt; font-style:italic ; color: saddlebrown">My store</p>
                        <p style="font-family: Curlz MT, serif; font-size:14pt; font-style:italic; color: saddlebrown">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ร้านค้าของฉัน</p><br><br>
      <thead>
        <tr>
          <th>#</th>
          <th>Store Name</th>
          <th>Back office</th>
          <th>Shop view</th>
        </tr>
      </thead>
      <tbody>
        <tr class="active">
          <td>1</td>
          <td>name</td>
          <td><a href="shop_back">link</a></td>
          <td><a href="shop_back">link2</a></td>
          
        </tr>
        <tr>
          <td>2</td>
            <td>name</td>
          <td><a href="shop_back">link</a></td>
          <td><a href="shop_back">link2</a></td>
        </tr>
        <tr class="success">
          <td>3</td>
            <td>name</td>
          <td><a href="shop_back">link</a></td>
          <td><a href="shop_back">link2</a></td>
        </tr>
        <tr>
          <td>4</td>
            <td>name</td>
          <td><a href="shop_back">link</a></td>
          <td><a href="shop_back">link2</a></td>
        </tr>
        <tr class="info">
          <td>5</td>
            <td>name</td>
          <td><a href="shop_back">link</a></td>
          <td><a href="shop_back">link2</a></td>
        </tr>
        <tr>
          <td>6</td>
           <td>name</td>
          <td><a href="shop_back">link</a></td>
          <td><a href="shop_back">link2</a></td>
        </tr>
        
      </tbody>
    </table>

     
     
    <div class="modal-footer">
          <div class="col-md-12">
          
		  </div>
    </div>
                 <div class="modal-footer">
          <div style="font-size:11px; padding-bottom: 30px;" align="center">
			<a href="#"><b style="color:#333">TBShop.com</b></a>
			เว็บไซต์ให้บริการ <b>เปิดร้านค้าออนไลน์ฟรี</b> ด้วยการตกแต่งร้านค้าแนวใหม่ พร้อมระบบหลังร้าน ไม่จำกัดพื้นที่เว็บ ไม่จำกัดจำนวนสินค้า พร้อมทีมงานช่วยเหลือทุกวัน <a href="#">สร้างเว็บขายของฟรี</a>
			
		</div>
    </div>
            </form>
            
        </div>
        
    </div>
    <!-- end Fixed layout -->
    
    </body>
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo BI_URL;?>jquery.js"></script>
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    <script src="<?php echo JS_URL;?>buttons.js"></script>
    <script src="<?php echo JS_URL;?>all.js"></script>
  
    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script src="<?php echo JS_URL;?>icheck.min.js"></script>
    <script src="<?php echo JS_URL;?>jquery.fs.selecter.min.js"></script>
</html>