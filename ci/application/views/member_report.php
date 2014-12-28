<html>
<head>  

<title>TB Shop|Back Office's</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap-datetimepicker.css">
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
              <li><a href="<?php echo site_url('backshop/sellreport');?>" style="color: white"><?=$this->lang->line("member_report");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
         
      </div>
<form class="form-horizontal" name="m_report" id="report_m"   method="post" enctype="multipart/form-data">
<fieldset >
   
       <div class="page-header" >
               
                  <h3 id="formpersonal"><?=$this->lang->line("filter");?></h3>
                  </div>
                 <div class="row">
                  
                    <div class="form-group animated fadeInLeft" >
                    <label  class="col-lg-1 col-sm-2 control-label"><?=$this->lang->line("member_id");?></label>
                    <div class="col-lg-1  col-sm-2">
                      <input type="text" id="m_id" class="form-control" name="mem_id" style="width:130px;height:25px" >
                    </div>
                    

                     
                    <label  class="col-lg-2 col-sm-2 control-label"><?=$this->lang->line("mem_name");?></label>
                    <div class="col-lg-3  col-sm-4">
                      <input type="text" id="m_name" class="form-control" name="mem_name" style="width:130px;height:25px" >
                    </div>
                

                  
                  
                  
                         <div class="col-lg-3 col-sm-2">
                          <button type="submit" class="btn btn-primary animated fadeInLeft"  style="width:75px;height:32px;"><?=$this->lang->line("order_search");?></button>
                          </div>
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
                                                 <h3><?=$this->lang->line("member_list");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2" style="color:smoke">

                                                 
                                              </div>
                                              <div>

                                                 
                                                 
                                              </div>
                                             </div>
                                             </div>

          <form class="form-group " >
            

             <div class="table-responsive animated fadeInDown">
                  <table class="table">
                    <!-- On rows -->
                      <tr class="active">
                         
                         <th class="info"> <center><font color="#FFFFFF"size="4pt"><?=$this->lang->line("member_id");?></font> </center></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("mem_name");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("member_email");?></font></th>
                        
                        
                         </tr>
                     

                      <!-- On cells (`td` or `th`) -->
                      <tr style="color:black">
                       
                        <td class="warning" style="font-size:11pt" align="center" >1321</td>
                        <td class="warning" style="font-size:11pt" >Thanakorn</td>
                        <td class="warning" style="font-size:11pt" >bas-123@hotmail.com</td>
                        
                        
                      </tr>
                      <tr style="color:black">
                         <td class="warning" style="font-size:11pt" align="center" >654654</td>
                        <td class="warning" style="font-size:11pt" >Udomake </td>
                        <td class="warning" style="font-size:11pt" >asdasdadsasd@sdfsdfsdf.com</td>
                       
                      </tr>
                  </table>
                </div>
                </form>

       
         
          </div>
          
        </div>
</div>
</fieldset>
</form>
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
    <script src="<?php echo JS_URL;?>moment.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap-datetimepicker.js"></script>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({pickTime: false});
            $('#datetimepicker2').datetimepicker({pickTime: false});
            $("#datetimepicker1").on("dp.change",function (e) {
          
               $('#datetimepicker2').data("DateTimePicker").setMinDate(e.date);
            });
            $("#datetimepicker2").on("dp.change",function (e) {
           
               $('#datetimepicker1').data("DateTimePicker").setMaxDate(e.date);
            });
        });
    </script>
    

    
    </body>
    
    

   
    
</html>