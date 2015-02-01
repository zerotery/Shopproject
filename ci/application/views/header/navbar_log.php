<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url('main/index?Status=1');?>" align="left">
    <img src="<?php echo logo_pic;?>logo2.png" width="100px" height="20px" >
    </a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">

     <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('main/chenge_lang/english');?>" onclick="<?php $this->session->set_userdata('address',$_SERVER['PHP_SELF']);?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></a></li>
        <li><a href="<?php echo site_url('main/chenge_lang/thailand');?>" onclick="<?php $this->session->set_userdata('address',$_SERVER['PHP_SELF']);?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp<?php echo $user; ?></span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li>
             <a href="<?php echo site_url('member_tb/profile');?>"><span class="glyphicon glyphicon-cog" >&nbsp<?=$this->lang->line("pro_setting");?></span></a>
          </li>

          <li>
             <a href="<?php echo site_url('backshop/myshop');?>"><span class="glyphicon glyphicon-home" >&nbsp<?=$this->lang->line("viewshop");?></span></a>
          </li>

          <li>
        <a href="<?php echo site_url('member_tb/logout');?>"><span class="glyphicon glyphicon-off" >&nbspLogout</span></a>
          </li>
        </ul>
      </li>
      
        
        </ul>


  
      
         
      


   
      
    
  
  </div>
</div>