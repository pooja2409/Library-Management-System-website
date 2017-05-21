
<?php

$title1 ="";
$author1 ="";
$publisher1 ="";
$isbn1 ="";
$price1 =0;
$quantity1 =0;
$user1="";
$no_of_books=0;
$available1=0;
if(isset($_GET['titleout'])) {
$title1= $_GET['titleout'];

}
if(isset($_GET['authorout'])) {
$author1= $_GET['authorout'];

}
if(isset($_GET['isbnout'])) {
$isbn1= $_GET['isbnout'];

}
if(isset($_GET['publisherout'])) {
$publisher1= $_GET['publisherout'];

}
if(isset($_GET['priceout'])) {
$price1= $_GET['priceout'];

}
if(isset($_GET['quantityout'])) {
$quantity1= $_GET['quantityout'];

}
if(isset($_GET['availableout'])) {
$available1= $_GET['availableout'];

}
if(isset($_GET['user'])) {
$user1= $_GET['user'];

}
if(isset($_GET['booksisuedyet'])) {
$no_of_books= $_GET['booksisuedyet'];

}
//$title=$_POST['title'];
?>

<?php
									if(isset($_GET['error'])) {
										$error_id = $_GET['error'];
										switch($error_id) {
										case 3:
										$error = "Sorry!! We are out of stock.";
										echo "<script type='text/javascript'>alert('$error');</script>";
										break;
										}
									}?>

<?php
									if(isset($_GET['error'])) {
										$error_id = $_GET['error'];
										switch($error_id) {
										case 4:
										$error = "Congrats! Your book has been issued";
										echo "<script type='text/javascript'>alert('$error');</script>";
										break;
										}
									}?>
									<?php
									if(isset($_GET['error'])) {
										$error_id = $_GET['error'];
										switch($error_id) {
										case 5:
										$error = "Sorry";
										echo "<script type='text/javascript'>alert('$error');</script>";
										break;
										}
									}?>
									
<?php 
	
	

	session_start();
 $Username= $user1;


$conn = oci_connect('cse_15101028','15101028','172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

	$query='SELECT * FROM studentdb WHERE user_name = \''.$Username.'\' ';
	//echo $query;
	$stid = oci_parse($conn, $query);
	$result=oci_execute($stid);
	//echo($result);

	// If result matched $myusername and $mypassword, table row must be 1 row

	if(($row = oci_fetch_row($stid)) != false){

		$username = $row[0];
		$name=$row[2];
		// echo $row[0];
		//echo $row[1];
		//echo $row[2];
		//echo $row[3];
		//echo "<a href='member.php'>Click</a> here to enter"; 


			
	  
	  

	}
  
	
	
	
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>IIITNR|Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>




</head>
<body>
<div class="main" >
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="#">IIIT-NR|<span>|Library</span></a> <small>Welcome to IIIT-NR's Library</small></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="indexstaff.php">Home</a></li>
          <li><a href="support.html">Support </a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Blog </a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
 
	  <?php
	  if($no_of_books<=4){
		  $bookscanissuemore=4-$no_of_books;
	  }
	  
	  
	  
	  
	  ?>
	  <h2><?php  echo $name;?> can issue  <?php  echo $bookscanissuemore;?> more books</h2>
	  

  
		
		
      <div class="clr"></div>
	  
	  
	  <div class ="search_book">  
		
		<div class="searchhead">Search Books</div>
		
		<form method="POST" action="findbook.php?no=<?php echo $no_of_books;?>&name=<?php echo $user1;?>" id="searchbook" class="search_book">
		
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
		<form method="POST" action="issuefinal.php?&name1=<?php echo $user1;?>& updatedbookscanissuemore=<?php echo $no_of_books;?>" id="searchbook" class="search_book">
	
		

		
		<div class="searchhead">Issue Book</div>
		 ISBN-NO:<input class="search_bar" style="width:150px" name="isbn_" placeholder="ISBN_NO" value="<?php echo $isbn1; ?>" readonly />
		Title:<input class="search_bar" style="width:150px" name="title_" placeholder="Title" value="<?php echo $title1; ?>" readonly />
		Author:<input class="search_bar" style="width:150px" name="author_" placeholder="Author" value="<?php echo $author1; ?>" readonly  /><br>
		Publisher:<input class="search_bar"style="width:150px" name="publisher_" placeholder="Publisher" value="<?php echo $publisher1; ?>" readonly />
		Quantity:<input class="search_bar"style="width:150px" name="quantity_" placeholder="Quantity" value="<?php echo $quantity1; ?>" readonly />
		Price:<input class="search_bar" style="width:150px" name="price_"placeholder="Price" value="<?php echo $price1; ?>"  readonly /><br>
		Available:<input class="search_bar" style="width:150px; margin: 6px 80px 22px 325px;" name="available_"placeholder="Quantity Available" value="<?php echo $available1; ?>" readonly /><br>
		<input type ="submit" class="search" value="Issue">
		</form>
	 
      <div class="clr"></div>
    </div>
  </div>  
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
