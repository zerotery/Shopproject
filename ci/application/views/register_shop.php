<html>
    
<head>
<title>TB Shop - Shop Registration</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>favicon.ico">

<meta http-equiv="Content-Type" content="text/html ; charset=utf-8">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">

<style type="text/css">
  body {
  font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.42857143;
  brackgound:#000000; 
  background:url("<?php echo logo_pic;?>bg_login.jpg") no-repeat center center fixed;
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
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">MENU<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">MENU 1</a></li>
          <li><a href="#">MENU 2</a></li>
          <li><a href="#">MENU 3</a></li>
          <li class="divider"></li>
          <li class="dropdown-header"><font color="white">BACK SHOP</font></li>
          <li><a href="#">MENU 4</a></li>
          <li><a href="#">MENU 5</a></li>
        </ul>


      </li>
       <ul class="nav navbar-nav">
      
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("login");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp<?php echo $user; ?></span></a></li>
        </ul>
      </li>
    </ul>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>

       

        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('member_tb/changelangshopreg/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">English</a></li>
          <li><a href="<?php echo site_url('member_tb/changelangshopreg/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">Thai</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('member_tb/logout');?>"><span class="glyphicon glyphicon-off" >&nbspLogout</span></a>
      </li>
    </ul>
  </div>
</div>

<div class="container">

      <div class="page-header">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1><font style="color:#FF4000;"><?=$this->lang->line("sreg_account");?></font></h1>
            
          </div>
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
      </div>
      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">
            
             <div class="well bs-component" style="background-color:#336699;">
              <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                <fieldset >
                  <div class="page-header">
                  <h3 id="formpersonal"><?=$this->lang->line("spersonal");?></h3>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputfname" class="col-lg-2 control-label"><?=$this->lang->line("s_name");?></label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" name="shopname" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("url_name");?></label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" name="urlname" value="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"><?=$this->lang->line("s_type");?></label>
                    <div class="col-lg-3">
                      <select select class="form-control" id="select" name="shoptype">
                      <option value="" selected>--- เลือกหมวดหมู่ร้านค้า ---</option>
                      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                      <option value="กระบี่">กระบี่ </option>
                      <option value="กาญจนบุรี">กาญจนบุรี </option>
                      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                      <option value="กำแพงเพชร">กำแพงเพชร </option>
                      <option value="ขอนแก่น">ขอนแก่น</option>
                      <option value="จันทบุรี">จันทบุรี</option>
                      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                      <option value="ชัยนาท">ชัยนาท </option>
                      <option value="ชัยภูมิ">ชัยภูมิ </option>
                      <option value="ชุมพร">ชุมพร </option>
                      <option value="ชลบุรี">ชลบุรี </option>
                      <option value="เชียงใหม่">เชียงใหม่ </option>
                      <option value="เชียงราย">เชียงราย </option>
                      <option value="ตรัง">ตรัง </option>
                      <option value="ตราด">ตราด </option>
                      <option value="ตาก">ตาก </option>
                      <option value="นครนายก">นครนายก </option>
                      <option value="นครปฐม">นครปฐม </option>
                      <option value="นครพนม">นครพนม </option>
                      <option value="นครราชสีมา">นครราชสีมา </option>
                      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                      <option value="นครสวรรค์">นครสวรรค์ </option>
                      <option value="นราธิวาส">นราธิวาส </option>
                      <option value="น่าน">น่าน </option>
                      <option value="นนทบุรี">นนทบุรี </option>
                      <option value="บึงกาฬ">บึงกาฬ</option>
                      <option value="บุรีรัมย์">บุรีรัมย์</option>
                      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                      <option value="ปทุมธานี">ปทุมธานี </option>
                      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                      <option value="ปัตตานี">ปัตตานี </option>
                      <option value="พะเยา">พะเยา </option>
                      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                      <option value="พังงา">พังงา </option>
                      <option value="พิจิตร">พิจิตร </option>
                      <option value="พิษณุโลก">พิษณุโลก </option>
                      <option value="เพชรบุรี">เพชรบุรี </option>
                      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                      <option value="แพร่">แพร่ </option>
                      <option value="พัทลุง">พัทลุง </option>
                      <option value="ภูเก็ต">ภูเก็ต </option>
                      <option value="มหาสารคาม">มหาสารคาม </option>
                      <option value="มุกดาหาร">มุกดาหาร </option>
                      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                      <option value="ยโสธร">ยโสธร </option>
                      <option value="ยะลา">ยะลา </option>
                      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                      <option value="ระนอง">ระนอง </option>
                      <option value="ระยอง">ระยอง </option>
                      <option value="ราชบุรี">ราชบุรี</option>
                      <option value="ลพบุรี">ลพบุรี </option>
                      <option value="ลำปาง">ลำปาง </option>
                      <option value="ลำพูน">ลำพูน </option>
                      <option value="เลย">เลย </option>
                      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                      <option value="สกลนคร">สกลนคร</option>
                      <option value="สงขลา">สงขลา </option>
                      <option value="สมุทรสาคร">สมุทรสาคร </option>
                      <option value="สมุทรปราการ">สมุทรปราการ </option>
                      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                      <option value="สระแก้ว">สระแก้ว </option>
                      <option value="สระบุรี">สระบุรี </option>
                      <option value="สิงห์บุรี">สิงห์บุรี </option>
                      <option value="สุโขทัย">สุโขทัย </option>
                      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                      <option value="สุรินทร์">สุรินทร์ </option>
                      <option value="สตูล">สตูล </option>
                      <option value="หนองคาย">หนองคาย </option>
                      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                      <option value="อุดรธานี">อุดรธานี </option>
                      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                      <option value="อุทัยธานี">อุทัยธานี </option>
                      <option value="อุบลราชธานี">อุบลราชธานี</option>
                      <option value="อ่างทอง">อ่างทอง </option>
                      <option value="อื่นๆ">อื่นๆ</option>
                  </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"><?=$this->lang->line("shop_detail");?></label>
                    <div class="col-lg-5">
                      <textarea name="address" rows="3" cols="60" class="form-control" name="shopdetail"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputusername" class="col-lg-2 control-label"><?=$this->lang->line("s_fanpage");?></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="fanpageshop" value="">
                    </div>
                  </div>
                  <div class="page-header">
                  <h3 id="formaddress"><?=$this->lang->line("s_address");?></h3>
                  </div>
                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"><?=$this->lang->line("address_d");?></label>
                    <div class="col-lg-5">
                      <textarea name="shopaddress" rows="1" cols="30" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"><?=$this->lang->line("province");?></label>
                    <div class="col-lg-3">
                      <select select class="form-control" id="select" name="shopprovince">
                      <option value="" selected>--------- เลือกจังหวัด ---------</option>
                      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                      <option value="กระบี่">กระบี่ </option>
                      <option value="กาญจนบุรี">กาญจนบุรี </option>
                      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                      <option value="กำแพงเพชร">กำแพงเพชร </option>
                      <option value="ขอนแก่น">ขอนแก่น</option>
                      <option value="จันทบุรี">จันทบุรี</option>
                      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                      <option value="ชัยนาท">ชัยนาท </option>
                      <option value="ชัยภูมิ">ชัยภูมิ </option>
                      <option value="ชุมพร">ชุมพร </option>
                      <option value="ชลบุรี">ชลบุรี </option>
                      <option value="เชียงใหม่">เชียงใหม่ </option>
                      <option value="เชียงราย">เชียงราย </option>
                      <option value="ตรัง">ตรัง </option>
                      <option value="ตราด">ตราด </option>
                      <option value="ตาก">ตาก </option>
                      <option value="นครนายก">นครนายก </option>
                      <option value="นครปฐม">นครปฐม </option>
                      <option value="นครพนม">นครพนม </option>
                      <option value="นครราชสีมา">นครราชสีมา </option>
                      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                      <option value="นครสวรรค์">นครสวรรค์ </option>
                      <option value="นราธิวาส">นราธิวาส </option>
                      <option value="น่าน">น่าน </option>
                      <option value="นนทบุรี">นนทบุรี </option>
                      <option value="บึงกาฬ">บึงกาฬ</option>
                      <option value="บุรีรัมย์">บุรีรัมย์</option>
                      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                      <option value="ปทุมธานี">ปทุมธานี </option>
                      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                      <option value="ปัตตานี">ปัตตานี </option>
                      <option value="พะเยา">พะเยา </option>
                      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                      <option value="พังงา">พังงา </option>
                      <option value="พิจิตร">พิจิตร </option>
                      <option value="พิษณุโลก">พิษณุโลก </option>
                      <option value="เพชรบุรี">เพชรบุรี </option>
                      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                      <option value="แพร่">แพร่ </option>
                      <option value="พัทลุง">พัทลุง </option>
                      <option value="ภูเก็ต">ภูเก็ต </option>
                      <option value="มหาสารคาม">มหาสารคาม </option>
                      <option value="มุกดาหาร">มุกดาหาร </option>
                      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                      <option value="ยโสธร">ยโสธร </option>
                      <option value="ยะลา">ยะลา </option>
                      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                      <option value="ระนอง">ระนอง </option>
                      <option value="ระยอง">ระยอง </option>
                      <option value="ราชบุรี">ราชบุรี</option>
                      <option value="ลพบุรี">ลพบุรี </option>
                      <option value="ลำปาง">ลำปาง </option>
                      <option value="ลำพูน">ลำพูน </option>
                      <option value="เลย">เลย </option>
                      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                      <option value="สกลนคร">สกลนคร</option>
                      <option value="สงขลา">สงขลา </option>
                      <option value="สมุทรสาคร">สมุทรสาคร </option>
                      <option value="สมุทรปราการ">สมุทรปราการ </option>
                      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                      <option value="สระแก้ว">สระแก้ว </option>
                      <option value="สระบุรี">สระบุรี </option>
                      <option value="สิงห์บุรี">สิงห์บุรี </option>
                      <option value="สุโขทัย">สุโขทัย </option>
                      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                      <option value="สุรินทร์">สุรินทร์ </option>
                      <option value="สตูล">สตูล </option>
                      <option value="หนองคาย">หนองคาย </option>
                      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                      <option value="อุดรธานี">อุดรธานี </option>
                      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                      <option value="อุทัยธานี">อุทัยธานี </option>
                      <option value="อุบลราชธานี">อุบลราชธานี</option>
                      <option value="อ่างทอง">อ่างทอง </option>
                      <option value="อื่นๆ">อื่นๆ</option>
                  </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("postcode");?></label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" name="postcode" value="">
                    </div>
                  </div>

                  <div class="page-header">
                  <h3 id="formusername"><?=$this->lang->line("modify");?></h3>
                  </div>


                  
                  <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label" name="theme"><?=$this->lang->line("theme");?></label>
                    <!-- Choose theme -->
                   
                    <div class="col-lg-6">
                      <div class="btn-group" data-toggle="buttons">
                        <div class="col-lg-10">
                          <div class="row">
                          
                          <!-- Theme 1-->
                          <div class="col-xs-6 col-md-10">
                          
                                <label class="btn btn-success">
                              <input type="radio" name="options" id="option1" autocomplete="off" ><?=$this->lang->line("theme_s1");?>
                            </label>
                            <img src="<?php echo logo_pic;?>pic.png" class="thumbnail img-responsive" data-toggle="modal" data-target="#myModal" ></a> 


                               <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                      </div>
                                      <div class="modal-body">
                                          <img src="<?php echo logo_pic;?>pic.png" class="thumbnail img-responsive" data-toggle="modal" data-target="#myModal" ></a> 

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                             
                              
                            

                             <!-- end Theme1 -->
                             <!--theme2 -->
                          <div class="col-xs-6 col-md-10">
                          <label class="btn btn-success">
                              <input type="radio" name="options" id="option2" autocomplete="off"><?=$this->lang->line("theme_s2");?>
                            </label>
                                  
                            <img src="<?php echo logo_pic;?>pic.png" class="thumbnail img-responsive" data-toggle="modal" data-target="#myModal2" ></a>

                               <!-- Modal -->
                                <div class="modal fade " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title2</h4>
                                      </div>
                                      <div class="modal-body">
                                         <img src="<?php echo logo_pic;?>pic.png" class="thumbnail img-responsive" data-toggle="modal" data-target="#myModal" ></a> 

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        
                                      </div>


                                    </div>
                                   </div>
                                </div>
                              
                             


                          </div>

                          
                            

                             </div>
                             <!-- end Theme 2-->
                             </div>
                            </div>
                          </div>
                    </div>
                  
                       
                       <!-- end Choose theme --> 
                          <!-- Choose profile -->                         
                             <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("shopprofile");?></label>
                    <div class="col-lg-2">

                     <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-responsive" >
                          <img src="<?php echo logo_pic;?>avatar.png" class="img-responsive" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 1366px; max-height: 768px;"></div>
                        <div>
                          <span class="btn btn-success btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="select_img"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>   
                   
                  <!-- end Choose profile -->
                    
                    <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("bg_pic");?></label>
                    <div class="col-lg-2">

                     <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-responsive" >
                          <img src="<?php echo logo_pic;?>pic_large.png" class="img-responsive" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 1366px; max-height: 768px;"></div>
                        <div>
                          <span class="btn btn-success btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="select_img"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("header_pic");?></label>
                    <div class="col-lg-2">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-responsive" >
                          <img src="<?php echo logo_pic;?>pic_large.png" class="img-responsive" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 1366px; max-height: 768px;"></div>
                        <div>
                          <span class="btn btn-success btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="select_img"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>                 
                  
                  <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button class="btn btn-default">Cancel</button>
                      
                  </div>

                  </div>
                </fieldset>
              </form>
            </div>
          </div>
      </div>
      </div>

</div>
      





<footer>

   
    <div class="powered-main" style="background-color: #FF4000">
    <div id="powered">
       
          <div style="font-size:11px; padding-bottom: 30px;color: #eee;" align="center">
              <a href="#" style="color: greenyellow" ><?=$this->lang->line("footer");?></a>
                        <?=$this->lang->line("footer1");?><b><?=$this->lang->line("footer2");?></b><?=$this->lang->line("footer3");?><a href="#" style="color: lawngreen"><?=$this->lang->line("footer4");?></a>
			
		</div>
    
    </div>

</div>
       
</footer>












<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
<script src="<?php echo JS_URL;?>bootstrap.js"></script>

</body>


</html>