<?php
session_start();
$user="";
if(isset($_GET['name'])) {
$user= $_GET['name'];
}

?>

<?php
									if(isset($_GET['error'])) {
										$error_id = $_GET['error'];
										switch($error_id) {
										case 2:
										$error = "Limit Reached Cannot issue anymore books further";
										echo "<script type='text/javascript'>alert('$error');</script>";
										break;
										}
									}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Library|IIITNR</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  

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
          <li class="active"><a href="indexstaff.php">Home</a></li>
          <li><a href="support.php">Support</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize"> 
		<div class="dropdown">
			<button class="dropbtn"><font size="5">Hello,<?php echo $user; ?> &#11167</font></button>
				<div class="dropdown-content">
				<a href="#">Change Password</a>
				<a href="logout.php">LOGOUT</a>
		</div>
	</div>

	



	

			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

			<script src="js/index.js"></script>


		<div class= "imglogin"><img src="images/Picture2.png" width="948" height="295" alt="" class="hbg_img" /> <!--<a href="#toregister"><img src="images/loginbtn.png" width="120" height="60" alt="" class="readmore" /></a> -->
		</div>
		
		
		
	
      <div class="clr"></div>
	  
	  
	 <form method="POST" action="AddBooks.php" id="searchbook" class="search_book">	
		
		<div class="container">
	<div class="row">

		<input type ="submit" class="search" value="Add Books"/>

	 </div>
		
	</div>
	</form>
	
	 <div class="clr"></div>  
	  <form method="POST" action="returnbooks.php" id="searchbook" class="search_book"> 

					<div class="container">
						<div class="row">

						<input type ="submit" class="search" value="Return Book"/>

						</div>

					</div>
				</form>
	  
  
	 <div class="clr"></div>
	
	<div class="w3-container">
  
  <button onclick="document.getElementById('id01').style.display='block'" class="search">Issue Book</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Issue book to:</h2>
      </header>
      <div class="w3-container">
	  <form method = "POST" action="checkissuebook.php"  class="text-left">
       <label name="select" >Select One:</label>
							<div class="radio select" id ="radioselect">
									 <input type="radio" name="users" id="staff" value="staff" >
									 <label for="staff" id="stafflabel">
                                    Staff
                                </label>
									 <input type="radio" name="users" id="student" value="student" checked="" >
									  <label for="student" id="studentlabel">
                                    Student
                                </label>
								
							</div>
									 
									
									<label name="text"> Enter Username</label>
									<input type="text" placeholder="example@iiitnr.edu.in" class="form-control-text" name="lg_username" id="lg_username" required="">
									<input type="submit" class="search" value="Enter"/> 



									</div>
      <footer class="w3-container w3-teal">
        <p>SHSHSHSHHH You are in a Library!!</p>
      </footer>
    </div>
  </div>
</div>
	  
	        <div class="clr"></div>
			
			
		
  
 
 
 
			 <div class="clr"></div>
	  
	  

	        
	  
	  
	  
	        <div class="clr"></div>
	  	  <div class ="search_book">  
		
		<div class="searchhead">Send Reminder</div>
		
		<form method="POST" action="mail.php" id="searchbook" class="search_book">	
		
		<div class="container">
	<div class="row">
<h3>Select One:</h3>
		
		
		<div class="col-sm-6">
                            <div class="radio reg">
                                <input type="radio" name="radio2" id="radio1" value="option1" checked="">
                                <label for="radio1">
                                    Send to All
                                </label>
                            </div>
                            <div class="radio reg">
                                <input type="radio" name="radio2" id="radio2" value="option2" >
                                <label for="radio2">
                                    Send specific
                                </label>
                            </div>

                        </div>
		<input type ="submit" class="search" value="Send"/>

	 </div>
		
	</div>
	</form>
</div>

     <div class="clr"></div>
	  
	  <div class ="search_book">  
		
		<div class="searchhead">Search Books</div>
		
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
