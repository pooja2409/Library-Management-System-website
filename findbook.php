<?php
if(isset($_GET['no'])) {
$no= $_GET['no'];

}
if(isset($_GET['name'])) {
$name= $_GET['name'];

}

$conn = oci_connect('cse_15101028', '15101028', '172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$Filter = $_POST['Selected'];  
$BookSearched = $_POST['SearchBook'];
$sql = 'SELECT * FROM BOOKS WHERE '.$Filter.'=\''.$BookSearched.'\'';

$stid = oci_parse($conn, $sql);
oci_execute($stid);
	
	if(($row = oci_fetch_row($stid)) != false){

	
	//echo "book found<br>\n";
    //echo $row[0] . " " . $row[1] .  " " . $row[2] ." " . $row[3] ." " . $row[4] ." " . $row[5] . "<br>\n";
		$title=$row[0];
		$author=$row[1];
		$isbn=$row[2];
		$publisher=$row[3];
		$price=$row[4];
		$quantity=$row[5];
		$available=$row[6];
 
	
			header("Location:issuebooks.php?booksisuedyet=$no&user=$name&titleout=$title&isbnout=$isbn&authorout=$author&publisherout=$publisher&priceout=$price&quantityout=$quantity&availableout=$available");
		//	header("Location:issuebooks.php");
			//echo "Welcome, ".$_SESSION['Username']."!<br><a href='logout.php'>LOGOUT</a>";

	

	}

	
	else {
		//echo "Wrong Username or Password";
		echo "books not found";
		//echo "<font color= "red"><p align="center">Snap! Username or Password donot match.</p></font>";
	}	

oci_free_statement($stid);
oci_close($conn);

?>