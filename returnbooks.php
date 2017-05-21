<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="style.css" rel="stylesheet" type="text/css" />
<body>

<div class="w3-container">
  
  <button onclick="document.getElementById('id01').style.display='block'" class="search">Return from:</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
         class="w3-button w3-display-topright">&times;</span>
        <h2>Issue book to:</h2>
      </header>
      <div class="w3-container">
	  <form method = "POST" action="checkreturnbook.php"  class="text-left">
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
            
</body>
</html>
