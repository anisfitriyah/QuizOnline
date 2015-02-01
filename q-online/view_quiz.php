<?php include ('koneksi.php'); ?>
		

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
    <div id="leftTopPan"><img src="images/logo.jpg" title="Quiz Online" alt="Quiz Online" width="160" height="39" border="0" /></a> </div>
    <img src="images/user-online.jpg"; style="width:240px; height:231px; display:block; padding:28px 0 0;" />
	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="create_quiz.php">Create Quiz</a></li>
      <li><a href="view_quiz.php">View Quiz</a></li>
	  <li><a href="join.php">Join Quiz</a></li>
      <li><a href="AboutUs.php">About us</a></li>
      <li class="contact"><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div id="rightPan">
    <h1>A new begining<br />
     <span>Take free quizzes on love, celebrities, relationships, and more.
	  <br/>See what they say about you and share with friends!
	 </span></h1>
    <form action="view_quiz.php" method="post">
	<br>
	 <br>
	  <br>
	
		<table>
		<h4>

			List your answer choices below

		</h4>
		<table id="view_quiz">

			<?php
			$query = "SELECT * FROM create_quiz";
			$hasil = mysqli_query($koneksi, $query);
			while ($test = mysqli_fetch_assoc($hasil)){
			
			?>		
		<tr>
			
			<br />
			&nbsp&nbsp&nbsp&nbsp
			<td width="67">Pertanyaan</td>
			<td width="269"><textarea name="question"><?php echo $test['Pertanyaan'];;?></textarea></td>
		</tr>
		
		<tr>
			
			<br />
			&nbsp&nbsp&nbsp&nbsp
			<td>Pilihan 1</td>
			&nbsp&nbsp&nbsp
			<td><input type="text" name="pil1" value="<?php echo $test['Pilihan1'];?>"></td>
		</tr>
		
		<tr>
			
			<br />
			&nbsp&nbsp&nbsp&nbsp
			<td>Pilihan 2</td>
			&nbsp&nbsp&nbsp
			<td><input type="text" name="pil2" value="<?php echo $test['Pilihan2'];?>"></td>
		</tr>
		
		<tr>
			
			<br />
			&nbsp&nbsp&nbsp&nbsp
			<td>Pilihan 3</td>
			&nbsp&nbsp&nbsp
			<td><input type="text" name="pil3" value="<?php echo $test['Pilihan3'];?>"></td>			
		</tr>
		
		<tr>
			
			<br />
			&nbsp&nbsp&nbsp&nbsp
			<td>Pilihan 4</td>
			&nbsp&nbsp&nbsp
			<td><input type="text" name="pil4" value="<?php echo $test['Pilihan4'];?>"></td>
		</tr>
		
		<tr>
			
			<br />
			&nbsp&nbsp&nbsp&nbsp
			<td>Jawaban</td>
			&nbsp&nbsp&nbsp
			<td><input type="text" name="answer" value="<?php echo $test['Jawaban'];?>"></td>
		</tr>
		
		<tr>
			
		<br />
		&nbsp&nbsp&nbsp&nbsp
			<td>Bobot</td>
			<td>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<select name="bobot" value="<?php echo $test['Bobot'];?>">
					<option value=""></option>
					<option value="5">5</option>
					<option value="10">10</option>
					<option value="15">15</option>
					<option value="20">20</option>
				</select>
			</td>
		</tr>
		</table>
		<?php } ?>
		<tr>
		<br />
		<td colspan="2">
		 <br />
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="edit.php">Edit</a>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="delete.php">Delete</a>
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