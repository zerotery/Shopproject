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
              <li><a href="<?php echo site_url('backshop/productManage');?>" style="color: white"><?=$this->lang->line("product_management");?></a></li>
              
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
                                                 <h3><?=$this->lang->line("galleryadd_modify");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2">

                                                 
                                              </div>
                                              
                                             </div>
                                             </div>

                <form class="form-horizontal" name="editgallery" id="edit_g" action="<?php echo site_url('backshop/process_add');?>"  method="post" enctype="multipart/form-data">
                    <fieldset >

                               
                               <div class="form-group ">

                                      <div class="row">
                                          <div class="col-lg-5 "></div>

                                              
                                                <div class="col-sm-6  col-lg-7" align="center">
                                                   <div class="form-group animated fadeInUp">
                                                     <div class="col-lg-4">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                          <div class="fileinput-new thumbnail " >
                                                            <img src="<?php echo logo_pic;?>item.png" class="img-responsive" style="height:160px;width:180px;" >
                                                          </div>
                                                          <div class="fileinput-preview fileinput-exists thumbnail" style="width: 160px; height: 200px;"></div>
                                                          <div>
                                                            <span class="btn btn-success btn-file "><span class="fileinput-new "><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists "><?=$this->lang->line("change_pic");?></span><input type="file" name="addp_gallery"></span>
                                                            <div  class="btn btn-default fileinput-exists " data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></div>
                                                            <?php if($error=="error"){ echo $this->lang->line("error_picshop");}else if($error=="min"){echo $this->lang->line("error_picmin");}?>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>         
                                                </div>
                                               
                                   </div>
                             </div>
                                  <div class="col-lg-5"></div>
                                 <div class=" col-lg-1 col-sm-1 ">
                                                  <input type="submit" class="btn btn-primary animated swing" id="btn_add" name="btnadd"  value="<?=$this->lang->line("save");?>" />
                                                </div>
                                           <div class="col-lg-1 col-sm-1">
                                              <a class="btn btn-danger animated swing" href="<?php echo site_url('backshop/edit_gallery');?>"><?=$this->lang->line("cancel");?></a>
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
    
    </body>
    
    

   
    
</html>