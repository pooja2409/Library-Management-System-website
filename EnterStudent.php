<?php


$conn = oci_connect('cse_15101028', '15101028', '172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$FirstName = $_POST['FirstName'];  
$LastName = $_POST['LastName'];
$RollNo = $_POST['RollNo'];
$password = $_POST['password'];
$Branch = $_POST['Branch'];
$EmaiID = $_POST['EmaiID'];
$ContactNo = $_POST['ContactNo'];
$sql = 'insert into STUDENTDB(USER_NAME,PASSWORD,FIRST_NAME,LAST_NAME,CONTACT_NO,EMAILID,BRANCH) values(\''.$RollNo.'\',\''.$password.'\',\''.$FirstName.'\',\''.$LastName.'\',\''.$ContactNo.'\',\''.$EmaiID.'\',\''.$Branch.'\')';

$stid = oci_parse($conn, $sql);
oci_execute($stid);

header("Location:addstudent.php?error=1");
oci_free_statement($stid);
oci_close($conn);

?>