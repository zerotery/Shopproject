<?php

class cashshop extends CI_controller {
    function __construct(){
         parent::__construct();
         $this->load->model('member','member');
         $this->load->model('shop','shop');



   }

   

   public function goshop($s_id=null,$stheme=null){

     $lang=$this->load_language->lang();
     $this->lang->load($lang,$lang);
     $this->login_system->checklogin();


     $data['user']=$this->session->userdata('loginname');
     $data['userid']=$this->session->userdata('memberid'); 

     if(!empty($s_id)){
         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


         if(empty($layout)){
           $data['layout']=0;
         }else{
           $data['layout']=$layout;
         }

     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['all_product']= $all_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product; 
     $this->session->set_userdata('s_in',0);
     $this->session->set_userdata('address_add_cart',$_SERVER['PHP_SELF']);
				 //print_r($product);
				 //echo "<br>".count($product);
                  // echo $s_id." ".$stheme;
    // $this->session->set_userdata('re_cart',0);
     if($stheme==1){
           if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
           }else{
            $data['re']=0;
           }
          

           $this->load->view('theme1_home',$data);

     }else{
           if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
           }else{
            $data['re']=0;
           }

           $this->load->view('theme2_home',$data);

     }
}else{
    echo "<center>You Visit This Page without login</center>";
}





}
public function all_product($s_id=null){

   $lang=$this->load_language->lang();
   $this->lang->load($lang,$lang);
   $this->login_system->checklogin();


   $data['user']=$this->session->userdata('loginname');
   $data['userid']=$this->session->userdata('memberid'); 

   if(!empty($s_id)){
         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


         if(empty($layout)){
           $data['layout']=0;
     }else{
           $data['layout']=$layout;
     }

     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['all_product']= $all_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product;
     $this->session->set_userdata('s_in',1); 
				  //print_r($category_product);
     if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
       }else{
            $data['re']=0;
       }
     $this->load->view('theme1_all_products',$data);

}else{
    echo "<center>You Visit This Page without login</center>";
}

}

public function all_product_2($s_id=null){
  $lang=$this->load_language->lang();
   $this->lang->load($lang,$lang);
   $this->login_system->checklogin();


   $data['user']=$this->session->userdata('loginname');
   $data['userid']=$this->session->userdata('memberid'); 

   if(!empty($s_id)){
         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


         if(empty($layout)){
           $data['layout']=0;
     }else{
           $data['layout']=$layout;
     }

     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['all_product']= $all_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product;
     $this->session->set_userdata('s_in',1); 
          //print_r($category_product);
     if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
       }else{
            $data['re']=0;
       }
     $this->load->view('theme2_all_products',$data);

}else{
    echo "<center>You Visit This Page without login</center>";
}

}

public function cate_product($s_id=null,$category_id=null){

          	//echo "$category_id";

    $lang=$this->load_language->lang();
    $this->lang->load($lang,$lang);
    $this->login_system->checklogin();
    $this->session->set_userdata('local_product',$category_id);

    $data['user']=$this->session->userdata('loginname');
    $data['userid']=$this->session->userdata('memberid'); 

    if(!empty($s_id)){

         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


         if(empty($layout)){
           $data['layout']=0;
     }else{
           $data['layout']=$layout;
     }
     $gruoplang=$this->shop->get_grouplang_category($category_id);
     $g_lang=$gruoplang[0]['grouplang'];
     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $select_product= $this->shop->get_select_product($s_id,$category_id,$g_lang);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['select_product']= $select_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product; 
     $namecate=$this->shop->get_name_category($category_id,$g_lang);
     $data['namecate']=$namecate; 
     $all_product= $this->shop->get_all_product($s_id);
     $data['all_product']= $all_product;
     $data['category_id']=$category_id;
				  //print_r($namecate);
     $this->session->set_userdata('s_in',2);
     $this->session->set_userdata('cate_id',$category_id);
      if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
      }  

     $this->load->view('theme1_catgory_products',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}
}
public function cate_product_2($s_id=null,$category_id=null){

            //echo "$category_id";

    $lang=$this->load_language->lang();
    $this->lang->load($lang,$lang);
    $this->login_system->checklogin();
    $this->session->set_userdata('local_product',$category_id);

    $data['user']=$this->session->userdata('loginname');
    $data['userid']=$this->session->userdata('memberid'); 

    if(!empty($s_id)){

         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


         if(empty($layout)){
           $data['layout']=0;
     }else{
           $data['layout']=$layout;
     }
     $gruoplang=$this->shop->get_grouplang_category($category_id);
     $g_lang=$gruoplang[0]['grouplang'];
     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $select_product= $this->shop->get_select_product($s_id,$category_id,$g_lang);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['select_product']= $select_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product; 
     $namecate=$this->shop->get_name_category($category_id,$g_lang);
     $data['namecate']=$namecate; 
     $all_product= $this->shop->get_all_product($s_id);
     $data['all_product']= $all_product;
     $data['category_id']=$category_id;
          //print_r($namecate);
     $this->session->set_userdata('s_in',2);
     $this->session->set_userdata('cate_id',$category_id);
      if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
      }  

     $this->load->view('theme2_catgory_products',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}
}



