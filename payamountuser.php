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
		

			header("Location:indexuser.php?error=6&user=$username&fine=$fine");
			
			

	

?>