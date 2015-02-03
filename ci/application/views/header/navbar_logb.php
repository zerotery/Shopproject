<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url('main');?>" align="left">
    <img src="<?php echo logo_pic;?>logo2.png" width="100px" height="20px" >
    </a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">

      <li>
        <a href="<?php echo site_url('member_tb/regshop');?>"><span class="glyphicon glyphicon-plus" >&nbsp;<?=$this->lang->line("regshop");?></span></a>
      </li>
      
     
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('main/chenge_lang/english');?>" onclick="<?php $this->session->set_userdata('address',$_SERVER['PHP_SELF']);?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0">English</a></li>
          <li><a href="<?php echo site_url('main/chenge_lang/thailand');?>" onclick="<?php $this->session->set_userdata('address',$_SERVER['PHP_SELF']);?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0">Thai</a></li>
        </ul>
      </li>

       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;<?php echo $user; ?></span><b class="caret"></b></a>
        <ul class="dropdown-menu">

           <li>
             <a href="<?php echo site_url('member_tb/profile');?>"><span class="glyphicon glyphicon-cog" >&nbsp<?=$this->lang->line("pro_setting");?></span></a>
          </li>
        
          <li>
              <a href="<?php echo site_url('backshop/logout');?>"><span class="glyphicon glyphicon-off" >&nbsp;Logout</span></a>
          </li>
        </ul>
      </li>
      
    </ul>
  </div>
</div>