public function how2order_theme1($s_id=null){

     $lang=$this->load_language->lang();
     $this->lang->load($lang,$lang);
     $this->login_system->checklogin();
     $data['user']=$this->session->userdata('loginname');
     $data['userid']=$this->session->userdata('memberid'); 

     if(!empty($s_id)){
         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


         if(empty($layout)){
           $data['layout']=0;
     }else{
           $data['layout']=$layout;
     }

     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['all_product']= $all_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product; 
     $bank=$this->shop->get_bankdetail($s_id);
     $data['bank']=$bank;
				  //print_r($bank);


     if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
       }else{
            $data['re']=0;
       }
     $this->load->view('theme1_how2order',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}


}

public function how2order_theme2($s_id=null){
     $lang=$this->load_language->lang();
     $this->lang->load($lang,$lang);
     $this->login_system->checklogin();
     $data['user']=$this->session->userdata('loginname');
     $data['userid']=$this->session->userdata('memberid'); 

     if(!empty($s_id)){
         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


         if(empty($layout)){
           $data['layout']=0;
     }else{
           $data['layout']=$layout;
     }

     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['all_product']= $all_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product; 
     $bank=$this->shop->get_bankdetail($s_id);
     $data['bank']=$bank;
          //print_r($bank);


     if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
       }else{
            $data['re']=0;
       }
     $this->load->view('theme2_how2order',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}

}

public function informpayment_theme1($s_id=null){


  $lang=$this->load_language->lang();
  $this->lang->load($lang,$lang);
  $this->login_system->checklogin();
  $data['user']=$this->session->userdata('loginname');
  $data['userid']=$this->session->userdata('memberid'); 

  if(!empty($s_id)){
   $result=$this->shop->get_picshop($s_id);

   $data['pic_header']=$result[0]['shop_pic_header'];
   $data['pic_bg']=$result[0]['shop_pic_bg'];
   $data['s_id']=$s_id;
   $layout=$this->shop->get_layout($s_id);


   if(empty($layout)){
     $data['layout']=0;
}else{
     $data['layout']=$layout;
}

$category_shop=$this->shop->get_shop_category($s_id);
$category_product=$this->shop->get_product_category($s_id);
$all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
$data['cate_product']= $category_product;
$data['all_product']= $all_product;
$product=$this->shop->get_product_show($s_id);
$data['product']=$product; 
$bank=$this->shop->get_bankdetail($s_id);
$data['bank']=$bank;
if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
}  

$this->load->view('theme1_informpayment',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}

}

