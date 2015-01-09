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

         <ol class="breadcrumb " style="background-color:#777;">
              <li><a href="<?php echo site_url('backshop/gobackshop');?>" style="color: white"><?=$this->lang->line("home");?></a></li>
              <li><a href="<?php echo site_url('backshop/management');?>" class="animated fadeInRight" style="color: white"><?=$this->lang->line("management");?></a></li>
              
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
                 <div class="page-header-bp ">
                                              <div class="row">
                                              <div class="col-md-10 ">
                                                 <h3><?=$this->lang->line("topic_management");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2">

                                                 
                                              </div>
                                              
                                             </div>
                                             </div>

                <form class="form-horizontal" name="topic_management" id="topic_manage" action="<?php echo site_url('backshop/insert_data_management')?>"  method="post" enctype="multipart/form-data">
                    <fieldset >

                               <div class="form-group ">
                                              <label  class="col-lg-3 col-sm-3 control-label animated fadeInLeft"><?=$this->lang->line("sel_management");?></label>
                                              <div class="col-lg-6 col-sm-6">
                                                
                                                 <select name="select_topic" class="form-control animated fadeInDown" id="stp" ata-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("ctopic-type");?>">
                                                      <option value="1"><?=$this->lang->line("t_home");?></option>
                                                      <option value="2"><?=$this->lang->line("t_hs");?></option>
                                                      <option value="3"><?=$this->lang->line("t_pay");?></option>
                                                      
                                                      <option value="4"><?=$this->lang->line("t_aboutme");?></option>
                                                      <option value="5"><?=$this->lang->line("t_contact");?></option>
                                                 
                                                 </select>
                                            </div>
                                </div>


                                 <div class="form-group ">
                                           <label  class="col-lg-3 col-sm-3 control-label animated fadeInLeft"><?=$this->lang->line("de_management_th");?></label>
                                              <div class="col-lg-9 col-sm-9">
                                                
                                                  <textarea id="elm1_th" name="area1"></textarea>
                                                
                                              </div>

                                             
                                             
                                 
                                   



                                 </div>
                                 <div class="form-group ">
                                           <label  class="col-lg-3 col-sm-3 control-label animated fadeInLeft"><?=$this->lang->line("de_management_en");?></label>
                                            <div class="col-lg-9 col-sm-9">
                                       

                                              
                                              <textarea id="elm2_en" name="area2"></textarea>
                                              
                                            </div>

                                             
                                             
                                 
                                   



                                 </div>


                                <div class="form-group ">
                                  <div class="col-lg-9 col-xs-8"></div>


                                   <div class="col-lg-1  col-sm-1 ">
                                   
                                     <input type="submit" class="btn btn-primary animated swing" id="btn_add" name="btnadd"   value="<?=$this->lang->line("save");?>" />
                                   </div>
                                   <div class="col-lg-1 col-sm-1">
                                     <a class="btn btn-danger animated swing" href="<?php echo site_url('backshop/management');?>"><?=$this->lang->line("cancel");?></a>
                                     <!--<input type="reset" class="btn btn-danger animated swing" id="btn_cancel1" name="cancel"  value="<?=$this->lang->line("cancel");?>"/>-->
                                     
                                </div>
                                </div> 

                    </fieldset>
                </form>
       
       
         
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
    <script src="<?php echo JS_comment;?>tinymce.js"></script>
   <script type="text/javascript">
tinymce.init({
    selector: "textarea#elm1_th",
    theme: "modern",
    plugins: [
        "advlist autolink lists link charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code ",
        "insertdatetime  nonbreaking save table contextmenu directionality",
        "emoticons  paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
    toolbar2: "print preview  | forecolor backcolor emoticons",
    image_advtab: true,
    
    font_formats: "Andale Mono=andale mono,times;"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Book Antiqua=book antiqua,palatino;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Courier New=courier new,courier;"+
        "Georgia=georgia,palatino;"+
        "Helvetica=helvetica;"+
        "Impact=impact,chicago;"+
        "Symbol=symbol;"+
        "Tahoma=tahoma,arial,helvetica,sans-serif;"+
        "Terminal=terminal,monaco;"+
        "Times New Roman=times new roman,times;"+
        "Trebuchet MS=trebuchet ms,geneva;"+
        "Verdana=verdana,geneva;"+
        "Webdings=webdings;"+
        "Wingdings=wingdings,zapf dingbats"
});

tinymce.init({
    selector: "textarea#elm2_en",
    theme: "modern",
    plugins: [
        "advlist autolink lists link charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code ",
        "insertdatetime  nonbreaking save table contextmenu directionality",
        "emoticons  paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
    toolbar2: "print preview  | forecolor backcolor emoticons",
    image_advtab: true,
    
    font_formats: "Andale Mono=andale mono,times;"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Book Antiqua=book antiqua,palatino;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Courier New=courier new,courier;"+
        "Georgia=georgia,palatino;"+
        "Helvetica=helvetica;"+
        "Impact=impact,chicago;"+
        "Symbol=symbol;"+
        "Tahoma=tahoma,arial,helvetica,sans-serif;"+
        "Terminal=terminal,monaco;"+
        "Times New Roman=times new roman,times;"+
        "Trebuchet MS=trebuchet ms,geneva;"+
        "Verdana=verdana,geneva;"+
        "Webdings=webdings;"+
        "Wingdings=wingdings,zapf dingbats"
});

</script>
    
    
    </body>
    
    

   
    
</html>