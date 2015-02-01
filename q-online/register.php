<?php include "koneksi.php" ?>

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
    <div id="leftTopPan"> <a href="#"><img src="images/logo.jpg" title="Quiz Online" alt="Quiz Online" width="160" height="39" border="0" /></a> 
	</div>
  </div>
  <div id="rightPan">
    <h1>A new begining<br />
      <span>Take free quizzes on love, celebrities, relationships, and more.<br/>See what they say about you and share with friends!</span> </h1>
    <form action="signup.php" method="post" name="postform" enctype="multipart/form-data">
      <table>
	  <tr>
		<h2>Register Now</h2>
	  </tr>
      <tr>
		<td><label>Username:</label></td>
		<td><input type="text" name="username" maxlength="10" autofocus  /></td>
	  </tr>
	  <tr>
		<td><label>Name:</label></td>
		<td><input type="text" name="name"  /></td>
      </tr>
	  <tr>
		<td><label>Password:</label></td>
		<td><input type="password" name="password" /></td>
	  </tr>
	  <tr>
		<td><label>Photo</label></td>
		<td><input type="file" name="fileToUpload" id="fileToUpload"/></td>
	  </tr>
     </table>
	 <tr>
	  <br>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input name="submit" type="submit" class="button" value="Register" /></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp <input name="submit" type="submit" class="button" value="Login Here" /></td>
	  </br>
	  </tr>
	</form>
  </div>
</div>
<div id="footermainPan">
  <div id="footerPan">
    <p class="copyright">Copyright <?php echo date("Y"); ?>, Quiz Online <br>Kalbis Institute</p>
    <p class="design">Design By :<br />Anis | Prayoga | Sebastian | Tantri | Windy</p>
  </div>
</div>
</body>
</html>