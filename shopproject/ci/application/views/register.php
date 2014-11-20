<html>
    
    <head>

<meta http-equiv="Content-Type" content="text/html ; charset=utf-8">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="description" >

<title>TB Shop - Registration</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>favicon.ico">

<!-- Comment following two lines to use Color Changer -->
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>color-schemes/black.css" id="color_scheme">
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>styles.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<style type="text/css">
  textarea{ 
  width: 200px; 
  min-width:200px; 
  max-width:200px; 

  height:100px; 
  min-height:100px;  
  max-height:100px;
  }


</style>


<link href="http://fonts.googleapis.com/css?family=Carme" rel="stylesheet" type="text/css">



<script src="<?php echo JS_URL;?>html5.js"></script>

</head>

<body data-twttr-rendered="true" style="background-image:  url('<?php echo logo_pic;?>bg.jpg')" >




<div class="mainWrapper">


<!--Header Part Start-->
<header>
 

  	<div class="clear"></div>
</div>

<div class="headerBg">

<div id="headerMain">
<div id="header">
    <div id="logo">
    <img src="<?php echo logo_pic;?>logo2.png" ></a>
    </div>

<div class="clear"></div>
</div>


<!--Nav Part Start-->
<nav>
<div class="menu-main">
<div id="menu">
  <ul>
  	<li><a href="index.html" title="Home"><span class="home_icon"></span></a></li>
        <li><a href="#" title="Men">menu1</a>
            
		</li>
        <li><a href="#" title="Shoes">menu2</a></li>
        <li><a href="#" title="Bags">menu3</a></li>
        <li><a href="#" title="Women">menu4</a>
            
          </li>
        <li><a href="#" title="Clothing">menu5</a></li>
        <li><a href="#" title="Jewelry">menu6</a></li>
        <li><a href="#" title="Kids">menu7</a></li>
        <li style="border-right-style: none;"><a href="#" title="Shortcodes">menu8</a></li>
      </ul>
</div>
</div>
</nav>
<!--Nav Part End-->


</div>


</div>
</header>
<!--Header Part End-->

