<?php
require_once("template/header.php");
?>
	<div class="total">
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="img/IMG_4227.jpg" alt="plato1">
		    </div>

		    <div class="item">
		      <img src="img/IMG_4215.jpg" alt="plato2" class="center">
		    </div>

		    <div class="item">
		      <img src="img/IMG_4236.jpg" alt="plato3" class="center">
		    </div>
		  </div>

		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>


	</div>
<?php
require_once("template/footer.php");
?>