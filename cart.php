<section class="bread-crumb" style="background-image:url(<?=ROOT_URL_BASE.'images/top_banner.jpg';?>);">
<div class="container">
	<div class="row">
		<div class="col-md-12"><h1>My Cart <?php /*?><span><?=$t_c; ?> item(s)</span><?php */?></h1></div>
	</div>
	</div>
</section>
<section class="chekout">
  <div class="container">
    <div class="row1">
      <?php /*?><h1>My Shopping Cart </h1><?php */?>
      <div class="shopping-cart" id="cart_ajax_full">
      <?php $cartCt = $this->session->userdata('cartList'); if($cartCt){ $t_c=count($cartCt); ?>
      
        <div class="column-labels">
          <label class="product-image">Items</label>
          <label class="product-details" style="color: transparent;">Product</label>
          <label class="product-price">Price</label>
          <label class="product-quantity">Quantity</label>
          <label class="product-line-price">Total</label>
        </div>
        <?php $i=1; foreach($cartList as $lkey=>$list){ $l_total += $list['price']*$list['product_qty']; ?>
        <div class="product <?=(($i==$t_c) ? 'lastt' : ''); ?>">
          <div class="product-image">
          <?php
          if ($list['image']!='' && file_exists(DIR_UPLOAD_CLASSIFIED.$list['image'])) {
                  echo '<img src="'.ROOT_URL_BASE.'assets/timthumb.php?src='.DIR_UPLOAD_CLASSIFIED_SHOW.$list['image'].'&w=130&h=100">';
                 }else{
                 echo '<img src="'.ROOT_URL_BASE.'assets/timthumb.php?src='.ROOT_URL_BASE.'images/placeholder-image.jpg&w=130&h=100">';
                   }
		  ?>
          </div>
          <div class="product-details">
            <div class="product-title"><?=$list['product_name']; ?></div>
            <p class="product-description"><?=(($list['description']) ? strip_tags($list['description']) : '').(($list['product_addons']) ? '<br><b>Modifiers:</b>'.$list['product_addons'] : '').(($list['product_addons_extra']) ? '<br><b>Add ons:</b>'.$list['product_addons_extra'] : '').(($list['product_comment']) ? '<br><b>Special Request:</b> '.$list['product_comment'] : ''); ?></p>
             </div>
          <div class="product-price"><?=DEFAULT_CURRENCY.number_format($list['price'],2); ?></div>
          <div class="product-quantity"><div class="qty_update">
          <input type="hidden" class="key_input" value="<?=$lkey; ?>" />
          <button type="button" class="min_qty">-</button><input readonly="readonly" name="qty" class="qty_input" value="<?=$list['product_qty']; ?>" type="text" /><button type="button" class="max_qty">+</button>
         
          </div>
            <?php /*?><?php echo '<select class="product_qty_cart" name="qty">';
		  		$l_total += $list['price']*$list['product_qty'];
                    for($k=1; $k<=10; $k++){ 
                    echo '<option '.(($list['product_qty']==$k) ? 'selected="selected"' : '').'  value="'.$lkey.'-'.$k.'">'.$k.'</option>';
                     } 
                  echo '</select>';?><?php */?>
				  <?='<a rel="'.$lkey.'" href="javascript:void(0);"  class="remove_cart_pro"><i class="fa fa-trash"></i></a>'; ?>
          </div>
          <div class="product-line-price"><span>Total : </span><?=DEFAULT_CURRENCY.number_format($list['price']*$list['product_qty'],2); ?></div>
        </div>
        <?php $i++; } $l_total_d = $l_total; ?>
        
        <?php if(DEFAULT_CORPORATE_DISCOUNT!=0){ $dis_countrate = $l_total_d*(DEFAULT_CORPORATE_DISCOUNT/100);
		$l_total -= $dis_countrate;
		 ?>
        <div class="product btnnn">
          <div class="corp"><a href='javascript:void(0);'><?=CORPORATEDISCOUNT; ?></a></div>
          <div class="ten"><?=DEFAULT_CORPORATE_DISCOUNT; ?>% </div>
          <div class="product-line-price"><?=DEFAULT_CURRENCY.number_format($dis_countrate,2); ?></div>
        </div>
        <?php } ?>
        <?php if(DEFAULT_PREBOOK_DISCOUNT!=0){ $dis_countrate = $l_total_d*(DEFAULT_PREBOOK_DISCOUNT/100);
		$l_total -= $dis_countrate;
		 ?>
        <div class="product btnnn">
          <div class="corp"><a href='javascript:void(0);'><?=EARLY_BIRD; ?></a></div>
          <div class="ten"><?=DEFAULT_PREBOOK_DISCOUNT; ?>% </div>
          <div class="product-line-price"><?=DEFAULT_CURRENCY.number_format($dis_countrate,2); ?></div>
        </div>
        <?php } ?>
        
        <?php if(DEFAULT_DELIVERY_CH!=0){ $dis_countrate = DEFAULT_DELIVERY_CH;
		$l_total += $dis_countrate;
		 ?>
        <div class="product btnnn btnnn_delivery_outer">
          <div class="corp">Delivery Charges</div>
         
          <div class="product-line-price"><?=DEFAULT_CURRENCY.number_format($dis_countrate,2); ?></div>
        </div>
        <?php } ?>
        
        <div class="totals"> 
          
          <div class="totals-item totals-item-total">
            <label>Total:</label>
            <div class="totals-value" id="cart-total"><?=DEFAULT_CURRENCY.number_format($l_total,2); ?></div>
          </div>
        </div>
        
        	<?php $msg_text = '';
			$tm = date('Hi');
			//$tm = 1222;
			if($tm<=1030){
				$msg_text = 'Your delivery is scheduled between 12:00 pm - 12:30 pm';
			}elseif($tm>=1031 && $tm<=1131){
				$msg_text = 'Your delivery is scheduled between 12:30 pm - 1:00 pm';
			}elseif($tm>=1131 && $tm<=1200){
				$msg_text = 'Your delivery is scheduled between 1:00 pm - 1:30 pm';
			}elseif($tm>=1201 && $tm<=1230){
				$msg_text = 'Your delivery is scheduled between 1:15 pm - 1:30 pm';
			}elseif($tm>=1231 && $tm<=1400){
				$msg_text = 'Your order is expected to be delivered in around 45 minutes';
			}
			//echo (($msg_text) ? '<div class="msg_alert_timing">'.$msg_text.'</div>' : '');
			?>
        
        <div class="final__buttons">
          <button class="btn addmore" onclick="location.href='<?php print ROOT_URL_BASE ?>category/daily-specials';">Add More Items</button>
          <?php if($this->session->userdata('is_logged_in')){ ?>
          <button class="btn addmore" onclick="location.href='<?php print ROOT_URL_BASE ?>checkout';">Proceed to Checkout</button>
          <?php }else{ ?>
          <button class="btn addmore" onclick="location.href='<?php print ROOT_URL_BASE.'login?back='.base64_encode(ROOT_URL_BASE.'checkout').'&guest=1'; ?>';">Proceed to Checkout</button>
          <?php } ?>
          <?php /*?><button class="btn addmore" onclick="location.href='<?php print ROOT_URL_BASE ?>checkout';">Proceed to checkout</button><?php */?>
          
        </div>
        <!--<button class="checkout">Checkout</button>--> 
        
       
        <?php }else{ ?>
        <div class="alert alert-danger">You currently have <strong>0</strong> item(s) in your cart</div>
        <?php } ?>
      </div>
      
      
    </div>
  </div>
