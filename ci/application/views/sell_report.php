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
              <li><a href="<?php echo site_url('backshop/sellreport');?>" class="animated fadeInRight" style="color: white"><?=$this->lang->line("sell_report");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
         
      </div>
<form class="form-horizontal" name="s_report" id="report_s"   method="post" enctype="multipart/form-data">
<fieldset >
   
       <div class="page-header" >
               
                  <h3 id="formpersonal"><?=$this->lang->line("filter");?></h3>
                  </div>
                 <div class="row">
                  <div class="form-group animated fadeInLeft" >
                    

                    
                  
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("order_start");?></label>
                    
                    </div>
                    <div class="form-group animated fadeInLeft " >
                  
                    <label  class=" col-lg-1 col-sm-2 control-label"><?=$this->lang->line("order_end");?></label>
                    
                    </div>
                    <div class="form-group animated fadeInLeft" >
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("sell_order_num");?></label>
                    <div class="col-lg-2  col-sm-2">
                     
                    </div>
                    </div>

                  
                  
                  
                         <div class="col-lg-5 col-sm-3">
                         
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
                                                 <h3><?=$this->lang->line("selling_report");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2" style="color:smoke">

                                                 
                                              </div>
                                              <div>

                                                 
                                                 
                                              </div>
                                             </div>
                                             </div>

          <form class="form-group " >
            

             <div class="table-responsive animated fadeInDown" id="users">
                  <table class="table" id="table">
                    <!-- On rows -->
                      <tr class="active">
                         
                         <th class="info"> <center><font color="#FFFFFF"size="4pt"><?=$this->lang->line("order_start");?></font> </center></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("order_end");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("sell_order_num");?></font></th>
                          
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("order_price");?></font></th>
                         
                        
                         </tr>

                      <tr style="color:black">
                       
                        <td class="warning" style="font-size:11pt" align="center" ><div class="col-lg-1 col-sm-1 input-group date" id='datetimepicker1'>
                      <input type="text" id="start_date" class="form-control" name="startdate" style="width:150px;height:25px" data-date-format="YYYY-MM-DD" >
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="width:10px;height:8px"></span>
                    </span>
                    </div></td>
                        <td class="warning" style="font-size:11pt" ><div class="col-lg-1 col-xs-2 col-sm-1 input-group date" id='datetimepicker2' >
                      <input type="text" id="end_date" class="form-control" name="enddate" style="width:150px;height:25px" data-date-format="YYYY-MM-DD" >
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="width:10px;height:8px"></span>
                    </span>

                    </div></td>
                        <td class="warning" style="font-size:11pt" > <input type="text" id="orderID" class="form-control" name="ordercode" style="width:84px;height:25px" ></td>
                        <td class="warning" style="font-size:11pt" ></td>
                        
                   
                        
                      </tr>   
                     
                      <tbody class="list">
                      <!-- On cells (`td` or `th`) -->
                    
                     <?php

                               for($i=0; $i<count($result); $i++){
                                echo '<tr style="color:black">';
                                
                                echo '<td class="warning date_order" style="font-size:11pt" align="center" >'.$result[$i]['order_date'].'</td>';
                                
                                echo '<td class="warning dateupdate_order" style="font-size:11pt" >'.$result[$i]['order_update_date'].'</td>';
                               
                                echo '<td class="warning orderid" style="font-size:11pt" >'.$result[$i]['order_ID'].'</td>';
                                
                                echo '<td class="warning" style="font-size:11pt" >'.$result[$i]['order_sum_price'].'</td>';
                                
                                echo '</tr>';
                               }       

                         
                         ?>
                      </tbody>
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
    <script src="<?php echo JS_URL;?>list.js"></script>
    <script>
              var options = {
              valueNames: [ 'date_order','dateupdate_order','orderid']
              };

              var userList = new List('users', options);

              $('#start_date').keyup(function() {
              var start_date = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
              userList.filter(function (item) {
              if (item.values().date_order == start_date) {
                return true;
              } else {
                return false;
              }
              });
              });

              $('#end_date').keyup(function() {
              var end_date = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
              userList.filter(function (item) {
              if (item.values().dateupdate_order == end_date) {
                return true;
              } else {
                return false;
              }
              });
              });

              $('#orderID').keyup(function() {
              var orderID = document.getElementById('orderID').value;
              userList.filter(function (item) {
              if (item.values().orderid == orderID) {
                return true;
              } else {
                return false;
              }
              });
              });

              
              
    </script>
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