<html>
    
    <head>  

<title>TB Shop|My shop's</title>

<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
<style>
body {
  font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.42857143;
  brackgound:#000000; 
  background:url("<?php echo logo_pic;?>bg_myshop.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  </style>


</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#" align="left">
    <img src="<?php echo logo_pic;?>logo2.png" width="100px" height="20px" >
    </a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li>
        <a href="#">My Store</a>
      </li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("login");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp<?php echo $user; ?></span></a></li>
        </ul>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('backshop/changemyshop/english');?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">&nbsp&nbsp English</a></li>
          <li><a href="<?php echo site_url('backshop/changemyshop/thailand');?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">&nbsp&nbsp Thai</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('backshop/logout');?>"><span class="glyphicon glyphicon-off" >&nbspLogout</span></a>
      </li>
    </ul>
  </div>
</div>



<div class="box">
<div class="container">
<div class="well bs-component transboxshop" style="background-color:#CCFFCC;">
   
      <form class="form-horizontal">
        
      <table class="table table-striped table-hover ">
        <p style="font-family: Curlz MT, serif; font-size:25pt; font-style:italic ; color:#0099CC">My store</p>
        <p style="font-family: Curlz MT, serif; font-size:14pt; font-style:italic; color:#0099CC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ร้านค้าของฉัน</p><br><br>
      
      <thead>
        <tr>
          <th><font color="#003399">#</font></th>
          <th><font color="#003399"><?=$this->lang->line("store_name");?></font></th>
          <th><font color="#003399"><?=$this->lang->line("back_office");?></font></th>
          <th><font color="#003399"><?=$this->lang->line("shop_view");?></font></th>
        </tr>
      </thead>
      <tbody>
        

        <?php
      
        
           $j=1; 
           for($i=0; $i<count($myshop); $i++){
            echo '<tr class="info">';
            echo '<td>'.$j.'</td>';
            echo '<td>';
            echo $myshop[$i]['shop_name'];
            echo '</td>';
            
            $num=$myshop[$i]['s_ID'];
            echo '<td>'.anchor(site_url('backshop/gobackshop/').'/?shopid='.$num.'','go backshop').'</td>';
            echo '<td>'.$myshop[$i]['s_url'].'</td>';
            $j++;
            echo "</tr>";
           }
           
         
        ?>
         </tr>       
    </tbody>
    </table>
     
  
                
            </form>
    </div>
   </div> 
  </div>


        
      
        

    
    
<footer style=" position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;">

   
    <div class="powered-main" style="background-color: #FF4000">
    <div id="powered">
       
          <div style="font-size:11px; padding-bottom: 30px;color: #eee;" align="center">
              <a href="#" style="color: greenyellow" ><?=$this->lang->line("footer");?></a>
                        <?=$this->lang->line("footer1");?><b><?=$this->lang->line("footer2");?></b><?=$this->lang->line("footer3");?><a href="#" style="color: lawngreen"><?=$this->lang->line("footer4");?></a>
      
    </div>
    
    </div>

    </div>
       
    </footer>
    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>center.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    </body>
</html>