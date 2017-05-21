<?php


$conn = oci_connect('cse_15101028', '15101028', '172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$Designation = $_POST['Designation'];  
$Criteria = $_POST['Criteria'];
$SearchUser = $_POST['SearchUser'];
$sql = 'SELECT * FROM '.$Designation.' WHERE '.$Criteria.'=\''.$SearchUser.'\'';

$stid = oci_parse($conn, $sql);
oci_execute($stid);
if($Designation=="STUDENTDB"){
		while (($row = oci_fetch_row($stid)) != false) {
			$username=$row[0];
			$firstname=$row[2];
			$lastname=$row[3];
			$contact=$row[4];
			$email=$row[5];
			$branch=$row[7];
		//echo $row[0] . " " . $row[2] .  " " . $row[3]. " " . $row[4]. " " . $row[5]. " " . $row[6]. " " . $row[7] . "<br>\n";
}
}
else if($Designation=="STAFFDB"){
		while (($row = oci_fetch_row($stid)) != false) {
			$username=$row[0];
			$firstname=$row[2];
			$lastname=$row[3];
			$contact=$row[4];
			$email=$row[5];
			
		echo $row[0] . " " . $row[2] .  " " . $row[3]. " " . $row[4]. " " . $row[5]. "<br>\n";
}
}
else{
		while (($row = oci_fetch_row($stid)) != false) {
			$username=$row[0];
			$firstname=$row[2];
			$lastname=$row[3];
			$contact=$row[4];
			$email=$row[5];
		echo $row[0] . " " . $row[2] .  " " . $row[3]. " " . $row[4]. " " . $row[5] . "<br>\n";
}
}

oci_free_statement($stid);
oci_close($conn);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ITDesk</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="stylesb.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
	<!--<link rel="stylesheet" href="reset.css"> 
	-->


<script src="js/modernizr.js"></script> <!-- Modernizr -->

</head>
<body> 
<div class="main" >
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="#">IIIT-NR|<span>|Library</span></a> <small>Welcome 		
</small></h1>


      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="indexuser.php">Home</a></li>
          <li><a href="support.html">Support</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize"> 
		
	

			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

			<script src="js/index.js"></script>


		<div class= "imglogin"><img src="images/Picture2.png" width="948" height="295" alt="" class="hbg_img" /> <!--<a href="#toregister"><img src="images/loginbtn.png" width="120" height="60" alt="" class="readmore" /></a> -->
		</div>
		
		<div class="searchhead">Details of the searched user are:</div>
		
		
		<form method="POST" action="indexuser.php" id="searchbook" class="search_book">
		 Username:<input class="search_bar" style="width:120px" name="isbn_" placeholder="ISBN_NO" value="<?php echo $username; ?>" readonly />
		firstname:<input class="search_bar" style="width:120px" name="title_" placeholder="Title" value="<?php echo $firstname; ?>" readonly />
		lastname:<input class="search_bar" style="width:120px" name="author_" placeholder="Author" value="<?php echo $lastname; ?>" readonly  /><br>
		contact:<input class="search_bar"style="width:120px" name="publisher_" placeholder="Publisher" value="<?php echo $contact; ?>" readonly />
		email:<input class="search_bar"style="width:120px" name="quantity_" placeholder="Quantity" value="<?php echo $email; ?>" readonly />
		branch:<input class="search_bar" style="width:120px" name="price_"placeholder="Price" value="<?php echo $branch; ?>"  readonly /><br>
	
		<input type ="submit" class="search" value="Go Back">
		</form>
		

	
   
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/pix1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Lorem Ipsum</span></h2>
        <p>Lorem ipsum dolor<br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
      </div>
      <div class="col c3">
        <h2><span>Contact</span></h2>
        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue.</p>
        <p><a href="#">support@yoursite.com</a></p>
        <p>+1 (123) 444-5677<br />
          +1 (123) 444-5678</p>
        <p>Address: 123 TemplateAccess Rd1</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Layout by Rocket <a href="http://www.rocketwebsitetemplates.com/">Website Templates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
