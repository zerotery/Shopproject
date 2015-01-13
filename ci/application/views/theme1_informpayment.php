<html>
    
<head>
<title>TB Shop - Registration</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">

<meta http-equiv="Content-Type" content="text/html ; charset=utf-8">
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>shortcodes.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>transition.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap-datetimepicker.css">










<style type="text/css">
body{
  background:url("<?php echo logo_pic;?>reg_bg.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

 }

</style>
<style type="text/css">
header {
  background: url("<?php echo logo_pic;?>header1.jpg") no-repeat center top ; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    vertical-align: middle;

}


</style>



</head>

<body>

<?php echo $this->load->view('header/navbar_nlog')?>




<div class="divider-all" >
<div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-show">
                      
                    </div>
                    </div>
                    </div>



<div class="bs-docs-section clearfix">

        <div class="row">
          <div class="col-lg-12">
                <!-- Wrap all page content here -->
                <section>
              <div id="divider-left" class="padding-0" >
                
              </div></section>

              <section class=" affix-top2">
 
              <div  id="divider-right " >

                  <div class="col-xs-12 col-sm-12  " >             
                  <a  data-toggle="modal" data-target="#cartModal"><ul class="nav nav-stacked affix-top " id="cart" >
                           <h3 class="color cart-margin"><i class="glyphicon glyphicon-shopping-cart space"></i><?=$this->lang->line("cart");?>
                           
                           <li><label class="color">0</label><?=$this->lang->line("cart_count");?></li></h3>
                                                                              
                              
                                                                                        


                   </ul></a>                                                                                                       
                  </div> 
              </div>
              </section>
              <section>
              <div id="divider-center"> 


                      <header>
                          
                      </header>

              <div id="divider-nav">
                 <div class="col-xs-12 padding-0">
                      <!-- Fixed navbar -->
                      <div class="navbar navbar-custom navbar-inverse">
                          

                 
                              <ul class="nav navbar-nav nav-justified">
                                <li ><a href="<?php echo site_url('theme1/home');?>"><?=$this->lang->line("t_home");?></a></li>
                                <li ><a href="<?php echo site_url('theme1/how2order');?>" ><?=$this->lang->line("t_hs");?></a></li>
                                <li class="active"><a href="<?php echo site_url('theme1/informpayment');?>" ><?=$this->lang->line("t_pay");?></a></li>
                                <li ><a href="<?php echo site_url('theme1/aboutus');?>"><?=$this->lang->line("t_aboutme");?></a></li>
                                <li><a href="<?php echo site_url('theme1/contactus');?>"><?=$this->lang->line("t_contact");?></a></li>
                               
                             
                              </ul>
                           
                       
                      </div><!--/.navbar -->

                   </div>
              </div>

          
                      <!-- Begin page content -->
               <div class="page-header-shop padding-0">
                    <div class="rowz">
                      <div class="col-lg-8 col-md-7 col-sm-6">

                      <ol class="breadcrumb-shop" >
                          <li><a href="<?php echo site_url('theme1/home');?>"  ><?=$this->lang->line("t_home");?></a></li>
                          <li><a href="<?php echo site_url('theme1/informpayment');?>"  ><?=$this->lang->line("t_pay");?></a></li>
                      </ol>
                      
                      
                        
                      <!--<div class="col-lg-4 col-md-5 col-sm-6">
                          <h6>What the ?</h6>
                      </div>-->
                    </div>
                     
                  </div>
                </div>
   
                  
                      
                
                      
                          
                     
  
  

                      

                                              
                                               
                                             
            <div id="divider-content  ">                                   
              <div class="row">             
                 <div class="col-xs-3" >
                     <!-- left -->
                    
                            
                       <ul class="nav nav-stacked affix-top" id="sidebar" >
                        <h3><i class="glyphicon glyphicon-book space"></i><?=$this->lang->line("category");?></h3>
                            
                                      <li><a href="<?php echo site_url('theme1/category');?>"><i class="glyphicon glyphicon-star"></i><?=$this->lang->line("all_product");?> [0]</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-gift"></i>Fashion [0]</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-gift"></i>etc...</a></li>
                            
                                      


                                    </ul>
                                    
                                 
                                    
                </div> 
                                   
                                
     <div class="col-xs-9  ">
            <div class="row">
          <div class="col-lg-12  ">
           <div class="page-header-s">
                    
                    </div>
              </div>
          </div>
           
                           

          <h2 id="sec2"><div><?=$this->lang->line("pbox_c");?></div> </h2>

                <div class="row">
                   
                            <div class="col-xs-12 col-sm-12 bborder" >
                            
                              <form id="confirm_pay" name="confirmpayment"  method="post"  enctype="multipart/form-data" >
                                              <div class="form-group">
                                                    <label  class="col-lg-3  col-sm-3 control-label animated fadeInDown"  rowspan="2"><?=$this->lang->line("bank_acc_pay");?></label>
                                                       <div class="col-xs-8 col-sm-8 table-responsive">
                                                          <td><table class="table" >
                                                              <tbody>
                                                              

                                                              <tr>
                                                              <td><input type="radio" name="bank" ></td><td>ธนาคารกสิกรไทย</td><td>6112061035</td><td>สาขาอาคารเสริมมิตร</td>
                                                              </tr>
                                                              <tr>
                                                              <td><input type="radio" name="bank" ></td><td>ธนาคารกรุงเทพ</td><td>1017675115</td><td>สาขาใหญ่สีลม</td>
                                                              </tr>
                                                              <tr>
                                                              <td><input type="radio" name="bank" ></td><td>ธนาคารไทยพาณิชย์</td><td>0142735993</td><td>สาขาพหลโยธินเพลส</td>
                                                              </tr>
                                                              <tr>
                                                              <td><input type="radio" name="bank" ></td><td>ธนาคารกรุงไทย</td><td>0810084309</td><td>สาขาสี่แยกอโศก</td>
                                                              </tr>
                                                              </tbody>
                                                              </table>
                                                          </td>
                                                   
                                                                            
                                                                           
                                                                      
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown"><?=$this->lang->line("bank_pay_date");?></label>
                                                     <div class="col-lg-8  col-sm-8">
                                                        
                                                        <input type="text" id="datetimepicker1" class="form-control" name="payment_date"  style="width:130px;height:25px" data-date-format="YYYY-MM-DD"  >
                                                         
                                                      
                    
                                                                                   
                                                   
                                                                            
                                                                           
                                                                      
                                                </div>
                                              </div>
                                              <div class="form-group  ">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("bank_pay_time");?></label>
                                                     <div class="col-lg-8 col-sm-8 mt10 ">
                                                 
                                                           
                                                        <input type="text" id="datetimepicker2" class="form-control" name="payment_time"  style="width:130px;height:25px" data-date-format="hh:mm A"  >
                                                        
                                                                            
                                                                           
                                                                      
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("bank_pay_price");?></label>
                                                     <div class=" col-xs-8 col-sm-8 mt10">
                                                 
                                                   <input type="text" id="price"   style="width:130px;height:25px"  >
                                                        
                                                                            
                                                                           
                                                                      
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("name_pay");?></label>
                                                     <div class=" col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                                       <input type="text" id="name"   style="width:130px;height:25px"  >                     
                                                                           
                                                                      
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("surname_pay");?></label>
                                                     <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                                         <input type="text" id="surname"   style="width:130px;height:25px"  >                   
                                                                           
                                                                      
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("email_pay");?></label>
                                                     <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                                      <input type="text" id="email"   style="width:130px;height:25px"  >                      
                                                                           
                                                                      
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("evidence_pay");?></label>
                                                     <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                                         
                                                         <div class="fileinput fileinput-new" data-provides="fileinput" id="bgpop"> 
                                                            <div class="fileinput-new thumbnail img-responsive" style="width: 180px; height: 180px; " >
                                                              <img src="<?php echo logo_pic;?>item.png" class="img-responsive" style="width: 180px; height: 180px; ">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-responsive" style="width: 180px; height: 180px;"></div>
                                                            <div>
                                                              <span class="btn btn-info btn-file"><span class="fileinput-new"><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists"><?=$this->lang->line("change_pic");?></span><input type="file" name="select_shopbg"></span>
                                                              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                                                            </div>
                                                          </div>                  
                                                                           
                                                                      
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("detail_pay");?></label>
                                                     <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                                        <textarea type="text" id="detailpay"    >    </textarea>                 
                                                                           
                                                                      
                                                </div>
                                              </div>

                                 
                                     <a href="<?php echo site_url('theme1/informpayment');?>"><div  class="pull-right btn btn-info"><?=$this->lang->line("send_form");?></div></a>
                              
                              </form>
                               
                            </div>

                          
                            </div>
                            
                   <div class="row">
          <div class="col-lg-12  ">
           <div class="page-header-x">
                    
                    </div>
             <div class="page-header">
                    
                    </div>
                    </div>

                    </div>                                     
                            
      </div><!--/col-->             
            <div class="row">
          <div class="col-lg-12  ">
           
             <div class="page-header-s">
                    
                    </div>
                    </div>

                    </div>  
            </div>
          </div>       

          
    



                        


  
  </div>
  </section>
  </div> 
  </div>
  </div>  
  </div>              

  



<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>
<!-- Modal cart 1-->
                                <div  class="modal animated pulse" data-easein="pulse" data-easeout="rollOut"  id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg " style="font-size: 11px;letter-spacing: 0.2em;text-align: center;text-transform: uppercase;background-color:white">
                                    <div class="modal-content"style="background-color:white ">
                                      <div class="modal-header"style="background-color:white ">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel" style="color:#696969;"><?=$this->lang->line("basket");?></h4>
                                      </div>
                                      <div class="modal-body" style="background-color:white ">
                                          
                                              <div style="text-transform: none;color:black;font-size:10pt;" align="left"><?=$this->lang->line("cartbox1");?>(<?=$this->lang->line("cartbox2");?> <label class="space2">0</label><?=$this->lang->line("cart_count");?>)</div>

                                              <div class="row">
                                                 
                                                          <div class="col-xs-12 col-sm-12 bborder" >
                                                          
                                                            <form id="order" name="orderinfo"  method="post"  enctype="multipart/form-data" >
                                          

                                                               <div class="table-responsive ">
                                                                    <table class="table" id="product-table" style="width:100%;border: 2px solid #eee">
                                                                      <!-- On rows -->
                                                                        <tr class="active"   >
                                                                           
                                                                            <th width="20%" style="font-size:10pt "  class="warning tcolor "><?=$this->lang->line("productname");?></th>
                                                                            <th width="20%" style="font-size:10pt"  class="warning tcolor"><?=$this->lang->line("productprice");?></th>
                                                                            <th width="20%" style="font-size:10pt"  class="warning tcolor "><?=$this->lang->line("qpro");?></th>
                                                                            <th width="20%" style="font-size:10pt"  class="warning tcolor "><?=$this->lang->line("ps_pro");?></th>
                                                                            <th width="20%" style="font-size:10pt"  class="warning tcolor "><?=$this->lang->line("order_detail");?></th>
                                                                            <th width="5%" class="warning tcolor"></th>

                                                                           </tr>
                                                                            <tr id="trpro">
                                                                                <td style="border: 1px solid #eee" ><font>รองเท้า Merrell ลาย Forest camouflage</font></td>
                                                                                <td style="border: 1px solid #eee"><span >1890.00</span><?=$this->lang->line("monetary");?></td>
                                                                                <td style="border: 1px solid #eee"><font ><input type="number" class="quantity" name="quantity" min="1" max="1000" value="1" ></font></td>
                                                                                <td  style="border: 1px solid #eee"><span class="total" id="s_price">1890.00</span><font class="space2"><?=$this->lang->line("monetary");?></font></td>
                                                                                <td  style="border: 1px solid #eee"><textarea id="detail_order" name="detail_order"></textarea></td>
                                                                                <td style="border: 1px solid #eee"><div id="delete_order" class="btn glyphicon glyphicon-trash btn-remove " style="color:red"></div></td>
                                                                                 
                                                                            </tr>
                                                                              <tr id="trprosum">
                                                                                 
                                                                                 <td width="40%" style="border: 1px solid #eee" colspan="2" align="right"><font ><?=$this->lang->line("ps_proall");?></font></td>  
                                                                                 <td width="20%" style="border: 1px solid #eee" colspan="2" align="center"><span id="sumary">1890.00</span><?=$this->lang->line("monetary");?></td>
                                                                                 <td colspan="2"></td>      
                                                                              </tr>
                                                                           
                                                                           
                                                                        
                                                                    </table>


                                                                  </div>

                                                            </form>
                                                          </div>
                                                </div>

                                                <div style="text-transform: none;color:black;font-size:10pt;" align="left"><?=$this->lang->line("send_pro");?></div>

                                              <div class="row">
                                                 
                                                          <div class="col-xs-12 col-sm-12 bborder" >
                                                          
                                                            <form id="order" name="orderinfo"  method="post"  enctype="multipart/form-data" >
                                          

                                                               <div class="table-responsive ">
                                                                    <td><table class="table" style="width:100%;border: 2px solid #eee" >
                                                              <tbody>
                                                              
                                                                <tr class="active"  >
                                                                           
                                                                            <th width="20%" style="font-size:10pt "  class="warning tcolor" colspan="2"><?=$this->lang->line("send_postcode");?></th>
                                                                            <th width="20%" style="font-size:10pt"  class="warning tcolor"><?=$this->lang->line("send_postcode_p");?></th>
                                                                            <th width="20%" style="font-size:10pt"  class="warning tcolor"><?=$this->lang->line("send_postcode_all");?></th>
                                                                       
                                                                          

                                                                </tr>
                                                              <tr>
                                                              <td><input type="radio" name="post" id="registered" ></td><td><?=$this->lang->line("domestic_registered");?></td><td>+ 0.00 <font class="space2"><?=$this->lang->line("monetary");?></font></td><td>1890.00<font class="space2"><?=$this->lang->line("monetary");?></font></td>
                                                              </tr>
                                                              <tr>
                                                              <td><input type="radio" name="post" id="ems"></td><td><?=$this->lang->line("domestic_ems");?></td><td>+ 80.00 <font class="space2"><?=$this->lang->line("monetary");?></font></td><td>1970.00<font class="space2"><?=$this->lang->line("monetary");?></font></td>
                                                              </tr>
                                                             
                                                              </tbody>
                                                              </table>
                                                          </td>


                                                                  </div>
                                                                   <a href="<?php echo site_url('theme1/informpayment');?>"><div  class="pull-right btn btn-info"><?=$this->lang->line("send_order");?></div></a>
                              
                                                            </form>
                                                          </div>
                                                </div>

                                  




                                      </div>
                                      <div class="modal-footer" style="background-color:white ">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      
                                      </div>
                                    </div>
                                  </div>
                                </div>
 <?php echo $this->load->view('footer/footer')?>
                      


                     







<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
<script src="<?php echo JS_URL;?>bootstrap.js"></script>

<script src="<?php echo JS_THEME1;?>scripts.js"></script>
<script src="<?php echo JS_URL;?>moment.js"></script>
<script src="<?php echo JS_URL;?>bootstrap-datetimepicker.js"></script>




<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({pickTime: false});
                $('#datetimepicker2').datetimepicker({pickDate: false});
            });
</script>

<script type="text/javascript">

       $(document).ready(function () {
    
            $('#product-table').on( 'click', '.btn-remove', function( event ) {
                var $tr = $("#trpro").closest('tr').css("display","none");
                $tr.find('.quantity').val( '0' );
                $tr.find('.total').text( '0.00' );
                

                
            });

            $('#sumary').html - $("#s_price").html();
        });






    </script>

</body>


</html>