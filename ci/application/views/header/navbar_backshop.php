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
        <a href="#"><?php echo $nameshop;?></a>
      </li>

      <li>
        <a href="<?php echo site_url('backshop/gobackshop');?>"><?=$this->lang->line("store");?></a>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("product");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('backshop/productType');?>"><?=$this->lang->line("product_type");?></a></li>
          <li><a href="<?php echo site_url('backshop/productManage');?>"><?=$this->lang->line("product_management");?></a></li>
          
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("sell");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('backshop/orderManage');?>"><?=$this->lang->line("order_buy");?></a></li>
          <li><a href="<?php echo site_url('backshop/bankManage');?>"><?=$this->lang->line("bank");?></a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("report");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a href="<?php echo site_url('backshop/sellreport');?>"><?=$this->lang->line("selling");?></a></li>
        <li><a href="<?php echo site_url('backshop/paymentreport');?>"><?=$this->lang->line("payment");?></a></li>
        <li><a href="<?php echo site_url('backshop/memberreport');?>"><?=$this->lang->line("mem_shop");?></a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("system");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a href="<?php echo site_url('backshop/setting');?>"><?=$this->lang->line("setting");?></a></li>
        <li><a href="<?php echo site_url('backshop/management');?>"><?=$this->lang->line("management");?></a></li>
        </ul>
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
      <li>
        <a href="<?php echo site_url('backshop/myshop');?>"><span  ><img style="width:25px;height:25px" src="<?php echo logo_pic;?>icon_openshop_s.png">&nbsp<?=$this->lang->line("viewshop");?></span></a>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("login");?><b class="caret"></b></a>
        <ul class="dropdown-menu">

          
          <li><a href="<?php echo site_url('member_tb/profile');?>"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp<?php echo $user; ?></span></a></li>
          <li class="divider"></li>
          <li class="dropdown-header"><font color="white"><?=$this->lang->line("shop_name");?></font></li>
          <li><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true">&nbsp<?php echo $nameshop;?></span></a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('backshop/logout');?>"><span class="glyphicon glyphicon-off" >&nbspLogout</span></a>
      </li>
    </ul>
  </div>
</div>