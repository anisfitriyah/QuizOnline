<?php session_start(); ?>
<?php include "koneksi.php" ?>
<?php include("function.php"); ?>
<?php

if(isset($_POST['login'])){
	$id = $_POST['username'];
	$pass = $_POST['password'];
	
	$format = "$2a$10$"; 
	$hash = "tes1tes1tes1";
	$salt = $format . $hash;
	
	$new_pass = crypt ($pass , $salt);
	
$sql = "SELECT * FROM register
		WHERE Username = '$id'";
$hasil = mysqli_query($koneksi, $sql);

// periksa username apa ditemukan
if(mysqli_num_rows($hasil)){
	$password = $new_pass;
	$b = mysqli_fetch_assoc($hasil);
	if($password == $b['Password']){
		//echo "password Cocok .";
		$_SESSION['login'] = $id;
		setcookie('fail' , null, time()-300);
		header('Location: index.php');
	}else{
		//echo "Password Salah .";
		setcookie("pesan", "Username atau password SALAH !!!.",time()+300);
		setcookie('fail', 1, time()+300);
		header('Location: login.php');
		}
	echo "Username telah ditemukan. ";
	
}else{
	//echo "Username belum ada.";
	
	setcookie("pesan", "Anda Harus Register terlebih dahulu .",time()+300);
		setcookie('fail', 1, time()+300);
		header('Location: login.php');
		}
		echo "<br />";
		}

?>