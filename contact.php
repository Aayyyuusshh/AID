<?php
include_once("./database/constants.php");
?>
<?php include_once("./templates/startHTML.php"); ?>
<!-- header -->
<?php include_once("./templates/header.php"); ?>
	<br/>
	<br/>


	<div class="container">
		<!--Contact heading-->
		<h2 class="h1 m-0">Contact us</h2>
		<!--Contact description-->
		
		<div class="row">
			<!--Grid column-->
			<div class="col-lg-4 mb-4">

				<!--Form with header-->
				<div class="card border-primary rounded-0">
					<div class="card-header p-0">
						<div class="bg-primary text-white text-center py-2">
							<h3><i class="fa fa-envelope"></i> Write to us:</h3>
						</div>
					</div>
					<div class="card-body p-3">
						<form method="post" action="#">
							<!--Body-->
							<div class="form-group">
								<label>Full name</label>
								<div class="input-group">
									<div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
									<input type="text" class="form-control"  placeholder="Full name" required>
								</div>
							</div>
							<div class="form-group">
								<label>Your email</label>
								<div class="input-group mb-2 mb-sm-0">
									<div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
									<input type="email" class="form-control" placeholder="email" required>
								</div>
							</div>
							<div class="form-group">
								<label>Your Phone</label>
								<div class="input-group mb-2 mb-sm-0">
									<div class="input-group-addon bg-light"><i class="fa fa-phone text-primary"></i></div>
									<input type="phone" class="form-control" placeholder="Phone number" required>
								</div>
							</div>
							<div class="form-group">
								<label>Message</label>
								<div class="input-group mb-2 mb-sm-0">
									<div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
									<textarea class="form-control"></textarea>
								</div>
							</div>

							<div class="text-center">
								<button class="btn btn-primary btn-block rounded-0 py-2">Submit</button>
							</div>
						</form>

					</div>

				</div>
				<!--Form with header-->

			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-lg-8">
				<!--Google map-->
				<div class="card border-primary w-100  h-100">
					<div class="card-header p-0">
						<div class="bg-primary text-white text-center py-2">
							<h3><i class="fa fa-map"></i> Our Location</h3>
						</div>
					</div>
						<iframe width="100%" height ="100%" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA88zdIZkvKToTmIkExuVVQgHy4gKvgk6Q&q= Kathmandu+Nepal&center=27.705718094284943,85.31866028769684" allowfullscreen> </iframe>
				</div>
			</div>
			<!--Grid column-->
<br/>
<br/>
		</div><br/>
<br/>
	</div>

<?php include_once("./templates/footer.php"); ?>