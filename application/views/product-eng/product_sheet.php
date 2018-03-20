<div class="container" style="width: 80%;" id="product-section">
  <div class="row well">
   <div class="col-md-6">
   	<div class="col-md-12 thumbnail thumb-prod-list">
    	<img src="<?php echo base_url().'productmedia/'.$product_info['bef_prd_id'].'/1.jpeg'; ?>">
	</div>
   </div>
   <div class="col-md-6">
    <div class="col-md-12">
   		<h1 class="section-title"><?php echo $product_info['bef_prd_name']; ?></h1>
   		<?php $this->befbuy->get_graphic_rate($product_info['bef_prd_rate']); ?>
      <?php echo $product_info['bef_prd_description'];?>
 	  </div>
   </div>
  </div><!-- end row -->
 </div><!-- end container -->
 <hr>