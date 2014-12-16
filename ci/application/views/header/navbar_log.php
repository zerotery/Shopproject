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
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">MENU<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">MENU 1</a></li>
          <li><a href="#">MENU 2</a></li>
          <li><a href="#">MENU 3</a></li>
          <li class="divider"></li>
          <li class="dropdown-header"><font color="white">BACK SHOP</font></li>
          <li><a href="#">MENU 4</a></li>
          <li><a href="#">MENU 5</a></li>
        </ul>


      </li>
       <ul class="nav navbar-nav">
      
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("login");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp<?php echo $user; ?></span></a></li>
        </ul>
      </li>
    </ul>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>

       

        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('main/chenge_lang/english');?>" onclick="<?php $this->session->set_userdata('address',$_SERVER['PHP_SELF']);?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">English</a></li>
          <li><a href="<?php echo site_url('main/chenge_lang/thailand');?>" onclick="<?php $this->session->set_userdata('address',$_SERVER['PHP_SELF']);?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">Thai</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('member_tb/logout');?>"><span class="glyphicon glyphicon-off" >&nbspLogout</span></a>
      </li>
    </ul>
  </div>
</div>