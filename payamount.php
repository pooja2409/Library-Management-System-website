	<?php 
	
	

	session_start();
	
	if(isset($_GET['name1'])) {
$username= $_GET['name1'];

}
	if(isset($_GET['fine'])) {
$fine= $_GET['fine'];

}




//include("db_connect.php");
$conn = oci_connect('cse_15101028','15101028','172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


	

	
	
		
	//$query='insert into borrowed(username,isbn_no,issue_date,due_date) values(\''.$username.'\',\''.$isbnno.'\',sysdate,sysdate+14)';
	$query='update borrowed set fine=0 where username=\''.$username.'\'';
	//echo $query;
	$stid = oci_parse($conn, $query);
	$result=oci_execute($stid);
	echo($result);
		

			header("Location:returnbookscheck.php?error=6&user=$username&fine=$fine");
			
			

	
	//header("Location:returnbookscheck.php?error=4&user=$username&booksisuedyet=$updatedbookscanissuemore");
	
	/*if(($row = oci_fetch_row($stid)) != false){
			$booksissuedtilldate = $row[0];
			echo $booksissuedtilldate;
			if($booksissuedtilldate<=4){
			header("Location:issuebooks.php?booksisuedyet=$row[0]$&user=$Username");	
			}
			
				else {
		
		header("location:issuebooks.php?error=1&booksisuedyet=$row[0]");
	
	}
	
			//header("Location:indexuser.php?name=$row[2]");
			//echo "Welcome, ".$_SESSION['Username']."!<br><a href='logout.php'>LOGOUT</a>";

	}
  
	else {
		echo "Invalid Userinformation";
		header("location:issuebooks.php?error=1&booksisuedyet=$row[0]");
		
	}	
	
	
	
	
if($Category=="staff"){
	$query='SELECT count(*) FROM borrowed WHERE username = \''.$Username.'\'';
	echo $query;
	$stid = oci_parse($conn, $query);
	$result=oci_execute($stid);
	echo($result);
	
	if(($row = oci_fetch_row($stid)) != false){
			$booksissuedtilldate = $row[0];
			echo $booksissuedtilldate;
			if($booksissuedtilldate<4){
			header("Location:issuebooks.php?booksisuedyet=$row[0]&user=$Username");
			}
			else {
		
			header("location:indexstaff.php?error=2&booksisuedyet=$row[0]");
	
				}
	
			//header("Location:indexuser.php?name=$row[2]");
			//echo "Welcome, ".$_SESSION['Username']."!<br><a href='logout.php'>LOGOUT</a>";

	}
  
	else {
		echo "Invalid User information";
		//header("location:issuebooks.php?error=1 booksisuedyet=$row[0]");
		
	}	
	}
	
	
	

	// If result matched $myusername and $mypassword, table row must be 1 row

/*	if(($row = oci_fetch_row($stid)) != false){

		$username = $row[0];
		$name=$row[2];
		// echo $row[0];
		//echo $row[1];
		//echo $row[2];
		//echo $row[3];
		//echo "<a href='member.php'>Click</a> here to enter"; 


			$_SESSION['Username'] = $username;
	  
	  
			if($_SESSION['Username']){
	
			header("Location:indexuser.php?name=$row[2]");
			//echo "Welcome, ".$_SESSION['Username']."!<br><a href='logout.php'>LOGOUT</a>";

	}
    oci_close($conn);
	}
	else {
		//echo "Wrong Username or Password";
		header("location:index.php?error=1");
		//echo "<font color= "red"><p align="center">Snap! Username or Password donot match.</p></font>";
	}	
}
else if($Category=="staff"){
	$query='SELECT * FROM staffdb WHERE user_name = \''.$Username.'\' and password = \''.$Password.'\'';
	echo $query;
	$stid = oci_parse($conn, $query);
	$result=oci_execute($stid);
	echo($result);

	// If result matched $myusername and $mypassword, table row must be 1 row

	if(($row = oci_fetch_row($stid)) != false){

		$username = $row[0];
		$name=$row[2];
		// echo $row[0];
		//echo $row[1];
		//echo $row[2];
		//echo $row[3];
		//echo "<a href='member.php'>Click</a> here to enter"; 


			$_SESSION['Username'] = $username;
	  
	  
			if($_SESSION['Username']){
	
			header("Location:indexstaff.php?name=$row[2]");
			//echo "Welcome, ".$_SESSION['Username']."!<br><a href='logout.php'>LOGOUT</a>";

	}
    oci_close($conn);
	}
	else {
		//echo "Wrong Username or Password";
		header("location:index.php?error=1");
		//echo "<font color= "red"><p align="center">Snap! Username or Password donot match.</p></font>";
	}
}

else{
	$query='SELECT * FROM admindb WHERE user_name = \''.$Username.'\' and password = \''.$Password.'\'';
	echo $query;
	$stid = oci_parse($conn, $query);
	$result=oci_execute($stid);
	echo($result);

	// If result matched $myusername and $mypassword, table row must be 1 row

	if(($row = oci_fetch_row($stid)) != false){

		$username = $row[0];
		$name=$row[2];
		// echo $row[0];
		//echo $row[1];
		//echo $row[2];
		//echo $row[3];
		//echo "<a href='member.php'>Click</a> here to enter"; 


			$_SESSION['Username'] = $username;
	  
	  
			if($_SESSION['Username']){
	
			header("Location:indexadmin.php?name=$row[2]");
			//echo "Welcome, ".$_SESSION['Username']."!<br><a href='logout.php'>LOGOUT</a>";

	}
    oci_close($conn);
	}
	else {
		//echo "Wrong Username or Password";
		header("location:index.php?error=1");
		//echo "<font color= "red"><p align="center">Snap! Username or Password donot match.</p></font>";
	}
}*/

?>