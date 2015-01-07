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
              <li><a href="<?php echo site_url('backshop/sellreport');?>" class="animated fadeInRight" style="color: white"><?=$this->lang->line("member_report");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
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

         
            

             <div class="table-responsive animated fadeInDown" id="users">
                  <table class="table" id="table">
                    <!-- On rows -->
                      <tr class="active">
                         
                         <th class="info"> <center><font color="#FFFFFF"size="4pt"><?=$this->lang->line("member_id");?></font> </center></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("mem_name");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("member_email");?></font></th>
                        
                        
                         </tr>
                     
                     <tr style="color:black">
                       
                        <td class="warning" style="font-size:11pt" align="center" >
                      <input type="text" id="m_id" class="form-control" name="mem_id" style="width:130px;height:25px" >
                    </td>
                        <td class="warning" style="font-size:11pt" > 
                      <input type="text" id="m_name" class="form-control" name="mem_name" style="width:130px;height:25px" >
                    </td>
                        <td class="warning" style="font-size:11pt" ></td>
                        
                        
                      </tr>
                       <tbody class="list">
                      <!-- On cells (`td` or `th`) -->
                     

                        <?php

                               for($i=0; $i<count($result); $i++){
                                echo '<tr style="color:black">';
                                
                                echo '<td class="warning memberid" style="font-size:11pt" align="center" >'.$result[$i][0]['memberID'].'</td>';
                                
                                echo '<td class="warning member_n" style="font-size:11pt" >'.$result[$i][0]['f_name']." ".$result[$i][0]['l_name'].'</td>';
                               
                                echo '<td class="warning" style="font-size:11pt" >'.$result[$i][0]['email'].'</td>';
                                
                                
                                
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
              valueNames: [ 'memberid','member_n']
              };

              var userList = new List('users', options);

              $('#m_id').keyup(function() {
              var m_id = document.getElementById('m_id').value;
              userList.filter(function (item) {
              if (item.values().memberid == m_id) {
                return true;
              } else {
                return false;
              }
              });
              });

              $('#m_name').keyup(function() {
              var m_name = document.getElementById('m_name').value;
              userList.filter(function (item) {
              if (item.values().member_n == m_name) {
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