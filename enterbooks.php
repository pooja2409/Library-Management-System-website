<?php


$conn = oci_connect('cse_15101028', '15101028', '172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$available = $_POST['available'];
$sql = 'insert into books(title,author,isbn_no,publisher,price,quantity,available) values(\''.$title.'\',\''.$author.'\',\''.$isbn.'\',\''.$publisher.'\',\''.$price.'\',\''.$quantity.'\',\''.$available.'\')';

$stid = oci_parse($conn, $sql);
oci_execute($stid);
if($stid){
	header("location:Addbooks.php?success=1");
		

	}
	
	else {
		//echo "Wrong Username or Password";
		header("location:Addbooks.php?error=1");
		//echo "<font color= "red"><p align="center">Snap! Username or Password donot match.</p></font>";
	}	
echo 'done';
/*while (($row = oci_fetch_row($stid)) != false) {
    echo $row[0] . " " . $row[1] .  " " . $row[2] . "<br>\n";
}*/

oci_free_statement($stid);
oci_close($conn);

?>