public function informpayment_theme2($s_id=null){
  $lang=$this->load_language->lang();
  $this->lang->load($lang,$lang);
  $this->login_system->checklogin();
  $data['user']=$this->session->userdata('loginname');
  $data['userid']=$this->session->userdata('memberid'); 

  if(!empty($s_id)){
   $result=$this->shop->get_picshop($s_id);

   $data['pic_header']=$result[0]['shop_pic_header'];
   $data['pic_bg']=$result[0]['shop_pic_bg'];
   $data['s_id']=$s_id;
   $layout=$this->shop->get_layout($s_id);


   if(empty($layout)){
     $data['layout']=0;
}else{
     $data['layout']=$layout;
}

$category_shop=$this->shop->get_shop_category($s_id);
$category_product=$this->shop->get_product_category($s_id);
$all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
$data['cate_product']= $category_product;
$data['all_product']= $all_product;
$product=$this->shop->get_product_show($s_id);
$data['product']=$product; 
$bank=$this->shop->get_bankdetail($s_id);
$data['bank']=$bank;
if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
}  

$this->load->view('theme2_informpayment',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}
}

public function aboutus_theme1($s_id=null){


  $lang=$this->load_language->lang();
  $this->lang->load($lang,$lang);
  $this->login_system->checklogin();
  $data['user']=$this->session->userdata('loginname');
  $data['userid']=$this->session->userdata('memberid'); 

  if(!empty($s_id)){
   $result=$this->shop->get_picshop($s_id);

   $data['pic_header']=$result[0]['shop_pic_header'];
   $data['pic_bg']=$result[0]['shop_pic_bg'];
   $data['s_id']=$s_id;
   $layout=$this->shop->get_layout($s_id);


   if(empty($layout)){
     $data['layout']=0;
}else{
     $data['layout']=$layout;
}

$category_shop=$this->shop->get_shop_category($s_id);
$category_product=$this->shop->get_product_category($s_id);
$all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
$data['cate_product']= $category_product;
$data['all_product']= $all_product;
$product=$this->shop->get_product_show($s_id);
$data['product']=$product; 
$about=$this->shop->about_shop($s_id);
                  //print_r($about);
$data['about']=$about;
if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
}  

$this->load->view('theme1_aboutus',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}

}

public function aboutus_theme2($s_id=null){
 $lang=$this->load_language->lang();
  $this->lang->load($lang,$lang);
  $this->login_system->checklogin();
  $data['user']=$this->session->userdata('loginname');
  $data['userid']=$this->session->userdata('memberid'); 

  if(!empty($s_id)){
   $result=$this->shop->get_picshop($s_id);

   $data['pic_header']=$result[0]['shop_pic_header'];
   $data['pic_bg']=$result[0]['shop_pic_bg'];
   $data['s_id']=$s_id;
   $layout=$this->shop->get_layout($s_id);


   if(empty($layout)){
     $data['layout']=0;
}else{
     $data['layout']=$layout;
}

$category_shop=$this->shop->get_shop_category($s_id);
$category_product=$this->shop->get_product_category($s_id);
$all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
$data['cate_product']= $category_product;
$data['all_product']= $all_product;
$product=$this->shop->get_product_show($s_id);
$data['product']=$product; 
$about=$this->shop->about_shop($s_id);
                  //print_r($about);
$data['about']=$about;
if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
}  

$this->load->view('theme2_aboutus',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}
}

public function contactus_theme1($s_id=null){


  $lang=$this->load_language->lang();
  $this->lang->load($lang,$lang);
  $this->login_system->checklogin();
  $data['user']=$this->session->userdata('loginname');
  $data['userid']=$this->session->userdata('memberid'); 

  if(!empty($s_id)){
   $result=$this->shop->get_picshop($s_id);

   $data['pic_header']=$result[0]['shop_pic_header'];
   $data['pic_bg']=$result[0]['shop_pic_bg'];
   $data['s_id']=$s_id;
   $layout=$this->shop->get_layout($s_id);


   if(empty($layout)){
     $data['layout']=0;
}else{
     $data['layout']=$layout;
}

$category_shop=$this->shop->get_shop_category($s_id);
$category_product=$this->shop->get_product_category($s_id);
$all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
$data['cate_product']= $category_product;
$data['all_product']= $all_product;
$product=$this->shop->get_product_show($s_id);
$data['product']=$product; 
$about=$this->shop->about_shop($s_id);
                  //print_r($about);
$data['about']=$about;
if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
}  

$this->load->view('theme1_contactus',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}

}

