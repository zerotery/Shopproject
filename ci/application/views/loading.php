<html>
    <head>
    <title>Loading</title>
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
        <!--autoload modal-->
        <div id="loginModal" class="modal show animated lightSpeedIn  "  tabindex="-1" role="dialog" aria-hidden="true" >
        <dev class="box">
        <div class="modal-dialog" bgcolor="white" >
        <div class="modal-content" style="background-color: #6CA6CD;">
            
              <div class="modal-header" style="background-color:#6CA6CD;">
                  
                  <h1 class="text-center" style="font-family: cursive; font-size:14pt"><?=$this->lang->line("thx");?></h1>
                  <h2 class="text-center" style="font-family: cursive; font-size:14pt"><?=$this->lang->line("loading");?></h2>
              </div>
              <div class="modal-body" style="background-color: ##6CA6CD;">
                  <form class="form col-md-12 center-block" role="form" method="post" >
                  <div class="form-group  " >
                      <div class="progress">
                          <div id="loadbar" class="progress-bar progress-bar-striped active" role="progressbar" style="width: 45%">
                            
                          </div>
                        </div>

                  </div>
                  
                  </form>
              </div>
               
              <div class="modal-footer" style="background-color: #6CA6CD;">
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

   <!--autoload -->
  <script type="text/javascript">
function countdown(callback) {
    var bar = document.getElementById('loadbar'),
    time = 0, max = 6,
    int = setInterval(function() {
        bar.style.width = Math.floor(100 * time++ / max) + '%';
        if (time - 1 == max) {
            clearInterval(int);
            // 700ms - width animation time
            callback && setTimeout(callback, 700);
        }
    }, 1000);
}

countdown(function() {
    location.href ="<?php echo site_url('main'); ?>"
});
   </script>
   
    </body>

    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
</html>
