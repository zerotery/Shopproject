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
          <li class=" animated m_hover"><a class="animated-pay fadeInRight2" href="<?php echo site_url('theme2/t2_informpayment');?>" ><?=$this->lang->line("t_pay");?><span class="sub_icon glyphicon glyphicon-usd"></span></a></li>
          <li class="active animated m_hover"><a class="animated-about fadeInRight2" href="<?php echo site_url('theme2/t2_aboutus');?>"><?=$this->lang->line("t_aboutme");?><span class="sub_icon glyphicon glyphicon-pushpin glyphicon-red"></span></a></li>
          <li class="animated m_hover"><a class="animated-contact fadeInRight2" href="<?php echo site_url('theme2/t2_contactus');?>"><?=$this->lang->line("t_contact");?><span class="sub_icon glyphicon glyphicon-envelope "></span></a></li>
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
                              <li class="btn btn-success" ><a href="<?php echo site_url('theme2/t2_aboutus');?>"  ><?=$this->lang->line("t_aboutme");?></a></li>
                              
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
           <h2 id="sec0"><div><?=$this->lang->line("abox");?></div> </h2>

                <div class="row">
                   
                            <div class="col-xs-12 col-sm-12 aborder" >
                            
                              <div class="form-group">
                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("shop_name");?></label>
                                    <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                        <label type="text" id="shopname" class="animated fadeInLeft"   style="width:130px;height:25px"  >Bememoriez</label>                   
                                                                           
                                                                      
                                </div>
                              </div>
                              <div class="form-group">
                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("url_name2");?></label>
                                    <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                        <label type="text" id="url" class="animated fadeInLeft"   style="width:130px;height:25px"  > www.myaday.net/Project/TBShop/Bememoriez</label>                  
                                                                           
                                                                      
                                </div>
                              </div>

                              <div class="form-group">
                                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("detail_pay");?></label>
                                                     <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                                        <label type="text" class="animated fadeInLeft"  id="detailshop">  จำหน่ายเสื้อแจ็คเก็ต กางเกง กระเป๋า รองเท้า เข็มขัด หมวก กระเป๋าเดินทาง ถุงนอน อุปกรณ์เดินป่า อุปกรณ์เดินทางท่องเที่ยว  
                                                        </label>                 
                                                                           
                                                                      
                                                </div>
                                              </div>

                              <div class="form-group">
                                <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("s_fanpage");?></label>
                                    <div class="col-xs-8 col-sm-8 mt10">
                                                 
                                                   
                                        <label type="text" id="fanpage" class="animated fadeInLeft"  style="width:130px;height:25px"  > facebook.com/ohmyarmy</label>                  
                                                                           
                                                                      
                                </div>
                              </div>
                              <div class="row">
          <div class="col-lg-12  ">
             <div class="page-header-show">
                      
                    </div>
                    </div>
                    </div>
                              
                            </div>

                          
                            </div>
                            <h2 id="sec0"><div id="divl" ><?=$this->lang->line("mbox");?></div> </h2>

                                <div class="row">
                                   
                                            <div class="col-xs-12 col-sm-12 aborder" >
                                            
                                              <label id="message"></label>

                                              
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
    <script type="text/javascript">
      $("#menu-toggle").click(function(e) {
       e.preventDefault();
       $("#wrapper").toggleClass("active");});

    </script>

  

    

    

    

    
</body>


</html>