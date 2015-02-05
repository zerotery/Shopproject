<html>

<head>

<title>TB Shop - Shop Online</title>
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


    <div id="wrapper">


      
      
        <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand "><a  id="menu-toggle"  style="color:#FAEBD7" ><?=$this->lang->line("t2_menu");?><span id="main_icon" class="glyphicon glyphicon-th-list animated bounce"></span></a></li>
      </ul>
       <?php
                  if($layout==0){
                    echo '<ul class="sidebar-nav" id="sidebar"> ';
                    echo '<li class="animated m_hover"><a class="animated-home fadeInRight2" href="'.site_url('Shop/home').'/'.$s_id.'/'.'2'.'">'.$this->lang->line("t_home").'<span class="sub_icon glyphicon glyphicon-home "></span></a></li>';
                    echo '<li class="animated m_hover"><a class="animated-htb fadeInRight2" href="'.site_url('Shop/how2order/t2').'/'.$s_id.'" >'.$this->lang->line("t_hs").'<span class="sub_icon glyphicon glyphicon-question-sign " ></span></a></li>';
                    echo '<li class="animated m_hover"><a class="animated-pay fadeInRight2" href="'.site_url('Shop/informpayment/t2').'/'.$s_id.'">'.$this->lang->line("t_pay").'<span class="sub_icon glyphicon glyphicon-usd"></span></a></li>';
                    echo '<li class="active animated m_hover"><a class="animated-about fadeInRight2" href="'.site_url('Shop/aboutus/t2').'/'.$s_id.'">'.$this->lang->line("t_aboutme").'<span class="sub_icon glyphicon glyphicon-pushpin glyphicon-red"></span></a></li>';
                    echo '<li class="animated m_hover"><a class="animated-contact fadeInRight2" href="'.site_url('Shop/contactus/t2').'/'.$s_id.'">'.$this->lang->line("t_contact").'<span class="sub_icon glyphicon glyphicon-envelope "></span></a></li>';
                    
                    
                    echo $this->load->view('theme2_cart');
                    


                    echo '</ul>';
                  }else{
                    echo '<ul class="sidebar-nav" id="sidebar">';
                    for($i=0;$i<count($layout);$i++){

                      if($layout[$i]['type_layout']==1){
                        echo '<li class="animated m_hover"><a class="animated-home fadeInRight2" href="'.site_url('Shop/home').'/'.$s_id.'/'.'2'.'">'.$this->lang->line("t_home").'<span class="sub_icon glyphicon glyphicon-home "></span></a></li>';
                      }else if($layout[$i]['type_layout']==2){
                        echo '<li class="animated m_hover"><a class="animated-htb fadeInRight2" href="'.site_url('Shop/how2order/2').'/'.$s_id.'" >'.$this->lang->line("t_hs").'<span class="sub_icon glyphicon glyphicon-question-sign " ></span></a></li>';
                      }else if($layout[$i]['type_layout']==3){
                        echo '<li class="animated m_hover"><a class="animated-pay fadeInRight2" href="'.site_url('Shop/informpayment/2').'/'.$s_id.'">'.$this->lang->line("t_pay").'<span class="sub_icon glyphicon glyphicon-usd"></span></a></li>';
                      }else if($layout[$i]['type_layout']==4){
                        echo '<li class="active animated m_hover"><a class="animated-about fadeInRight2" href="'.site_url('Shop/aboutus/2').'/'.$s_id.'">'.$this->lang->line("t_aboutme").'<span class="sub_icon glyphicon glyphicon-pushpin glyphicon-red "></span></a></li>';
                      }else if($layout[$i]['type_layout']==5){
                        echo '<li class="animated m_hover"><a class="animated-contact fadeInRight2" href="'.site_url('Shop/contactus/2').'/'.$s_id.'">'.$this->lang->line("t_contact").'<span class="sub_icon glyphicon glyphicon-envelope "></span></a></li>';
                      }
                      
                    }
                   echo $this->load->view('theme2_cart');
                  }
                  ?>

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
                          
                              <li class="btn btn-danger"><a href="<?php echo site_url('Shop/home').'/'.$s_id.'/'.'2';?>"  ><?=$this->lang->line("home");?></a></li>
                              <li class="btn btn-success" ><a href="<?php echo site_url('Shop/aboutus/t2').'/'.$s_id;?>"  ><?=$this->lang->line("t_aboutme");?></a></li>
                              
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
                        
                        <li><a href="<?php echo site_url('Shop/product/all/t2').'/'.$s_id;?>"><i class="glyphicon glyphicon-star"></i><?=$this->lang->line("all_product");?> [<?php echo $all_product;?>]</a></li>
                        <?php
                        for($i=0;$i<count($cate_product);$i++){
                          echo '<li><a href="'.site_url('Shop/product_t2').'/'.$cate_product[$i]['product_category_name'].'/'.$s_id.'/'.$cate_product[$i]['product_category_ID'].'"><i class="glyphicon glyphicon-gift"></i>'.$cate_product[$i]['product_category_name']." ".'['.$cate_product[$i][0].']'.'</a></li>';

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
                     <h2 id="sec0"><div><?=$this->lang->line("abox");?></div> </h2>

                     <div class="row">
                       
                      <div class="col-xs-12 col-sm-12 aborder" >
                        
                        <div class="form-group">
                          <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("shop_name");?></label>
                          <div class="col-xs-8 col-sm-8 mt10">
                           
                           
                            <label type="text" id="shopname" class="animated fadeInLeft"   style="width:130px;height:25px"  ><?php echo $about[0]['shop_name']; ?></label>                   
                            
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("url_name2");?></label>
                          <div class="col-xs-8 col-sm-8 mt10">
                           
                           
                            <label type="text" id="url" class="animated fadeInLeft"   style="width:130px;height:25px"  ><?php echo $about[0]['s_url']; ?></label>                  
                            
                            
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("detail_pay");?></label>
                          <div class="col-xs-8 col-sm-8 mt10">
                           
                           
                            <label type="text" class="animated fadeInLeft"  id="detailshop"><?php echo $about[0]['shop_detail_data']; ?></label>                 
                            
                            
                          </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-lg-4  col-sm-4 control-label animated fadeInDown mt10"><?=$this->lang->line("s_fanpage");?></label>
                          <div class="col-xs-8 col-sm-8 mt10">
                           
                           
                            <label type="text" id="fanpage" class="animated fadeInLeft"   ><?php echo $about[0]['shop_fanpage']; ?></label>                  
                            
                            
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
                      
                     <div class="toey">
                       <?php 
                       for($i=0;$i<count($layout);$i++){
                         if($layout==0){ }else if($layout[$i]['type_layout']==4){echo $layout[$i]['layout_detail'];}
                       }
                       
                       ?> 
                     </div> 
                     
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
<?php echo $this->load->view('theme2_cart_detail');?>


    


<script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>

<script src="<?php echo JS_URL;?>bootstrap.js"></script>
<script src="<?php echo JS_THEME2;?>scripts.js"></script>

<script type="text/javascript">

var re=<?php echo $re;?>;
$("#status_sendorder").hide();
var status_order=0;
if(re==1){
  $('#cartModal').modal('show');

  
}else{

}

$('input[type=number]').click(function(e) {
 window.status_order=1;
 //alert(status_order);
 $("#view_cart").submit();
 
});

$('#btn_submit_order').click(function(e) {
 window.status_order=2;
 //alert(status_order);
 $('#btn_submit_order').hide();
 $("#status_sendorder").show();
 $("#view_cart").submit();
 
});

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
      $.post("<?php echo site_url();?>cashshop/insert_order_2", { 's_id_cart[]':st,'p_id_cart[]':st2,'qty_cart[]':st3,'o_cart[]':st4,'price_cart[]':st5,ajax: '1' },
        function(data){ 
          if(data == 'true'){
           
           <?php 
           $url=site_url('Shop/informpayment/t2').'/'.$s_id;
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
      $.post("<?php echo site_url();?>cashshop/insert_order_2", { 's_id_cart[]':st,'p_id_cart[]':st2,'qty_cart[]':st3,'o_cart[]':st4,'price_cart[]':st5,ajax: '1' },
        function(data){ 
          // Interact with returned data
          if(data == 'true'){
           <?php 
           $url=site_url('Shop/informpayment/t2').'/'.$s_id;
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