<div  id="divider-right " >

              <div class="col-xs-12 col-sm-12  " >             
                <a  data-toggle="modal" data-target="#cartModal"><ul class="nav nav-stacked affix-top " id="cart" >
                 <h3 class="color cart-margin"><i class="glyphicon glyphicon-shopping-cart space"></i><?=$this->lang->line("cart");?>
                   <?php 
						$num_cart=count($this->cart->contents());  
						if($num_cart==0){
							echo '<li><label class="color">'.$num_cart.'</label>'.$this->lang->line("cart_count").'</li></h3>';
						}else{
							echo '<li><label class="color">'.$num_cart.'</label>'.$this->lang->line("cart_count").'</li></h3>';
						}

						
                   ?>
                  
                   
                   
                   


                 </ul></a>                                                                                                       
               </div> 
</div>