public function contactus_theme2($s_id=null){
  $lang=$this->load_language->lang();
  $this->lang->load($lang,$lang);
  $this->login_system->checklogin();
  $data['user']=$this->session->userdata('loginname');
  $data['userid']=$this->session->userdata('memberid'); 

  if(!empty($s_id)){
   $result=$this->shop->get_picshop($s_id);

   $data['pic_header']=$result[0]['shop_pic_header'];
   $data['pic_bg']=$result[0]['shop_pic_bg'];
   $data['s_id']=$s_id;
   $layout=$this->shop->get_layout($s_id);


   if(empty($layout)){
     $data['layout']=0;
}else{
     $data['layout']=$layout;
}

$category_shop=$this->shop->get_shop_category($s_id);
$category_product=$this->shop->get_product_category($s_id);
$all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
$data['cate_product']= $category_product;
$data['all_product']= $all_product;
$product=$this->shop->get_product_show($s_id);
$data['product']=$product; 
$about=$this->shop->about_shop($s_id);
                  //print_r($about);
$data['about']=$about;
if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
}  

$this->load->view('theme2_contactus',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}
}

public function product_theme1($s_id=null,$p_id=null){


    $lang=$this->load_language->lang();
    $this->lang->load($lang,$lang);
    $this->login_system->checklogin();
    $data['user']=$this->session->userdata('loginname');
    $data['userid']=$this->session->userdata('memberid'); 

    if(!empty($s_id)){
         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


    if(empty($layout)){
           $data['layout']=0;
     }else{
           $data['layout']=$layout;
     }

     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['all_product']= $all_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product; 
     $about=$this->shop->about_shop($s_id);
                  //print_r($about);
     $data['about']=$about;
     $product_detail=$this->shop->get_all_product_show($p_id);
     $data['product_detail']=$product_detail;
     $profile_galery=$this->shop->get_gallery($p_id);
     $data['profile_galery']=$profile_galery;
     $product_gallery=$this->shop->get_pgallery($p_id);
     $data['product_gallery']= $product_gallery;
     $product_type=$this->shop->gettype_product_cate($p_id);
     $data['product_type']=$product_type;
     $data['p_id']=$p_id;
     if($this->session->userdata('s_in')==2){
      
     $category_id=$this->session->userdata('cate_id');  
     $gruoplang=$this->shop->get_grouplang_category($category_id);
     $g_lang=$gruoplang[0]['grouplang'];
     $namecate=$this->shop->get_name_category($category_id,$g_lang);
     $data['namecate']=$namecate;
     $data['category_id']=$category_id;


     }             //print_r($product_detail);
     if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
      }  
     $this->load->view('theme1_product',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}

                  
}

