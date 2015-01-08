<html>
<head>  

<title>TB Shop|Back Office's</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>jackbox.min.css">
<style type="text/css">.cj-tween{-webkit-transition-property:none !important;}</style>
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
              <li><a href="<?php echo site_url('backshop/paymentreport');?>" class="animated fadeInRight" style="color: white"><?=$this->lang->line("payment");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
         <div class="col-lg-8 col-md-7 col-sm-6">
         </div>
      </div>

   
    
                 <div class="row col-lg-12">
                 

                   <div class="col-md-2"></div>
                 
                       
                     
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

          
            

             <div class="table-responsive animated fadeInDown" id="users">
                  <div class="col-md-1"><?=$this->lang->line("order_search");?></div>
                     <div class="col-lg-1  col-sm-1 input-group date" id='datetimepicker2'>
                     
                      <input type="text" id="pay_date" placeholder="<?=$this->lang->line("date_search2");?>" class="form-control" name="paydate" style="width:150px;height:25px" data-date-format="YYYY-MM-DD" >
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="width:10px;height:8px"></span>
                    </span>

                    </div>
                    <div class="page-header-s"></div>
                  <table class="table" id="table">
                    <!-- On rows -->
                      <tr class="active">
                       
                         <th class="info"> <center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("sell_order_num");?></font> </center></th>
                          <th class="info" ><center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("customer");?></font></center></th>
                          <th class="info"><center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("member_email");?></font></center></th>
                          <th class="info"><center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_bank");?></font></center></th>
                          <th class="info"><center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_price");?></font></center></th>
                          <th class="info"><center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_date");?></font></center></th>
                          <th class="info"><center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_time");?></font></center></th>
                          <th class="info"width="15%" ><center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_pic");?></font></center></th>
                          <th class="info"><center><font color="#FFFFFF"size="2pt"><?=$this->lang->line("payment_detail");?></font></center></th>
                        
                         </tr>
                     
                         <tbody class="list">

                          <?php

                               for($i=0; $i<count($result); $i++){
                                echo '<tr style="color:black">';
                                echo '<td class="warning" style="font-size:11pt" align="center" >'.$result[$i]['order_ID'].'</td>';
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$result[$i]['member_name'].'</td>';
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$result[$i]['email_tranfer'].'</td>';
                                if($result[$i]['bank_transfer']==1){
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$this->lang->line("ktb").'</td>';
                                }else if($result[$i]['bank_transfer']==2){
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$this->lang->line("scb").'</td>';
                                }else if($result[$i]['bank_transfer']==3){
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$this->lang->line("bkb").'</td>';
                                }else if($result[$i]['bank_transfer']==4){
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$this->lang->line("tmb").'</td>';
                                }else if($result[$i]['bank_transfer']==5){
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$this->lang->line("krungsri").'</td>';
                                }else if($result[$i]['bank_transfer']==6){
                                echo '<td class="warning" style="font-size:11pt"align="center" >'.$this->lang->line("kbank").'</td>';
                                }else if($result[$i]['bank_transfer']==7){
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$this->lang->line("uob").'</td>';
                                }
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$result[$i]['payment'].'</td>';
                                echo '<td class="warning payment_date" style="font-size:11pt"align="center" >'.$result[$i]['date'].'</td>';
                                echo '<td class="warning" style="font-size:11pt" align="center">'.$result[$i]['tranfer_time'].'</td>';
                                
                                echo '<td class="warning" style="font-size:11pt"align="center" >';
                                echo '<div class="row">';
                                echo '<div class="col-lg-1"></div>';
                                echo '<div class="col-sm-6 col-md-4 col-lg-8" align="center">';
                                echo '<div class="form-group animated fadeInUp">';
                                echo '<div class="col-lg-12 thumbnail">';
                                echo '<a class="jackbox" data-group="images" data-thumbnail="'.order.$result[$i]['s_ID'].'/'.$result[$i]['order_ID'].'/'.$result[$i]['evidence_pic'].'" href="'.order.$result[$i]['s_ID'].'/'.$result[$i]['order_ID'].'/'.$result[$i]['evidence_pic'].'">';
                                echo '<div class="jackbox-hover jackbox-hover-black jackbox-hover-magnify " ></div><img src="'.order.$result[$i]['s_ID'].'/'.$result[$i]['order_ID'].'/'.$result[$i]['evidence_pic'].'" width="180" height="150" alt="responsive lightbox">';
                                echo '</a>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                

                                echo '<td class="warning" style="font-size:11pt" align="center" >'.$result[$i]['more_detail'].'</td>';
                                
                                echo '</tr>';
                               }       

                         
                         ?>
                      <!-- On cells (`td` or `th`) -->
                     
                      
                      </tbody>
                  </table>
           
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
    <script src="<?php echo JS_URL;?>moment.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap-datetimepicker.js"></script>
    <script src="<?php echo JS_URL;?>list.js"></script>
    <script>
              var options = {
              valueNames: [ 'payment_date' ]
              };

              var userList = new List('users', options);

              $('#pay_date').keyup(function() {
              var pay_date = document.getElementById('pay_date').value;
              userList.filter(function (item) {
              if (item.values().payment_date == pay_date) {
                return true;
              } else {
                return false;
              }
              });
              });

              
    </script>
    <script type="text/javascript">

    </script>
   

    <script type="text/javascript">
            $(function () {
         
                $('#datetimepicker2').datetimepicker({pickTime: false});
            });
    </script>



     <script src="<?php echo JS_URL;?>jackbox-packed.min.js"></script>

     <script type="text/javascript">
    
      jQuery(document).ready(function() {
        
       
        jQuery(".jackbox[data-group]").jackBox("init");



      });
    
    </script>

   


    
    </body>
    
    

   
    
</html>