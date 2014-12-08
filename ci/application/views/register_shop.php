<html>
    
<head>
<title>TB Shop - Shop Registration</title>
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
  background:url("<?php echo logo_pic;?>regs_bg.jpg") no-repeat center center fixed;
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
            
             <div class="well bs-component transboxregs" >
              <form class="form-horizontal" action="<?php echo site_url('member_tb/test_category'); ?>" method="post" enctype="multipart/form-data" id="regshop" name="regshop">
                <fieldset >

                  <div class="page-header">
                  <h3 id="formpersonal"><?=$this->lang->line("spersonal");?></h3>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputsname" class="col-lg-2 control-label"><?=$this->lang->line("s_name");?></label>
                    
                    <div class="col-lg-5">
                      <input type="text" id="sne" class="form-control" name="shopname_en" data-animation="false" data-easein="bounceInUp" data-toggle="popover" data-trigger="hover" data-content="My popover content.">
                    </div>
                    <label for="inputslang"  class="col-lg-0.7 control-label" ><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></label>
                   

                  </div>
                 
                  <div class="form-group">
                    <label for="inputsname" class="col-lg-2 control-label"></label>
                    
                    <div class="col-lg-5">
                      <input type="text" class="form-control" name="shopname_th" value="">
                    </div>
                    <label for="inputlang" class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></label>

                  </div>


                  <div class="form-group">
                    <label for="inputurl" class="col-lg-2 control-label"><?=$this->lang->line("url_name");?></label>
                    <div class="col-lg-2.5">
                      <label for="inputurl" class="col-lg-2 control-label">www.myaday.net/Project/TBShop/</label>
                    </div>
                    <div class="col-lg-3">
                      <input type="text" class="form-control" name="urlname" value="">
                    </div>
                    <div class="col-lg-1">
                      <label for="inputcom" class="col-lg-0.6 control-label">.com </label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"><?=$this->lang->line("s_type");?></label>
                    <div class="col-lg-3">
                    <select name="category" class="form-control">
                    <?php 

                      foreach( $cate as $value){ 
                      echo "<option value=\"$value->shop_name_type\">".$value->shop_name_type."</option>";}
                    ?>
                        
                    </select>
                   
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"><?=$this->lang->line("shop_detail");?></label>
                    <div class="col-lg-5">
                      <textarea rows="3" cols="60" class="form-control" name="shopdetail_en"></textarea>
                    </div>
                    <label for="inputslang" class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></label>
                  </div>

                  <div class="form-group">
                    <label for="inputadress" class="col-lg-2 control-label"></label>
                    <div class="col-lg-5">
                      <textarea rows="3" cols="60" class="form-control" name="shopdetail_th"></textarea>
                    </div>
                    <label for="inputslang" class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></label>

                  </div>
                  <div class="form-group">
                    <label for="inputusername" class="col-lg-2 control-label"><?=$this->lang->line("s_fanpage");?></label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" name="fanpageshop" value="">
                    </div>
                  </div>
                 

                  <div class="page-header">
                  <h3 id="formusername"><?=$this->lang->line("decorate");?></h3>
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
                                <div  class="modal animated pulse" data-easein="pulse" data-easeout="rollOut"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <div class="modal animated pulse" data-easein="pulse" data-easeout="rollOut" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <div class="fileinput-new thumbnail" style="width: 168px; height: 168px; " >
                          <img src="<?php echo logo_pic;?>avatar.png" class="img-responsive">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="width: 168px; height: 168px; line-height: 150px;"></div>
                        <div>
                          <span class="btn btn-success btn-file"><span class="fileinput-new" ><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists" ><?=$this->lang->line("change_pic");?></span><input type="file" name="select_img"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                        </div>
                      </div>
                    </div>
                  </div> 
                   
                  <!-- end Choose profile -->
                    
                    <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("bg_pic");?></label>
                    <div class="col-lg-2">

                     <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-responsive" style="width: 168px; height: 168px; " >
                          <img src="<?php echo logo_pic;?>pic_large.png" class="img-responsive" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 1366px; max-height: 768px;"></div>
                        <div>
                          <span class="btn btn-success btn-file"><span class="fileinput-new"><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists"><?=$this->lang->line("change_pic");?></span><input type="file" name="select_img"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("header_pic");?></label>
                    <div class="col-lg-2">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-responsive" style="width: 168px; height: 168px; ">
                          <img src="<?php echo logo_pic;?>pic_large.png" class="img-responsive" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 1366px; max-height: 768px;"></div>
                        <div>
                          <span class="btn btn-success btn-file"><span class="fileinput-new"><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists"><?=$this->lang->line("change_pic");?></span><input type="file" name="select_img"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                        </div>
                      </div>
                    </div>
                  </div>


                  
                  <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary"><?=$this->lang->line("submit");?></button>
                      <button class="btn btn-default" type="reset"><?=$this->lang->line("cancel");?></button>
                      
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

$("#regshop").validate({
  rules: {
    shopname_en: {
      required: true,
      regex: /^([a-zA-Z0-9]|[-_])+$/
    },
    shopname_th: {
      required: true,
      regex: /^([ก-๙0-9]|[-_])+$/
    },
    urlname: {
      required: true,
      regex: /^([a-zA-Z0-9])+$/,
      rangelength: [2, 10]
    },
    shopdetail_en: {
      required: true,
      regex: /^([a-zA-Z0-9]|[-_])+$/
      
    },
    shopdetail_th: {
      required: true,
      regex: /^([ก-๙0-9]|[-_])+$/
    },
    fanpageshop: {
      required: true,
    }

  },
  messages: {
    shopname_en: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_emptyshop")."</font>";?>",
      regex: "<?php echo "<font color='red'>".$this->lang->line("error_shopnameen")."</font>";?>"
      
    },
    shopname_th: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_emptyshop")."</font>";?>",
      regex: "<?php echo "<font color='red'>".$this->lang->line("error_shopnameth")."</font>";?>"
      
    },
    urlname: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>",
      regex: "<?php echo "<font color='red'>".$this->lang->line("error_url")."</font>";?>"
       
    },
    shopdetail_en: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>",
      regex: "<?php echo "<font color='red'>".$this->lang->line("error_shopnameen")."</font>";?>"
      
    },
    shopdetail_th: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>",
      regex: "<?php echo "<font color='red'>".$this->lang->line("error_shopnameth")."</font>";?>"
      
    },
    fanpageshop: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_empty")."</font>";?>"
    }
  }


});
</script>

</body>


</html>