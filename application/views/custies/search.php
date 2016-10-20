<?php


$txt_out="Enter any of the customer information that you have in the appropriate field</br>
<table width=560 class='data'><tr><th>Name</th><th>Street</th><th>Town,State & Zip</th><th>Phone</th><th class='deco'>select</th></tr>\n";

// self form insertion
/*
if($_POST['name']) {
	$name=mysql_real_escape_string($_POST['name']);	
	$squery="select * from custies where locate('".$name."',name)";
	}
else if($_POST['street']) {
	$street=mysql_real_escape_string($_POST['street']);
	$squery="select * from custies where locate('".$street."',street)";
	}
else if($_POST['townzip']) {
	$townzip=mysql_real_escape_string($_POST['townzip']);
	$squery="select * from custies where locate('".$townzip."',townzip)";
	}
else if($_POST['phone']) {
	$townzip=mysql_real_escape_string($_POST['phone']);
	$squery="select * from custies where locate('".$phone."',phone)";
	}
	*/



// last row of table as form for adding an entry, ideally designed utilizing Ajax so that an additional form row 
// becomes available as soon as the edate field is filled in 

$txt_out.="
<td><input type='text' name='name'/></td>
<td><input type='text' name='street'/></td>
<td><input type='text' name='townzip'/></td>
<td><input type='text' name='phone' /></td>
<td><input type='submit' value='find record'/></td>
</tr>
</form>";


$txt_out.="</table>";

echo form_open(); 

echo $txt_out;
?>
</div>