<?php 
session_start();

function FunctionName($w, $h, $path)
{
	// Check if file was uploaded
	if( ! isset($_FILES['image']) || ! is_uploaded_file($_FILES['image']['tmp_name']))
	        exit('No file uploaded.');


	// And if it was ok
	if($_FILES['image']['error'] !== UPLOAD_ERR_OK)
	        exit('Upload failed. Error code: '.$_FILES['image']['error']);


	// Create image from file
	switch(strtolower($_FILES['image']['type']))
	{
	        case 'image/jpeg':
	                $image = imagecreatefromjpeg($_FILES['image']['tmp_name']);
	                break;
	        case 'image/png':
	                $image = imagecreatefrompng($_FILES['image']['tmp_name']);
	                break;
	        case 'image/gif':
	                $image = imagecreatefromgif($_FILES['image']['tmp_name']);
	                break;
	        default:
	                exit('Unsupported type: '.$_FILES['image']['type']);
	}

	// Delete original file
	@unlink($_FILES['image']['tmp_name']);


	// Target dimensions
	$max_width = $w;
	$max_height = $h;


	// Calculate new dimensions
	$old_width      = imagesx($image);
	$old_height     = imagesy($image);
	$scale          = min($max_width/$old_width, $max_height/$old_height);
	$new_width      = ceil($scale*$old_width);
	$new_height     = ceil($scale*$old_height);


	// Create new empty image
	$new = imagecreatetruecolor($max_width, $max_height);


	// Resample old into new
	imagecopyresampled($new, $image, 
	        0, 0, 0, 0, 
	        $max_width, $max_height, $old_width, $old_height);


	// Catch the image data
	ob_start();
	imagejpeg($new, $path, 90);
	$data = ob_get_clean();


	// Destroy resources
	imagedestroy($image);
	imagedestroy($new);


	// Output image data
	//header("Content-type: image/jpeg", true, 200);
	echo $data;
}
if (isset($_POST['submit'])) {
	require_once 'dbh.inc.php';
	$file = $_FILES['image'];
	//Exstract all information from file
	$fileName = $_FILES['image']['name'];
	$fileTmpName = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileError = $_FILES['image']['error'];
	$fileType = $_FILES['image']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = 'png';
	//strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	$username = $_SESSION['u_uid'];

	$w = 600;
	$h = 822;

	//FunctionName($w, $h, '../upload/test3.png');
	//header("Location: ../index.php?uploadsuccess");

	

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 50000000) {
				$fileNameNew = "display1".".".$fileActualExt;
				$fileDestination = '../img/users/'.$username.'/';
				$fileDestinationsql = 'img/users/'.$username.'/'.$fileNameNew;
				$fileDestinationImage = $fileDestination.$fileNameNew;
				if (!file_exists($fileDestination)) {
    				mkdir($fileDestination, 0777, true);
				}
				FunctionName($w, $h, $fileDestinationImage);
				//move_uploaded_file($newImage, $fileDestinationImage);
				$sql = "UPDATE users SET user_profile_image='".$fileDestinationsql."' WHERE user_id=".$_SESSION['u_id'];
				mysqli_query($conn, $sql);
				header("Location: ../index.php?uploadsuccess");
			} else {
				echo "Your file is to big";
			}
		} else {
			echo "There was a error uploading your file";
		}
	} else {
		echo "You Cannot upload files of this type!";
	} 
}


//uniqid('', true)