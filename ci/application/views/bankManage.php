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
              <li><a href="<?php echo site_url('backshop/bankManage');?>" class="animated fadeInRight" style="color: white"><?=$this->lang->line("bank");?></a></li>
              
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
                                                 <h3><?=$this->lang->line("bank");?></h3>
                                              </div>

                                            


                                              <div class="col-md-2">


                                                 <h2><a href="<?php echo site_url('backshop/bankmodify');?>" style="color:white"><div id="add_type" class=" btn glyphicon glyphicon-plus animated right in rotateIn"></div></a>
                                                 <div id="del_type" class=" btn glyphicon glyphicon-minus animated rubberBand"  onclick="document.getElementById('ckb').submit();"></div></h2>

                                                
                                                 
                                              </div>
                                              <div>

                                                 
                                                 
                                              </div>
                                             </div>
                                             </div>

          <form id="ckb" name="bankmanage"  method="post" action="<?php echo site_url('backshop/delete_bank');?>" enctype="multipart/form-data" >
            

             <div class="table-responsive animated FadeInDown">
                  <table class="table">
                    <!-- On rows -->
                      <tr class="active">
                         <th class="info">
                            
                                <label ><input class="checkbox" type="checkbox" name="checkall" onclick="checkedAll();" value="deleteall"></label>
                            
                         </th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("bank_select");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("your_name");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("bank_branch");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("bank_account");?></font></th>
                          <th class="info"><font color="#FFFFFF"size="4pt"><?=$this->lang->line("account_type");?></font></th>
                         </tr>

                      <?php

                               for($i=0; $i<count($result); $i++){
                                echo '<tr style="color:black">';
                                echo '<td class="warning" ><label ><input class="checkbox" type="checkbox" name="check_list[]" value="'.$result[$i]['bank_ID'].'"></label></td>';
                                if($result[$i]['owner_bank_select']==1){
                                echo '<td class="warning" style="font-size:11pt" >'.$this->lang->line("ktb").'</td>';
                                }else if($result[$i]['owner_bank_select']==2){
                                echo '<td class="warning" style="font-size:11pt" >'.$this->lang->line("scb").'</td>';
                                }else if($result[$i]['owner_bank_select']==3){
                                echo '<td class="warning" style="font-size:11pt" >'.$this->lang->line("bkb").'</td>';
                                }else if($result[$i]['owner_bank_select']==4){
                                echo '<td class="warning" style="font-size:11pt" >'.$this->lang->line("tmb").'</td>';
                                }else if($result[$i]['owner_bank_select']==5){
                                echo '<td class="warning" style="font-size:11pt" >'.$this->lang->line("krungsri").'</td>';
                                }else if($result[$i]['owner_bank_select']==6){
                                echo '<td class="warning" style="font-size:11pt" >'.$this->lang->line("kbank").'</td>';
                                }else if($result[$i]['owner_bank_select']==7){
                                echo '<td class="warning" style="font-size:11pt" >'.$this->lang->line("uob").'</td>';
                                }

                                echo '<td class="warning" style="font-size:11pt" >'.$result[$i]['name_account'].'</td>';
                                echo '<td class="warning" style="font-size:11pt" >'.$result[$i]['bank_branch'].'</td>';
                                echo '<td class="warning" style="font-size:11pt" >'.$result[$i]['bank_account'].'</td>';
                                if($result[$i]['bank_type']==1){
                                  echo '<td class="warning status" style="font-size:11pt" >'.$this->lang->line("acc_type1").'</td>';
                                }else{
                                  echo '<td class="warning status" style="font-size:11pt" >'.$this->lang->line("acc_type2").'</td>';
                                }
                               
                                echo '</tr>';
                               }       

                         
                         ?>
                      
                  </table>
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
    
    </body>
    
    

   
    
</html>