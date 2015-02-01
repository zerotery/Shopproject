<html>

<head>

  <title>TB Shop - Shop Online</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">

  <meta http-equiv="Content-Type" content="text/html ; charset=utf-8">
  <meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>stylesheet.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>shortcodes.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME1_URL;?>transition.css">









  <style type="text/css">
  .divider-all {
    width: 100%;
    height: auto;
    padding-right: 0px;
    padding-left: 0px;

    margin-top: 0 !important;
    background-color: #F8F8FF;
    position: absolute;
    background:url("<?php echo shop.'/'.$s_id.'/'.$pic_bg;?>") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    z-index: 1;



  }
  body{
    background:url("<?php echo shop.'/'.$s_id.'/'.$pic_bg;?>") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

  }

  </style>
  <style type="text/css">
  header {
    background: url("<?php echo shop.'/'.$s_id.'/'.$pic_header;?>") no-repeat center top ; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    vertical-align: middle;

  }


  </style>



</head>

<body>

  <?php echo $this->load->view('header/navbar_log')?>




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

             <?php echo $this->load->view('theme1_cart')?>
           </section>
           <section>
            <div id="divider-center"> 


              <header>

              </header>

              <div id="divider-nav">
               <div class="col-xs-12 padding-0">
                <!-- Fixed navbar -->
                <div class="navbar navbar-custom navbar-inverse">


                  <?php
                  if($layout==0){
                    echo '<ul class="nav navbar-nav nav-justified">';
                    echo '<li class="active"><a href="'.site_url('Shop/home').'/'.$s_id.'/'.'1'.'">'.$this->lang->line("t_home").'</a></li>';
                    echo '<li><a href="'.site_url('Shop/how2order').'/'.$s_id.'">'.$this->lang->line("t_hs").'</a></li>';
                    echo '<li><a href="'.site_url('Shop/informpayment').'/'.$s_id.'">'.$this->lang->line("t_pay").'</a></li>';
                    echo '<li><a href="'.site_url('Shop/aboutus').'/'.$s_id.'">'.$this->lang->line("t_aboutme").'</a></li>';
                    echo '<li><a href="'.site_url('Shop/contactus').'/'.$s_id.'">'.$this->lang->line("t_contact").'</a></li>';
                    echo '</ul>';
                  }else{
                    echo '<ul class="nav navbar-nav nav-justified">';
                    for($i=0;$i<count($layout);$i++){

                      if($layout[$i]['type_layout']==1){
                        echo '<li class="active"><a href="'.site_url('Shop/home').'/'.$s_id.'/'.'1'.'">'.$this->lang->line("t_home").'</a></li>';
                      }else if($layout[$i]['type_layout']==2){
                        echo '<li><a href="'.site_url('Shop/how2order').'/'.$s_id.'">'.$this->lang->line("t_hs").'</a></li>';
                      }else if($layout[$i]['type_layout']==3){
                        echo '<li><a href="'.site_url('Shop/informpayment').'/'.$s_id.'">'.$this->lang->line("t_pay").'</a></li>';
                      }else if($layout[$i]['type_layout']==4){
                        echo '<li><a href="'.site_url('Shop/aboutus').'/'.$s_id.'">'.$this->lang->line("t_aboutme").'</a></li>';
                      }else if($layout[$i]['type_layout']==5){
                        echo '<li><a href="'.site_url('Shop/contactus').'/'.$s_id.'">'.$this->lang->line("t_contact").'</a></li>';
                      }

                    }
                    echo '</ul>';
                  }
                  ?>

                </div><!--/.navbar -->

              </div>
            </div>


            <!-- Begin page content -->
            <div class="page-header-shop padding-0">
              <div class="rowz">
                <div class="col-lg-8 col-md-7 col-sm-6">

                  <ol class="breadcrumb-shop" >
                    <li><a href="<?php echo site_url('Shop/home').'/'.$s_id.'/'.'1';?>"  ><?=$this->lang->line("home");?></a></li>
                    <li><a href="<?php echo site_url('Shop/product/all').'/'.$s_id;?>"  ><?=$this->lang->line("all_product");?></a></li>
                    <li><a href="<?php echo site_url('Shop/product').'/'.$namecate[0]['product_category_name'].'/'.$s_id.'/'.$category_id;?>"  ><?=$namecate[0]['product_category_name'];?></a></li>
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

                        <li><a href="<?php echo site_url('Shop/product/all').'/'.$s_id;?>"><i class="glyphicon glyphicon-star"></i><?=$this->lang->line("all_product");?> [<?php echo $all_product;?>]</a></li>
                        <?php
                        for($i=0;$i<count($cate_product);$i++){
                          echo '<li><a href="'.site_url('Shop/product').'/'.$cate_product[$i]['product_category_name'].'/'.$s_id.'/'.$cate_product[$i]['product_category_ID'].'"><i class="glyphicon glyphicon-gift"></i>'.$cate_product[$i]['product_category_name']." ".'['.$cate_product[$i][0].']'.'</a></li>';

                        }

                        ?>





                      </ul>



                    </div> 


                    <div class="col-xs-9  ">


                      <div class="h2space"></div>
                      <h2 id="sec1"><?=$namecate[0]['product_category_name'];?> [<?php echo count($select_product);?>] </h2>
                      <div class="row">
                      <?php

                      
                      if(!empty(count($select_product))){
                        
                         for($i=0;$i<count($select_product);$i++){

                        $attributes = array('id' => 'myform');
                        echo form_open('cashshop/add_cart',$attributes);
                        echo '<div class="col-xs-4 col-sm-4 ">';
                        echo  '<div class="box-product " >';
                        echo    '<div class="inner" >';
                        echo     '<div class="image thumbnailz " ><a href="#"><img style="height:150" src="'.product.$select_product[$i]['p_update_date'].'/'.$select_product[$i]['s_ID'].'/'.$select_product[$i]['p_ID'].'/'.$select_product[$i]['pic_name'].'" ></a>';
                        echo     '</div>';
                        echo      '<div class="name"><a href="#">'.$select_product[$i]['product_name'].'</a></div>';
                        echo     '<div class="price">'.'฿'.$select_product[$i]['p_price'].'</a></div>'; 
                        echo      '</div>';
                        echo form_hidden('shop_id', $select_product[$i]['s_ID']);
                        echo form_hidden('product_id', $select_product[$i]['p_ID']);                                  
                        echo     '<div  class="abs"  >';
                        echo     '<div class="cart ">';
                        echo     '<input type="submit" class="button1 animated fadeInLeft" value="">';
                        echo      '<a id="btn_add_cart" class="btn-detail ml10 animated fadeInRight " title="'.$this->lang->line("view_product").'" href="'.site_url('Shop/product/detail/').'/'.$select_product[$i]['s_ID'].'/'.$select_product[$i]['p_ID'].'"><span></span></a>';
                        echo      '</div>';         
                        echo      '</div>';   
                        echo      '</div>';   

                        echo      '</div>';
                        echo  form_close();

                      }
                      
                      }else{
                        echo '<div class="row">';
                        echo      '</div>';
                      }
                     
                //  }







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





<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>
<!-- Modal cart 1-->
<?php echo $this->load->view('theme1_cart_detail');?>
<?php echo $this->load->view('footer/footer')?>











<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js" ></script>
<script type="text/javascript" src="<?php echo JS_URL;?>bootstrap.js"></script>

<script type="text/javascript" src="<?php echo JS_THEME1;?>scripts.js"></script>
<script type="text/javascript">
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
            alert("Product does not exist");
          }
        });

    }
  }
  }

      return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });

});






</script>
</body>


</html>