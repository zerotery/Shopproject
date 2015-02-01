<html>

<head>

<title>TB Shop</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">

<meta http-equiv="Content-Type" content="text/html ; charset=utf-8">
<meta charset="UTF-8">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME2_URL;?>stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME2_URL;?>shortcodes.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME2_URL;?>transition.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap-datetimepicker.css">








<style type="text/css">

.divider-all {
  width: 80%;
  height: auto;
  padding-right: 0px;
  padding-left: 0px;
  
  margin-top: 0 !important;
  background-color: #F8F8FF;
  position: absolute;
  background:url("<?php echo logo_pic;?>bg_shop.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  z-index: 1;
  


  }
body{
  background:url("<?php echo logo_pic;?>bg_shop.jpg") no-repeat center center fixed;
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


    <div id="wrapper">


      
      
        <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand "><a  id="menu-toggle"  style="color:#FAEBD7" ><?=$this->lang->line("t2_menu");?><span id="main_icon" class="glyphicon glyphicon-th-list animated bounce"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar"> 
          <li class=" animated m_hover"><a class="animated-home fadeInRight2" href="<?php echo site_url('theme2/t2_home');?>"><?=$this->lang->line("t_home");?><span class="sub_icon glyphicon glyphicon-home "></span></a></li>
          <li class=" animated m_hover"><a class="animated-htb fadeInRight2" href="<?php echo site_url('theme2/t2_how2order');?>" ><?=$this->lang->line("t_hs");?><span class="sub_icon glyphicon glyphicon-question-sign " ></span></a></li>
          <li class=" active animated m_hover"><a class="animated-pay fadeInRight2" href="<?php echo site_url('theme2/t2_informpayment');?>" ><?=$this->lang->line("t_pay");?><span class="sub_icon glyphicon glyphicon-usd glyphicon-green"></span></a></li>
          <li class="animated m_hover"><a class="animated-about fadeInRight2" href="<?php echo site_url('theme2/t2_aboutus');?>"><?=$this->lang->line("t_aboutme");?><span class="sub_icon glyphicon glyphicon-pushpin"></span></a></li>
          <li class="animated m_hover"><a class="animated-contact fadeInRight2" href="<?php echo site_url('theme2/t2_contactus');?>"><?=$this->lang->line("t_contact");?><span class="sub_icon glyphicon glyphicon-envelope"></span></a></li>
          <li class=" active_c animated m_hover" >
              <a data-toggle="modal" data-target="#cartModal" class="animated-basket fadeInRight2 "><?=$this->lang->line("basket_t2");?>
                  <span class="badge badge-color " >3</span><i class=" sub_icon glyphicon glyphicon-shopping-cart glyphicon-sea"> </i>
              </a>
                       
          </li>
      
                      
                        
                    
          
                                   
          
        </ul>
      </div>


      <div class="divider-all">
        <div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-show">
                      
                    </div>
                    </div>
                    </div>
        <div class="bs-docs-section clearfix">
          <div class="row">
          <div class="col-lg-12">
             
        <!-- Page content -->
        <div id="page-content-wrapper">
            <section>
              <div id="divider-center"> 


              <header>
                
              </header>


            <div class="page-header-shop"></div>
                      <!-- Begin page content -->
               <div class="page-header-shop padding-0 breadcrumb-img ">
                    <div class="rowz ">
                      <div class="col-lg-12 col-md-12 col-sm-12 ">
                        
                            <ol class=" btn-group btn-breadcrumb breadcrumb-img margin-pad3">
                          
                              <li class="btn btn-danger"><a href="<?php echo site_url('theme2/t2_home');?>"  ><?=$this->lang->line("home");?></a></li>
                              <li class="btn btn-success" ><a href="<?php echo site_url('theme2/t2_informpayment');?>"  ><?=$this->lang->line("t_pay");?></a></li>
                        
                      
                            </ol> 
                         
                        
                      
                        

                      </div>
                      
                    </div>
                  </div>
                  
                  
                  
                  
                  
                  
                                              
                                               
                                             
            <div id="divider-content  ">                                   
              <div class="row">             
                 <div class="col-xs-3" >
                       <!-- left -->
                       
                       
                       <ul class="nav nav-stacked affix-top" id="sidebarz" >
                        <h3><i class="glyphicon glyphicon-book space"></i><?=$this->lang->line("category");?></h3>
                            
                                      <li><a href="<?php echo site_url('theme2/t2_category');?>"><i class="glyphicon glyphicon-star"></i><?=$this->lang->line("all_product");?> [0]</a></li>
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
                          
                          <form action="<?php echo site_url('cashshop/submit_order'); ?>" id="confirm_pay" name="confirmpayment"  method="post"  enctype="multipart/form-data" >
                            
                            <div class="form-group">
                            <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("order_number");?></label>
                            <div class=" col-xs-8 col-sm-8 mt10">
                             
                             <input type="text" id="number_order" name="number_order"   style="width:130px;height:25px" data-toggle="popover" data-trigger="hover " data-container="body" data-placement="right" data-content="<?=$this->lang->line("order_num_note");?>"  >
                             
                             
                             
                             
                           </div>
                         </div>
                            <div class="form-group">
                              <label  class="col-lg-3  col-sm-3 control-label animated fadeInDown mt10"  rowspan="2"><?=$this->lang->line("bank_acc_pay");?></label>
                              <div class="col-xs-8 col-sm-8 table-responsive">
                                <td><table class="table" >
                                  <tbody>
                                    <?php

                                    for($i=0;$i<count($bank);$i++){
                                      echo '<tr>';
                                      if($bank[$i]['owner_bank_select']==1){
                                        echo '<td><input type="radio" name="bank" id="bank" value="'.$bank[$i]['owner_bank_select'].'"></td><td>'.$this->lang->line("ktb").'</td><td>'.$bank[$i]['bank_account'].'</td><td>'.$bank[$i]['bank_branch'].'</td>';
                                        
                                      }else if($bank[$i]['owner_bank_select']==2){
                                        echo '<td><input type="radio" name="bank" id="bank" value="'.$bank[$i]['owner_bank_select'].'"></td><td>'.$this->lang->line("scb").'</td><td>'.$bank[$i]['bank_account'].'</td><td>'.$bank[$i]['bank_branch'].'</td>';
                                        
                                      }else if($result[$i]['owner_bank_select']==3){
                                        echo '<td><input type="radio" name="bank" id="bank" value="'.$bank[$i]['owner_bank_select'].'"></td><td>'.$this->lang->line("bkb").'</td><td>'.$bank[$i]['bank_account'].'</td><td>'.$bank[$i]['bank_branch'].'</td>';
                                        
                                      }else if($result[$i]['owner_bank_select']==4){
                                        echo '<td><input type="radio" name="bank" id="bank" value="'.$bank[$i]['owner_bank_select'].'"></td><td>'.$this->lang->line("tmb").'</td><td>'.$bank[$i]['bank_account'].'</td><td>'.$bank[$i]['bank_branch'].'</td>';
                                        
                                      }else if($result[$i]['owner_bank_select']==5){
                                        echo '<td><input type="radio" name="bank" id="bank" value="'.$bank[$i]['owner_bank_select'].'"></td><td>'.$this->lang->line("krungsri").'</td><td>'.$bank[$i]['bank_account'].'</td><td>'.$bank[$i]['bank_branch'].'</td>';
                                        
                                      }else if($result[$i]['owner_bank_select']==6){
                                        echo '<td><input type="radio" name="bank" id="bank" value="'.$bank[$i]['owner_bank_select'].'"></td><td>'.$this->lang->line("kbank").'</td><td>'.$bank[$i]['bank_account'].'</td><td>'.$bank[$i]['bank_branch'].'</td>';
                                        
                                      }else if($result[$i]['owner_bank_select']==7){
                                        echo '<td><input type="radio" name="bank" id="bank" value="'.$bank[$i]['owner_bank_select'].'"></td><td>'.$this->lang->line("uob").'</td><td>'.$bank[$i]['bank_account'].'</td><td>'.$bank[$i]['bank_branch'].'</td>';
                                      }
                                      echo '</tr>';
                                    }
                                    ?>
                                    
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
                             
                             <input type="text" id="price" name="price"   style="width:130px;height:25px"  >
                             
                             
                             
                             
                           </div>
                         </div>
                         <div class="form-group">
                          <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("name_pay");?></label>
                          <div class=" col-xs-8 col-sm-8 mt10">
                           
                           
                           <input type="text" id="name" name="name"  style="width:130px;height:25px"  >                     
                           
                           
                         </div>
                       </div>
                       <div class="form-group">
                        <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("surname_pay");?></label>
                        <div class="col-xs-8 col-sm-8 mt10">
                         
                         
                         <input type="text" id="surname" name="surname"   style="width:130px;height:25px"  >                   
                         
                         
                       </div>
                     </div>
                     <div class="form-group">
                      <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("email_pay");?></label>
                      <div class="col-xs-8 col-sm-8 mt10">
                       
                       
                        <input type="text" id="email" name="email"  style="width:130px;height:25px"  >                      
                        
                        
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
                          <span class="btn btn-info btn-file"><span class="fileinput-new"><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists"><?=$this->lang->line("change_pic");?></span><input type="file" name="tranfer" id="tranfer"></span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></a>
                        </div>
                      </div>                  
                      
                      
                    </div>
                  </div>

                  <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("add_shipping");?></label>
                                                     <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                                        <textarea type="text" id="add_shipping" name="add_shipping"   >    </textarea>                 
                                                                           
                                                                      
                                                </div>
                  </div>




                  <div class="form-group">
                    <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("detail_pay");?></label>
                    <div class="col-xs-8 col-sm-8 mt10">
                     
                     
                      <textarea type="text" id="detailpay" name="detailpay">    </textarea>                 
                      
                      
                    </div>
                  </div>

                  
                  <a href="#" id="btn_submit"><div  class="pull-right btn btn-info"><?=$this->lang->line("send_form");?></div></a>
                  
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


  



            
 

 <?php echo $this->load->view('footer/footer')?>
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
                                              <form id="order" name="orderinfo"  method="post"  enctype="multipart/form-data" >
                                          
                                              <div class="row">
                                                 
                                                          <div class="col-xs-12 col-sm-12 bborder" >
                                                          
                                                            

                                                               <div class="table-responsive ">
                                                                    <table class="table"   id="product-table" style="width:100%;border: 2px solid #eee">
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
                                                </form>

                                               
                                      </div>
                                      <div class="modal-footer" style="background-color:white ">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      
                                        
                                      
                                      </div>
                                    </div>
                                  </div>
                                </div>        
                  
<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
<script src="<?php echo JS_URL;?>bootstrap.js"></script>
<script src="<?php echo JS_THEME2;?>scripts.js"></script>
<script src="<?php echo JS_URL;?>moment.js"></script>
<script src="<?php echo JS_URL;?>bootstrap-datetimepicker.js"></script>


</script>



<script type="text/javascript">

            $(function () {
                $('#datetimepicker1').datetimepicker({pickTime: false});
                $('#datetimepicker2').datetimepicker({pickDate: false});
            });
</script>
<script type="text/javascript">

var re=<?php echo $re;?>;


if(re==1){
  $('#cartModal').modal('show');

  
}else{

}

$('#btn_submit').click(function(e) {
 
 //alert(status_order);
 $("#confirm_pay").submit();
 
});

$('input[type=number]').click(function(e) {

 $("#view_cart").submit();
 
});



$(document).ready(function() { 

  $("#view_cart").submit(function() {
    var myForm = document.forms.view_cart;
    var rowid_cart = myForm.elements['rowid[]'];
    var qty_cart  = myForm.elements['qty[]'];
    if(rowid_cart.length==null){
      var st=new Array();
      var st2=new Array();
      
      var rowid = rowid_cart.value;
      var qtycart  = qty_cart.value;
      st= rowid;
      st2=qtycart;
      //alert(st+" "+st2);
      //alert(rowid+" "+qtycart);
      $.post("<?php echo site_url();?>cashshop/update_cart", { 'row_cart[]':st,'qty_cart[]':st2,ajax: '1' },
        function(data){ 
          // Interact with returned data
          if(data == 'true'){
            
           location.reload();

            
          }else{
            alert("Product does not exist");
          }
        });


    }else{
      var myForm = document.forms.view_cart;
      var rowid_cart = myForm.elements['rowid[]'];
      var qty_cart  = myForm.elements['qty[]'];
      
       
       var st=new Array();
       var st2=new Array();
      for (var i = 0; i<rowid_cart.length; i++) {
        
          st[i]=rowid_cart[i].value;

          st2[i]=qty_cart[i].value;

     }
     //alert(st+" "+st2);
     $.post("<?php echo site_url();?>cashshop/update_cart", { 'row_cart[]':st,'qty_cart[]':st2,ajax: '1' },
        function(data){ 
          // Interact with returned data
          if(data == 'true'){

            location.reload();
          }else{
            alert("Product does not exist");
          }
        });
    }
      return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });

});




    </script>
    <script type="text/javascript">
      $("#menu-toggle").click(function(e) {
       e.preventDefault();
       $("#wrapper").toggleClass("active");});

    </script>

  


    

    

    

    
</body>


</html>