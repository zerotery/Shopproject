<html>
    <head>
    <title>Log in</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo LAYOUT_URL;?>style.css">
    </head>
    <body>
        <img src="<?php echo logo_pic;?>bg.jpg" width="100%" height="100%" >
        <!--login modal-->
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true" >
        <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                  <h1 class="text-center" style="font-family:  cursive">Back Office</h1>
              </div>
              <div class="modal-body">
                  <form class="form col-md-12 center-block" role="form" method="post" action="<?php echo site_url('backshop/checkup'); ?>">
                  <div class="form-group">
                      <input type="text" class="form-control input-lg" placeholder="Username" name="username" required>
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-group">
                      <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                      <span class="pull-right"><a href="#">Back TB Shop</a></span>
                  </div>
                  </form>
              </div>
               
              <div class="modal-footer">
                  <div class="col-md-12">
                  </div>	
              </div>
        </div>
        </div>
        </div>

    <script src="<?php echo JS_URL;?>jquery.js"></script>
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo JS_URL;?>bootstrap.js"></script>
    <script src="<?php echo JS_URL;?>buttons.js"></script>
    <script src="<?php echo JS_URL;?>all.js"></script>
  
    <script src="<?php echo JS_URL;?>jquery-1.10.2.js"></script>
    <script src="<?php echo JS_URL;?>icheck.min.js"></script>
    <script src="<?php echo JS_URL;?>jquery.fs.selecter.min.js"></script>
    <script src="<?php echo JS_URL;?>bootstrap.min.js"></script>
        
    </body>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
</html>
