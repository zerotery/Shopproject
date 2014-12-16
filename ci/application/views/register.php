<html>
    
<head>
<title>TB Shop - Registration</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">

<meta http-equiv="Content-Type" content="text/html ; charset=utf-8">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>fileinput.min.css">




<style type="text/css">
  body {
  font-family: "Lato","Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.42857143;
  brackgound:#000000; 
  background:url("<?php echo logo_pic;?>reg_bg.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  #cropContainerHeader {
      width: 200px;
      height: 150px;
      position:relative; /* or fixed or absolute */
  }
#username{
  padding:3px;
  font-size:18px;
  border:3px #CCC solid;
}

#tick{display:none}
#cross{display:none}

</style>



</head>

<body>

<?php echo $this->load->view('header/navbar_nlog')?>

<div class="container">

      <div class="page-header">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1><font style="color:#00CD00;"><?=$this->lang->line("reg_account");?></font></h1>
            <p style="color:black;"><?=$this->lang->line("reg_s");?></p> <p><a href="<?php echo site_url('backshop');?> "><?=$this->lang->line("reg_login");?></a></p>
          </div>
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
      </div>

       

      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">
            
             <div class="well bs-component transboxreg " >
              <form class="form-horizontal" id="regform" name="regform" action="<?php echo site_url('member_tb/submit_data'); ?>" method="post" enctype="multipart/form-data">
                <fieldset >

                 <div class="page-header">
                  <h3 id="formpersonal"><?=$this->lang->line("profile_img");?></h3>
                  </div>


                 <div class="form-group animated fadeInDown" >
                    <label  class="col-lg-2 control-label"><?=$this->lang->line("profile_select");?></label>
                    <div class="col-lg-2 ">

                     <div class="fileinput fileinput-new " data-provides="fileinput" id="profilepop" data-toggle="popover" data-trigger="hover " data-placement="top" data-content="<?=$this->lang->line("profile_size");?>" >
                        <div class="fileinput-new thumbnail" style="width: 180px; height: 180px; " >
                          <img src="<?php echo logo_pic;?>defaulfuse.png" class="img-responsive" style="width: 180px; height: 180px; ">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-responsive" style="width: 180px; height: 180px; " ></div>
                        <div>

                          <span class="btn btn-success btn-file"><span class="fileinput-new" ><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists" ><?=$this->lang->line("change_pic");?></span><input type="file" name="imgpro"></span>

                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <font color="white"><?php if($error=="error"){echo $this->lang->line("error_pic");}?></font>
                    </div>
                  </div> 



                  <div class="page-header">
                  <h3 id="formpersonal"><?=$this->lang->line("personal");?></h3>
                  </div>
                  <div class="form-group">
                    <label for="inputfname" class="col-lg-2 control-label"><?=$this->lang->line("f_name");?></label>
                    <div class="col-lg-6">
                      <input type="text" id="fname" class="form-control" name="firstname"  value="">
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
                      <input type="email" id="email" class="form-control" name="email" value="">
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
                      <input type="text" class="form-control" name="province" value="">
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
                      <input type="text" class="form-control" name="username" value="" id="username">
                      
                    </div>
                    <div class="col-lg-4">
                      
                      
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputpassword" class="col-lg-2 control-label"><?=$this->lang->line("password");?></label>
                    <div class="col-lg-4">
                      <input type="password" id="password" name="password" value="" class="form-control">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputpasswordre" class="col-lg-2 control-label"><?=$this->lang->line("password_c");?></label>
                    <div class="col-lg-4">
                      <input type="password" name="passwordre" value="" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2"></div>
                  <div class="form-group">
                  <div class="col-lg-4">
                      <button type="submit" class="btn btn-primary" id="btu_submit"><?=$this->lang->line("submit");?></button>
                      <button class="btn btn-default" type="reset" id="btu_reset" ><?=$this->lang->line("cancel");?></button>
                      
            </div>
            </div>

                   </fieldset>
              </form>
              </div>



          </div>
      </div>
                  
         

         


    </div>
</div>

 <?php echo $this->load->view('footer/footer')?>
                      


      







<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
<script src="<?php echo JS_URL;?>bootstrap.js"></script>
<script type="text/javascript" src="<?php echo JS_URL;?>jquery.validate.min.js"></script>

<script>
var check_u = " ";

 $.validator.addMethod(
        "username_check", 
        function(value, element) {
         if (check_u=="error") {
        return false;  // FAIL validation when REGEX matches
        } else if(check_u=="pass"){
        return true;   // PASS validation otherwise
        };
      }, "username can't use!!!"
            
    );

$.validator.addMethod(
       "regex",
        function(value, element, regexp) {
        var check = false;
        return this.optional(element) || regexp.test(value);
        },
        "Please check your input."
        );

$("#regform").validate({
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

    },
    username: {
      required: true,
      regex: /^([a-zA-Z0-9]|[-_])+$/,
      rangelength: [6, 8],
      username_check: true
    },
    password: {
      required: true,
    },
    passwordre: {
      required: true,
      equalTo: "#password"
      
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
    },
    username: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>",
      regex: "<?php echo "<font color='red'>".$this->lang->line("error_username")."</font>";?>",
      rangelength: "<?php echo "<font color='red'>".$this->lang->line("error_charusername")."</font>"; ?>",
      username_check: "<?php echo "<font color='red'>".$this->lang->line("error_haveusername")."</font>"; ?>"
    },
    password: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>"
    },
    passwordre:{
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>",
      equalTo: "<?php echo "<font color='red'>".$this->lang->line("error_repassword")."</font>";?>"
    }

  }


});

$(document).ready(function(){
$('#username').keyup(username_check);
});
  
function username_check(){  
var username = $('#username').val();
if(username == "" || username.length < 4){
$('#username').css('border', '3px #CCC solid');
$('#tick').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "<?php echo site_url();?>member_tb/checkusername/",
   data: 'username='+ username,
   cache: false,
   success: function(response){
if(response == 1){
  $('#username').css('border', '3px #C33 solid'); 
  $('#tick').hide();
  $('#cross').fadeIn();
  check_u="error";
  }else{
  $('#username').css('border', '3px #090 solid');
  $('#cross').hide();
  $('#tick').fadeIn();
  check_u="pass";
  }

}
});
}
}




</script>

</body>


</html>