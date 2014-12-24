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
              <li><a href="<?php echo site_url('backshop/bankManage');?>" style="color: white"><?=$this->lang->line("bank");?></a></li>
              
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
                                                 <h3><?=$this->lang->line("bank_choose");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2">

                                              </div>
                                              <div>

                                                 
                                                 
                                              </div>
                                             </div>
                                             </div>

          <form id="bank_choose" class="form-horizontal"  method="post" enctype="multipart/form-data" >
            



             <div class="form-group " align="center">
                    <label  class="col-lg-2  col-sm-2 control-label animated fadeInLeft"><?=$this->lang->line("bank_select");?></label>
                    <div class="col-lg-2 col-xs-2 col-sm-2" style="color:black">
                     
                       <select  name="order_status" style="width:250px;height:30px" class=" animated fadeInDown" id="bank_select">
                        <option><?=$this->lang->line("wait_payment");?></option>
                        <option><?=$this->lang->line("complete_payment");?></option>
                        <option><?=$this->lang->line("wait_payment");?></option>
                        <option><?=$this->lang->line("complete_payment");?></option>
                        <option><?=$this->lang->line("wait_payment");?></option>
                        <option><?=$this->lang->line("complete_payment");?></option>
                                                
                      </select>
                                                
                                               
                                          
                    </div>
                  </div>
                  <div class="form-group" align="center">
                    <label  class="col-lg-2 col-sm-2 control-label animated fadeInLeft"><?=$this->lang->line("your_name");?></label>
                    <div class="col-lg-2 col-sm-2">
                      <input type="text" class="form-control animated fadeInDown" name="account_name" id="a_name" value="" style="width:200px;height:35px">
                    </div>
                  </div>
                  <div class="form-group" align="center">
                    <label  class="col-lg-2 col-sm-2 control-label animated fadeInLeft"><?=$this->lang->line("bank_branch");?></label>
                    <div class="col-lg-2 col-sm-2">
                      <input type="text" class="form-control animated fadeInDown" name="bank_branch" id="b_branch" value="" style="width:200px;height:35px">
                    </div>
                  </div>
                  <div class="form-group" align="center">
                    <label  class="col-lg-2 col-sm-2 control-label animated fadeInLeft"><?=$this->lang->line("bank_account");?></label>
                    <div class="col-lg-2 col-sm-2">
                      <input type="text" data-mask="999-9-99999-9"  id="b_account" class="form-control animated fadeInDown" name="bank_account" value="" style="width:200px;height:35px">
                    </div>
                  </div>
                  <div class="form-group" align="center">
                    <label for="inputlicense" class="col-lg-2 col-sm-2 control-label animated fadeInLeft"><?=$this->lang->line("account_type");?></label>
                   
                    <div class="col-lg-2 col-xs-2 col-sm-2" style="color:black">
                     
                       <select  name="order_status" style="width:250px;height:30px" class=" animated fadeInDown" id="acc_type">
                        <option><?=$this->lang->line("acc_type1");?></option>
                        <option><?=$this->lang->line("acc_type2");?></option>
                        
                                                
                      </select>
                                                
                                               
                                          
                    </div>
                  </div>
                  

                    <div class="col-sm-2"></div>

                  <div class="form-group animated fadeInUp" >

                  <div class="col-lg-4 col-sm-5">
                      <button type="submit" class="btn btn-primary animated pulse" id="btu_submit"><?=$this->lang->line("bank_add");?></button>
                      <a class="btn btn-danger animated swing" href="<?php echo site_url('backshop/bankManage');?>"><?=$this->lang->line("cancel");?></a>
                      
            </div>
            </div>
                      
                     

                     
                  
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
    <script src="<?php echo JS_URL;?>jquery.validate.min.js"></script>
    <script >
      $.validator.addMethod(
           "regex",
            function(value, element, regexp) {
            var check = false;
            return this.optional(element) || regexp.test(value);
            },
            "<?php echo "<font color='red'>".$this->lang->line("error_a_uc")."</font>";?>"
            );

      $("#bank_choose").validate({
  rules: {
    bank_branch: {
      required: true
    },
    bank_account: {
      required: true,
      regex: /^([0-9]|[-])+$/,
      rangelength: [13,13]
    },
    account_name:{
      required: true
    }
  },
  messages: {
    bank_branch: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_b_empty")."</font>";?>"
    },
    bank_account: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_a_empty")."</font>";?>"
    },
    account_name: {
      required: "<?php echo "<font color='red'>".$this->lang->line("error_n_empty")."</font>";?>"
    }
  }
});



    </script>
    
  
    </body>
    
    

   
    
</html>