<div class="wrapper">
<div id="notification"></div>
<div id="container">



 
<div id="content">
  
  <h1><span>สมัครสมาชิก</span></h1>
  <p>ถ้าคุณเป็นสมาชิกอยู้แล้ว กรุณาเข้าสู่ระบบ <a href="http://localhost/Shopproject/shopproject/ci/index.php/backshop">login page</a>.</p>
  <?php echo form_open('member_reg');?>
  
  <form action="#" method="post" enctype="multipart/form-data">
    <h2>ประวัตืส่วนตัว</h2>
    
    
    <div class="content">
            
        
      <table class="form">
        <tbody><tr>
          <td><span class="required">*</span> ชื่อ:</td>
          <td><input type="text" class="form-control" name="firstname" value="">
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> ชื่อ:</td>
          <td><input type="text" class="form-control" name="firstname" value="">
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> ชื่อ:</td>
          <td><input type="text" class="form-control" name="firstname" value="">
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> นามสกุล:</td>
          <td><input type="text" class="form-control" name="lastname" value="">
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> E-Mail:</td>
          <td><input type="text" class="form-control" name="email" value="">
            </td>
        </tr>
        <tr>
          <td><span class="required ">*</span> รหัสประจำตัวประชาชน:</td>
          <td><input type="text"  class="form-control" name="license" value="">
            </td>
        </tr>
        
      </tbody></table>
    </div>
    <h2>ที่อยู่ </h2>
    <div class="content">
      <table class="form">
        <tbody>
        <tr>
            <td><span class="required">*</span> ที่อยู่ :</td>
            <td><textarea name="address" rows="5" cols="60" class="form-control"></textarea>
            </td>
        </tr>
       
        <tr>
          <td><span class="required">*</span> จังหวัด:</td>
          <td><input type="text" name="city" value="" class="form-control">
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> รหัสไปรษณีย์:</td>
          <td><input type="text" name="postcode" value="" class="form-control">
            </td>
        </tr>
        
        </tbody></table>
    </div>
    <h2>ชื่อผู้ใช้ และรหัสผ่าน</h2>
    <div class="content">
      <table class="form">
        <tbody>
            <tr>
          <td><span class="required">*</span> Username:</td>
          <td><input type="text"  name="username" value="" class="form-control"></td>
          <td><div id="btnCheck" style="position:absolute; left:590px; top:925;"><img src="<?php echo logo_pic;?>btnCheck.png" width="39" height="20" border="0" style="cursor:pointer;" onclick="chkid()"></div></td>
               <!-- <div style="position:absolute; top:830px; left:600px;">
    	 
    </div>-->
               
            
            </tr>
            
            <tr>
          <td><span class="required">*</span> Password:</td>
          <td><input type="password" name="password" value="" class="form-control">
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> Password Confirm:</td>
          <td><input type="password" name="confirm" value="" class="form-control">
            </td>
        </tr>
        
        <tr>
          <td><span class="required">*</span> Profile Image:</td>
          
          <td>
                   
             
                 <div class="picedit_box" name="profile_pic">
    <!-- Placeholder for messaging -->
    <div class="picedit_message">
    	 <span class="picedit_control ico-picedit-close" data-action="hide_messagebox"></span>
        <div></div>
    </div>
    <!-- Picedit navigation -->
    <div class="picedit_nav_box picedit_gray_gradient">
    	<div class="picedit_pos_elements"></div>
       <div class="picedit_nav_elements">
			<!-- Picedit button element begin -->
			<div class="picedit_element">
           	 <span class="picedit_control picedit_action ico-picedit-pencil" title="Pen Tool"></span>
             	 <div class="picedit_control_menu">
               	<div class="picedit_control_menu_container picedit_tooltip picedit_elm_3">
                    <label class="picedit_colors">
                      <span title="Black" class="picedit_control picedit_action picedit_black active" data-action="toggle_button" data-variable="pen_color" data-value="black"></span>
                      <span title="Red" class="picedit_control picedit_action picedit_red" data-action="toggle_button" data-variable="pen_color" data-value="red"></span>
                      <span title="Green" class="picedit_control picedit_action picedit_green" data-action="toggle_button" data-variable="pen_color" data-value="green"></span>
                    </label>
                    <label>
                    	<span class="picedit_separator"></span>
                    </label>
                    <label class="picedit_sizes">
                      <span title="Large" class="picedit_control picedit_action picedit_large" data-action="toggle_button" data-variable="pen_size" data-value="16"></span>
                      <span title="Medium" class="picedit_control picedit_action picedit_medium" data-action="toggle_button" data-variable="pen_size" data-value="8"></span>
                      <span title="Small" class="picedit_control picedit_action picedit_small" data-action="toggle_button" data-variable="pen_size" data-value="3"></span>
                    </label>
                  </div>
               </div>
           </div>
           <!-- Picedit button element end -->
			<!-- Picedit button element begin -->
			<div class="picedit_element">
				<span class="picedit_control picedit_action ico-picedit-insertpicture" title="Crop" data-action="crop_open"></span>
           </div>
           <!-- Picedit button element end -->
			<!-- Picedit button element begin -->
			<div class="picedit_element">
           	 <span class="picedit_control picedit_action ico-picedit-redo" title="Rotate"></span>
             	 <div class="picedit_control_menu">
               	<div class="picedit_control_menu_container picedit_tooltip picedit_elm_1">
                    <label>
                      <span>90° CW</span>
                      <span class="picedit_control picedit_action ico-picedit-redo" data-action="rotate_cw"></span>
                    </label>
                    <label>
                      <span>90° CCW</span>
                      <span class="picedit_control picedit_action ico-picedit-undo" data-action="rotate_ccw"></span>
                    </label>
                  </div>
               </div>
           </div>
           <!-- Picedit button element end -->
           <!-- Picedit button element begin -->
            <div class="picedit_element">
           	 <span class="picedit_control picedit_action ico-picedit-arrow-maximise" title="Resize"></span>
             	 <div class="picedit_control_menu">
               	<div class="picedit_control_menu_container picedit_tooltip picedit_elm_2">
                    <label>
						<span class="picedit_control picedit_action ico-picedit-checkmark" data-action="resize_image"></span>
						<span class="picedit_control picedit_action ico-picedit-close" data-action=""></span>
                    </label>
                    <label>
                      <span>Width (px)</span>
                      <input type="text" class="picedit_input" data-variable="resize_width" value="0">
                    </label>
                    <label class="picedit_nomargin">
                    	<span class="picedit_control ico-picedit-link" data-action="toggle_button" data-variable="resize_proportions"></span>
                    </label>
                    <label>
                      <span>Height (px)</span>
                      <input type="text" class="picedit_input" data-variable="resize_height" value="0">
                    </label>
                  </div>
               </div>
           </div>
           <!-- Picedit button element end -->
       </div>
	</div>
	<!-- Picedit canvas element -->
	<div class="picedit_canvas_box">
		<div class="picedit_painter">
			<canvas></canvas>
		</div>
		<div class="picedit_canvas">
			<canvas></canvas>
		</div>
		<div class="picedit_action_btns active">
          <div class="picedit_control ico-picedit-picture" data-action="load_image"></div>
          <div class="picedit_control ico-picedit-camera" data-action="camera_open"></div>
          <div class="center">or copy/paste image here</div>
		</div>
	</div>
	<!-- Picedit Video Box -->
	<div class="picedit_video">
    	<video autoplay=""></video>
		<div class="picedit_video_controls">
			<span class="picedit_control picedit_action ico-picedit-checkmark" data-action="take_photo"></span>
			<span class="picedit_control picedit_action ico-picedit-close" data-action="camera_close"></span>
		</div>
    </div>
    <!-- Picedit draggable and resizeable div to outline cropping boundaries -->
    <div class="picedit_drag_resize">
    	<div class="picedit_drag_resize_canvas"></div>
		<div class="picedit_drag_resize_box">
			<div class="picedit_drag_resize_box_corner_wrap">
           	<div class="picedit_drag_resize_box_corner"></div>
			</div>
			<div class="picedit_drag_resize_box_elements">
				<span class="picedit_control picedit_action ico-picedit-checkmark" data-action="crop_image"></span>
				<span class="picedit_control picedit_action ico-picedit-close" data-action="crop_close"></span>
			</div>
       </div>
    </div>
