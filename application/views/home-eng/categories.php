
  
<div id='categories-content' class="container-fluid text-center bg-grey">
  <h2>categories</h2>
  <h4>start from a category</h4>
  <div class="row text-center" id="categories-row">
    <?php 
      foreach($category as $cat){
          #display categories list with links and images
          echo 
               ''
              .' <a href="'.base_url().'products/category/'.$cat['bef_cat_id'].'">'
              .'  <div class="col-sm-3">'
              .'   <div class="thumbnail">'
              .'    <img src="'.base_url().$cat['bef_cat_image'].'" alt="'.$cat['bef_cat_name'].'" >'
              .'    <p><strong>'.$cat['bef_cat_name'].'</strong></p>'
              .'   </div>'
              .'  </div>'
              .' </a>'
              .''
              ;
      }
    ?>
  </div>
