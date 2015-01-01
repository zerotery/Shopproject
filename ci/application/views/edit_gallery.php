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
              <li><a href="<?php echo site_url('backshop/productManage');?>" style="color: white"><?=$this->lang->line("product_management");?></a></li>
              
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
                 <div class="page-header-bp ">
                                              <div class="row">
                                              <div class="col-md-10 ">
                                                 <h3><?=$this->lang->line("modi_product_gallery2");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2">

                                                 <h2>
                                                 <div id="del_row" style="color:smoke" onclick="document.getElementById('del_gallery').submit();" class=" btn glyphicon glyphicon-minus animated right in rotateIn" ata-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("product-del");?>"  ></div></h2>
                                                                                 
                                              </div>
                                              <div>

                                                 
                                                 
                                              </div>
                                             </div>
                                             </div>

          <form id="del_gallery" action="<?php echo site_url('backshop/test3');?>" method="post"  enctype="multipart/form-data">
            

               <hr width="100%">
                                                        <div class="bs-docs-section clearfix">

                                                          
                                                                <div class="row">
                                                                <div class="col-lg-1"></div>
                                                                  <div class="col-lg-10" style="border-style:solid;border-width:0px;">
                                                                

                                                                     <div class="table-responsive">

                                                                        
                                                                          <table class="table" id="table_gallery">
                                                                            <!-- On rows -->
                                                                              <tr class="active">
                                                                                 <th class="info">
                            
                                                                                          <label ><input class="checkbox" type="checkbox" name="checkall" onclick="checkedAll();" value="deleteall"></label>
                                                                                      
                                                                                   </th>
                                                                                 <th class="info">
                                                                                    
                                                                                        
                                                                                 <font color="#FFFFFF"size="4pt"><?=$this->lang->line("gallery_pic");?></font>
                                                                                    
                                                                                 </th>

                                                                                  <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("gallery_name");?></font></th>
                                                                                  <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("action");?></font></th>
 
                                                                                  </tr>
                                                                                 <?php
                                                                                  for($i=0; $i<count($get_gallery); $i++){
                                                                                    echo '<tr style="color:black">';
                                                                                    echo '<td class="warning"><label ><input class="checkbox" type="checkbox" name="check_list[]" value="'.$get_gallery[$i]['gallery_product_ID'].'"></label></td>';
                                                                                    echo '<td class="warning" style="font-size:11pt" >';
                                                                                    echo '<div class="row">';
                                                                                    echo '<div class="col-lg-1"></div>';
                                                                                    echo '<div class="col-sm-6 col-md-4 col-lg-8" align="center">';
                                                                                    echo '<div class="form-group animated fadeInUp">';
                                                                                    echo '<div class="col-lg-12 thumbnail">';
                                                                                    echo '<img src="'.product.$data_p[0]['p_update_date'].'/'.$s_id.'/'.$data_p[0]['p_ID'].'/'.$get_gallery[$i]['pic_name'].'" class="img-responsive" style="height:160px;width:200px;">';
                                                                                    echo '</div></div></div>';
                                                                                    echo '</div>';
                                                                                    echo '</td>';
                                                                                    echo '<td class="warning" style="font-size:11pt;" >'.$get_gallery[$i]['pic_name'].'</td>';
                                                                                    echo '<td class="warning" style="font-size:15pt" >['. anchor(site_url('backshop/modify_gallery').'/?pg_id='.$get_gallery[$i]['gallery_product_ID'].'',$this->lang->line("modify")).']</td>';
                                                                                    echo '</tr>';
                                                                                    }       
                                                                                  ?>

                                                                          </table>
                                                                          

                                                                        </div>

                                                                
                                                                        

                                                                  </div>
                                                                  
                                                                </div>
                                                            </div>
                </form>
    
       
         
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
    <script type="text/javascript">


                checked=false;
                  function checkedAll (del) {var aa= document.getElementById('del_gallery'); if (checked == false)

                    {
                    checked = true
                    }
                    else {
                    checked = false
                    }
                    for (var i =0; i < aa.elements.length; i++){ aa.elements[i].checked = checked;}
                    }
        </script>
    </body>
    
    

   
    
</html>