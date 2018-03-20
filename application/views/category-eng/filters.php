<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>



	<div class="sidenav">
	 	<?php
	 		foreach ($subcategories as $subcategory) {
	 				# code...
	 				echo "<a href='".base_url()."products/subcategory/".$subcategory['bef_sub_id']."'>".$subcategory['bef_sub_name']."</a>";
	 		}
	 	 ?>	

	</div>

  <div class='container' style="width:70%;">
<div class="row well" id="">
    <?php 
      $row = 1;
      
      foreach($products as $product){
          echo '<div class="col-xs-12 col-sm-6 col-lg-4">'; #1 open
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
          $this->befbuy->get_graphic_rate($product["bef_prd_rate"]);
          echo '</div>'; #1 close

          if(($row % 3) == 0){
            echo '</div>'; #0 close
            echo '<hr size="10">';
            echo '<div class="row well">'; #0 open
          }
          $row += 1;
      }
       if(($row % 3) != 0){
           #echo '</div>'; #0 close
       }
    ?>
</div>
</div>

