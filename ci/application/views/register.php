<html>
    
<head>
<title>TB Shop - Registration</title>
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
  color: #ebebeb;
  background-color: #2b3e50;
  }
</style>
</head>

<body>

<div class="navbar navbar-default navbar-fixed-top">
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
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('member_reg/changelangreg/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">English</a></li>
          <li><a href="<?php echo site_url('member_reg/changelangreg/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">Thai</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<div class="container">

      <div class="page-header">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1><?=$this->lang->line("reg_account");?></h1>
            <p><?=$this->lang->line("reg_s");?> <a href="<?php echo site_url('backshop');?>"><?=$this->lang->line("reg_login");?></a>.</p>
          </div>
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
      </div>
      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">
            
             <div class="well bs-component">
              <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                <fieldset>
                  <div class="page-header">
                  <h3 id="formpersonal"><?=$this->lang->line("personal");?></h3>
                  </div>
                  <div class="form-group">
                    <label for="inputfname" class="col-lg-2 control-label"><?=$this->lang->line("f_name");?></label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="firstname" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("l_name");?></label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="lastname" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputemail" class="col-lg-2 control-label"><?=$this->lang->line("email");?></label>
                    <div class="col-lg-6">
                      <input type="email" class="form-control" name="email" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputlicense" class="col-lg-2 control-label"><?=$this->lang->line("license");?></label>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" name="license" value="">
                    </div>
                  </div>
                  <div class="page-header">
                  <h3 id="formaddress"><?=$this->lang->line("address");?></h3>
                  </div>
                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"><?=$this->lang->line("address_d");?></label>
                    <div class="col-lg-5">
                      <textarea name="address" rows="5" cols="60" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"><?=$this->lang->line("province");?></label>
                    <div class="col-lg-4">
                      <select select class="form-control" id="select" name="province">
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
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="postcode" value="">
                    </div>
                  </div>

                  <div class="page-header">
                  <h3 id="formusername"><?=$this->lang->line("user_pass");?></h3>
                  </div>
                  <div class="form-group">
                    <label for="inputusername" class="col-lg-2 control-label"><?=$this->lang->line("username");?></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="postcode" value="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputpassword" class="col-lg-2 control-label"><?=$this->lang->line("password");?></label>
                    <div class="col-lg-4">
                      <input type="password" name="password" value="" class="form-control">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputpasswordre" class="col-lg-2 control-label"><?=$this->lang->line("password_c");?></label>
                    <div class="col-lg-4">
                      <input type="password" name="passwordre" value="" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputphoto" class="col-lg-2 control-label"><?=$this->lang->line("profile_img");?></label>
                    <div class="col-lg-4">
                      
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

   
    <div class="powered-main" style="background-color: #666">
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