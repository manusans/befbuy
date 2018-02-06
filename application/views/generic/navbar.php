
<style>
.logo{
    font-size:35px;
    color: #3A5A7F;	
	text-decoration=none;
	font-family: 'Shadows Into Light', cursive;
	font-weight:bold;
}

.logo:hover{
    color: #3A5A7F;	
}

.nav-custom a{
    color: #3A5A7F;	
}

.nav-custom a:hover{
    color: #3A5A7F;	
}

.navbar-custom{
	margin-top:10px;
	font-family: 'Rajdhani', sans-serif;
	//background-color: #3A5A7F;
	font-size:15px;
	font-weight:bold;
}

</style>

<?php
 $logo_stars = 0
?>




<nav class="navbar navbar-custom">
  <div class="container-fluid">
  	 <!-- LEFT: Logo Part -->
    <div class="navbar-header">
      <a class="navbar-brand logo" href="#">BefBuy</a> 
	  <?php for($i=0; $i<$logo_stars; $i++){ echo '<span class="glyphicon glyphicon-star" style="font-size:15px; color:#F5A764; margin-top:8px; "></span>';}?>
    </div>
	<!-- RIGHT: navigation Part -->
    <ul class="nav navbar-nav navbar-right nav-custom">
      <li class="active"><a href="#">HOME</a></li>
      <li><a href="#">CATEGORIES</a></li>
      <li><a href="#">LOGIN</a></li>
    </ul>
	<!-- RIGHT: Search Bar-->
    <form class="navbar-form navbar-right"  action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search products" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
	
  </div>
</nav>

<hr>