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
<div class="container transbox" style="background-color:#777;width:auto">

<br>
<div class="page-header-bnb">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">

          <ol class="breadcrumb" style="background-color:#777;">
              <li><a href="<?php echo site_url('backshop/gobackshop');?>" style="color: white"><?=$this->lang->line("home");?></a></li>
              <li><a href="<?php echo site_url('backshop/paymentreport');?>" style="color: white"><?=$this->lang->line("payment");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
         <div class="col-lg-8 col-md-7 col-sm-6">
         </div>
      </div>
<form class="form-horizontal" name="report_pform" id="report_p"   method="post" enctype="multipart/form-data">
<fieldset >
   
       <div class="page-header" >
               
                  <h3 id="formpersonal"><?=$this->lang->line("filter");?></h3>
                  </div>
                 <div class="row col-lg-12">
                 <div class="form-group">

                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("payment_date");?></label>
                    <div class="col-lg-1  col-sm-1 input-group date" id='datetimepicker2'>
                     
                      <input type="text" id="pay_date" class="form-control" name="paydate" style="width:150px;height:25px"  >
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="width:10px;height:8px"></span>
                    </span>

                    </div>
                    </div>

                   <div class="col-md-2"></div>
                 
                         <div class="form-group">
                         <div class="col-lg-3   col-sm-4">
                          <button type="submit" class="btn btn-primary" style="width:75px;height:32px;" id="btn_search"><?=$this->lang->line("order_search");?></button>
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
                                                 <h3><?=$this->lang->line("payment_report");?></h3>
                                              </div>

                                             </div>
                                             </div>

          <form class="form-group " >
            

             <div class="table-responsive animated fadeInDown">

                  <table class="table">
                    <!-- On rows -->
                      <tr class="active">
                       
                         <th class="info"> <center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("sell_order_num");?></font> </center></th>
                          <th class="info"><font color="#FFFFFF"size="2pt"><?=$this->lang->line("customer");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="2pt"><?=$this->lang->line("email");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_bank");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_price");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_date");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_time");?></font></th>
                          <th class="info"width="15%" ><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_pic");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_detail");?></font></th>
                        
                         </tr>
                     

                      <!-- On cells (`td` or `th`) -->
                      <tr style="color:black">
                       
                        <td class="warning" style="font-size:11pt" align="center" >#1255a</td>
                        <td class="warning" style="font-size:11pt" >นายอุดมเอก แต้จิ๊ว</td>
                        <td class="warning" style="font-size:11pt" >bas-123@hotmail.com</td>
                        <td class="warning" style="font-size:11pt" >ธนาคาร กรุงไทย...</td>
                        <td class="warning" style="font-size:11pt" >5000</td>
                        <td class="warning" style="font-size:11pt" >22/12/2014</td>
                        <td class="warning" style="font-size:11pt" >13:20</td>
                        <td class="warning" style="font-size:11pt" >

                            <div class="row">
                              <div class="col-lg-1"></div>
                                <div class="col-sm-6 col-md-4 col-lg-8" align="center">
                                   <div class="form-group animated fadeInUp">
                                     <div class="col-lg-12 thumbnail">
                                         
                                             <img src="<?php echo logo_pic;?>item.png" class="img-responsive " data-toggle="modal" data-target="#myModal1"  style="height:120px;width:130px;" >
                              
                                      </div>
                                       
                                    </div>    
                                    
                              </div>

                             
                            </div>
                                          




                        </td>
                        <td class="warning" style="font-size:11pt" >ส่งไวๆนะครับ</td>
                        
                      </tr>
                      <tr style="color:black">
                    
                        <td class="warning" style="font-size:11pt" align="center" >#1256a
                        </td>
                        <td class="warning" style="font-size:11pt" >นายธนากร พรพรรณนุกูล</td>
                        <td class="warning" style="font-size:11pt" >asdgfggfggfgkj_jj@gmail.com</td>
                        <td class="warning" style="font-size:11pt" >ธนาคาร กรุงไทย...</td>
                        <td class="warning" style="font-size:11pt" >5000</td>
                        <td class="warning" style="font-size:11pt" >20/12/2014</td>
                        <td class="warning" style="font-size:11pt" >13:00</td>
                        <td class="warning" style="font-size:11pt  "  >
                            <div class="row">
                              <div class="col-lg-1"></div>
                                <div class="col-sm-6 col-md-4 col-lg-8" align="center">
                                   <div class="form-group animated fadeInUp" >
                                     <div class="col-lg-12 thumbnail"  >
                                        
                                             <img src="<?php echo logo_pic;?>item.png" class="img-responsive" data-toggle="modal" data-target="#myModal2" data-toggle="modal" data-target="#myModal2"style="height:120px;width:130px;" >



                                          
                                      </div>
                                    </div>         
                              </div>

                             
                            </div>

                        </td>
                        <td class="warning" style="font-size:11pt" >ส่งไวๆนะครับ</td>
                       
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
  <!-- Modal  1-->
                                <div  class="modal   animated pulse" data-easein="pulse" data-easeout="rollOut"  id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog " >
                                    <div class="modal-content " >
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" >&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">THEME 1</h4>
                                      </div>
                                      <div class="modal-body">
                                          <img src="<?php echo logo_pic;?>theme1.png" class="thumbnail img-responsive"  data-toggle="modal" data-target="#myModal" >

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                 <!-- Modal 2 -->
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
    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    <script src="<?php echo JS_URL;?>moment.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap-datetimepicker.js"></script>
    
    <script type="text/javascript">

    </script>


    <script type="text/javascript">
            $(function () {
         
                $('#datetimepicker2').datetimepicker({pickTime: false});
            });
        </script>

   


    
    </body>
    
    

   
    
</html>