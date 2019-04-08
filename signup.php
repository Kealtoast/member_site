<?php 
include_once 'header.php';

 ?>
	<section class="w3-container">
		<div class="profile-container">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-m-12">
						<h2 class="">Join Us</h2>
						<form class="w3-panel" action="includes/signup.inc.php" method="POST">
							<div class="col-xs-12">
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">First Name</span>
	  								</div>
	  								<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="first">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Last Name</span>
	  								</div>
	  								<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="last">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
	  								</div>
	  								<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="email">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Username</span>
	  								</div>
	  								<input type="text" class="form-control invalid-feedback" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="uid">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
	  								</div>
	  								<input type="password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="pwd">
								</div>
								<div class="text-center">
									<button type="submit" name="submit" class="wide bg-gold signup">Sign Up</button>
								</div>
								
							</div>		
	</section>
 <?php 
include_once 'footer.php';
  ?>