public function product_theme2($s_id=null,$p_id=null){
  $lang=$this->load_language->lang();
    $this->lang->load($lang,$lang);
    $this->login_system->checklogin();
    $data['user']=$this->session->userdata('loginname');
    $data['userid']=$this->session->userdata('memberid'); 

    if(!empty($s_id)){
         $result=$this->shop->get_picshop($s_id);

         $data['pic_header']=$result[0]['shop_pic_header'];
         $data['pic_bg']=$result[0]['shop_pic_bg'];
         $data['s_id']=$s_id;
         $layout=$this->shop->get_layout($s_id);


    if(empty($layout)){
           $data['layout']=0;
     }else{
           $data['layout']=$layout;
     }

     $category_shop=$this->shop->get_shop_category($s_id);
     $category_product=$this->shop->get_product_category($s_id);
     $all_product= $this->shop->get_all_product($s_id);
                  //print_r($category_product);
     $data['cate_product']= $category_product;
     $data['all_product']= $all_product;
     $product=$this->shop->get_product_show($s_id);
     $data['product']=$product; 
     $about=$this->shop->about_shop($s_id);
                  //print_r($about);
     $data['about']=$about;
     $product_detail=$this->shop->get_all_product_show($p_id);
     $data['product_detail']=$product_detail;
     $profile_galery=$this->shop->get_gallery($p_id);
     $data['profile_galery']=$profile_galery;
     $product_gallery=$this->shop->get_pgallery($p_id);
     $data['product_gallery']= $product_gallery;
     $product_type=$this->shop->gettype_product_cate($p_id);
     $data['product_type']=$product_type;
     $data['p_id']=$p_id;
     if($this->session->userdata('s_in')==2){
      
     $category_id=$this->session->userdata('cate_id');  
     $gruoplang=$this->shop->get_grouplang_category($category_id);
     $g_lang=$gruoplang[0]['grouplang'];
     $namecate=$this->shop->get_name_category($category_id,$g_lang);
     $data['namecate']=$namecate;
     $data['category_id']=$category_id;


     }             //print_r($product_detail);
     if($this->session->userdata('re_cart')==1){
             $data['re']=$this->session->userdata('re_cart');
             $this->session->unset_userdata('re_cart');
      }else{
            $data['re']=0;
      }  
     $this->load->view('theme2_product',$data);
}else{
    echo "<center>You Visit This Page without login</center>";
}

}


public function add_cart(){
      
      //$s_id=$this->input->post('shop_id');
      //$p_id=$this->input->post('product_id');
      //echo "$s_id"." "."$p_id";
       if($this->shop->validate_add_cart_item() == TRUE){


      if($this->input->post('ajax') != '1'){
           // $s_id = $this->input->post('shop_id');
           // $url='Shop/product/all/'.$s_id;
            //redirect('cart');
           // redirect("$url"); // If javascript is not enabled, reload the page with new data
      }else{
            echo 'true'; // If javascript is enabled, return true, so the cart gets updated
      }

      }


}

public function update_cart(){

      if($this->input->post('ajax') != '1'){
           // $s_id = $this->input->post('shop_id');
            //$url='Shop/product/all/'.$s_id;
            //redirect('cart');
           // redirect("$url"); // If javascript is not enabled, reload the page with new data
      }else{

            $row_id=$this->input->post('row_cart');
            $qty_cart=$this->input->post('qty_cart');
            
            for($i=0;$i<count($row_id);$i++){

                  $data = array(
                        'rowid' => $row_id[$i],
                        'qty'   => $qty_cart[$i]
                  );

            $this->cart->update($data);

            }
            $this->session->set_userdata('re_cart',1);
            echo 'true';

            
      }
    
}

public function emtry_cart(){

      $this->cart->destroy();



}

function show_cart(){
    $this->load->view('theme1_cart_detail');
}

public function delete_cart(){

      $s_id=$this->input->get('sid');
      $row_id=$this->input->get('row_id');
      $qty=0;
      
            $data = array(
            'rowid' => $row_id,
            'qty'   => $qty
            );

      $this->cart->update($data);
      //$url=site_url('Shop/home').'/'.$s_id.'/'.'1';
      $this->session->set_userdata('re_cart',1);

      $page = $this->session->userdata('address_url');
                  
      $temp = explode("/index.php/",$page);

      $url=$temp[1];
      //echo $temp[1];
      redirect($url);      
     



}

