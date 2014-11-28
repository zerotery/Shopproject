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
  font-family: "Lato","Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.42857143;
  brackgound:#000000; 
  background:url("<?php echo logo_pic;?>bg.jpg") no-repeat center center fixed;
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
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('member_tb/changelangreg/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">English</a></li>
          <li><a href="<?php echo site_url('member_tb/changelangreg/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">Thai</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<div class="container">

      <div class="page-header">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1><font style="color:#FF4000;"><?=$this->lang->line("reg_account");?></font></h1>
            <p style="color:#FF4000;"><?=$this->lang->line("reg_s");?> <a href="<?php echo site_url('backshop');?>"><?=$this->lang->line("reg_login");?></a>.</p>
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
              <form class="form-horizontal" id="regform" action="#" method="post" enctype="multipart/form-data">
                <fieldset >
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
                      
                      <font id="tick" color="66CCFF" style="font-weight:bold; font-size:15px;"><?=$this->lang->line("username_ok");?></font>
                      <font id="cross" color="#FF0000" style="font-weight:bold; font-size:15px;"><?=$this->lang->line("username_no");?></font>
                      
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

                  <div class="form-group">
                    <label for="inputphoto" class="col-lg-2 control-label"><?=$this->lang->line("profile_img");?></label>
                    <div class="col-lg-4">
                      <form id="form1" runat="server">
                      <input type='file' id="imgInp" />
                      <img id="blah" src="<?php echo logo_pic;?>1.jpg" alt="your image" />
                      </form>

                      
                    </div>
                  </div>
                  <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary"><?=$this->lang->line("submit");?></button>
                      <button class="btn btn-default"><?=$this->lang->line("cancel");?></button>
                      
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

<script>
  function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
</script>


<script type="text/javascript" src="<?php echo JS_URL;?>jquery.validate.min.js"></script>

<script>



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
      rangelength: [6, 8]
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
      rangelength: "<?php echo "<font color='red'>".$this->lang->line("error_charusername")."</font>"; ?>" 
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






</script>

<script>

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
  }else{
  $('#username').css('border', '3px #090 solid');
  $('#cross').hide();
  $('#tick').fadeIn();
       }

}
});
}
}

</script>














</body>


</html>