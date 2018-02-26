

<div id=''>
	<div class="vertical-menu col-xs-6">
	 	<?php
	 		foreach ($subcategories as $subcategory) {
	 				# code...
	 				echo "<a href='".base_url()."products/subcategory/".$subcategory['bef_sub_id']."'>".$subcategory['bef_sub_name']."</a>";
	 		}
	 	 ?>	

	</div>

  <div class="col-xs-2 id="products-row">
    <?php 
      foreach($products as $product){
          #display products
          echo 
               ''
              .' <a href="'.base_url().'products/product/'.$product['bef_prd_id'].'">'
              .' <p> '. $product['bef_prd_name'] .' </p>'
              .'   <div class="thumbnail thumb-prod-list">'
              .'    <img src="'.base_url()."productmedia/".$product['bef_prd_id'].'/1.jpeg">'
              .'   </div>'
              .'  '
              .' </a>'
              .''
              ;
          echo '<div class="rating">';
          #print stars
          for($i=1; $i<=$product["bef_prd_rate"]; $i++){
                echo '<span class="fa fa-star checked" style="font-size:25px;"></span>';
              }
          $i -= 1;
          #print half start if rate decimals >= 0.39
          if($product['bef_prd_rate'] >= ($i + 0.39)){
              	echo '<span class="fa fa-star-half checked" style="font-size:25px;"></span>';
              	$i += 1;
              }

          echo '<p>('.$product['bef_prd_rate'].')</p>';
      }

    ?>



  </div>
</div>

