<table border="1">
	<tr>
		<th>Name</th>
		<th>Street</th>
		<th>Town, State Zip</th>
		<th>Phone</th>
	</tr>

<!--Load each record and create row in table with data -->	
<?php foreach ($custies as $custies_item): ?>

    <tr>
    	<td><a href="<?php echo site_url('custies/edit\/'.$custies_item['cust_id']); ?>"><?php echo $custies_item['name']; ?></a></td>
    	<td><?php echo $custies_item['street']; ?></td>
        <td><?php echo $custies_item['townzip'] ?></td>
        <td><?php echo $custies_item['phone'] ?></td>

    </tr>
       
<?php endforeach; ?>
</table>