<?php
include_once("./database/constants.php");

?>
<?php include_once("./templates/startHTML.php"); ?>
<!-- header -->
<?php include_once("./templates/header.php"); ?>
	<br/>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="card">
					<div class="card-body">						
						<gcse:search></gcse:search>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
  (function() {
    var cx = '002409453066184790447:rbfixyoern8';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<?php include_once("./templates/footer.php"); ?>