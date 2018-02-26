






<div id='products-content' class="container-fluid text-center bg-grey">
  <div class="row text-center" id="products-row">
    <?php 
      foreach($products as $product){
          #display products
          echo 
               ''
              .' <a href="'.base_url().'products/product/'.$product['bef_prd_id'].'">'
              .'  <div class="col-sm-1">'
              .'   <div class="thumbnail thumb-prod-list">'
              .'    <img src="'.base_url()."productmedia/".$product['bef_prd_id'].'/1.jpeg">'
              .'    <p><strong></strong></p>'
              .'   </div>'
              .'  </div>'
              .' </a>'
              .''
              ;
      }
    ?>
  </div>
