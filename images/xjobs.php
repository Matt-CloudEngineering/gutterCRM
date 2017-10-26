<?php
include('db_vars.inc');
$arr = array();

	$cust_id=mysql_escape_string($_GET['cust_id']);	
	$squery="select job_id,date_req from jobs where cust_id=$cust_id";
	$result=mysql_query($squery) or die(mysql_error());
	while($row=mysql_fetch_array($result)) {
		$arr[$row['job_id']]=$row['date_req'];
		}
	echo json_encode($arr);
?>