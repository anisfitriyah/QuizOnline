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
    <div id="leftTopPan"> <a href="#"><img src="images/logo.jpg" title="Quiz Online" alt="Quiz Online" width="160" height="39" border="0" /></a> </div>
    <img src="images/user-online.jpg" />
	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="create_quiz.php">Create Quiz</a></li>
      <li><a href="view_quiz.php">View Quiz</a></li>
	  <li><a href="join.php">Join quiz</a></li>
      <li><a href="AboutUs.php">About us</a></li>
      <li class="contact"><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div id="rightPan">
    <h1>A new begining<br />
      <span>Take free quizzes on love, celebrities, relationships, and more.<br/>See what they say about you and share with friends!</span> </h1>
    <h2>Cotact Person</h2>
    </div>
</div>
<div id="links">
		<br><br><br>
			<br><br><br>
				<br><br>
					<br><a href="logout.php">Logout</a></br>
				</br></br>
			</br></br></br>
		</br></br></br>
</div>
<div id="footermainPan">
  <div id="footerPan">
    <p class="copyright">Copyright <?php echo date("Y"); ?>, Quiz Online <br>Kalbis Institute</br></p>
    <p class="design">Design By :<br />Anis | Tantri | Yoga | Bastian | Windy</p>
  </div>
</div>
</body>
</html>
