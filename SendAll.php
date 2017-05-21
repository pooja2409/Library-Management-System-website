<?php


$conn = oci_connect('cse_15101028', '15101028', '172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
  
$sql = 'SELECT USERNAME FROM BORROWED WHERE DUE_DATE = SYSDATE';
$stid = oci_parse($conn, $sql);
oci_execute($stid);
$row = oci_fetch_row($stid);
echo $row[0];
while (($row = oci_fetch_row($stid)) != false) {
	/*$Candidate=$row[0];
	$sql2 = 'SELECT EMAIL_ID FROM STUDENTDB WHERE USER_NAME = \''.$Candidate.'\'';
	$stid2 = oci_parse($conn, $sql2);
	oci_execute($stid2);
	$row2 = oci_fetch_row($stid2);
	$EMAIL_IDS=$row2[0];
	$MAILTEXT="Today is the last dat to return the book or reissue it. Otherwise charges will be imposed as Rs.1/day.";*/
	
    /*echo $row[0]. "<br>\n";*/
	echo 'Done';
}

oci_free_statement($stid);
oci_close($conn);

?>