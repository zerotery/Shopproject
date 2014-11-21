<html>
    
    <head>  

<title>TB Shop|My shop's</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="id=edge">


<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>style.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEME_URL;?>bootflat.css">

	</head>
<body style="background-image: url('<?php echo logo_pic;?>bg.jpg')">
     
    
    <!-- navbar top -->


    <div class="navbar navbar-default navbar-fixed-top" style="height: 50px">
      <div class="container">
        <div class="container-fluid">
         <div class="row">
         <div class="col-xs-12 col-md-8">
         <div class="navbar-header">
          <a href="#" class="navbar-brand"><img src="<?php echo logo_pic;?>logo-3.png" width="210px" height="30px"></a>
          <button class="navbar-toggle collapsed " type="button" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        </div>

        <div class="col-xs-6 col-md-4">
        <div class="navbar-collapse collapse" id="navbar-main" aria-expanded="false" style="height: 1px;">
          
              <!-- logout btn -->
            
            <ul class="nav navbar-nav navbar-right">
            <li><div class="container btn-toolbar navbar " style="width:150px" align="right" >
            
            <a href="<?php echo site_url('backshop/logout');?>" class="button glow button-small button-caution button-pill" style="color:white;width:80px;height: 20px;font-size: 14px"> Log out</a>
                  </div></li>
          </ul>
             <!-- end logout btn -->

             <!-- language -->
           <ul class="nav navbar-nav navbar-right">
            <li width="20">
               
            <td height="20" align="MIDDLE">
           <a href="<?php echo site_url('backshop/changemyshop/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></a>
           <a href="<?php echo site_url('backshop/changemyshop/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></a></td>
            </li></ul>
             <!-- end language --> 
          

            
            <!-- session id -->
            <ul class="nav navbar-nav navbar-right">
     
                <li><img src="<?php echo logo_pic;?>lock.png" alt="" style="position: relative; top:-2px;"><?=$this->lang->line("login");?> <span><?php echo $user; ?></span>

                </li> </ul>
     
     <!-- end session id -->

    
         </div>
         </div>
         </div>
        </div>
      </div>
    </div>
    <!-- end navbar top -->
    
    
      

      
                    
        
                    
                
                     

            
        
              
      
       
                  
                 
             
 
  
     
    
  
    <!--  Fixed layout -->
  
   
    <div class="container ">
        
        <div class="modal-body" >
            <form class="form col-md-12 center-block" style=" background-color: #CCCCCC">
                    <table class="table">
                        <br>
                        <p style="font-family: Curlz MT, serif; font-size:25pt; font-style:italic ; color: saddlebrown">My store</p>
                        <p style="font-family: Curlz MT, serif; font-size:14pt; font-style:italic; color: saddlebrown">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ร้านค้าของฉัน</p><br><br>
      <thead>
        <tr>
          <th>#</th>
          <th><?=$this->lang->line("store_name");?></th>
          <th><?=$this->lang->line("back_office");?></th>
          <th><?=$this->lang->line("shop_view");?></th>
        </tr>
      </thead>
      <tbody>
        

        <?php
        	if($this->session->userdata('shop_status')=="f"){
				
				
				echo '<tr><td align=\"center\"></td>';//echo "true username and password";
				echo '<td>';
				echo '<h6>'.$this->lang->line("noshop").'</h6></td>';
				echo '</tr>';

			}else{
				//print_r($myshopname);
				$j=1;	
        	 for($i=0; $i<count($myshopname); $i++){
        	 	echo '<tr class="active">';
        	 	echo '<td>'.$j.'</td>';
        	 	echo '<td>';
        	 	print_r($myshopname[$i]['shopname']);
        	 	echo '</td>';
        	 	$shopname["$i"]=$myshopname[$i]['shopname'];
        	 	$num=$i;
        	 	echo '<td>'.anchor(site_url('backshop/gobackshop/').'/?shopid='.$num.'','go backshop').'</td>';
        	 	echo '<td>'.'url shop'.'</td>';
        	 	$j++;
        	 	echo "</tr>";
        	 }
        	 for($i=0;$i<count($shopname);$i++){
        	 		$data[$i]=$shopname[$i];
					$this->session->set_userdata($data);


        	 }
        	}
        	 
      	?>
         </tr>       
    </tbody>
    </table>

     
     
    <div class="modal-footer">
          <div class="col-md-12">
          
		  </div>
    </div>
                <div class="modal-footer">
          <div style="font-size:11px; padding-bottom: 30px;" align="center">
      <a href="#"><b style="color:#333"><?=$this->lang->line("footer");?></b></a>
      <?=$this->lang->line("footer1");?> <b><?=$this->lang->line("footer2");?></b><?=$this->lang->line("footer3");?><a href="#"><?=$this->lang->line("footer4");?></a>
      
    </div>
    </div>
            </form>
            
        </div>
        
    </div>
    <!-- end Fixed layout -->
    
    </body>
    
    
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    
    
  
    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    
  
</html>