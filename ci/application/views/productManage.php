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
                                                 <h3><?=$this->lang->line("product_management");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2">

                                                 <h2><a href="<?php echo site_url('backshop/addproduct');?>" style="color:white"><div id="add_type" class=" btn glyphicon glyphicon-plus animated right in rotateIn"></div></a><div id="del_type" class=" btn glyphicon glyphicon-minus animated rubberBand"  onclick=""></div></h2>
                                                 
                                              </div>
                                              <div>

                                                 
                                                 
                                              </div>
                                             </div>
                                             </div>

          <form id="ckb">
            

             <div class="table-responsive">
                  <table class="table">
                    <!-- On rows -->
                      <tr class="active">
                         <th class="info">
                            
                                <label ><input class="checkbox" type="checkbox" name="checkall" onclick="checkedAll();" ></label>
                            
                         </th>
                         <th class="info"> <center><font color="#FFFFFF"size="4pt"><?=$this->lang->line("product_pic");?></font> </center></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("product_name_type");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("p_price");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("p_quantity");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("p_status");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("action");?></font></th>
                         </tr>
                     

                      <!-- On cells (`td` or `th`) -->
                      <tr style="color:black">
                        <td class="warning"><label ><input class="checkbox" type="checkbox" name="check1" ></label></td>
                        <td class="warning" style="font-size:11pt" >
                            <div class="row">
                              <div class="col-lg-1"></div>
                                <div class="col-sm-6 col-md-4 col-lg-8" align="center">
                                   <div class="form-group animated fadeInUp">
                                     <div class="col-lg-12 thumbnail">
                                        
                                             <img src="<?php echo logo_pic;?>item.png" class="img-responsive" style="height:160px;width:200px;" >
                                          
                                      </div>
                                    </div>         
                              </div>

                             
                            </div>




                        </td>
                        <td class="warning" style="font-size:11pt" >เสื้อผ้าผู้ชาย</td>
                        <td class="warning" style="font-size:11pt" >250</td>
                        <td class="warning" style="font-size:11pt" >5</td>
                        <td class="warning" style="font-size:11pt" >มีสินค้า have stock</td>
                        <td class="warning" style="font-size:15pt" >[ <a href="<?php echo site_url('backshop/modifyproduct'); ?>" style="color: black;font-size:11pt"><?=$this->lang->line("modify");?></a> ]</td>
                        
                      </tr>
                      <tr style="color:black">
                        <td class="warning"><label ><input class="checkbox" type="checkbox" name="check2" ></label></td>
                        <td class="warning" style="font-size:11pt" >
                          <div class="row">
                              <div class="col-lg-1"></div>
                                <div class="col-sm-6 col-md-4 col-lg-8" align="center">
                                   <div class="form-group animated fadeInUp">
                                     <div class="col-lg-12 thumbnail">
                                        
                                             <img src="<?php echo logo_pic;?>item.png" class="img-responsive" style="height:160px;width:200px;" >
                                          
                                      </div>
                                    </div>         
                              </div>

                             
                            </div>

                          
                        </td>
                        <td class="warning" style="font-size:11pt" >เสื้อผ้าผู้ชาย</td>
                        <td class="warning" style="font-size:11pt" >200</td>
                        <td class="warning" style="font-size:11pt" >5</td>
                        <td class="warning" style="font-size:11pt" >สินค้าหมด out of stock</td>
                        <td class="warning" style="font-size:15pt" >[ <a href="<?php echo site_url('backshop/modifyproduct'); ?>" style="color: black;font-size:11pt"><?=$this->lang->line("modify");?></a> ]</td>
                        
                      </tr>
                  </table>
                </div>
                </form>
       <script type="text/javascript">
                checked=false;
                  function checkedAll (ckb) {var aa= document.getElementById('ckb'); if (checked == false)
                    {
                    checked = true
                    }
                    else {
                    checked = false
                    }
                    for (var i =0; i < aa.elements.length; i++){ aa.elements[i].checked = checked;}
                    }
        </script>
       
         
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