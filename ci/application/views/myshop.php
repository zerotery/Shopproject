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

<?php echo $this->load->view('header/navbar_logb')?>



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


        
      
        

    
    
<?php echo $this->load->view('footer/footer')?>


    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>center.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    </body>
</html>