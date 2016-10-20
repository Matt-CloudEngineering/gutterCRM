
    <!-- Page Content -->
<div class="container">
	<div class="row">
	    <div class="col-lg-9">
	    	<div class="table-responsive">
	    	  	<table class="table table-hover">
					<tr>
						<th>Name</th>
						<th>Street</th>
						<th>Town, State Zip</th>
						<th>Phone</th>
					</tr>
	                
	                <?php foreach ($custies as $custies_item): ?>


	            	<tr>
	            		<td><a href="<?php echo site_url('custies/view/'.$custies_item['cust_id']); ?>"><?php echo $custies_item['name']; ?></a></td>
	            		<td><?php echo $custies_item['street']; ?></td>
	            	    <td><?php echo $custies_item['townzip'] ?></td>
	            	    <td><?php echo $custies_item['phone'] ?></td>

	            	</tr>

	            	<?php endforeach; ?>

				</table>
			</div>
        </div>
    </div>
</div>
<!-- /.container -->