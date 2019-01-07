<?php
include_once("./database/constants.php");
?>
<?php include_once("./templates/startHTML.php"); ?>
<!-- header -->
<?php include_once("./templates/header.php"); ?>
	<!-- header -->	<br/>
	<br/>


	<div class="container">
<div class="row">
<div class="col-md-12">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" height="350" src="images/slider/images.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" height="350" src="images/slider/images2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" height="350" src="images/slider/images3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>	
</div>
</div>








<br/>

	<div class="container">
		
<!-- Services section -->
	<section id="what-we-do" style="background-color: #dcdcdc;">
		<div class="container-fluid">
			<h2 class="section-title mb-2 h1">What we do</h2>
			<p class="text-center text-muted h5">Having and managing a correct marketing strategy is crucial in a fast moving market.</p>
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">Mobiles</h3>
							<p class="card-text">We provide wide ranges of mobile phones at very low cost.

							</p>
							<p></p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">Gadgets</h3>
							<p class="card-text">Gadgets makes our life simplier. You can buy gadgets from our store to enhance your collections.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-3">
							<h3 class="card-title">Laptops</h3>
							<p class="card-text">Order your favourite laptops from our website to receive 10% discount</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-4">
							<h3 class="card-title">Smart TV</h3>
							<p class="card-text">Upgrade your life with smart TV available on our site. Why not become smart by buying smart TV</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-5">
							<h3 class="card-title">Electronics</h3>
							<p class="card-text">Decorate your home with electronics available at our store.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-6">
							<h3 class="card-title">Watch</h3>
							<p class="card-text">Get stylish look with our wide ranges of watches available at our store.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- /Services section -->
	</div>
<script type="text/javascript">
	$('.carousel').carousel({
		interval: 500
	})
</script>
<?php include_once("./templates/footer.php"); ?>