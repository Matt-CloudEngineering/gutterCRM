
<!-- Jobs Index.php
Author: Matt Smith -->
<!-- 
<script>
$('.datepicker').datepicker();
</script>*/
-->
<script type="text/javascript">
    window.onload = function() {
        document.forms['myform'].addEventListener('change', function() {
            this.submit();
        }, true);
    };
</script>

<!-- Jobs Index -->
<div class='container'>
	<div class="row">
	    <div class="col-lg-9">
	    	<div class="table-responsive">

	    		<?php echo form_open('', 'name="myform"','id="jobs"'); ?>
<!-- 	    			<div id="sandbox"><input id="fdate" name="fdate" id="fdate" onchange='SetFromDate()'></div> -->
	    			<input type="text" value="" class="datepicker" data-provider="datepicker">
		    		<select name="status" id="name" onchange='Running()'>
		    			<?php if($status = 'todo')
		    			{
		    				echo "<option value='todo' selected>Todo</option>";
		    				echo "<option value='done-owes'>Done-Owes</option>";
		    				echo "<option value='done-paid'>Done-Paid</option>";
		    			} else if ($status = 'done-owes') {
		    				echo "<option value='todo'>todo</option>";
		    				echo "<option value='done-owes' selected>done-owes</option>";
		    				echo "<option value='done-paid'>done-paid</option>";
		    			} else {
		    				echo "<option value='todo'>todo</option>";
							echo "<option value='done-owes'>done-owes</option>";
							echo "<option value='done-paid' selected>done-paid</option>";
		    			} 			
		    			?>
		    			

		    		</select>
		    		&nbsp;Jobs found:<?php echo (count($job)); ?>
	    		</form>
	    		<div>
	    			
	    		</div>
	    	  	<table class="table">
					<tr>
						<th>Job Id</th>
						<th style="width:105px">date_req</th>						
						<th style="width:105px">date_sched</th>
						<th>date_comp</th>
<!-- 						<th>date_ent</th> -->
						<th>Total</th>
						<th style="width:105px">status</th>
						<th style="width:155px">Name</th>
						<th>notes</th>
					</tr>
					<!--Load each record and create row in table with data -->	
					<?php foreach ($job as $job_item): ?>

						<tr>
					    	<td><a href="<?php echo site_url('custies/jedit/'.$job_item['cust_id'].'/'.$job_item['job_id']); ?>"><?php echo $job_item['job_id']; ?></a></td>
					    	<td><?php echo $job_item['date_req']; ?></td>
					    	<td><?php echo $job_item['date_sched']; ?></td>
					        <td><?php echo $job_item['date_comp'] ?></td>
<!-- 					        <td><?php echo $job_item['date_ent']; ?></td> -->
					        <td><?php echo ($job_item['price'] + $job_item['bagging']); ?></td>
					        <td><?php echo $job_item['status'] ?></td>
					        <td><a href="<?php echo site_url('custies/view/'.$job_item['cust_id']); ?>"><?php echo $job_item['name']; ?></td>
					        <td><?php echo $job_item['notes']; ?></td>

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


