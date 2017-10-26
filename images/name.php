<?php
include('db_vars.inc');
$arr = array();

if($_GET['name']) {
	$name=mysql_escape_string($_GET['name']);	
	$squery="select cust_id,name from custies where locate('".$name."',name)";
	$result=mysql_query($squery) or die(mysql_error());
	while($row=mysql_fetch_array($result)) {
		$arr[$row['cust_id']]=$row['name'];
	}
	echo json_encode($arr);
}

if($_GET['street']) {
	$street=mysql_escape_string($_GET['street']);	
	$squery="select cust_id,street from custies where locate('".$street."',street)";
	$result=mysql_query($squery) or die(mysql_error());
	while($row=mysql_fetch_array($result)) {
		$arr[$row['cust_id']]=$row['street'];
	}
	echo json_encode($arr);
}

if($_GET['cust_id']) {
	$cust_id=mysql_escape_string($_GET['cust_id']);	
	$squery="select * from custies where cust_id=$cust_id";
	$result=mysql_query($squery) or die(mysql_error());
	while($row=mysql_fetch_array($result)) {
		$arr=array('cust_id'=>$row['cust_id'],'name'=>$row['name'],'street'=>$row['street'],'townzip'=>$row['townzip'],'phone'=>$row['phone']);
	}
echo json_encode($arr);
}

if($_GET['job_id']) {
	$job_id=mysql_escape_string($_GET['job_id']);
	$date_req=mysql_escape_string($_GET['date_req']);	
	$squery="select * from jobs where job_id=$job_id && date_req='$date_req'";
	$result=mysql_query($squery) or die(mysql_error());
	$row=mysql_fetch_array($result);
	$xmax=mysql_num_fields($result);
	for ($x=0;$x<$xmax;$x++) {
		$fname=mysql_field_name($result,$x);
		$arr[$fname]=$row[$fname];
	}
echo json_encode($arr);
}


?>