</div>
                 
                 
                 
                  
               
              
            </td>
        </tr>
      </tbody></table>
    </div>
   
        <div class="buttons">
      
            <input type="submit" name="btnsave" value="สมัครสมาชิก" class="button">
      
    </div>
      </form>
 <?php echo form_close();?>
  </div>

<div class="clear"></div>


</div>
</div>





<!--Footer Part-->

<footer>

   
    <div class="powered-main" style="background-color: #666">
    <div id="powered">
       
          <div style="font-size:11px; padding-bottom: 30px;color: #eee;" align="center">
              <a href="#" style="color: greenyellow" >TBShop.com</a>
                        เว็บไซต์ให้บริการ <b>เปิดร้านค้าออนไลน์ฟรี</b> ด้วยการตกแต่งร้านค้าแนวใหม่ พร้อมระบบหลังร้าน ไม่จำกัดพื้นที่เว็บ ไม่จำกัดจำนวนสินค้า พร้อมทีมงานช่วยเหลือทุกวัน <a href="#" style="color: lawngreen">สร้างเว็บขายของฟรี</a>
			
		</div>
    
</div>

</div>
       
</footer>
<!--Footer Part End-->

</div>



<iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" style="display: none;"></iframe>
<script src="<?php echo BI2_URL;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>picedit.min.js"></script>

<script type="text/javascript">
	$(function() {
		$('.picedit_box').picEdit({
			imageUpdated: function(img){
			},
			formSubmitted: function(){
                         
			},
			redirectUrl: false,
            defaultImage: false
		});
	});
</script>



</body>


</html>