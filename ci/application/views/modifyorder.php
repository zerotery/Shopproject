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
      <hr width="100%">
<div class="bs-docs-section clearfix">

  
        <div class="row">
        <div class="col-lg-1"></div>
          <div class="col-lg-10" style="border-style:solid;border-width:2px;">
                 <div class="page-header-bp " >
                                              <div class="row">
                                              <div class="col-md-8 ">
                                                 <h3><?=$this->lang->line("detail_order");?></h3>
                                              </div>

                                            
                                             </div>
                                             </div>
     
                <form class="form-horizontal" name="product_type_select" id="modifyorder"   method="post" enctype="multipart/form-data">
                    <fieldset >

                               <div class="form-group col-lg-12">
                                     
                                         <ul class="nav nav-tabs nav-justified" id="myTab1">
                                            <li class="active"><a href="#home"><?=$this->lang->line("detail_order");?></a></li>
                                            
                                            <li><a href="#messages" data-easein="fadeInDown"><?=$this->lang->line("product_order");?></a></li>
                                            
                                          
                                        </ul>

                                        <div class="tab-content" id="tab-content1">
                                            <div class="tab-pane active" id="home">
                                             
                                              <div class="row">
                                                         <div class="well-lg bs-component   col-sm-6 col-md-4 col-lg-8" >
                                    
                                         
                                              
                                             <div class="page-header-bd">
                                              <div class="row">
                                              <div class="col-md-11 ">
                                                 <h3 id="datamember" ><?=$this->lang->line("detail_order");?></h3>
                                              </div>

                                            


                                              
                                             </div>
                                             </div>

                                                                     
                                               <div class="form-group ">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("ordercode");?></label>
                                              <div class="col-lg-5">
                                              <label  class="col-lg-3 control-label animated fadeInLeft">A111</label>
                                                
                                                
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("customer_show");?></label>
                                              <div class="col-lg-5">
                                              <label  class="col-lg-8 control-label animated fadeInLeft">นายธนากร พรพรรณนุกูล</label>
                                                
                                                
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("order_sprice");?></label>
                                              <div class="col-lg-5">
                                              <label  class="col-lg-3 control-label animated fadeInLeft">3000</label>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("ip_cusorder");?></label>
                                              <div class="col-lg-5">
                                              <label  class="col-lg-3 control-label animated fadeInLeft">192.168.1.1</label>
                                              </div>
                                            </div>
                                           
                                            <div class="form-group">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("adddates");?></label>
                                              <div class="col-lg-5">
                                              <label  class="col-lg-3 control-label animated fadeInLeft">22/12/2014</label>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("modidates");?></label>
                                              <div class="col-lg-5">
                                              <label  class="col-lg-3 control-label animated fadeInLeft">23/12/2014</label>

                                              </div>
                                            </div>



                                     
                                            <div class="form-group">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("email");?></label>
                                              <div class="col-lg-5">
                                              <label  class="col-lg-5 control-label animated fadeInLeft">bas@hotmail.com</label>

                                               </div>
                                            </div>

                                            
                                            <div class="form-group">
                                              <label  class="col-lg-3 control-label animated fadeInLeft"><?=$this->lang->line("order_status");?></label>
                                              <div class="col-lg-5" style="color:black">
                                                  <select  name="order_status" style="width:130px;height:25px" class=" animated fadeInDown" id="ostat">
                                                    <option><?=$this->lang->line("wait_payment");?></option>
                                                    <option><?=$this->lang->line("complete_payment");?></option>
                                                
                                                  </select>
                                                
                                               
                                              </div>
                                            </div>
                                           

                                           

                                      
                                   </div>

                                   
                                                                </div>
                                                           
                                                            </div>
                                                            
                                                          

                                     


                                            <div class="tab-pane" id="messages">
                                                  <div class="form-group"></div>

                                                      
                                                    <form class="form-group " >
                                                      

                                                       <div class="table-responsive animated fadeInDown">
                                                            <table class="table">
                                                              <!-- On rows -->
                                                                <tr class="active">
                                                                  
                                                                   <th class="info"> <center><font color="#FFFFFF"size="4pt"><?=$this->lang->line("product_code");?></font> </center></th>
                                                                    <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("product_name_s");?></font></th>
                                                                    <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("p_quantity");?></font></th>
                                                                    <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("product_price");?></font></th>
                                                                    <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("order_price");?></font></th>
                                                                    <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("order_detail");?></font></th>
                                                                    
                                                                   </tr>
                                                               

                                                                <!-- On cells (`td` or `th`) -->
                                                                <tr style="color:black">
                                                                 
                                                                  <td class="warning" style="font-size:11pt" align="center" >#1255a</td>
                                                                  <td class="warning" style="font-size:11pt" >ดสื้อยืด</td>
                                                                  <td class="warning" style="font-size:11pt" >5</td>
                                                                  <td class="warning" style="font-size:11pt" >1000</td>
                                                                  <td class="warning" style="font-size:11pt" >5000</td>
                                                                  <td class="warning" style="font-size:11pt" > size เสื้อ m=3ตัว s=2ตัว ส่งมาเร็วๆนะคับ</td>
                                                                 
                                                                </tr>
                                                                <tr style="color:black">
                                                               
                                                                  <td class="warning" style="font-size:11pt" align="center" >#1256a
                                                                  </td>
                                                                  <td class="warning" style="font-size:11pt" >เสื้อjacket</td>
                                                                  <td class="warning" style="font-size:11pt" >1</td>
                                                                  <td class="warning" style="font-size:11pt" >5000</td>
                                                                  <td class="warning" style="font-size:11pt" >5000</td>
                                                                  <td class="warning" style="font-size:11pt" >jacket size m 1ตัวครับ</td>
                                                                 
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

                                  <div class="col-lg-9"></div>
                                  <div class="form-group" align="center">


                                   <div class="row" >

                                  <div class="col-md-1 ">

                                          <h4><input type="submit" class="btn btn-primary animated swing" id="btn_add" name="btnadd"  value="<?=$this->lang->line("save");?>" /></h4>

                                           
                                   </div >
                                     <div class="col-md-1 "   >
                                         <h4> <a class="btn btn-danger animated swing" style="color:white" href="<?php echo site_url('backshop/orderManage');?>"><?=$this->lang->line("cancel");?></a></h4>
                                     </div>
                                           
                                </div>
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
   

  
    
    
    </body>
    
    

   
    
</html>