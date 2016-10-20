<hr>

<div class='container'>
	<div class="row">
	    <div class="col-lg-9">
	    	<div class="table-responsive">
	    	  	<table class="table">
					<tr>
						<th>Job Id</th>
						<th>date_req</th>
						
						<th>date_sched</th>
						<th>date_comp</th>
						<th>date_ent</th>
						<th>Total</th>
						<th>status</th>
						<th>notes</th>
					</tr>
					<!--Load each record and create row in table with data -->	
					<?php foreach ($job as $job_item): ?>

						<tr>
					    	<td><a href="<?php echo site_url('custies/jedit/'.$custies_item['cust_id']."/".$job_item['job_id']); ?>"><?php echo $job_item['job_id']; ?></a></td>
					    	<td><?php echo $job_item['date_req']; ?></td>
					    	<td><?php echo $job_item['date_sched']; ?></td>
					        <td><?php echo $job_item['date_comp'] ?></td>
					        <td><?php echo $job_item['date_ent']; ?></td>
					        <td><?php echo ($job_item['price'] + $job_item['bagging']); ?></td>
					        <td><?php echo $job_item['status'] ?></td>
					        <td><?php echo $job_item['notes']; ?></td>

					    </tr>
					       
					<?php endforeach; ?>

	               <!--  -->
				</table>

				<a class="btn btn-default" href='<?php echo site_url()."/custies/newj/".$custies_item['cust_id'];?>' > New Job</a>
			</div>
		</div>
		<div class="col-lg-3">
			<img class="img-rounded" width="166px" height="132px" src="<?= base_url() ?>images/leafy.jpg" alt="Gutter full of Leaves" >
			<img class="img-rounded" width="166px" height="132px" src="<?= base_url() ?>images/leafy.jpg" alt="Gutter full of Leaves" >
			<img class="img-rounded" width="166px" height="132px" src="<?= base_url() ?>images/leafy.jpg" alt="Gutter full of Leaves" >
		</div>
	</div>
</div>


