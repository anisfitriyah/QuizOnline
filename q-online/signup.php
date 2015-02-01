<?php include "koneksi.php" ?>
<?php include "function.php" ?>

<?php
	$name = $_POST['name'];
	$user = $_POST['username'];
	$pass = pass_crypt ($_POST['password']);
	
	if($name == "" || $user == "" || $pass == "")
	{
		header('Location:login.php');
		//header('Location:register.php');
	}
	else
	{
		$cek = "SELECT `Username` FROM `register` WHERE `Username` = '".$user."'";
		$dicek = mysqli_query($koneksi, $cek);
		if($dicek->num_rows > 0)
		{
			header('Location:register.php');
			//echo "Gagal";
		}
		
		else
		{
			
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					echo "<br />";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
			$query = "INSERT INTO `register`(`Username`, `Name`, `Password`) VALUES ('".$user."','".$name."','".$pass."')";
			$hasil = mysqli_query($koneksi, $query);
			header('Location:login.php');
			//echo "Berhasil"; 
		}
		
		//echo $name . " - " . $user . " - " . $pass;
	}
?>