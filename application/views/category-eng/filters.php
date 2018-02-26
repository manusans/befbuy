

<div id=''>
	<div class="vertical-menu col-xs-6">
	 	<?php
	 		foreach ($subcategories as $subcategory) {
	 				# code...
	 				echo "<a href='".base_url()."products/subcategory/".$subcategory['bef_sub_id']."'>".$subcategory['bef_sub_name']."</a>";
	 		}
	 	 ?>	

	</div>

  <div class="col-xs-6 id="products-row">
    <?php 
      foreach($products as $product){
          #display products
          echo 
               ''
              .' <a href="'.base_url().'products/product/'.$product['bef_prd_id'].'">'
              .'  '
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
                echo '<i class="glyphicon glyphicon-star"></i>';
              }
          #print half start if rate decimals >= 0.39
          if($product['bef_prd_rate'] >= ($i + 0.39)){
              	echo '<i class="glyphicon glyphicon-star half"></i>';
              	$i += 1;
              }

          for($i;$i<=5;$i++){
          	#echo '<i class="glyphicon glyphicon-star-empty"></i>';
          }
          echo '('.$product['bef_prd_rate'].')';
      }

    ?>



  </div>
</div>

