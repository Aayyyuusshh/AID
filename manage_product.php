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
	   <div class="row">
        <div class="input-group col-md-4 pull-right">
            <input class="form-control py-2" type="search" placeholder="search" id="searchValue" name="searchValue">
            <small id="search_error"></small>
            <span class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="searchBtn">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Product</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Price</th>
				<th>Stock</th>
				<th>Added Date</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody id="get_product">

		</tbody>
	</table>
    </div>
</div>


<?php include_once("templates/update_products.php"); ?>

<?php include_once("./templates/footer.php"); ?>