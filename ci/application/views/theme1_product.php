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
  <link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>jackbox.min.css">










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
                    echo '<li><a href="'.site_url('Shop/home').'/'.$s_id.'/'.'1'.'">'.$this->lang->line("t_home").'</a></li>';
                    echo '<li><a href="'.site_url('Shop/how2order').'/'.$s_id.'">'.$this->lang->line("t_hs").'</a></li>';
                    echo '<li><a href="'.site_url('Shop/informpayment').'/'.$s_id.'">'.$this->lang->line("t_pay").'</a></li>';
                    echo '<li><a href="'.site_url('Shop/aboutus').'/'.$s_id.'">'.$this->lang->line("t_aboutme").'</a></li>';
                    echo '<li><a href="'.site_url('Shop/contactus').'/'.$s_id.'">'.$this->lang->line("t_contact").'</a></li>';
                    echo '</ul>';
                  }else{
                    echo '<ul class="nav navbar-nav nav-justified">';
                    for($i=0;$i<count($layout);$i++){

                      if($layout[$i]['type_layout']==1){
                        echo '<li><a href="'.site_url('Shop/home').'/'.$s_id.'/'.'1'.'">'.$this->lang->line("t_home").'</a></li>';
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
                    <?php if($this->session->userdata('s_in')==0){
                     echo '<li><a href="'.site_url('Shop/home').'/'.$s_id.'/'.'1'.'"  >'.$this->lang->line("home").'</a></li>';
                     echo '<li><a href="'.site_url('Shop/product/detail').'/'.$s_id.'/'.$p_id.'"  >'.$product_detail[0]['product_name'].'</a></li>';
                   }else if($this->session->userdata('s_in')==1){
                     echo '<li><a href="'.site_url('Shop/home').'/'.$s_id.'/'.'1'.'"  >'.$this->lang->line("home").'</a></li>';
                     echo '<li><a href="'.site_url('Shop/product/all').'/'.$s_id.'"  >'.$this->lang->line("all_product").'</a></li>';
                     echo '<li><a href="'.site_url('Shop/product/detail').'/'.$s_id.'/'.$p_id.'">'.$product_detail[0]['product_name'].'</a></li>';
                   }else{
                     echo '<li><a href="'.site_url('Shop/home').'/'.$s_id.'/'.'1'.'"  >'.$this->lang->line("home").'</a></li>';
                     echo '<li><a href="'.site_url('Shop/product/all').'/'.$s_id.'"  >'.$this->lang->line("all_product").'</a></li>';
                     echo '<li><a href="'.site_url('Shop/product').'/'.$namecate[0]['product_category_name'].'/'.$s_id.'/'.$category_id.'">'.$namecate[0]['product_category_name'].'</a></li>';
                     echo '<li><a href="'.site_url('Shop/product/detail').'/'.$s_id.'/'.$p_id.'"  >'.$product_detail[0]['product_name'].'</a></li>';
                   }


                   ?>
                   
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
                      <div class="row">

                        <div class="col-lg-12  ">
                         <div class="page-header-s">

                         </div>
                       </div>
                     </div>
                     
                     <h2 id="sec1"><div><?php echo $product_detail[0]['product_name']?></div> </h2>

                     <div class="row">
                      <?php $attributes = array('id' => 'myform');
                        echo form_open('cashshop/add_cart',$attributes);?>
                        <div class="col-xs-6 col-sm-6 " >
                          <figure class="box" >


                            <a class="jackbox" data-group="images" data-thumbnail="<?php echo product.$product_detail[0]['p_update_date'].'/'.$product_detail[0]['s_ID'].'/'.$product_detail[0]['p_ID'].'/'.$profile_galery[0]['pic_name'];?>"  data-description="#description_1" href="<?php echo product.$product_detail[0]['p_update_date'].'/'.$product_detail[0]['s_ID'].'/'.$product_detail[0]['p_ID'].'/'.$profile_galery[0]['pic_name'];?>"/><!-- end opening tag -->

                              <!-- thumbnail -->
                              <div class="jackbox-hover jackbox-hover-black jackbox-hover-magnify"></div><img src="<?php echo product.$product_detail[0]['p_update_date'].'/'.$product_detail[0]['s_ID'].'/'.$product_detail[0]['p_ID'].'/'.$profile_galery[0]['pic_name'];?>" width="300" height="340" alt="responsive lightbox">

                            </a>

                            <ul class="jackbox-hidden-items">

                              <!-- for hidden items, "data-href" is used instead of the regular "href" attribute that regular links use like above -->
                              <?php
                              for($i=0;$i<count($product_gallery);$i++){
                                echo ' <li class="jackbox" data-group="images" data-description="#description_1" data-thumbnail="'.product.$product_detail[0]['p_update_date'].'/'.$product_detail[0]['s_ID'].'/'.$product_detail[0]['p_ID'].'/'.$product_gallery[$i]['pic_name'].'" data-href="'.product.$product_detail[0]['p_update_date'].'/'.$product_detail[0]['s_ID'].'/'.$product_detail[0]['p_ID'].'/'.$product_gallery[$i]['pic_name'].'"></li>';
                              }

                              ?>


                            </ul>


                          </figure>

                        </div>




                        <div class="col-xs-6 col-sm-6 dborder" >

                          <div class="form-group">
                            <label  class="col-lg-5  col-sm-5 control-label animated pulse mt10"><?=$this->lang->line("n_pro");?></label>
                            <div class="col-xs-7 col-sm-7 mt10">


                              <label type="text" id="catname" class="animated pulse"   style="width:130px;height:25px"  ><?php echo $product_type[0]['product_category_name'];?></label>                   
                              
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <label  class="col-lg-5  col-sm-5 control-label animated pulse mt10"><?=$this->lang->line("p_pro");?></label>
                            <div class="col-xs-7 col-sm-7 mt10">


                              <label type="text" id="price" class="animated pulse"   style="width:130px;height:25px"  ><?php echo $product_detail[0]['p_price']." ";?><?=$this->lang->line("monetary");?></label>                   
                              
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <label  class="col-lg-5  col-sm-5 control-label animated pulse mt10"><?=$this->lang->line("up_pro");?></label>
                            <div class="col-xs-7 col-sm-7 mt10">


                              <label type="text" id="update_date" class="animated pulse"   style="width:130px;height:25px"  ><?php echo $product_detail[0]['p_update_date'];?></label>                   
                              
                              
                            </div>
                        
                          </div>
                          <?php echo form_hidden('shop_id', $product_detail[0]['s_ID']);
                                echo form_hidden('product_id', $product_detail[0]['p_ID']);
                          ?>  
                          

                          <div class="form-group">

                            <div  class="col-xs-12 col-sm-12 mt10" align="right">


                             <div id="send_order" class="btn btn-danger"   name="send_order"><?=$this->lang->line("o_pro");?></div>                            
                             
                           </div>

                         </div>

                       <?php echo  form_close();?>



                       <div class="row">
                        <div class="col-lg-12  ">
                         <div class="page-header-show">

                         </div>
                       </div>
                     </div>


                   </div>

                   
                 </div>
                 
                 <div class="line"></div>
                 
                 
                 
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











<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
<script src="<?php echo JS_URL;?>bootstrap.js"></script>
<script src="<?php echo JS_URL;?>list.js"></script>
<script src="<?php echo JS_THEME1;?>scripts.js"></script>
<script src="<?php echo JS_URL;?>jackbox-packed.min.js"></script>

<script type="text/javascript">

jQuery(document).ready(function() {


  jQuery(".jackbox[data-group]").jackBox("init");



});

</script>



<script type="text/javascript">



var re=<?php echo $re;?>;
if(re==1){
  $('#cartModal').modal('show');

  
}else{

}

$('#send_order').click(function(e) {

 $("#myform").submit();
 
});

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

</body>


</html>