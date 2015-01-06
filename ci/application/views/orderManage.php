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
              <li><a href="<?php echo site_url('backshop/orderManage');?>" class="animated fadeInRight" style="color: white"><?=$this->lang->line("sell_command");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
         <div class="col-lg-8 col-md-7 col-sm-6">
         </div>
      </div>
<form class="form-horizontal" name="product_type_select" id="s_order" action="<?php echo site_url('backshop/search_order');?>"  method="post" enctype="multipart/form-data">
<fieldset >
   
       <div class="page-header" >
               
                  <h3 id="formpersonal"><?=$this->lang->line("filter");?></h3>
                  </div>
                 <div class="row">
                  <div class="form-group animated fadeInLeft" >
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("sell_order_num");?></label>
                    <div class="col-lg-2  col-sm-1">
                      <input type="text" id="ocode" class="form-control" name="ordercode" style="width:84px;height:25px" >
                    </div>

                  
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("customer");?></label>
                    <div class="col-lg-1 col-sm-1">
                      <input type="text" id="cname" class="form-control" name="customer" style="width:150px;height:25px" >
                    </div>
                  
                  
                    <label  class=" col-lg-2 col-sm-3 control-label"><?=$this->lang->line("order_status");?></label>
                    <div class="col-lg-1 col-xs-2 col-sm-3" style="color:black">
                       <select  name="order_status" id="order_stat" style="width:135px;height:25px">
                        <option><?=$this->lang->line("wait_payment");?></option>
                        <option><?=$this->lang->line("complete_payment");?></option>
                    
                      </select>
                    </div>
                    </div>

                  
                  
                 
                   <div class="form-group animated fadeInLeft" >
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("add_date");?></label>
                    <div class="col-lg-1  col-sm-1 input-group date" id='datetimepicker1'>
                      <input type="text" id="add_date" class="form-control" name="adddate" style="width:150px;height:25px"  >
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="width:10px;height:8px"></span>
                    </span> 
                    
                  </div>
                   <div class="form-group"></div>
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("modify_date");?></label>
                    <div class="col-lg-1  col-sm-3 input-group date" id='datetimepicker2'>
                     
                      <input type="text" id="modify_date" class="form-control" name="modifydate" style="width:150px;height:25px"  >
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="width:10px;height:8px"></span>
                    </span>

                    </div>
                    </div>
                  
                 
                        
                         <div class="col-lg-2  col-md-5 col-sm-3">
                         <!-- <button type="submit" class="btn btn-primary" style="width:70px;height:32px;" onclick="document.getElementById('s_order').submit();"><?=$this->lang->line("order_search");?></button>-->
                          </div>
                        </div>
      </fieldset>
