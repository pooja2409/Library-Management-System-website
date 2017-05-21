
<?php
									if(isset($_GET['error'])) {
										$error_id = $_GET['error'];
										switch($error_id) {
										case 7:
										$error = "Snap! No Such Books Found";
										echo "<script type='text/javascript'>alert('$error');</script>";
										break;
										}
									}?>
<?php
session_start();
$user="";
if(isset($_GET['name'])) {
$user= $_GET['name'];
}
$conn = oci_connect('cse_15101028','15101028','172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$query='SELECT * FROM studentdb WHERE first_name = \''.$user.'\'';

	$stid = oci_parse($conn, $query);
	$result=oci_execute($stid);
	
	if(($row = oci_fetch_row($stid)) != false){

		$username = $row[0];
	}

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
        <h1><a href="#">IIIT-NR|<span>|Library</span></a> <small>Welcome 		<?php

echo $user;
?></small></h1>


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
		<div class="dropdown">
			<button  class="dropbtn"><font size="5">Hello <?php echo $user; ?> &#11167</font></button>
				<div class="dropdown-content">
				<a href="#">Change Password</a>
				<a href="logout.php">LOGOUT</a>
		</div>
	</div>
	

			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

			<script src="js/index.js"></script>


		<div class= "imglogin"><img src="images/Picture2.png" width="948" height="295" alt="" class="hbg_img" /> <!--<a href="#toregister"><img src="images/loginbtn.png" width="120" height="60" alt="" class="readmore" /></a> -->
		</div>
		
	
     <!-- <div class="clr"></div>
	  
	  
	  <div class ="search_book">  
		
		<div class="searchhead">Search Books</div>
		
		<form method="POST" action="" id="searchbook" class="search_book">	
		
		<div class="container">
	<div class="row">
<h3>Select Your Filter</h3>
		
		
		<div class="col-sm-6">
                            <div class="radio reg">
                                <input type="radio" name="radio2" id="radio1" value="option1" checked="">
                                <label for="radio1">
                                    Title
                                </label>
                            </div>
                            <div class="radio reg">
                                <input type="radio" name="radio2" id="radio2" value="option2" >
                                <label for="radio2">
                                    ISBN-NO
                                </label>
                            </div>
							<div class="radio reg">
                                <input type="radio" name="radio2" id="radio3" value="option3" >
                                <label for="radio3">
                                    Author
                                </label>
                            </div>
							<div class="radio reg">
                                <input type="radio" name="radio2" id="radio4" value="option4" >
                                <label for="radio4">
                                   Magazine
                                </label>
                            </div>

                        </div>
		
		
		<input class="search_bar" placeholder="Enter Title/Author/ISBN-NO of the book" />
		<input type ="submit" class="search" value="Enter Search"/>

	 </div>
		
	</div>
	</form>
</div>   -->
		
		
		
		
		<section class="cd-faq">
	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Search</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0"><font color='#00c6ff'>Search your book here!</font></a>
				<div class="cd-faq-content">
					 <div class ="search_book">  
		
		
		
		<form method="POST" action="BookSearch.php" id="searchbook" class="search_book">	
		
		<div class="container">
	<div class="row">
<h3>Select Your Filter</h3>
		
		
		<div class="col-sm-6">
                            <div class="radio reg">
                                <input type="radio" name="Selected" id="radio1" value="Title" checked="">
                                <label for="radio1">
                                    Title
                                </label>
                            </div>
                            <div class="radio reg">
                                <input type="radio" name="Selected" id="radio2" value="ISBN_NO" >
                                <label for="radio2">
                                    ISBN-NO
                                </label>
                            </div>
							<div class="radio reg">
                                <input type="radio" name="Selected" id="radio3" value="Author" >
                                <label for="radio3">
                                    Author
                                </label>
                            </div>
							<div class="radio reg">
                                <input type="radio" name="Selected" id="radio4" value="Magazine" >
                                <label for="radio4">
                                   Magazine
                                </label>
                            </div>

                        </div>
		
		
		<input class="search_bar" placeholder="Enter Title/Author/ISBN-NO of the book" name="SearchBook" required="">
		<input type ="submit" class="search" value="Enter Search">

	 </div>
		
	</div>
	</form>
</div>
		
				</div> <!-- cd-faq-content -->
			</li>



			<li>
				<a class="cd-faq-trigger" href="#0"><font color='#00c6ff'>Search IIIT-NR User!</font></a>
				<div class="cd-faq-content">
					 <div class ="search_book">  
		
		
		
		<form method="POST" action="UserSearch.php" id="searchbook" class="search_book">	
		
		<div class="container">
	<div class="row">
		<h3>Select Designation</h3>
		<div class="col-sm-6">
                            <div class="radio reg">
                                <input type="radio" name="Designation" id="radio5" value="STUDENTDB" checked="">
                                <label for="radio5">
                                    Student
                                </label>
                            </div>
							<div class="radio reg">
                                <input type="radio" name="Designation" id="radio6" value="STAFFDB" >
                                <label for="radio6">
                                   Staff
                                </label>
                            </div>
							<div class="radio reg">
                                <input type="radio" name="Designation" id="radio7" value="ADMINDB" >
                                <label for="radio7">
                                   Admin
                                </label>
                            </div>
							
                        </div>
					</div>
				<div class="row">
				<h3>Select Criteria</h3>
		<div class="col-sm-6">
                            <div class="radio reg">
                                <input type="radio" name="Criteria" id="radio8" value="FIRST_NAME" checked="">
                                <label for="radio8">
                                    First Name
                                </label>
                            </div>
                            <div class="radio reg">
                                <input type="radio" name="Criteria" id="radio9" value="LAST_NAME" >
                                <label for="radio9">
                                    Last Name
                                </label>
                            </div>
							<div class="radio reg">
                                <input type="radio" name="Criteria" id="radio10" value="USER_NAME" >
                                <label for="radio10">
                                    User Name
                                </label>
                            </div>
                            </div>

                        </div>
		
		
		<input class="search_bar" placeholder="Enter the Same" name="SearchUser" required="">
		<input type ="submit" class="search" value="Enter Search">

	 </div>
		
	</div>
	</form>
	
</div>
		
				</div> <!-- cd-faq-content -->
			</li>
			<div class="clr"></div>
				<form method="POST" action="IssuedBookShow.php?user1=<?php  echo $username;?>" id="searchbook" class="search_book"> 

					<div class="container">
						<div class="row">

						<input type ="submit" class="search" value="ISSUED BOOKS"/>

						</div>

					</div>
				</form>
				
				
				

			
		</ul> <!-- cd-faq-group -->
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
	 
	 <script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
	 
	 
      <div class="clr"></div>
    </div>
  </div>  
 <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/pix1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pix6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>IIITNR|Library</span></h2>
        <p>IIITNR|Library<br />
          Library Management System is a software used to manages the catalog of a library.  This helps to keep the records of whole transactions of the books available in the library.</p>
      </div>
      <div class="col c3">
        <h2><span>Contact</span></h2>
        <p>International Institute of Information Technology,Sector-24.Raipur</p>
        <p><a href="#">support@iiitnr.edu.in</a></p>
        <p>+1 (123) 444-5677<br />
          +1 (123) 444-5678</p>
        <p>Address:
Plot No. 7, Sector 24
Naya Raipur – 492 002
Chhattisgarh</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; All Rights Reserved <a href="#">IIITNR|Library</a>.</p>
      <p class="rf">Proudly Developed By Nitesh Agarwal-Pooja Jaiswal</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div></body>
</html>
