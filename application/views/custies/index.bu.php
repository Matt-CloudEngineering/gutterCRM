<div class='container'>
	<div class="row">
	    <div class="col-lg-9">
	    	<div class="table-responsive">
	    	  	<table class="table table-hover">
					<tr>
						<th></th>
						<th>Name</th>
						<th>Street</th>
						<th>Town, State Zip</th>
						<th>Phone</th>
						<th>Jobs</th>
					</tr>
					<!--Load each record and create row in table with data -->	
					<?php foreach ($custies as $custies_item): ?>

					    <tr class="table.hover">
					    	<td>
					    		<a href="<?php echo site_url('custies/edit/'.$custies_item['cust_id']); ?>" title="Edit Customer Record">
					    		<img src="<?= base_url() ?>images/eicon.png" width="18px"></a>
					    	</td>
					    	<td><a href="<?php echo site_url('custies/view/'.$custies_item['cust_id']); ?>" title="View Customer and Jobs for that customer"><?php echo $custies_item['name']; ?></a></td>
					    	<td><?php echo $custies_item['street']; ?></td>
					        <td><?php echo $custies_item['townzip'] ?></td>
					        <td><?php echo $custies_item['phone'] ?></td>
					        <td>
					        	<?php
					        		echo $custies_item['numb'] ;
					        		echo "&nbsp;<a href='".site_url()."/custies/newj/".$custies_item['cust_id']."' title='Add New Job for this Customer'><img class='shade' src='".base_url()."images/add.png' width='18px'></a>";

					        	?>
					        </td>
					        <td></td>

					    </tr>
					       
					<?php endforeach; ?>
				</table>
			</div>
		</div>
		<div class="col-lg-3">
			<img class="img-rounded" width="166px" height="132px" src="<?= base_url() ?>images/leafy.jpg" alt="Gutter full of Leaves" >
			<img class="img-rounded" width="166px" height="132px" src="<?= base_url() ?>images/leafy.jpg" alt="Gutter full of Leaves" >
			<img class="img-rounded" width="166px" height="132px" src="<?= base_url() ?>images/leafy.jpg" alt="Gutter full of Leaves" >
		</div>
	</div>
</div>