public function insert_order(){
      $lang=$this->load_language->lang();
      $this->lang->load($lang,$lang);
      $userid=$this->session->userdata('memberid');
      
      if($this->input->post('ajax') != '1'){
         
      }else{


            $s_id=$this->input->post('s_id_cart');//use 0
            $p_id=$this->input->post('p_id_cart');
            $qty=$this->input->post('qty_cart');
            $detail_order=$this->input->post('o_cart');
            $sum_price=$this->input->post('price_cart');
             $s_d=count($s_id);
           // print_r($s_id);
            if(count($s_id)==1){
                  $qty_sum=$qty[0];
                  $s_price=$sum_price[0];
                  $order_status=0;
                  $s_id=$s_id[0];
                  date_default_timezone_set("Asia/Bangkok");
                  $order_date=date('Y-m-d');
                  $order_update_date=date('Y-m-d');
                  $memberid=$userid;
                  $data=array(

                        'order_quantity'=>$qty_sum,
                        'order_sum_price'=>$s_price,
                        'order_status'=>$order_status,
                        's_ID'=>$s_id,
                        'order_date'=>$order_date,
                        'order_update_date'=>$order_update_date,
                        'memberID'=>$memberid

                        );
                  
                  $result=$this->shop->insert_order($data);
                  $order_id=$result;
                  if($detail_order[0]==""){
                        $detail_order[0]="-";
                  }
                  $data=array(

                        'order_ID'=>$order_id,
                        'p_ID'=>$p_id[0],
                        'product_order_quantity'=>$qty[0],
                        'product_order_description'=>$detail_order[0]
                        

                        );

                  $result=$this->shop->insert_order_product($data);
                  $email=$this->shop->get_email($memberid);
                  $about=$this->shop->about_shop($s_id);
                  $nameshop=$about[0]['shop_name'];
                  $a=0;
                  $ci = get_instance();
                  $ci->load->library('email');
                  $config['protocol'] = "smtp";
                  $config['smtp_host'] = "ssl://smtp.gmail.com";
                  $config['smtp_port'] = "465";
                  $config['smtp_user'] = "tbshop.project@gmail.com"; 
                  $config['smtp_pass'] = "Zerotery2012";
                  $config['charset'] = "utf-8";
                  $config['mailtype'] = "html";
                  $config['newline'] = "\r\n";

                  $ci->email->initialize($config);

                  $ci->email->from('tbshop.project@gmail.com', 'You buy product in'." ".$nameshop.'.');
                 
                  $ci->email->to($email);  
                  if($lang=="english"){
                    $ci->email->subject('You have order in'.' '.$nameshop.'order number is '.$order_id.'.'.'If you transfered money.please confirm money transfer follow url');
                    $ci->email->message(''."   ".anchor(site_url('Shop/informpayment').'/'.$s_id,'confirm money transfer') );
                    if($ci->email->send()){
                      $a=1;
                    }else{
                      $a=2;
                    }
                  }else if($lang=="thailand"){
                    $ci->email->subject('คุณมีการสั่งซื้อสินค้าที่ร้าน'.' '.$nameshop.'รห้สการสั่งซื้อคือ '.$order_id.'.'.'ถ้าคุณทำการโอนเงินเพื่อชำระเงินของสินค้าเเล้วกรุณาทำการยืนยันการโอนเงินโดยกด link ');
                    $ci->email->message(''."   ".anchor(site_url('Shop/informpayment').'/'.$s_id,'ยืนยันการชำระเงิน') );
                    if($ci->email->send()){
                      $a=1;
                    }else{
                      $a=2;
                    }
                  }
                  if($a==1){
                    echo $result;
                    $this->cart->destroy();
                  }else{
                    echo "email";
                  }
                  

                  //$p_id
            }else{
                  $qty_sum=0;
                  for ($i=0; $i < count($qty) ; $i++) { 
                        $qty_sum+=$qty[$i];
                  }
                  
                  $s_price=$sum_price[(count($sum_price)-1)];
                  $order_status=0;
                  $s_id=$s_id[0];
                  date_default_timezone_set("Asia/Bangkok");
                  $order_date=date('Y-m-d');
                  $order_update_date=date('Y-m-d');
                  $memberid=$userid;
                  $data=array(

                        'order_quantity'=>$qty_sum,
                        'order_sum_price'=>$s_price,
                        'order_status'=>$order_status,
                        's_ID'=>$s_id,
                        'order_date'=>$order_date,
                        'order_update_date'=>$order_update_date,
                        'memberID'=>$memberid

                        );
                  $result=$this->shop->insert_order($data);
                  $order_id=$result;
                  for ($i=0; $i < count($p_id) ; $i++) { 
                     if($detail_order[$i]==""){
                        $detail_order[$i]="-";
                  }
                  $data=array(

                        'order_ID'=>$order_id,
                        'p_ID'=>$p_id[$i],
                        'product_order_quantity'=>$qty[$i],
                        'product_order_description'=>$detail_order[$i]
                        

                        );

                  $result=$this->shop->insert_order_product($data);   
                  }

                  if($result=='true'){
                  $email=$this->shop->get_email($memberid);  
                  $about=$this->shop->about_shop($s_id);
                  $nameshop=$about[0]['shop_name'];
                  $a=0;
                  $ci = get_instance();
                  $ci->load->library('email');
                  $config['protocol'] = "smtp";
                  $config['smtp_host'] = "ssl://smtp.gmail.com";
                  $config['smtp_port'] = "465";
                  $config['smtp_user'] = "tbshop.project@gmail.com"; 
                  $config['smtp_pass'] = "Zerotery2012";
                  $config['charset'] = "utf-8";
                  $config['mailtype'] = "html";
                  $config['newline'] = "\r\n";

                  $ci->email->initialize($config);

                  $ci->email->from('tbshop.project@gmail.com', 'You buy product in'." ".$nameshop.'.');
                 
                  $ci->email->to($email);  
                  if($lang=="english"){
                    $ci->email->subject('You have order in'.' '.$nameshop.'order number is '.$order_id.'.'.'If you transfered money.please confirm money transfer follow url');
                    $ci->email->message(''."   ".anchor(site_url('Shop/informpayment').'/'.$s_id,'confirm money transfer') );
                    if($ci->email->send()){
                      $a=1;
                    }else{
                      $a=2;
                    }
                  }else if($lang=="thailand"){
                    $ci->email->subject('คุณมีการสั่งซื้อสินค้าที่ร้าน'.' '.$nameshop.'รห้สการสั่งซื้อคือ '.$order_id.'.'.'ถ้าคุณทำการโอนเงินเพื่อชำระเงินของสินค้าเเล้วกรุณาทำการยืนยันการโอนเงินโดยกด link ');
                    $ci->email->message(''."   ".anchor(site_url('Shop/informpayment').'/'.$s_id,'ยืนยันการชำระเงิน') );
                    if($ci->email->send()){
                      $a=1;
                    }else{
                      $a=2;
                    }
                  }
                  if($a==1){
                        echo "true";
                         $this->cart->destroy();
                  }else{
                        echo "email";
                  }


                        
                  }else{
                        echo "fail";
                  }
                  
                  
            }
            if($s_d==0){
                  echo "fail";
            }


            
      }
}

