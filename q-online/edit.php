<div>
<?php
if(isset($_SESSION['username'])){
	include ("koneksi.php");
	
	if (isset($_POST['submit'])){
		$id=htmlentities((trim($_POST['id'])));
		$question=ucwords(htmlentities((trim($_POST['question']))));
		$pil1=ucwords(htmlentities((trim($_POST['pil1']))));
		$pil2=ucwords(htmlentities((trim($_POST['pil2']))));
		$pil3=ucwords(htmlentities((trim($_POST['pil3']))));
		$pil4=ucwords(htmlentities((trim($_POST['pil4']))));
		
		$answer=ucwords(htmlentities((trim($_POST['answer']))));
		$query=mysql_query("update create_quiz set Pertanyaan='$Pertanyaan',Pilihan1='$Pilihan1',Pilihan2='$pilihan3',
		pilihan3='$pilihan3',pilihan4='$pilihan4',Jawaban='$Jawaban',Bobot='$Bobot' where Kode_soal='$id'");
		
		if($query){
			?><script language="javascript">document.location.href="?page=view";</script><?php
		}else{
			echo mysql_error();
		}
		
	}else{
		unset($_POST['submit']);
	}
	?>
    
    <?php
	$id=$_GET['id'];
	$sql=mysql_query("select * from create_quiz where Kode_soal='$id'");
	$row=mysql_fetch_array($sql);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Quiz Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="mainPan">
  <div id="leftPan">
    <div id="leftTopPan"> <a href="#"><img src="images/logo.jpg" title="Quiz Online" alt="Quiz Online" width="160" height="39" border="0" /></a> </div>
    <img src="images/user-online.jpg"; style="width:240px; height:231px; display:block; padding:28px 0 0;" />
	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Create Quiz</a></li>
      <li><a href="#">View Quiz</a></li>
      <li><a href="AboutUs.php">About us</a></li>
      <li class="contact"><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div id="rightPan">
    <h1>A new begining<br />
     <span>Take free quizzes on love, celebrities, relationships, and more.
	  <br/>See what they say about you and share with friends!
	 </span></h1>    
    <form action="edit.php" method="post">
	<br>
	 <br>
	  <br>
	
		<table>
		<h4>

			List your answer choices below

		</h4>
		<table id="edit_quiz">
		
		<tr>
			<td width="67">Pertanyaan</td>
			<td width="269"><textarea name="question"></textarea><?php echo $row['question'];?></td>
		</tr>
		
		<tr>
			<td>Pilihan 1</td>
			<td><input type="text" name="pil1"><?php echo $row['pil1'];?></td>
		</tr>
		
		<tr>
			<td>Pilihan 2</td>
			<td><input type="text" name="pil2"><?php echo $row['pil2'];?></td>
		</tr>
		
		<tr>
			<td>Pilihan 3</td>
			<td><input type="text" name="pil3"><?php echo $row['pil3'];?></td>			
		</tr>
		
		<tr>
			<td>Pilihan 4</td>
			<td><input type="text" name="pil4"><?php echo $row['pil4'];?></td>
		</tr>
		
		<tr>
			<td>Jawaban</td>
			<td><input type="text" name="answer"><?php echo $row['answer'];?></td>
		</tr>
		
		<tr>
			<td>Bobot</td>
			<td>
				<select name="bobot">
					<option value=""></option>
					<option value="5">5</option>
					<option value="10">10</option>
					<option value="15">15</option>
					<option value="20">20</option>
				</select>
			</td>
		</tr>
		</table>
		<tr>
		<br />
		<td colspan="2">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" value="Simpan">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</td>
	</form>
	</div>
		</td>
</tr>
  </div>
</div>
	  </br>
	 </br>
	</br>
	
	</form>
</div>
</div>
<div id="footermainPan">
  <div id="footerPan">
    <p class="copyright">Copyright <?php echo date("Y"); ?>, Quiz Online <br>Kalbis Institute</br></p>
    <p class="design">Design By :<br />Anis | Tantri | Yoga | Bastian | Windy</p>
  </div>
</div>
</body>
</html>
<?php
}else{
	?><p>Anda belum login. silahkan <a href="login.php">Login</a></p><?php
}
?> 