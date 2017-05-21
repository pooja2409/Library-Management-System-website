
<?php
									if(isset($_GET['error'])) {
										$error_id = $_GET['error'];
										switch($error_id) {
										case 1:
										$error = "The student has been added";
										echo "<script type='text/javascript'>alert('$error');</script>";
										break;
										}
									}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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





<div class="searchhead">Enter the details of the Student:</div>



<form method="POST" action="EnterStudent.php" class="form-horizontal">

<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">First Name*</label>  
  <div class="col-md-4">
  <input id="name" name="FirstName" type="text" placeholder="Enter your First Name" class="search_bar" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="LastName">Last Name*</label>  
  <div class="col-md-4">
  <input id="LastName" name="LastName" type="text" placeholder="Enter your Last Name" class="search_bar" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="RollNo">Roll No/User ID*</label>  
  <div class="col-md-4">
  <input id="RollNo" name="RollNo" type="text" placeholder="Enter the Roll No" class="search_bar" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password*</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Enter a unique password" class="search_bar" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Branch">Branch</label>
  <div class="col-md-4">
    <select id="Branch" name="Branch" class="form-control">
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="EmaiID">Email-ID*</label>  
  <div class="col-md-4">
  <input id="EmaiID" name="EmaiID" type="text" placeholder="Enter your Email-ID" class="search_bar" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ContactNo">Contact No*</label>  
  <div class="col-md-4">
  <input id="ContactNo" name="ContactNo" type="text" placeholder="Enter your Contact No" class="search_bar" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Enter"></label>
  <div class="col-md-4">
    <button id="Enter" name="Enter" class="search">Enter</button>
  </div>
</div>

</fieldset>

</form>
</body>
</html>