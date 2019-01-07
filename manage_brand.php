<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
?>
<?php include_once("./templates/startHTML.php"); ?>
<!-- header -->
<?php include_once("./templates/header.php"); ?>
	<br/><br/>
	<div class="container">
		<table class="table table-hover table-bordered">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Brand</th>
		        <th>Status</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody id="get_brand">

		    </tbody>
		  </table>
	</div>


	<?php
		include_once("./templates/update_brand.php");
	?>
	
<?php include_once("./templates/footer.php"); ?>