public function submit_order(){
  
  $order_ID=$this->input->post('number_order');
  $result_order=$this->shop->find_order($order_ID);
  //$lname=$this->input->post('lastname');
  //$email=$this->input->post('email');
  //$perid=$this->input->post('license');
  //$address=$this->input->post('address');
  //$province=$this->input->post('province');
  if(!empty($result_order)){
    //print_r($result_order);
    $s=0;
     $filename = "./uploads/orders/".$result_order[0]['s_ID'];

      if (file_exists($filename)) {
                      if(file_exists("./uploads/orders/".$result_order[0]['s_ID']."/".$result_order[0]['order_ID'])){
                        $s=1;
                      }else{
                        mkdir("./uploads/orders/".$result_order[0]['s_ID']."/".$result_order[0]['order_ID']);
                        $s=1;
                      }
                      
      }else {
                      
                      mkdir("./uploads/orders/".$result_order[0]['s_ID']);
                      if(file_exists("./uploads/orders/".$result_order[0]['s_ID']."/".$result_order[0]['order_ID'])){
                        $s=1;
                      }else{
                        mkdir("./uploads/orders/".$result_order[0]['s_ID']."/".$result_order[0]['order_ID']);
                        $s=1;
                      }
    }
      if($s==1){
        //echo "haha";
        //print_r($result_order);
        $set1=0;
                     $config['upload_path'] ='./uploads/orders/'.$result_order[0]['s_ID']."/".$result_order[0]['order_ID']."/";
                     $config['allowed_types'] = 'gif|jpg|png';
                     $config['max_size'] = '0';
                     $config['max_width']  = '0';
                     $config['max_height']  = '0';
                     $this->upload->initialize($config);
                     
                     if(!$this->upload->do_upload('tranfer')){
                        
                    //0 loop 3 4 loop 2
                    
                          if($_FILES['tranfer']['error']==4){
                          $file = logo_pic."item.png";
                          $newfile = "./uploads/orders/".$result_order[0]['s_ID']."/".$result_order[0]['order_ID']."/"."tranfer_".$result_order[0]['order_ID'].".png";

                          if (copy($file, $newfile)) {
                          $set1=1;
                          $namepic="tranfer_".$result_order[0]['order_ID'].".png";
                          }  
                          
                          }else if($_FILES['tranfer']['error']==0){
                            $set1=0;
                            echo "<script>
                            alert('Have problem upload picture'); 
                            window.history.go(-1);
                            </script>";
                          }

                    }else{
                      //echo "upload success";
                     $data=array('upload_data' =>$this->upload->data());
                      
                     $picnameold=$data['upload_data']['file_name']; 
                     // $width=$data['select_tranfer']['image_width'];
                     // $height=$data['select_tranfer']['image_height'];
                     $temp = explode(".",$data['upload_data']['file_name']);
                     $namepic= "tranfer_".$result_order[0]['order_ID'] . '.' .end($temp);
                      
                     if(rename ("./uploads/orders/".$result_order[0]['s_ID']."/".$result_order[0]['order_ID']."/".$picnameold, "./uploads/orders/".$result_order[0]['s_ID']."/".$result_order[0]['order_ID']."/".$namepic)){
                      $set1=1;
                     }else{
                      $set1=0;
                            echo "<script>
                            alert('Have problem upload picture'); 
                            window.history.go(-1);
                            </script>";
                     }
                      
                    }
                    if($set1==1){
                      $name=$this->input->post('name')." ".$this->input->post('surname');
                      $date_tranfer=$this->input->post('payment_date');
                      $email=$this->input->post('email');
                      $tranfer_time=$this->input->post('payment_time');
                      $bank_tranfer=$this->input->post('bank');
                      $payment=$this->input->post('price');
                      $moredetail=$this->input->post('detailpay');
                      $tranfer_pic=$namepic;
                      $data=array(
                          'member_name'=>$name,
                          'date'=>$date_tranfer,
                          'email_tranfer'=>$email,
                          'tranfer_time'=>$tranfer_time,
                          'bank_transfer'=>$bank_tranfer,
                          'payment'=>$payment,
                          'more_detail'=> $moredetail,
                          'evidence_pic'=>$tranfer_pic,

                          'order_ID'=>$result_order[0]['order_ID'],
                          's_ID'=>$result_order[0]['s_ID']


                        );

                      $result=$this->shop->insert_tranfer($data);
                      if($result==1){
                        $send_order=$this->input->post('add_shipping');
                        $order_date=$result_order[0]['order_date'];
                        $data=array(
                          'send_order_address'=>$send_order,
                          'order_date'=>$order_date,
                          'order_ID'=>$result_order[0]['order_ID']
                          


                        );
                        $result_1=$this->shop->insert_shipping($data);
                        if($result_1==1){
                          echo "<script>
                            alert('Save success'); 
                            window.history.go(-1);
                            location.reload();
                            </script>";
                        }else{
                          echo "<script>
                            alert('Save unsuccess'); 
                            window.history.go(-1);
                            </script>";
                        }
                      }else{
                            echo "<script>
                            alert('Have problem with database'); 
                            window.history.go(-1);
                            </script>";
                      }

                    }else{
                       echo "<script>
                            alert('Have problem upload picture'); 
                            window.history.go(-1);
                            </script>";
                    }

      }else{
        echo "<script>
             alert('Have problem create upload folder'); 
             window.history.go(-1);
            </script>";
      }


     
  }else{
    echo "<script>
             alert('No have Order number'); 
             window.history.go(-1);
     </script>";
  }
  

}
       





}











      ?>