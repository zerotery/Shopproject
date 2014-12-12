<html>
    <head>
    <title>Activated Failure</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo logo_pic;?>icon5.gif">
    <style type="text/css">
      body {
        brackgound:#000000; 
        background:url("<?php echo logo_pic;?>bg_login.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }

     
    </style>
    </head>
   <body>

        <!--<img src="<?php //echo logo_pic;?>bg.jpg" width="100%" height="100%" style="margin:0 auto;">
        <!--Failure modal-->
        <div id="loginModal" class="modal show animated swing " tabindex="-1" role="dialog" aria-hidden="true" >
        <dev class="box">
        <div class="modal-dialog" bgcolor="white" >
        <div class="modal-content" style="background-color: #336699;">
            
              <div class="modal-header" style="background-color:#58D3F7;">
                  <form class="form col-md-12 center-block" role="form" method="post" action="<?php echo site_url('main/login_check'); ?>">
                
                  <div class="form-group">
                  
                      <div class="col-md-12">
                      <img src="<?php echo logo_pic;?>Redcross.png" class="img-responsive animated tada"style="height:125px;width:125px; display: block; margin-left: auto; margin-right: auto;" />
                     </div>

                      
                  </div>
                  </form>
                 <h1 class="text-center" style="font-family: cursive; font-size:14pt"><?=$this->lang->line("warning");?></h1>
                 <h2 class="text-center" style="font-family: cursive; font-size:14pt"><?=$this->lang->line("warning2");?></h2>
              </div>
              <div class="modal-body" style="background-color: #58D3F7;">
                  <form class="form col-md-12 center-block" role="form" method="post" action="<?php echo site_url('main'); ?>">
                
                  <div class="form-group">
                      <button class="btn btn-success btn-lg btn-block"><?=$this->lang->line("back");?></button>
                     </div>
                  </form>
              </div>
               
              <div class="modal-footer" style="background-color: #58D3F7;">
                  <div class="col-md-12">
                  </div>  
              </div>
        </div>
        </div>
        </dev>
        </div>

          
        
    <script type="text/javascript" src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL;?>center.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>

   
   
    </body>

    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
</html>
