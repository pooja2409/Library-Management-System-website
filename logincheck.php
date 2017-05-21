	<?php 
	
	$error=0;

	session_start();
 $Username= $_POST['lg_username'];
$Password= $_POST['lg_password'];
//include("db_connect.php");
$conn = oci_connect('cse_15101028','15101028','172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


$Category = $_POST['users'];
echo $Category;

if($Category=="student"){
	$query='SELECT * FROM studentdb WHERE user_name = \''.$Username.'\' and password = \''.$Password.'\'';
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
}
/*$query='SELECT * FROM studentdb WHERE user_name = \''.$Username.'\' and password = \''.$Password.'\'';
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

    

/*
if (!$result1)
{
    die('Could not connect:'.mysql_error());
}
$num1 = mysql_num_rows($result1);
if ($num1 == 0)
{
    mysql_close($con);
	echo'No rows found';
}
elseif ($num1 > 0)
{
	echo'$num1 rows found';
    $row = mysql_fetch_row($result1);
    $Username = $row[0];
    $select2 = "SELECT * FROM STUDENT WHERE ROLLNO='$Username'";
    $result2 = mysql_query($select2);
    if (!$result2)
    {
        die('Could not connect:'.mysql_error());
		echo'No such user found';	
    }
    $row2 = mysql_fetch_row($result2);
  $username = $row2[1];
  echo $row2[0];
  echo $row2[1];
  echo $row2[2];
  echo $row2[3];
  echo "<a href='member.php'>Click</a> here to enter"; 
      $_SESSION['Username'] = $Username;
    mysql_close($con);
    
}
*/
?>
