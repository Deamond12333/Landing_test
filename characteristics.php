<?php
	include 'menu.php';
	$menu[1]['isActive'] = "active";
	include 'nav.php';
?>

<div id="carouselDescription" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
		<li data-target="#carouselDescription" data-slide-to="0" class="active"/>
		<li data-target="#carouselDescription" data-slide-to="1"/>
		<li data-target="#carouselDescription" data-slide-to="2"/>
		<li data-target="#carouselDescription" data-slide-to="3"/>
		<li data-target="#carouselDescription" data-slide-to="4"/>
	</ol>
	
	<div class="carousel-inner">
		<div class="carousel-item active"><img class="d-block w-100" src="content/slide1.PNG"></div>
		<div class="carousel-item"><img class="d-block w-100" src="content/slide2.PNG"></div>
		<div class="carousel-item"><img class="d-block w-100" src="content/slide3.PNG"></div>
		<div class="carousel-item"><img class="d-block w-100" src="content/slide4.PNG"></div>
		<div class="carousel-item"><img class="d-block w-100" src="content/slide5.PNG"></div>
	</div>
	
	<a class="carousel-control-prev" href="#carouselDescription" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true" style="background-image: url(content/carousel_control_icon_last.png); width: 40px; height: 40px"></span>
		<span class="sr-only">Previous</span>
	</a>
	
	<a class="carousel-control-next" href="#carouselDescription" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true" style="background-image: url(content/carousel_control_icon_next.png); width: 40px; height: 40px"></span>
		<span class="sr-only">Next</span>
	</a>
	
</div>