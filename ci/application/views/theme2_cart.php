<li class=" active_c animated m_hover" >

 <?php 
						$num_cart=count($this->cart->contents());  
						if($num_cart==0){
							echo '<a data-toggle="modal" data-target="#cartModal" class="animated-basket fadeInRight2 ">'. $this->lang->line("basket_t2")." ".'<span class="badge badge-color " >'.$num_cart.'</span><i class=" sub_icon glyphicon glyphicon-shopping-cart glyphicon-sea"> </i></a>';
						}else{
							echo '<a data-toggle="modal" data-target="#cartModal" class="animated-basket fadeInRight2 ">'. $this->lang->line("basket_t2")." ".'<span class="badge badge-color " >'.$num_cart.'</span><i class=" sub_icon glyphicon glyphicon-shopping-cart glyphicon-sea"> </i></a>';
						}

						
 ?>



</li>