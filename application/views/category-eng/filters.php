




<style>

</style>

<body>


<div class="vertical-menu">
 	<?php
 		foreach ($subcategories as $subcategory) {
 				# code...
 				echo "<a href='".base_url()."products/subcategory/".$subcategory['bef_sub_id']."'>".$subcategory['bef_sub_name']."</a>";
 		}
 	 ?>	

</div>

</body>