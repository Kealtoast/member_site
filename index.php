<?php
	include_once 'header.php';
?>
<section class="slideshow-container">
	<div class="mySlides fade">
		<div class="numbertext">1/5</div>
		<img src="img/banner.png" alt="banner1">
		<div class="text"></div>
	</div>
		<div class="mySlides fade">
		<div class="numbertext">2/5</div>
		<img src="img/banner2.png" alt="banner1">
		<div class="text"></div>
	</div>
		<div class="mySlides fade">
		<div class="numbertext">3/5</div>
		<img src="img/banner.png" alt="banner1">
		<div class="text"></div>
	</div>
		<div class="mySlides fade">
		<div class="numbertext">4/5</div>
		<img src="img/banner2.png" alt="banner1">
		<div class="text"></div>
	</div>
		<div class="mySlides fade">
		<div class="numbertext">5/5</div>
		<img src="img/banner.png" alt="banner1">
		<div class="text"></div>
	</div>
	<!--<a class="prev" onclick="slideIndex(-1)">&#10094;</a>
	<a class="next" onclick="slideIndex(1)">&#10095;</a>-->
</section>
<section class="container">
	<h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum sit amet lacus at feugiat. Vestibulum tristique diam sed ex luctus iaculis. Etiam eu molestie nulla, sed hendrerit enim. Aliquam vitae erat fermentum, dapibus neque vitae, sodales ante. Mauris aliquam ac quam vel rhoncus. Morbi fermentum eros eu semper malesuada. Mauris molestie blandit justo non maximus.</p>
</section>
<div class="full-container">
	<div class="row">
		<div class="col-xs-12">
			<h5>Lorem ipsum.</h5>
		</div>
		<?php include_once 'includes/member_gallery.inc.php'; ?>
	</div>
	<div class="row home-gallery">
		<div class="col-xs-12 text-center">
			<a href="html/gallery.html">
				<button class="wide bg-gold">
					View Our Gallery Here
				</button>
			</a> 
		</div>
	</div>
</div>

	
<?php
	include_once 'footer.php';
?>