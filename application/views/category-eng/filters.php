

<div class='container'>
<div class="row" id="">
	<div class="col-sm-1 vertical-menu ">
	 	<?php
	 		foreach ($subcategories as $subcategory) {
	 				# code...
	 				echo "<a href='".base_url()."products/subcategory/".$subcategory['bef_sub_id']."'>".$subcategory['bef_sub_name']."</a>";
	 		}
	 	 ?>	

	</div>

  
    <?php 
      $row = 1;
      
      foreach($products as $product){
          echo '<div class="col-sm-3">'; #1 open
          #display products
          echo 
               ''
              .' <a href="'.base_url().'products/product/'.$product['bef_prd_id'].'">'
              .' <p> '. $product['bef_prd_name'] .' </p>'
              .'   <div class="thumbnail thumb-prod-list">' #2 open
              .'    <img src="'.base_url()."productmedia/".$product['bef_prd_id'].'/1.jpeg">'
              .'   </div>' #2 close
              .'  '
              .' </a>'
              .''
              ;
      
          echo '<div class="rating">'; #3 open
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
          echo '</div>'; #3 close
          echo '</div>'; #1 close

          if(($row % 3) == 0){
            echo '</div>'; #0 close
            echo '<div class="row"><div class="col-sm-1 vertical-menu "></div>'; #0 open
          }
          $row += 1;
      }
       if(($row % 3) != 0){
           echo '</div>'; #0 close
       }
    ?>
</div>
</div>

