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
          <li class="active animated m_hover"><a class="animated-home fadeInRight2" href="<?php echo site_url('theme2/t2_home');?>"><?=$this->lang->line("t_home");?><span class="sub_icon glyphicon glyphicon-home glyphicon-blue"></span></a></li>
          <li class="animated m_hover"><a class="animated-htb fadeInRight2" href="<?php echo site_url('theme2/t2_how2order');?>" ><?=$this->lang->line("t_hs");?><span class="sub_icon glyphicon glyphicon-question-sign" ></span></a></li>
          <li class="animated m_hover"><a class="animated-pay fadeInRight2" href="<?php echo site_url('theme2/t2_informpayment');?>" ><?=$this->lang->line("t_pay");?><span class="sub_icon glyphicon glyphicon-usd"></span></a></li>
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

                    <div class="rowz">

                      <div class="col-lg-12 col-md-12 col-sm-12 ">


                      <ol class="btn-group btn-breadcrumb breadcrumb-img margin-pad3" >
                          <li class="btn btn-danger"><a href="<?php echo site_url('theme2/t2_home');?>"  ><?=$this->lang->line("home");?></a></li>
                          
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
                     <h2 id="sec0"><div id="divl" ><?=$this->lang->line("mbox");?></div> </h2>

                     <div class="row">

                      <div class="col-xs-12 col-sm-12 mborder" >
                        <div class="toey">
                         <?php 
                         for($i=0;$i<count($layout);$i++){
                           if($layout==0){ }else if($layout[$i]['type_layout']==1){echo $layout[$i]['layout_detail'];}
                         }
                         
                         ?> 

                         
                       </div>
                     </div>



                     
                   </div>
                   <h2 class="h2space"></h2>
                   <h2 id="sec1"><div id="divl" ><?=$this->lang->line("product");?></div> </h2>
                   <div class="row">
                     <?php



                     for($i=0;$i<count($product);$i++){
                      $attributes = array('id' => 'myform');
                      echo form_open('cashshop/add_cart',$attributes);

                      echo '<div class="col-xs-4 col-sm-4 ">';
                      echo  '<div class="box-product " >';
                      echo    '<div class="inner" >';
                      echo     '<div class="image thumbnailz " ><a href="#"><img style="height:150" src="'.product.$product[$i]['p_update_date'].'/'.$product[$i]['s_ID'].'/'.$product[$i]['p_ID'].'/'.$product[$i]['pic_name'].'" ></a>';
                      echo     '</div>';
                      echo      '<div class="name"><a href="#">'.$product[$i]['product_name'].'</a></div>';
                      echo     '<div class="price">'.'฿'.$product[$i]['p_price'].'</a></div>'; 
                      echo      '</div>';
                      echo form_hidden('shop_id', $product[$i]['s_ID']);
                      echo form_hidden('product_id', $product[$i]['p_ID']);                                    
                      echo     '<div  class="abs"  >';
                      echo     '<div class="cart ">';
                      echo      '<input type="submit" class="button1 animated fadeInLeft" value="">';
                      echo      '<a id="btn_add_cart" class="btn-detail ml10 animated fadeInRight " title="'.$this->lang->line("view_product").'" href="'.site_url('Shop/product/detail/').'/'.$product[$i]['s_ID'].'/'.$product[$i]['p_ID'].'"><span></span></a>';
                      echo      '</div>';         
                      echo      '</div>';   
                      echo      '</div>';   

                      echo      '</div>';
                      echo  form_close();

                    }

                    ?>
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
       
     
<?php echo $this->load->view('footer/footer');?>



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

//var re=0;
var re=<?php echo $re;?>;
var status_order=0;
if(re==1){
  $('#cartModal').modal('show');

  
}else{

}

$(document).ready(function() { 
 
    $("div.row form").submit(function() {
      // Get the product ID and the quantity 
      var s_id = $(this).find('input[name=shop_id]').val();
      var p_id = $(this).find('input[name=product_id]').val();
      //alert(s_id+" "+p_id);
      $.post("<?php echo site_url();?>cashshop/add_cart", { shop_id: s_id, product_id: p_id, ajax: '1' },
        function(data){ 
          // Interact with returned data
          if(data == 'true'){

            location.reload();

            
          }else{
            alert("Product does not exist");
          }
        });
      return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });

  });

$('input[type=number]').click(function(e) {
 window.status_order=1;
 //alert(status_order);
 $("#view_cart").submit();
 
});

$('#btn_submit_order').click(function(e) {
 window.status_order=2;
 //alert(status_order);
 $("#view_cart").submit();
 
});

//alert(status_order);


$(document).ready(function() { 

  $("#view_cart").submit(function() {
    if(status_order==1){
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
    }else if(status_order==2){
      //alert("eiei");
      var myForm = document.forms.view_cart;
      var s_id = myForm.elements['s_id[]'];
      var p_cart = myForm.elements['p_id[]'];
      var qty_cart  = myForm.elements['qty[]'];
      var o_detail  = myForm.elements['detail_order[]'];
      var post_product  = myForm.elements['post_product'];
    if(typeof(s_id) == "undefined"){
      alert("Product does not exist");
    }else{
      if(s_id.length==null){
      var st=new Array();
      var st2=new Array();
      var st3=new Array();
      var st4=new Array();
      var st5=new Array();
      
      var a1 = s_id.value;
      var a2 = p_cart.value;
      var a3 = qty_cart.value;
      var a4 = o_detail.value;
      var a5 = post_product.value;
      




      st= a1;
      st2=a2;
      st3=a3;
      st4=a4;
      st5=a5;
      //alert(st+" "+st2);
      //alert(rowid+" "+qtycart);
      $.post("<?php echo site_url();?>cashshop/insert_order", { 's_id_cart[]':st,'p_id_cart[]':st2,'qty_cart[]':st3,'o_cart[]':st4,'price_cart[]':st5,ajax: '1' },
        function(data){ 
          if(data == 'true'){
           
           <?php 
           $url=site_url('Shop/informpayment').'/'.$s_id;
           ?>
           window.location.assign('<?php echo $url;?>');

            
          }else if(data == 'email'){
            alert("Email Send have problem.");

          }else{
            alert("Product does not exist");
          }
        });
    
    }else{

      var st=new Array();
      var st2=new Array();
      var st3=new Array();
      var st4=new Array();
      var st5=new Array();
      for (var i = 0; i<s_id.length; i++) {
        st[i]= s_id[i].value;
        st2[i]=p_cart[i].value;
        st3[i]=qty_cart[i].value;
        st4[i]=o_detail[i].value;
        st5[i]=post_product.value;
      }  
      $.post("<?php echo site_url();?>cashshop/insert_order", { 's_id_cart[]':st,'p_id_cart[]':st2,'qty_cart[]':st3,'o_cart[]':st4,'price_cart[]':st5,ajax: '1' },
        function(data){ 
          // Interact with returned data
          if(data == 'true'){
           <?php 
           $url=site_url('Shop/informpayment').'/'.$s_id;
           ?>
           window.location.assign('<?php echo $url;?>');
           //location.reload();

          }else if(data == 'email'){
            alert("Email Send have problem.");

          }else{
            alert("Product does not exist.");
          }
        });

    }
  }
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