</form>
                 
                  
                  


    

      <hr width="100%">
  <div class="bs-docs-section clearfix">

  
        <div class="row">
        <div class="col-lg-1"></div>
          <div class="col-lg-10" style="border-style:solid;border-width:2px;">
                 <div class="page-header-bp ">
                                              <div class="row">
                                              <div class="col-md-10 ">
                                                 <h3><?=$this->lang->line("sell_command_l");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2" style="color:smoke">

                                                 <h2><div id="del_type" class=" btn glyphicon glyphicon-minus animated rubberBand"  onclick="document.getElementById('order').submit();"></div></h2>
                                                 
                                              </div>
                                              <div>

                                                 
                                                 
                                              </div>
                                             </div>
                                             </div>

          <form class="form-group " id="order" name="order" action="<?php echo site_url('backshop/delete_order');?>"   method="post"  enctype="multipart/form-data">
            

             <div class="table-responsive animated fadeInDown" id="users">
             
                  <table class="table" id="table">
                  
                    <!-- On rows -->
                      <tr class="active">
                         <th class="info">
                            
                                <label ><input class="checkbox" type="checkbox" name="checkall" onclick="checkedAll();" ></label>
                            
                         </th>
                         <th class="info"> <center><font color="#FFFFFF"size="4pt"><?=$this->lang->line("sale_order_num");?></font> </center></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("customer");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("order_status");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("order_price");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("add_date");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("modify_date");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("action");?></font></th>
                         </tr>
                         <tr style="color:black">
                           <td class="warning" ></td>
                           <td class="warning" ><input class="search" id="orderid" placeholder="Search Order ID" /></td>
                           <td class="warning" ><input class="search" id="name_member" placeholder="Search Name member" /></td>
                           <td class="warning" ><select class="search" name="order_status" id="order_status" style="width:135px;height:25px">
                        <option selected="selected" value=""></option>
                        <option value="<?=$this->lang->line("wait_payment");?>"><?=$this->lang->line("wait_payment");?></option>
                        <option value="<?=$this->lang->line("complete_payment");?>"><?=$this->lang->line("complete_payment");?></option>
                        </select></td>
                          <td class="warning" ><input class="search" id="sum_price" placeholder="Search Sum Price" /></td>
                          <td class="warning" ><div class="col-lg-1  col-sm-1 input-group date" id='datetimepicker3'>
                      <input type="text" id="add_date" class="form-control search" name="adddate" style="width:150px;height:25px" data-date-format="YYYY-MM-DD"  >
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="width:10px;height:8px"></span>
                    </span> 
                    
                  </div></td>
                          <td class="warning" ><div class="col-lg-1  col-sm-3 input-group date" id='datetimepicker4'>
                     
                      <input type="text" id="modify_date" class="form-control search" name="modifydate" style="width:150px;height:25px" data-date-format="YYYY-MM-DD" >
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" style="width:10px;height:8px"></span>
                    </span>

                    </div></td>
                    <td class="warning" ></td>

                         </tr>
                          <tbody class="list">
                          <?php

                               for($i=0; $i<count($result); $i++){
                                echo '<tr style="color:black">';
                                echo '<td class="warning" ><label ><input class="checkbox" type="checkbox" name="check_list[]" value="'.$result[$i]['order_ID'].'"></label></td>';
                                echo '<td class="warning order" style="font-size:11pt" >'.$result[$i]['order_ID'].'</td>';
                                
                                echo '<td class="warning name_member" style="font-size:11pt" >'.$result[$i]['f_name']." ".$result[$i]['l_name'].'</td>';
                                if($result[$i]['order_status']==0){
                                  echo '<td class="warning status" style="font-size:11pt" >'.$this->lang->line("wait_payment").'</td>';
                                }else{
                                  echo '<td class="warning status" style="font-size:11pt" >'.$this->lang->line("complete_payment").'</td>';
                                }
                                echo '<td class="warning sumprice" style="font-size:11pt" >'.$result[$i]['order_sum_price'].'</td>';
                                echo '<td class="warning orderdate" style="font-size:11pt" >'.$result[$i]['order_date'].'</td>';
                                echo '<td class="warning update" style="font-size:11pt" >'.$result[$i]['order_update_date'].'</td>';
                                echo '<td class="warning" style="font-size:15pt" >['. anchor(site_url('backshop/modifyorder').'/?o_id='.$result[$i]['order_ID'].'',$this->lang->line("modify")).']</td>';
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
              valueNames: [ 'order','name_member','status','sumprice','orderdate','update' ]
              };

              var userList = new List('users', options);

              $('#orderid').keyup(function() {
              var orderid = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
              userList.filter(function (item) {
              if (item.values().order == orderid) {
                return true;
              } else {
                return false;
              }
              });
              });

              $('#name_member').keyup(function() {
              var name = document.getElementById('name_member').value;
              userList.filter(function (item) {
              if (item.values().name_member == name) {
                return true;
              } else {
                return false;
              }
              });
              });

              $('#sum_price').keyup(function() {
              var sprice = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
              userList.filter(function (item) {
              if (item.values().sumprice == sprice) {
                return true;
              } else {
                return false;
              }
              });
              });

              $('#add_date').keyup(function() {
              var add_date = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
              userList.filter(function (item) {
              if (item.values().orderdate == add_date) {
                return true;
              } else {
                return false;
              }
              });
              });

               $('#modify_date').keyup(function() {
              var modify_date = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
              userList.filter(function (item) {
              if (item.values().update == modify_date) {
                return true;
              } else {
                return false;
              }
              });
              });

              $('#order_status').change(function () {
              var selection = this.value; 
              userList.filter(function (item) {
              if (item.values().status == selection) {
                return true;
              } else {
                return false;
              }
            });

            });
    </script>
    <script type="text/javascript">
                checked=false;
                  function checkedAll (order) {var aa= document.getElementById('order'); if (checked == false)
                    {
                    checked = true
                    }
                    else {
                    checked = false
                    }
                    for (var i =0; i < aa.elements.length; i++){ aa.elements[i].checked = checked;}
                    }
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({pickTime: false});
                $('#datetimepicker2').datetimepicker({pickTime: false});
                $('#datetimepicker3').datetimepicker({pickTime: false});
                $('#datetimepicker4').datetimepicker({pickTime: false});
            });

            
        </script>
    
    </body>
    
    

   
    
</html>