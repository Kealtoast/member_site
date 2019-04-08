<?php
	include_once 'header.php';
?>
<section class="w3-container">
		<div class="profile-container">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-m-12">
						<h2 class="">Login</h2>
						<form class="w3-panel" action="includes/login.inc.php" method="POST">
							<div class="col-xs-12">
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Username/Email</span>
	  								</div>
	  								<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="uid">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
	  								</div>
	  								<input type="password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="pwd">
								</div>
								<div class="text-center">
									<button type="submit" name="submit" class="wide bg-gold signup">Login</button>
								</div>
								
							</div>		
	</section>
<?php
include_once 'footer.php';
?>