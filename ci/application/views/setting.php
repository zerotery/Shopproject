<html>
<head>  

<title>TB Shop|Back Office's</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">

<style>
body {
  font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.42857143;
  brackgound:#000000; 
  background:url("<?php echo logo_pic;?>bg_backshop.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  </style>


</head>
<body>

<?php echo $this->load->view('header/navbar_backshop')?>

<div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-s">
                      
                    </div>
                    </div>
                    </div>
<div class="container transbox" style="background-color:#777;">

<br>
<div class="page-header-bnb">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">

         <ol class="breadcrumb" style="background-color:#777;">
              <li><a href="<?php echo site_url('backshop/gobackshop');?>" style="color: white"><?=$this->lang->line("home");?></a></li>
              <li><a href="<?php echo site_url('backshop/setting');?>" class="animated fadeInRight" style="color: white"><?=$this->lang->line("setting");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
         <div class="col-lg-8 col-md-7 col-sm-6">
         </div>
      </div>
      <hr width="100%">
<div class="bs-docs-section clearfix">

  
        <div class="row">
        <div class="col-lg-1"></div>
          <div class="col-lg-10" style="border-style:solid;border-width:2px;">
                 <div class="page-header-bp " >
                                              <div class="row">
                                              <div class="col-xs-10 ">
                                                 <h3><?=$this->lang->line("store_setting");?></h3>
                                              </div>

                                            <div class="col-xs-2 "  align="right">

                                               <h4> <a class="btn btn-cluster animated swing" id="del"  onclick="del_shop()"><?=$this->lang->line("del_shop");?></a></h4>
                                   
                                              </div>
                                             </div>
                                             </div>
     
                <form class="form-horizontal" id="setting"  name="setting" action=""   method="post"  enctype="multipart/form-data">
                    <fieldset >

                               <div class="form-group col-lg-12">
                                     
                                         <ul class="nav nav-tabs nav-justified" id="myTab1">
                                            <li class="active"><a href="#home"><?=$this->lang->line("setting_information1");?></a></li>
                                            
                                            <li><a href="#messages" data-easein="fadeInDown"><?=$this->lang->line("setting_information2");?></a></li>
                                            
                                          
                                        </ul>

                                        <div class="tab-content" id="tab-content1">
                                            <div class="tab-pane active" id="home">
                                             <div class="form-group"></div>
                                              <div class="row">
                                                  <div class="form-group">
                                                         
                                                           
                                                                 
                                                                  <div class="form-group" align="center">
                                                                    <label for="inputsname" class="col-lg-3 col-sm-2 control-label"><?=$this->lang->line("s_name");?></label>
                                                                    
                                                                    <div class="col-lg-5 col-sm-5">
                                                                      <input type="text" id="shopname_en" class="form-control " name="shopname_en"  data-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("note");?>">

                                                                    </div>
                                                                    <div class="col-lg-1 col-sm-1 ">
                                                                    <label   class="col-lg-0.7 control-label" ><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></label>
                                                                   </div>

                                                                  </div>
                                                                 
                                                                  <div class="form-group" align="center">
                                                                    <label for="inputsname" class="col-lg-3 col-sm-2 control-label"></label>
                                                                    
                                                                    <div class="col-lg-5 col-sm-5">
                                                                      <input type="text" id="shopname_th" class="form-control" name="shopname_th" data-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("note2");?>">
                                                                    </div>
                                                                    <div class="col-lg-1 col-sm-1 ">
                                                                    <label  class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></label>
                                                                   </div>
                                                                  </div>


                                                                  <div class="form-group" align="center">
                                                                    <label for="inputurl" class="col-lg-3 col-sm-2 control-label"><?=$this->lang->line("url_name");?></label>
                                                                    <div class="row col-md-9 col-sm-8">
                                                                    <div class="col-md-2 col-sm-5">

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
                                                                    <label  class="col-lg-3 col-sm-2 control-label"><?=$this->lang->line("s_type");?></label>
                                                                    <div class="col-lg-3 col-sm-5">
                                                                    <select name="category" class="form-control">
                                                                    <?php 

                                                                      foreach( $cate as $value){ 
                                                                      echo "<option value=\"$value->shop_category_ID\">".$value->shop_name_type."</option>";}
                                                                    ?>
                                                                        
                                                                    </select>
                                                                   
                                                                    </div>
                                                                  </div>

                                                                  <div class="form-group " align="center">
                                                                    <label class="col-lg-3 col-sm-2 control-label"><?=$this->lang->line("shop_detail");?></label>
                                                                    <div class="col-lg-5 col-sm-5">
                                                                      <textarea rows="3" cols="60" class="form-control" id="sde" name="shopdetail_en" data-toggle="popover" data-trigger="hover" data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("dnote");?>"></textarea>
                                                                    </div>
                                                                    <div class="col-lg-1 col-sm-1 ">
                                                                    <label for="inputslang" class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></label>
                                                                    </div>
                                                                  </div>

                                                                  <div class="form-group" align="center">
                                                                    <label  class="col-lg-3 col-sm-2 control-label"></label>
                                                                    <div class="col-lg-5 col-sm-5">
                                                                      <textarea rows="3" cols="60" class="form-control" name="shopdetail_th" id="sdt" data-toggle="popover" data-trigger="hover" data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("dnote2");?>"></textarea>
                                                                    </div>
                                                                    <div class="col-lg-1 col-sm-1 ">
                                                                    <label  class="col-lg-0.7 control-label"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group" align="center">
                                                                    <label  class="col-lg-3 col-sm-2 control-label"><?=$this->lang->line("s_fanpage");?></label>
                                                                    <div class="col-lg-4 col-sm-5">
                                                                      <input type="text" class="form-control" name="fanpageshop" id="fp" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?=$this->lang->line("fnote");?>" >
                                                                    </div>
                                                                  </div>

                                                 </div>
                                                                </div>
                                                           
                                                            </div>
                                                            
                                                          

                                     


                                            <div class="tab-pane" id="messages">
                                                  <div class="form-group"></div>

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
                    
                                                     

                                              


                                            </div>










                                        </div>
                                      

                                      
                                </div>
                           </fieldset>
                </form>



                                                          </div>
                                            

                               






                                  <div class="col-lg-9"></div>
                                  <div class="form-group" align="center">


                                   <div class="row" >

                                  <div class="col-md-1 ">

                                          <h4><input type="submit" class="btn btn-primary animated swing" id="btn_add" name="btnadd"  value="<?=$this->lang->line("save");?>" /></h4>
                                         
                                           
                                   </div >
                                     <div class="col-md-1 "  >
                                         <h4> <a class="btn btn-danger animated swing" href="<?php echo site_url('backshop/setting');?>"><?=$this->lang->line("cancel");?></a></h4>
                                     </div>
                                           
                                </div>
                                </div>
                                

                                 

                 
    
       
         
          </div>
          
        </div>
</div>
</div>
</div>

<div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-ff">
                      
                  </div>
                    </div>
                    </div>


   <?php echo $this->load->view('footer/footer')?>
    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery.validate.min.js"></script>
    <script>

    $('#btn_add').click(function() {
    $('#addsetting').submit();
    });

      $.validator.addMethod(
       "regex",
        function(value, element, regexp) {
        var check = false;
        return this.optional(element) || regexp.test(value);
        },
        "Please check your input."
        );


$("#addsetting").validate({
  rules: {
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


}
});



</script>
 <script>
function del_shop() {
    var x;
    if (confirm("<?=$this->lang->line("confirm_del");?>") == true) {
        document.getElementById("del").href = "<?php echo site_url('backshop/test_alert');?>";
    } else {
        document.getElementById("del").href = "<?php echo site_url('backshop/setting');?>";
    }
    
}
</script>
  
    
    
    </body>
    
    

   
    
</html>