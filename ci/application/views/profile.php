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

<?php echo $this->load->view('header/navbar_log')?>

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
             
                <fieldset >

                  <div class="page-header-b ">
                      <div class="row ">
                        <div class="col-lg-8 col-md-7 col-sm-6">
                          <h1><font style="color:#FF4000;" class="glyphicon glyphicon-user animated pulse ">&nbsp;<?=$this->lang->line("greet");?><span  aria-hidden="true">&nbsp;<?php echo $user; ?></span></font></h1>
                          
                          
                        </div>
                        
                      </div>
                    </div>

              <div class="well bs-component col-sm-6 col-md-4 transboxz  " >
              <form class="form-horizontal" action="<?php echo site_url('member_tb/changeprofile'); ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    
                    <div class="row">
                      <div class="col-lg-1"></div>
                        <div class="col-sm-6 col-md-4 col-lg-8" align="center">
                           <div class="form-group animated fadeInUp">
                             <div class="col-lg-12"><span class="fileinput-filename"></span></div>
                             <div class="col-lg-12">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new " >
                                    <img src="<?php echo upload;?><?php echo $userid."/".$namepicture.'?v='.Date("Y.m.d.G.i.s"); ?>" class="img-responsive" style="height:180px;width:180px;" >
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="width: 180px; height: 180px;"></div>
                                  <div>
                                    <span class="btn btn-success btn-file "><span class="fileinput-new "><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists "><?=$this->lang->line("change_pic");?></span><input type="file" name="update_profile"></span>
                                    <div  class="btn btn-default fileinput-exists " data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>         
                      </div>

                     
                    </div>
                     <div class="col-lg-2"></div>

                    <!-- update profile picture -->    
                       <input type="submit" id="change_pro"  name="changeprofile" class="btn btn-primary  animated bounce" value="<?=$this->lang->line("changepic");?>"> 
                          <!-- end update profile picture -->            
                                   
                    </div>
                     <div class="col-lg-2"></div>
                    <B><div class="col-lg-9" style="color:#FF0000">  <?php if($error=="error"){ echo $this->lang->line("error_picshop");}else if($error=="min"){echo $this->lang->line("error_picmin");}?></div></B>
                    </form>
              </div>



              <div class="well bs-component   col-sm-6 col-md-4 col-lg-8">
                                      <form class="form-horizontal" name="update_profile" id="profile" action="<?php echo site_url('member_tb/profile'); ?>" method="post" enctype="multipart/form-data">
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
                                                     document.getElementById("txt6").value = "<?php echo $rs['province']; ?>";
                                                     document.getElementById("txt7").value = "<?php echo $rs['postcode']; ?>";
                                                
                                                    
                                                     
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
                                                
                                                <input type="text" class="form-control animated fadeInDown" name="lastname" id="txt2" value="<?php echo $rs['l_name']; ?>">
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
                                                <input type="text" class="form-control animated fadeInDown" name="license" id="txt4" value="<?php echo $rs['license']; ?>" >
                                                <span id="license" style="font-size:16pt;"><?php echo $rs['license']; ?></span>
                                              </div>
                                            </div>
                                           
                                            <div class="form-group">
                                              <label for="inputadress" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("address_d");?></label>
                                              <div class="col-lg-6">

                                                <input type="text" name="address"  id="txt5" class="form-control animated fadeInDown" value="<?php echo $rs['address']; ?>">
                                                <span id="addr" style="font-size:16pt"><?php echo $rs['address']; ?></span>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputadress" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("province");?></label>
                                              <div class="col-lg-4">
                                                <input type="text" class="form-control animated fadeInDown" name="province" id="txt6" value="<?php echo $rs['province']; ?>">
                                                <span id="province" style="font-size:16pt"><?php echo $rs['province']; ?></span>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label for="inputladdress" class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("postcode");?></label>
                                              <div class="col-lg-4">

                                                <input type="text" class="form-control animated fadeInDown" id="txt7" name="postcode" value="<?php echo $rs['postcode']; ?>">
                                                <span id="postcode" style="font-size:16pt"><?php echo $rs['postcode']; ?></span>
                                              </div>
                                            </div>

                                           <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-2 ">
                                               <input type="submit" class="btn btn-primary animated bounce" id="btn_s" name="btsave"  value="<?=$this->lang->line("save");?>" />
                                                 <span id="savable"></span>
                                                <input  type="reset" class="btn btn-default animated pulse" id="btn_c"  value="<?=$this->lang->line("cancel");?>" />
                                                <span id="cancel_e"></span>
                                                
                                                
                                            </div>
                                           </div>
                                            


                                        </fieldset>
                                     </form>
                                      
                                   </div>
                  </fieldset>

              
            </div>
                    



          </div>
      </div>
      </div>

      <div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-f">
                      
                    </div>
                    </div>
                    </div>

</div>
      


<div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-f">
                      
                    </div>
                    </div>
                    </div>


<?php echo $this->load->view('footer/footer')?>










<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
<script src="<?php echo JS_URL;?>bootstrap.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>jquery.validate.min.js"></script>
<script>
  $("#profile").validate({
  rules: {
    firstname: {
      required: true
    },
    lastname: {
      required: true
    },
    license: {
      required: true,
      number: true,
      rangelength: [13, 13]
    },
    email: {
      required: true,
      email: true
    },
    address: {
      required: true

    },
    province: {
      required: true

    },
    postcode: {
      required: true,
      number: true,
      rangelength: [5, 5]

    }
   
    

  },
  messages: {
    firstname: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>"
    },
    lastname: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>"
    },
    license: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>",
      number: "<?php echo "<font color='red'>".$this->lang->line("error_number")."</font>"; ?>",
      rangelength: "<?php echo "<font color='red'>".$this->lang->line("error_license")."</font>"; ?>"

    },
    email: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>",
      email: "<?php echo "<font color='red'>".$this->lang->line("error_email")."</font>"; ?>"
    },
    address: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>"

    },
    province: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>"

    },
    postcode: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>",
      number: "<?php echo "<font color='red'>".$this->lang->line("error_number")."</font>"; ?>",
      rangelength: "<?php echo "<font color='red'>".$this->lang->line("error_postcode")."</font>"; ?>"
    }
    

  }


});
</script>

</body>


</html>