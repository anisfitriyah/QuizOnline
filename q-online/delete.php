<div>
<?php
if(isset($_SESSION['username'])){

	$id=$_GET['id'];
	
	$sql=mysql_query("delete from create_quiz where Kode_soal='$id'");
	
	if($sql){
		?><script language="javascript">document.location.href="view_quiz.php"</script><?php
	}else{
		echo mysql_error();
	}

}else{
	?><p>Anda belum login. silahkan <a href="index.php">Login</a></p><?php
}
?>
</div>