</section>
<script type="text/javascript">
 $(document).on('change','.product_qty_cart',function(){
	var product_qty = $(this).val();
	var product_id =  $(this).parent('td').attr('rel'); 
	data = 'product_id='+product_id+'&product_qty='+product_qty;
	$.ajax({
		dataType:'json',
		url:'<?php print ROOT_URL_BASE ?>cart/qtyupdate_ajax_cartpage/'+product_qty,
		//data:data,
		method:'POST',
		success:function(data,status,xhr){
		//	alert('Your product updated successfully');
			//window.location.reload(true);
			$('.pop_cart span').text(data.cart);
			$('#cart_ajax_full').html(data.cart_html);
		}
	});
});
 $(document).on('click','.max_qty',function(){
 	var product_qty = $(this).parent('div.qty_update').find('.qty_input').val();
	var product_id =  $(this).parent('div.qty_update').find('.key_input').val();
	var qty = parseInt(product_qty)+1;
	data = 'product_id='+product_id+'&product_qty='+product_id+'-'+qty;
	console.log(data);
	var urld = '<?php print ROOT_URL_BASE ?>cart/qtyupdate_ajax_cartpage/'+product_id+'-'+qty;
	if(qty==0){ var urld = '<?php print ROOT_URL_BASE ?>cart/delete_ajax_page/'+product_id; }
	//return false;
	$.ajax({
		dataType:'json',
		url:urld,
		//data:data,
		method:'POST',
		success:function(data,status,xhr){
		//	alert('Your product updated successfully');
			//window.location.reload(true);
			$('.pop_cart span').text(data.cart);
			$('#cart_ajax_full').html(data.cart_html);
		}
	});	
 });
  $(document).on('click','.min_qty',function(){
 	var product_qty = $(this).parent('div.qty_update').find('.qty_input').val();
	var product_id =  $(this).parent('div.qty_update').find('.key_input').val();
	var qty = parseInt(product_qty)-1;
	data = 'product_id='+product_id+'&product_qty='+product_id+'-'+qty;
	console.log(data);
	var urld = '<?php print ROOT_URL_BASE ?>cart/qtyupdate_ajax_cartpage/'+product_id+'-'+qty;
	if(qty==0){ var urld = '<?php print ROOT_URL_BASE ?>cart/delete_ajax_page/'+product_id; }
	//return false;
	 
	$.ajax({
		dataType:'json',
		url:urld,
		//data:data,
		method:'POST',
		success:function(data,status,xhr){
		//	alert('Your product updated successfully');
			//window.location.reload(true);
			console.log(data);
			$('.pop_cart span').text(data.cart);
			$('#cart_ajax_full').html(data.cart_html);
		}
	});	
 });
 
  $(document).on('click','.remove_cart_pro',function(){
	var redriect_id = $(this).attr('rel');
	
	if(redriect_id!=0){
		var confirmText = "Are you sure you want to delete this product?";
    if(confirm(confirmText)) {
	var data = $( "form#product_form_"+redriect_id).serialize();
	//var imgtodrag = $( "form#product_form_"+redriect_id+' .img_outer_p').find("img").eq(0);	
	///data = 'product_id='+product_id+'&product_qty='+product_qty+'&product_bonus='+product_bonus;
	//alert(data);
	$.ajax({
		dataType:'json',
		url:'<?php print ROOT_URL_BASE ?>cart/delete_ajax_page/'+redriect_id,
		//data:data,
		method:'POST',
		success:function(data,status,xhr){
			console.log(data);
			if(data.status==2){
				alert('products not available');
			}else{ 
			//window.location.reload(true);
			$('.pop_cart span').text(data.cart);
			$('#cart_ajax_full').html(data.cart_html);
			}
		}
	});
	}
	}else{
		alert('Please Select Quantity');
	}
});
</script> 

