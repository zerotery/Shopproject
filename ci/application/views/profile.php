<html>
    
<head>
<title>TB Shop - My Profile</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">

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
  background:url("<?php echo logo_pic;?>bg_profile.jpg") no-repeat center center fixed;
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
          <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;<?php echo $user; ?></span></a></li>
        </ul>
      </li>
    </ul>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>

       

        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('member_tb/changelangprofile/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">English</a></li>
          <li><a href="<?php echo site_url('member_tb/changelangprofile/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">Thai</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('member_tb/logout');?>"><span class="glyphicon glyphicon-off" >&nbsp;Logout</span></a>
      </li>
    </ul>
  </div>
</div>

<div class="container">

        <div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-s">
                      
                    </div>
                    </div>
                    </div>
      <div class="bs-docs-section clearfix  ">

        <div class="row">
          <div class="col-lg-12 ">
            
             <div class=" well bs-component transbox" >
              <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                <fieldset >

                  <div class="page-header-b ">
                      <div class="row ">
                        <div class="col-lg-8 col-md-7 col-sm-6">
                          <h1><font style="color:#FF4000;" class="glyphicon glyphicon-user animated pulse ">&nbsp;<?=$this->lang->line("greet");?><span  aria-hidden="true">&nbsp;<?php echo $user; ?></span></font></h1>
                          
                          
                        </div>
                        
                      </div>
                    </div>

              <div class="well bs-component col-sm-6 col-md-4 transboxz  " >
                  <div class="form-group">
                    
                    <div class="row">
                      <div class="col-lg-1"></div>
                        <div class="col-sm-6 col-md-4 col-lg-8" align="center">
                           <div class="form-group animated fadeInUp">
                             <div class="col-lg-12">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new " >
                                    <img src="<?php echo logo_pic;?>defaulfuse.png" class="img-responsive" style="height:180px;width:180px;" >
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 180px; height: 180px;"></div>
                                  <div>
                                    <span class="btn btn-success btn-file "><span class="fileinput-new "><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists "><?=$this->lang->line("change_pic");?></span><input type="file" name="select_img"></span>
                                    <div  class="btn btn-default fileinput-exists " data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>         
                      </div>

                     
                    </div>
                     <div class="col-lg-2"></div>
                    <!-- update profile picture -->    
                       <a href="<?php echo site_url('member_tb/profile');?>"  id="change_pro"  name="changeprofile" class="btn btn-primary  animated bounce"> <?=$this->lang->line("changepic");?></a>
                          <!-- end update profile picture -->            
                                   
                    </div>
              </div>


              <div class="well bs-component   col-sm-6 col-md-4 col-lg-8">
                                      <form class="form-horizontal " id="profile" method="post" enctype="multipart/form-data">
                                        <fieldset >
                                         
                                              
                                             <div class="page-header-b ">
                                              <div class="row">
                                              <div class="col-md-11 ">
                                                 <h3 id="datamember" ><?=$this->lang->line("datamem");?></h3>
                                              </div>

                                            


                                              <div class="col-md-1">

                                                 <h3><div id="edit" class=" btn glyphicon glyphicon-pencil"  onclick="txt_default()"  ></div></h3>
                                                 <script type="text/javascript">
                                                 function txt_default() {
                                                     document.getElementById("txt").value = "<?php echo $rs['f_name']; ?>";
                                                     document.getElementById("txt2").value = "<?php echo $rs['l_name']; ?>";
                                                     document.getElementById("txt3").value = "<?php echo $rs['email']; ?>";
                                                     document.getElementById("txt4").value = "<?php echo $rs['license']; ?>";
                                                     document.getElementById("txt5").value = "<?php echo $rs['address']; ?>";
                                                
                                                    
                                                     
                                                  }
                                                 </script>
                                              </div>
                                             </div>
                                             </div>

                                                                     
                                               <div class="form-group ">
                                              <label for="inputfname" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("f_name");?></label>
                                              <div class="col-lg-6">
                                                
                                                <input type="text" id="txt" class="form-control animated fadeInDown " name="firstname"   value="<?php echo $rs['f_name']; ?>" >
                                                <span  id="fname" style="font-size:16pt"><?php echo $rs['f_name']; ?></span>

                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputlname" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("l_name");?></label>
                                              <div class="col-lg-6">
                                                
                                                <input type="text2" class="form-control animated fadeInDown" name="lastname" id="txt2" value="<?php echo $rs['l_name']; ?>">
                                                <span id="lname" style="font-size:16pt"><?php echo $rs['l_name']; ?></span>
                                                
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputemail" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("email");?></label>
                                              <div class="col-lg-6">
                                                <input type="email" id="txt3" class="form-control animated fadeInDown" name="email" value="<?php echo $rs['email']; ?>">
                                                <span id="email" style="font-size:16pt"><?php echo $rs['email']; ?></span>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputlicense" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("license");?></label>
                                              <div class="col-lg-5">
                                                <input type="text3" class="form-control animated fadeInDown" name="license" id="txt4" value="<?php echo $rs['license']; ?>" >
                                                <span id="license" style="font-size:16pt;"><?php echo $rs['license']; ?></span>
                                              </div>
                                            </div>
                                           
                                            <div class="form-group">
                                              <label for="inputadress" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("address_d");?></label>
                                              <div class="col-lg-6">

                                                <input type="text4" name="address"  id="txt5" class="form-control animated fadeInDown" value="<?php echo $rs['address']; ?>">
                                                <span id="addr" style="font-size:16pt"><?php echo $rs['address']; ?></span>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputadress" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("province");?></label>
                                              <div class="col-lg-4">
                                                <input type="text5" class="form-control animated fadeInDown" name="province" id="txt6" value="">
                                                <span id="province" style="font-size:16pt"></span>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="inputladdress" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("postcode");?></label>
                                              <div class="col-lg-4">

                                                <input type="text6" class="form-control animated fadeInDown" id="txt7" name="postcode" value="">
                                                <span id="postcode" style="font-size:16pt"></span>
                                              </div>
                                            </div>

                                           <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-2 ">
                                               <a href="<?php echo site_url('member_tb/profile');?>"><input type="submit" class="btn btn-primary animated bounce" id="btn_s" name="btsave"  value="<?=$this->lang->line("save");?>" /></a>
                                                 <span id="savable"></span>
                                                <a href="<?php echo site_url('member_tb/profile');?>"><input  type="submit" class="btn btn-default animated pulse" id="btn_c"  value="<?=$this->lang->line("cancel");?>" /></a>
                                                <span id="cancel_e"></span>
                                                
                                                
                                            </div>
                                           </div>
                                            


                                        </fieldset>
                                     </form>
                                      
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