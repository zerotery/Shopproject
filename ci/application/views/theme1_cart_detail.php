<div  class="modal animated pulse" data-easein="pulse" data-easeout="rollOut"  id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg " style="font-size: 11px;letter-spacing: 0.2em;text-align: center;text-transform: uppercase;background-color:white">
    <div class="modal-content"style="background-color:white ">
      <div class="modal-header"style="background-color:white ">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:#696969;"><?=$this->lang->line("basket");?></h4>
      </div>
      <div class="modal-body" style="background-color:white ">
         <?php 
            $num_cart=count($this->cart->contents());  
         ?>
        <div style="text-transform: none;color:black;font-size:10pt;" align="left"><?=$this->lang->line("cartbox1");?>(<?=$this->lang->line("cartbox2");?> <label class="space2"><?php echo $num_cart;?></label><?=$this->lang->line("cart_count");?>)</div>
        <?php $attributes = array('id' => 'view_cart'); ?>
        <?php echo form_open('cashshop/update_cart',$attributes); ?>
        <div class="row">

          <div class="col-xs-12 col-sm-12 bborder" >
              <div class="table-responsive ">
              <table class="table" id="product-table" style="width:100%;border: 2px solid #eee">
                <!-- On rows -->
                <tr class="active"   >

                  <th width="20%" style="font-size:10pt "  class="warning tcolor "><?=$this->lang->line("productname");?></th>
                  <th width="20%" style="font-size:10pt"  class="warning tcolor"><?=$this->lang->line("productprice");?></th>
                  <th width="20%" style="font-size:10pt"  class="warning tcolor "><?=$this->lang->line("qpro");?></th>
                  <th width="20%" style="font-size:10pt"  class="warning tcolor "><?=$this->lang->line("ps_pro");?></th>
                  <th width="20%" style="font-size:10pt"  class="warning tcolor "><?=$this->lang->line("order_detail");?></th>
                  
                  <th width="5%" class="warning tcolor"></th>

                </tr>

                <?php if ($num_cart!=0){
                $i = 1;
                
                //print_r($this->cart->contents());

                foreach($this->cart->contents() as $items){
                  echo form_hidden('rowid[]', $items['rowid']);
                  echo form_hidden('p_id[]', $items['id']);
                  echo form_hidden('s_id[]', $s_id);
                  echo '<tr id="trpro">';
                  echo '<td style="border: 1px solid #eee" ><font>'.$items['name'].'</font></td>';
                  echo '<td style="border: 1px solid #eee"><span >'.$this->cart->format_number($items['price']).'</span>'.$this->lang->line("monetary").'</td>';
                  echo '<td style="border: 1px solid #eee"><font ><input type="number" id="quantity" class="quantity" name="qty[]" min="1" max="1000" value="'.$items['qty'].'" onclick=""></font></td>';
                  //$price=$this->cart->format_number($items['price']);
                  //$qty= $this->cart->format_number($items['qty']);
                  //$sum=$price*$qty;
                  echo '<td  style="border: 1px solid #eee"><span class="total" id="s_price">'.$this->cart->format_number($items['subtotal']).'</span><font class="space2">'.$this->lang->line("monetary").'</font></td>';
                  echo '<td  style="border: 1px solid #eee"><textarea id="detail_order" name="detail_order[]"></textarea></td>';
                  
                  echo '<td style="border: 1px solid #eee"><div id="delete_order" class="btn glyphicon glyphicon-trash btn-remove " style="color:red" onclick="javascript:location.href=\''.site_url().'cashshop/delete_cart'.'?row_id='.$items['rowid'].'&sid='.$s_id.' \';'.$this->session->set_userdata('address_url',$_SERVER['PHP_SELF']).';"></div></td>';
                  //echo $items['rowid'].'<br>';
                  $i++;

                }
                echo '<tr id="trprosum">'; 
                echo ' <td width="40%" style="border: 1px solid #eee" colspan="2" align="right"><font >'.$this->lang->line("ps_proall").'</font></td>  ';
                echo '<td width="20%" style="border: 1px solid #eee" colspan="2" align="center"><span id="sumary">'.$this->cart->format_number($this->cart->total()).'</span>'.$this->lang->line("monetary").'</td>';
                echo '<td colspan="2"></td> ';
                echo '</tr>';
                echo '</table>';
                /*<tr id="trpro">
                  <td style="border: 1px solid #eee" ><font>รองเท้า Merrell ลาย Forest camouflage</font></td>
                  <td style="border: 1px solid #eee"><span >1890.00</span><?=$this->lang->line("monetary");?></td>
                  <td style="border: 1px solid #eee"><font ><input type="number" class="quantity" name="quantity" min="1" max="1000" value="1" ></font></td>
                  <td  style="border: 1px solid #eee"><span class="total" id="s_price">1890.00</span><font class="space2"><?=$this->lang->line("monetary");?></font></td>
                  <td  style="border: 1px solid #eee"><textarea id="detail_order" name="detail_order"></textarea></td>
                  <td style="border: 1px solid #eee"><div id="delete_order" class="btn glyphicon glyphicon-trash btn-remove " style="color:red"></div></td>
                  
                </tr>*/
             
                  
                
               }else{
                echo '<tr id="trprosum">'; 
                echo ' <td width="40%" style="border: 1px solid #eee" colspan="2" align="right"><font >'.$this->lang->line("ps_proall").'</font></td>  ';
                echo '<td width="20%" style="border: 1px solid #eee" colspan="2" align="center"><span id="sumary">'.$this->cart->format_number($this->cart->total()).'</span>'.$this->lang->line("monetary").'</td>';
                echo '<td colspan="2"></td> ';
                echo '</tr>';
                echo '</table>';


                }
               
             ?>


           </div>

         
       </div>
     </div>


         <div style="text-transform: none;color:black;font-size:10pt;" align="left"><?=$this->lang->line("send_pro");?></div>

     <div class="row">

      <div class="col-xs-12 col-sm-12 bborder" >

        


         <div class="table-responsive ">
          <td><table class="table" style="width:100%;border: 2px solid #eee" >
            <tbody>

              <tr class="active"  >

                <th width="20%" style="font-size:10pt "  class="warning tcolor" colspan="2"><?=$this->lang->line("send_postcode");?></th>
                <th width="20%" style="font-size:10pt"  class="warning tcolor"><?=$this->lang->line("send_postcode_p");?></th>
                <th width="20%" style="font-size:10pt"  class="warning tcolor"><?=$this->lang->line("send_postcode_all");?></th>
                
                

              </tr>
              <tr>
                <td><input type="radio" name="post_product" id="registered" value="<?php echo $this->cart->format_number($this->cart->total()); ?>" checked></td><td><?=$this->lang->line("domestic_registered");?></td><td>+ 0.00 <font class="space2"><?=$this->lang->line("monetary");?></font></td><td><?php echo $this->cart->format_number($this->cart->total()); ?><font class="space2"><?=$this->lang->line("monetary");?></font></td>
              </tr>
              <tr>
              <?php 

              $cart=$this->cart->format_number($this->cart->total()+80);
              


              ?>
                <td><input type="radio" name="post_product" id="ems" value="<?php echo $cart;  ?>"></td><td><?=$this->lang->line("domestic_ems");?></td><td>+ 80.00 <font class="space2"><?=$this->lang->line("monetary");?></font></td><td><?php echo $cart;  ?><font class="space2"><?=$this->lang->line("monetary");?></font></td>
              </tr>
              
            </tbody>
          </table>
        </td>


      </div>
      <a href="javascript:{}" id="btn_submit_order"><div  class="pull-right btn btn-info"><?=$this->lang->line("send_order");?></div></a>
      
    
  </div>
</div>

            
              







<?php echo form_close(); ?>


 

 





</div>
<div class="modal-footer" style="background-color:white ">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  
</div>
</div>
</div>
</div>

