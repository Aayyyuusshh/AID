<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
// include_once("./database/db.php");
// $db = new Database();
// $con = $db->connect();
// $uid = $_SESSION["userid"];
// $pre_stmt = $con->prepare("SELECT * FROM USER WHERE ID = ?");
// $pre_stmt->bind_param('i', $uid);
// $pre_stmt->execute();
// $result = $pre_stmt->get_result();
// $row = $result->fetch_object();
?>
<?php include_once("./templates/startHTML.php"); ?>
<!-- header -->
<?php include_once("./templates/header.php"); ?>
<br/><br/>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card mx-auto">
				<!-- <img class="card-img-top mx-auto" style="width:60%;" src="./images/user.png" alt="profile picture"> -->
				<div class="form-group">
					<form method="post" id="profile_form" enctype="multipart/form-data" onsubmit="return false">
						<img style="width:180px;height:180px;border-radius: 15%;" src="images/users/">
						<br/><br/>              
						<!-- <br/><br/>   -->
						<div id="profileImage" style="display: none;" >                  
							<input type="file" id="profile" name="profile" class="form-control" />
							 <small id="profile_error" class="form-text text-muted"></small>
							<input type="submit" name="changeProfile" value="Upload" class="form-control" >
							<input type="button" name="cancleButton" value="Cancle" class="form-control" onclick="document.location = 'dashboard.php'">
						</div>
					</form>
					<button onclick="$('#profileImage').show();$(this).hide() " class="btn btn-primary" name="changePic">Change</button>
				</div>
				<div class="card-body">
					<h4 class="card-title">Profile Info</h4>
					<p class="card-text"><i class="fa fa-user">&nbsp;</i><?php echo $_SESSION["username"]; ?></p>
					<p class="card-text"><i class="fa fa-envelope">&nbsp;</i><?php echo $_SESSION["email"]; ?></p>
					<p class="card-text">Last Login : <?php echo $_SESSION["last_login"]; ?></p>
					<a href="#" data-toggle="modal" data-target="#profile_form_modal" class="btn btn-primary" class="edit_profile"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="jumbotron" style="width:100%;height:100%;">
				<h1>Welcome Admin,</h1>
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">New Orders</h4>
								<p class="card-text">Here you can make invoices and create new orders</p>
								<a href="new_order.php" class="btn btn-primary">New Orders</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<p></p>
<p></p>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Categories</h4>
					<p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
					<a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
					<a href="manage_categories.php" class="btn btn-primary">Manage</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Brands</h4>
					<p class="card-text">Here you can manage your brand and you add new brand</p>
					<a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
					<a href="manage_brand.php" class="btn btn-primary">Manage</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Products</h4>
					<p class="card-text">Here you can manage your prpducts and you add new products</p>
					<a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
					<a href="manage_product.php" class="btn btn-primary">Manage</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
	//Categpry Form
include_once("./templates/profile.php");
?>
<?php
	//Categpry Form
include_once("./templates/category.php");
?>
<?php
	//Brand Form
include_once("./templates/brand.php");
?>
<?php
	//Products Form
include_once("./templates/products.php");
?>


<?php include_once("./templates/footer.php"); ?>