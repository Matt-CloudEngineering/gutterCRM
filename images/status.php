<?php
include('db_vars.inc');

	$cust_id=mysql_escape_string($_GET['cust_id']);
	$status="done-".mysql_escape_string($_GET['status']);
	$price=mysql_escape_string($_GET['price']);
	$bagging=mysql_escape_string($_GET['bagging']);
	$squery="update jobs set status='$status' where cust_id=$cust_id";
	$result=mysql_query($squery) or die($txt_out=mysql_error());
	if(!$txt_out) {
		echo "Update Completed";
	}
	
?>