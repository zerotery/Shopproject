<html>
<head>  

<title>TB Shop|Back Office's</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">
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
 
<div class="container transbox" style="background-color:#777">

<br>

<div class="page-header-bnb">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
           <ol class="breadcrumb animated fadeInRight" style="background-color:#777;">
              <li><a href="<?php echo site_url('backshop/gobackshop');?>" style="color: white"><?=$this->lang->line("home");?></a></li>
             
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
          <div class="col-lg-12">
             <div class="panel panel-default">
           <div class="panel-heading" style="background-color:#CC3300;"><h4><b><?=$this->lang->line("overview");?></b></h4></div>
        
              
            <table class="table table-striped table-hover " style="font-size: larger"   width=100% height=20%>
            <tbody style="color:black"><tr class="warning animated fadeInDown">
              <td><?=$this->lang->line("sell_t");?></td>
              <td><?php echo $sumPrice; ?></td>
            </tr>
            
            <tr class="warning animated fadeInDown">
              <td><?=$this->lang->line("order_t");?></td>
              <td><?php echo $sumOrder; ?></td>
            </tr>
            <tr class="warning animated fadeInDown">
              <td><?=$this->lang->line("num_m");?></td>
              <td><?php echo $sumMember; ?></td>
            </tr>
          
            
          </tbody>
          </table>
       
       
         </div>
          </div>
          <div class="col-lg-12">
          
            <table class="table table-striped table-hover " border=1  width=100% height=20% >
            <thead>
                <tr style="background-color:#CC3300;">
                <td class="right"><font ><?=$this->lang->line("order");?></font></td>
                <td class="left"><?=$this->lang->line("mem_name");?></td>
                <td class="left"><?=$this->lang->line("mem_status");?></td>
                <td class="left"><?=$this->lang->line("date");?></td>
                <td class="right"><?=$this->lang->line("total_price");?></td>
              
              </tr>
            </thead>
            <tbody>
              
              <?php

                               for($i=0; $i<count($result_2); $i++){
                                echo ' <tr class="warning animated fadeInDown" style="color:black">';
                               
                                echo '<td class="right">'.$result_2[$i]['order_ID'].'</td>';
                                
                                echo '<td class="left">'.$result_2[$i]['f_name']." ".$result_2[$i]['l_name'].'</td>';
                                if($result_2[$i]['order_status']==0){
                                  echo '<td class="left">'.$this->lang->line("wait_payment").'</td>';
                                }else{
                                  echo '<td class="left">'.$this->lang->line("complete_payment").'</td>';
                                }
                                echo '<td class="left">'.$result_2[$i]['order_date'].'</td>';
                                echo '<td class="right">'.$result_2[$i]['order_sum_price'].'</td>';
                                
                                
                               
                                echo '</tr>';
                               }       

                         
                         ?>
              </tbody>
          </table>
       



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