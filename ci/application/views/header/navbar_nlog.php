
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
    
    
    <ul class="nav navbar-nav navbar-right">
      
          <li><a href="<?php echo site_url('main/chenge_lang/english');?>" onclick="<?php $this->session->set_userdata('address',$_SERVER['PHP_SELF']);?>"><img src="<?php echo logo_pic;?>flag-en.jpg" width="25" height="15" border="0"></a></li>
          <li><a href="<?php echo site_url('main/chenge_lang/thailand');?>" onclick="<?php $this->session->set_userdata('address',$_SERVER['PHP_SELF']);?>"><img src="<?php echo logo_pic;?>flag-th.jpg" width="25" height="15" border="0"></a></li>
          <li>
             <a href="<?php echo site_url('main');?>"><span class="glyphicon glyphicon-log-in" >&nbsp<?=$this->lang->line("login_mem");?></span></a>
          </li>

          <li>
             <a href="<?php echo site_url('member_tb/reg');?>"><span class="glyphicon glyphicon-user" >&nbsp<?=$this->lang->line("register");?></span></a>
          </li>
        </ul>
    
  </div>
</div>
<!--<?php //echo site_url('member_tb/changelangreg/english');?>-->