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
              <li><a href="<?php echo site_url('backshop/orderManage');?>" style="color: white"><?=$this->lang->line("sale_command");?></a></li>
              
          </ol>
          
          
            
          <!--<div class="col-lg-4 col-md-5 col-sm-6">
              <h6>What the ?</h6>
          </div>-->
        </div>
         <div class="col-lg-8 col-md-7 col-sm-6">
         </div>
      </div>
<form class="form-horizontal" name="product_type_select" id="cko"   method="post" enctype="multipart/form-data">
<fieldset >
   
       <div class="page-header" >
               
                  <h3 id="formpersonal"><?=$this->lang->line("filter");?></h3>
                  </div>
                 <div class="row">
                  <div class="form-group animated fadeInLeft" >
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("sale_order_num");?></label>
                    <div class="col-lg-2  col-sm-1">
                      <input type="text" id="fname" class="form-control" name="ordercode" style="width:84px;height:25px" >
                    </div>

                  
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("customer");?></label>
                    <div class="col-lg-1 col-sm-1">
                      <input type="text" id="fname" class="form-control" name="customer" style="width:150px;height:25px" >
                    </div>
                  
                  
                    <label  class=" col-lg-2 col-sm-3 control-label"><?=$this->lang->line("order_status");?></label>
                    <div class="col-lg-1 col-xs-2 col-sm-3" style="color:black">
                       <select  name="order_status" style="width:120px;height:25px">
                        <option><?=$this->lang->line("wait_payment");?></option>
                        <option><?=$this->lang->line("complete_payment");?></option>
                    
                      </select>
                    </div>
                    </div>

                  
                  
                 
                   <div class="form-group animated fadeInLeft" >
                    <label  class="col-lg-1  col-sm-2 control-label"><?=$this->lang->line("add_date");?></label>
                    <div class="col-lg-1  col-sm-1">
                      <input type="text" id="fname" class="form-control" name="add_date" style="width:115px;height:25px" >
                    
                  </div>
                  
                    <label  class="col-lg-2  col-sm-3 control-label"><?=$this->lang->line("modify_date");?></label>
                    <div class="col-lg-3  col-sm-3">
                      <input type="text" id="fname" class="form-control" name="modify_date" style="width:115px;height:25px" >
                    </div>
                  
                 
                        
                         <div class="col-lg-2  col-md-5 col-sm-3">
                          <button type="submit" class="btn btn-primary" style="width:70px;height:32px;"><?=$this->lang->line("order_search");?></button>
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
                                                 <h3><?=$this->lang->line("sale_command_l");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2" style="color:smoke">

                                                 <h2><div id="del_type" class=" btn glyphicon glyphicon-minus animated rubberBand"  onclick=""></div></h2>
                                                 
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
                     

                      <!-- On cells (`td` or `th`) -->
                      <tr style="color:black">
                        <td class="warning"><label ><input class="checkbox" type="checkbox" name="check1" ></label></td>
                        <td class="warning" style="font-size:11pt" align="center" >#1255a</td>
                        <td class="warning" style="font-size:11pt" >นายอุดมเอก แต้จิ๊ว</td>
                        <td class="warning" style="font-size:11pt" >ชำระเงินแล้ว</td>
                        <td class="warning" style="font-size:11pt" >5000</td>
                        <td class="warning" style="font-size:11pt" >22/12/2014</td>
                        <td class="warning" style="font-size:11pt" >7/12/2014</td>
                        <td class="warning" style="font-size:15pt" >[ <a href="<?php echo site_url('backshop/modifyorder'); ?>" style="color: black;font-size:11pt"><?=$this->lang->line("modify");?></a> ]</td>
                        
                      </tr>
                      <tr style="color:black">
                        <td class="warning"><label ><input class="checkbox" type="checkbox" name="check2" ></label></td>
                        <td class="warning" style="font-size:11pt" align="center" >#1256a
                        </td>
                        <td class="warning" style="font-size:11pt" >นายธนากร พรพรรณนุกูล</td>
                        <td class="warning" style="font-size:11pt" >รอการชำระเงิน</td>
                        <td class="warning" style="font-size:11pt" >5000</td>
                        <td class="warning" style="font-size:11pt" >22/12/2014</td>
                        <td class="warning" style="font-size:11pt" >21/12/2014</td>
                        <td class="warning" style="font-size:15pt" >[ <a href="<?php echo site_url('backshop/modifyorder'); ?>" style="color: black;font-size:11pt"><?=$this->lang->line("modify");?></a> ]</td>
                        
                      </tr>
                  </table>
                </div>
                </form>

       <script type="text/javascript">
                checked=false;
                  function checkedAll (cko) {var aa= document.getElementById('cko'); if (checked == false)
                    {
                    checked = true
                    }
                    else {
                    checked = false
                    }
                    for (var i =0; i < aa.elements.length; i++){ aa.elements[i].checked = checked;}
                    }
        </script>
       
         
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
    
    </body>
    
    

   
    
</html>