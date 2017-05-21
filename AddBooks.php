    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Library|IIITNR</title>

<link href="addbooks.css" rel="stylesheet" type="text/css" />

<title>IIITNR|Library</title>
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

<form method="POST" action="enterbooks.php" class="form-horizontal">
<fieldset>
<div class="searchhead">Enter the details of the new book:</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="Enter the book's Title" class="search_bar" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="isbn">ISBN</label>  
  <div class="col-md-4">
  <input id="isbn" name="isbn" type="text" placeholder="Enter ISBN Number" class="search_bar" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Price</label>  
  <div class="col-md-4">
  <input id="price" name="price" type="numeric" placeholder="Enter Price of the book" class="search_bar">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="quantity">Quantity</label>  
  <div class="col-md-4">
  <input id="quantity" name="quantity" type="numeric" placeholder="Enter the quantity of Books" class="search_bar" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Quantity Available</label>  
  <div class="col-md-4">
  <input id="available" name="available" type="numeric" placeholder="Enter available quantity of the book" class="search_bar">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="publisher">publisher</label>  
  <div class="col-md-4">
  <input id="publisher" name="publisher" type="text" placeholder="Publisher Name" class="search_bar">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="author">Author</label>  
  <div class="col-md-4">
  <input id="author" name="author" type="text" placeholder="Author's Name" class="search_bar" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enterbooks"></label>
  <div class="col-md-4">
    <button id="enterbooks" name="enterbooks" class="search">Enter Books</button>
  </div>
</div>

</fieldset>
</form>
									<?php
									if(isset($_GET['success'])) {
										$error_id = $_GET['success'];
										switch($error_id) {
										case 1:
										$error = "Book details enterred in the database.";
										echo "<script type='text/javascript'>alert('$error');</script>";
										break;
										}
									}?>
									<?php
									if(isset($_GET['error'])) {
										$error_id = $_GET['error'];
										switch($error_id) {
										case 1:
										$error = "Book details enterred in the database.";
										echo "<script type='text/javascript'>alert('$error');</script>";
										break;
										}
									}?>
</body>