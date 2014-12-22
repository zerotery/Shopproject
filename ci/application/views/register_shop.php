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

<?php echo $this->load->view('header/navbar_log')?>

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
              <form class="form-horizontal" action="<?php echo site_url('member_tb/submit_shop'); ?>" method="post" enctype="multipart/form-data" id="regshop" name="regshop">
                <fieldset >

                  <div class="page-header">
                  <h3 id="formpersonal"><?=$this->lang->line("spersonal");?></h3>
                  </div>
                 
                  <div class="form-group" align="center">
                    <label for="inputsname" class="col-lg-2 col-sm-2 control-label"><?=$this->lang->line("s_name");?></label>
                    
                    <div class="col-lg-5 col-sm-5">
                      <input type="text" id="shopname_en" class="form-control " name="shopname_en"  data-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("note");?>">

                    </div>
                    <div class="col-lg-1 col-sm-1 ">
                    <label   class="col-lg-0.7 control-label" ><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></label>
                   </div>

                  </div>
                 
                  <div class="form-group" align="center">
                    <label for="inputsname" class="col-lg-2 col-sm-2 control-label"></label>
                    
                    <div class="col-lg-5 col-sm-5">
                      <input type="text" id="shopname_th" class="form-control" name="shopname_th" data-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("note2");?>">
                    </div>
                    <div class="col-lg-1 col-sm-1 ">
                    <label  class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></label>
                   </div>
                  </div>


                  <div class="form-group" align="center">
                    <label for="inputurl" class="col-lg-2 col-sm-2 control-label"><?=$this->lang->line("url_name");?></label>
                    <div class="row col-md-9 col-sm-9">
                    <div class="col-md-1 col-sm-4">

                      <label for="inputurl" class="col-lg-3 control-label">www.myaday.net/Project/TBShop/</label>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-lg-3 col-sm-3">
                      <input type="text" class="form-control" name="urlname" value="">
                    </div>
                    </div>
                    <div class="col-lg-1 col-sm-5">
                      <label for="inputcom" class="col-lg-0.6 control-label"></label>
                    </div>
                  </div>
                  
                  <div class="form-group" align="center">
                    <label  class="col-lg-2 col-sm-2 control-label"><?=$this->lang->line("s_type");?></label>
                    <div class="col-lg-3 col-sm-5">
                    <select name="category" class="form-control">
                    <?php 

                      foreach( $cate as $value){ 
                      echo "<option value=\"$value->shop_category_ID\">".$value->shop_name_type."</option>";}
                    ?>
                        
                    </select>
                   
                    </div>
                  </div>

                  <div class="form-group" align="center">
                    <label class="col-lg-2 col-sm-2 control-label"><?=$this->lang->line("shop_detail");?></label>
                    <div class="col-lg-5 col-sm-5">
                      <textarea rows="3" cols="60" class="form-control" id="sde" name="shopdetail_en" data-toggle="popover" data-trigger="hover" data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("dnote");?>"></textarea>
                    </div>
                    <div class="col-lg-1 col-sm-1 ">
                    <label for="inputslang" class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></label>
                    </div>
                  </div>

                  <div class="form-group" align="center">
                    <label  class="col-lg-2 col-sm-2 control-label"></label>
                    <div class="col-lg-5 col-sm-5">
                      <textarea rows="3" cols="60" class="form-control" name="shopdetail_th" id="sdt" data-toggle="popover" data-trigger="hover" data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("dnote2");?>"></textarea>
                    </div>
                    <div class="col-lg-1 col-sm-1 ">
                    <label  class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></label>
                    </div>
                  </div>
                  <div class="form-group" align="center">
                    <label  class="col-lg-2 col-sm-2 control-label"><?=$this->lang->line("s_fanpage");?></label>
                    <div class="col-lg-4 col-sm-5">
                      <input type="text" class="form-control" name="fanpageshop" id="fp" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?=$this->lang->line("fnote");?>" >
                    </div>
                  </div>
                 

                  <div class="page-header  ">

                  <h3  ><?=$this->lang->line("decorate");?>
                   <div id="ck" class=" btn glyphicon glyphicon-chevron-down" data-toggle="popover" data-trigger="hover " data-placement="right" data-content="<?=$this->lang->line("decnote");?>" >
                  </h3>
                  </div>
                <span id="showreg">


                  
                  <div class="form-group animated fadeInDown">
                    <label class="col-lg-2 control-label" name="theme"><?=$this->lang->line("theme");?></label>
                    <!-- Choose theme -->
                   
                    <div class="col-lg-6">
                      <div class="btn-group" data-toggle="buttons">
                        <div class="col-lg-10">
                          <div class="row">
                          
                          <!-- Theme 1-->
                          <div class="col-xs-6 col-md-10">
                          
                                <label class="btn btn-info">
                              <input type="radio" name="theme" id="theme"  value="1" checked><?=$this->lang->line("theme_s1");?>
                            </label>
                            <img src="<?php echo logo_pic;?>theme1.png" class="thumbnail img-responsive" data-toggle="modal" data-target="#myModal" style="width: 180px; height: 180px; line-height: 150px;" >


                               <!-- Modal -->
                                <div  class="modal animated pulse" data-easein="pulse" data-easeout="rollOut"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog " >
                                    <div class="modal-content" >
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">THEME 1</h4>
                                      </div>
                                      <div class="modal-body">
                                          <img src="<?php echo logo_pic;?>theme1.png" class="thumbnail img-responsive" data-toggle="modal" data-target="#myModal" >

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
                          <label class="btn btn-info">
                              <input type="radio" name="theme" id="theme"  value="2"><?=$this->lang->line("theme_s2");?>
                            </label>
                                  
                            <img src="<?php echo logo_pic;?>theme2.png" class="thumbnail img-responsive" data-toggle="modal" data-target="#myModal2" style="width: 180px; height: 180px; line-height: 150px;">

                               <!-- Modal -->
                                <div class="modal animated pulse" data-easein="pulse" data-easeout="rollOut" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">THEME 2</h4>
                                      </div>
                                      <div class="modal-body">
                                         <img src="<?php echo logo_pic;?>theme2.png" class="thumbnail img-responsive" data-toggle="modal" data-target="#myModal" >

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
                    <div class="form-group animated fadeInDown" >
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("shopprofile");?></label>
                    <div class="col-lg-2">

                     <div class="fileinput fileinput-new " data-provides="fileinput" id="profilepop" data-toggle="popover" data-trigger="hover " data-placement="right" data-content="<?=$this->lang->line("profile_size");?>" >
                        <div class="fileinput-new thumbnail" style="width: 180px; height: 180px; " >
                          <img src="<?php echo logo_pic;?>avatar.png" class="img-responsive" style="width: 180px; height: 180px; ">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-responsive" style="width: 180px; height: 180px; " ></div>
                        <div>
                          <span class="btn btn-info btn-file"><span class="fileinput-new" ><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists" ><?=$this->lang->line("change_pic");?></span><input type="file" name="select_shopprofile"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                    <B><font color="#FF0000"><?php if($error=="error1"){echo $this->lang->line("error_picshop");}else if($error=="min"){echo $this->lang->line("error_picmin");}?></font></B>
                    </div>
                  </div> 
                   
                  <!-- end Choose profile -->
                    
                    <div class="form-group animated fadeInDown">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("bg_pic");?></label>
                    <div class="col-lg-2">

                     <div class="fileinput fileinput-new" data-provides="fileinput" id="bgpop" data-toggle="popover" data-trigger="hover " data-placement="right" data-content="<?=$this->lang->line("bg_size");?>"> 
                        <div class="fileinput-new thumbnail img-responsive" style="width: 180px; height: 180px; " >
                          <img src="<?php echo logo_pic;?>bg_shop.jpg" class="img-responsive" style="width: 180px; height: 180px; ">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-responsive" style="width: 180px; height: 180px;"></div>
                        <div>
                          <span class="btn btn-info btn-file"><span class="fileinput-new"><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists"><?=$this->lang->line("change_pic");?></span><input type="file" name="select_shopbg"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                    <B><font color="#FF0000"><?php if($error=="error2"){echo $this->lang->line("error_picshop");}else if($error=="min"){echo $this->lang->line("error_picmin");}?></font></B>
                    </div>
                  </div>

                  <div class="form-group animated fadeInDown">
                    <label for="inputlname" class="col-lg-2 control-label"><?=$this->lang->line("header_pic");?></label>
                    <div class="col-lg-2">
                      <div class="fileinput fileinput-new" data-provides="fileinput" id="coverpop" data-toggle="popover" data-trigger="hover " data-placement="right" data-content="<?=$this->lang->line("cover_size");?>">
                        <div class="fileinput-new thumbnail img-responsive" style="width: 600px; height: 240px; ">
                          <img src="<?php echo logo_pic;?>pic_cover.jpg" class="img-responsive"style="width: 600px; height: 240px;">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-responsive" style="width: 600px; height: 240px;" ></div>
                        <div>
                          <span class="btn btn-info btn-file"><span class="fileinput-new"><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists"><?=$this->lang->line("change_pic");?></span><input type="file" name="select_shopcover"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                        </div>
                      </div>
                    </div>
                   <div class="col-lg-3">
                      <B><font color="#FF0000"><?php if($error=="error3"){echo $this->lang->line("error_picshop");}else  if($error=="min"){echo $this->lang->line("error_picmin");}?></font></B>
                    </div>
                  </div>
                    

                  
                  <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary animated pulse"><?=$this->lang->line("submit");?></button>
                      <button class="btn btn-default animated pulse" type="reset"><?=$this->lang->line("cancel");?></button>
                      
                  </div>
            </span>
                  </div>
                </fieldset>
              </form>
             
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
      





<?php echo $this->load->view('footer/footer')?>












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
      regex: /^([a-zA-Z0-9\s]|[-_])+$/
    },
    shopname_th: {
      required: true,
      regex: /^([ก-๙0-9\s]|[-_])+$/
    },
    urlname: {
      required: true,
      regex: /^([a-zA-Z0-9])+$/,
      rangelength: [5, 15]
    },
    shopdetail_en: {
      required: true,
      regex: /^([a-zA-Z0-9\s]|[-_])+$/
      
    },
    shopdetail_th: {
      required: true,
      regex: /^([ก-๙0-9\s]|[-_])+$/
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