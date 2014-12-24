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
                 <div class="page-header-bp " >
                                              <div class="row">
                                              <div class="col-md-8 ">
                                                 <h3><?=$this->lang->line("product_modify");?></h3>
                                              </div>

                                            
                                             </div>
                                             </div>
     
                <form class="form-horizontal" name="product_type_select" id="profile"   method="post" enctype="multipart/form-data">
                    <fieldset >

                               <div class="form-group col-lg-12">
                                     
                                         <ul class="nav nav-tabs nav-justified" id="myTab1">
                                            <li class="active"><a href="#home"><?=$this->lang->line("product_information1");?></a></li>
                                            
                                            <li><a href="#messages" data-easein="fadeInDown"><?=$this->lang->line("product_information2");?></a></li>
                                            <li><a href="#settings" data-easein="fadeInUp"><?=$this->lang->line("product_gallery");?></a></li>
                                          
                                        </ul>

                                        <div class="tab-content" id="tab-content1">
                                            <div class="tab-pane active" id="home">
                                             <div class="form-group"></div>
                                              <div class="row">
                                                        <div class="form-group">
                                                         
                                                           
                                                              <div class="col-md-3" align="center">
                                                                 <div class="form-group animated fadeInUp">
                                                                   <div class="col-lg-12">
                                                                      <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-new " >
                                                                          <img src="<?php echo logo_pic;?>item.png" class="img-responsive" style="height:180px;width:180px;" >
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="width: 180px; height: 180px;"></div>
                                                                        <div>
                                                                          <span class="btn btn-success btn-file "><span class="fileinput-new "><?=$this->lang->line("select_pic");?></span><span class="fileinput-exists "><?=$this->lang->line("change_pic");?></span><input type="file" name="update_profile"></span>
                                                                          <div  class="btn btn-default fileinput-exists " data-dismiss="fileinput"><?=$this->lang->line("remove_pic");?></div>
                                                                          
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>         
                                                            </div>

                                                           
                                                          


                                                            <div class="form-group col-lg-8 " >
                                                            <label  class="col-md-3 col-sm-4 control-label animated fadeInLeft"><?=$this->lang->line("product_name");?></label>
                                                            <div class="col-sm-5"></div>
                                                            <div class="col-lg-6 col-xs-6 col-sm-5" >
                                                              <input type="text" id="p_name_th" class="form-control animated fadeInLeft" name="product_name_th"  data-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("product_pop-th");?>">
                                                            </div>
                                                            <div class="col-lg-1"><img src="<?php echo logo_pic;?>flag-th.jpg" width="35" height="25" border="0"></div>
                                                            </div>


                                                        <div class="form-group col-lg-8">
                                                        <div class="col-lg-3 col-sm-4"></div>
                                                        <div class="col-md-6 col-xs-6 col-sm-5">
                                                            <input type="text" id="p_name_en" class="form-control animated fadeInLeft" name="product_name_en"  data-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("product_pop-en");?>">
                                                            </div>
                                                            <div class="col-lg-1 "><img src="<?php echo logo_pic;?>flag-en.jpg" width="35" height="25" border="0"></div>
                                                           </div>
                                                      

                                                      <div class="form-group col-lg-8">
                                                                      <label  class="col-lg-3 col-sm-4 control-label"><?=$this->lang->line("product_detail");?></label>
                                                                      <div class="col-lg-6 col-xs-6 col-sm-5">
                                                                        <textarea rows="3" cols="60" class="form-control animated fadeInLeft" id="pro_dth" name="shopdetail_th" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?=$this->lang->line("pnote2");?>"></textarea>
                                                                      </div>
                                                                      <label for="inputslang" class="col-lg-1 control-label"><img src="<?php echo logo_pic;?>flag-th.jpg" width="35" height="25" border="0"></label>
                                                      </div>

                                                      <div class="form-group col-lg-8">
                                                                     <div class="col-lg-3 col-sm-4"></div>
                                                                     <div class="col-lg-6 col-xs-6 col-sm-5">
                                                                        <textarea rows="3" cols="60" class="form-control animated fadeInLeft" id="pro_den" name="shopdetail_en" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="<?=$this->lang->line("pnote");?>"></textarea>
                                                                      </div>
                                                                      <label for="inputslang" class="col-lg-1 control-label"><img src="<?php echo logo_pic;?>flag-en.jpg" width="35" height="25" border="0"></label>
                                                      </div>

                                                 </div>
                                                                </div>
                                                           
                                                            </div>
                                                            
                                                          

                                     


                                            <div class="tab-pane" id="messages">
                                                  <div class="form-group"></div>

                                                      <div class="form-group">
                                                            <label  class="col-lg-2 col-sm-2 control-label animated fadeInLeft"><?=$this->lang->line("p_price");?></label>
                                                            <div class="col-lg-2 col-sm-5">
                                                              <input type="text" id="p_price" class="form-control animated fadeInDown" name="product_price"  value="">
                                                            </div>
                                                            <div class="col-lg-2" ><label style="font-size:15pt;"><?=$this->lang->line("monetary");?></label></div>

                                                      </div>
                                                            
                                                          <div class="form-group">
                                                            <label  class="col-lg-2 col-sm-2 control-label animated fadeInLeft"><?=$this->lang->line("p_quantity");?></label>
                                                            <div class="col-lg-2 col-sm-5">
                                                              <input type="text" class="form-control animated fadeInDown" name="product_quantity" value="">
                                                            </div>
                                                            </div>

                                                          <div class="form-group ">
                                                          <label  class="col-lg-2 col-sm-2 control-label animated fadeInLeft"><?=$this->lang->line("p_status");?></label>
                                                          <div class="col-lg-3 col-sm-5">
                                                            
                                                             <select class="form-control animated fadeInDown">
                                                                  <option value="one">One</option>
                                                                  <option value="two">Two</option>
                                                                  <option value="three">Three</option>
                                                                  <option value="four">Four</option>
                                                                  <option value="five">Five</option>
                                                             </select>
                                                        </div>
                                                        </div>
                                                          <div class="form-group ">
                                                          <label  class="col-lg-2 col-sm-2 control-label animated fadeInLeft" ><?=$this->lang->line("pro_type");?></label>
                                                          <div class="col-lg-4 col-sm-5">
                                                            
                                                             <select class="form-control animated fadeInDown" id="ptc" ata-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("product-type_p");?>">
                                                                  <option value="one">One</option>
                                                                  <option value="two">Two</option>
                                                                  <option value="three">Three</option>
                                                                  <option value="four">Four</option>
                                                                  <option value="five">Five</option>
                                                             </select>
                                                        </div>
                                                        </div>

                                              


                                            </div>





                                            <div class="tab-pane" id="settings">

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
                                                                                  
                                                                                  <th class="info" style="color:darkgreen"><div id="add_row" class=" btn glyphicon glyphicon-minus animated right in rotateIn" ata-toggle="popover" data-trigger="hover " data-container="body" data-placement="bottom" data-content="<?=$this->lang->line("product-del");?>"  ></div></th>
                                                                                 </tr>


                                                                              <!-- On cells (`td` or `th`) -->
                                                                              
                                                                            <tr  style="color:black">
                                                                                <td class="warning"><label ><input class="checkbox" type="checkbox" name="check1" value="check1"></label></td>
                                                                                <td class="warning" style="font-size:11pt" >
                                                                                  <div class="row">
                                                                                        <div class="col-lg-1"></div>
                                                                                          <div class="col-sm-6 col-md-4 col-lg-8" align="center">
                                                                                             <div class="form-group animated fadeInUp">
                                                                                               <div class="col-lg-12 thumbnail" style="height:170px;width:200px;">
                                                                                                  
                                                                                                       <img src="<?php echo logo_pic;?>item.png" class="img-responsive" style="height:160px;width:200px;" >
                                                                                                    
                                                                                                </div>
                                                                                              </div>         
                                                                                        </div>

                                                                                       
                                                                                      </div>


                                                                                </td>
                                                                                <td class="warning" style="font-size:11pt;" >19/12/2014</td>
                                                                                <td class="warning" style="font-size:15pt" >[ <a href="<?php echo site_url('backshop/modify_gallery'); ?>" style="color:black;font-size:11pt"><?=$this->lang->line("modify");?></a> ]</td>
                                                                                
                                                                              </tr>


                                                                          </table>

                                                                        </div>

                                                                
                                                                        

                                                                  </div>
                                                                  
                                                                </div>
                                                            </div>


                                            
                                          </div>







                                        </div>
                                      

                                      
                                </div>
                           </fieldset>
                </form>
                 <script type="text/javascript">
                checked=false;
                  function checkedAll (profile) {var aa= document.getElementById('profile'); if (checked == false)
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
                                            

                               






                                  <div class="col-lg-9"></div>
                                  <div class="form-group" align="center">


                                   <div class="row" >

                                  <div class="col-md-1 ">

                                          <h4><input type="submit" class="btn btn-primary animated swing" id="btn_add" name="btnadd"  value="<?=$this->lang->line("addtype");?>" /></h4>

                                           
                                   </div >
                                     <div class="col-md-1 "  >
                                         <h4><a class="btn btn-danger animated swing" href="<?php echo site_url('backshop/productManage');?>"><?=$this->lang->line("cancel");?></a></h4>
                                     </div>
                                           
                                </div>
                                </div>
                                

                                 

                 
    
       
         
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