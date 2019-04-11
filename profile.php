<?php 
include_once 'header.php';
?>

<section class="w3-container">
		<div class="profile-container">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-m-12">
						<?php echo '<h2>Welcome '.$_SESSION['u_uid'].'</h2>' ?>
						<form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
							<div class="input-group text-center">
								<input class="custom-file-input image" type="file" name="image">
								<button class="btn btn-outline-secondary" type="submit" name="submit">UPLOAD</button>
							</div>
							<!--<input class="w3-input w3-btn w3-block" type="file" name="image">
							<button class="w3-btn w3-block w3-black" type="submit" name="submit">UPLOAD</button>-->
						</form>
						<form class="w3-panel" action="includes/update.inc.php" method="POST">
							<div class="col-xs-12">
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Age</span>
	  								</div>
	  								<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="age">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">About Me</span>
	  								</div>
	  								<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="about_me">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Facebook</span>
	  								</div>
	  								<input type="password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="facebook">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Instagram</span>
	  								</div>
	  								<input type="password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="instagram">
								</div>
								<div class="input-group input-group-lg">
	  								<div class="input-group-prepend">
	   									<span class="input-group-text" id="inputGroup-sizing-lg">Twitter</span>
	  								</div>
	  								<input type="password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="twitter">
								</div>
								<div class="text-center">
									<button type="save" name="save" class="wide bg-gold signup">Save</button>
								</div>
								
							</div>
						</form>
					</div>
				</div>
				<!--Section for Gallery image upload-->
				<div clsss="row">
					<div class="col-xs-12">
					<form action="includes/upload.gallery.inc.php" method="POST" enctype="multipart/form-data">
						<div class="input-group">

							<div class="input-group input-group-lg">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
								</div>
								<input type="text" name="title" class="form-control">
							</div>
							<div class="">
								<div class="input-group-prepend">
									<span class="input-group-text">Description</span>
								</div>
								<textarea class="form-control" rows="4" name="desc"></textarea>
							</div>
							<input class="custom-file-input image" type="file" name="image">
							<button class="btn btn-outline-secondary" type="submit" name="submit">UPLOAD</button>
					</form>
					</div>
				</div>
			</div>	
		</div>


</section>
<?php 
	include_once 'footer.php';
 ?>