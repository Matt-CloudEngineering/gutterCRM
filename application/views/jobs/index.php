
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
	    <div class="col-md-10">
	    	<div class="form-group">

	    		<?php echo form_open('', 'name="myform"','id="jobs"'); ?>
<!-- 	    			<div id="sandbox"><input id="fdate" name="fdate" id="fdate" onchange='SetFromDate()'></div> -->
	    			<input type="text" value="" class="datepicker" data-provider="datepicker">
	    			<?php 
		    			$options = array(
		    				'todo' => 'todo',
		    				'done-owes' => 'done-owes',
		    				'done-paid' => 'done-paid'
		    				);


		    			if($this->input->post('status') == 'todo')
		    			{
		    				echo form_dropdown('status', $options, 'todo');
		    			} else if ($this->input->post('status') == 'done-owes')
		    			{
		    				echo form_dropdown('status', $options, 'done-owes');
		    			} else  if ($this->input->post('status') == 'done-paid')
		    			{
		    				echo form_dropdown('status', $options, 'done-paid');
		    			} else {
		    				echo form_dropdown('status', $options, 'todo');
		    			}			    				    			
		    			echo "&nbsp;Jobs found:".(count($job));
		    			$total=0;
		    		?>
		    		</form>

    		<div>
	    	<div class='table-responsive'>		
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
						<th style="width:255px">notes</th>
					</tr>
					<!--Load each record and create row in table with data -->	
					<?php foreach ($job as $job_item): ?>

						<tr>
					    	<td><a href="<?php echo site_url('custies/jedit/'.$job_item['cust_id'].'/'.$job_item['job_id']); ?>"><?php echo $job_item['job_id']; ?></a></td>
					    	<td><?php echo $job_item['date_req']; ?></td>
					    	<td><?php echo $job_item['date_sched']; ?></td>
					        <td><?php echo $job_item['date_comp'] ?></td>
<!-- 					        <td><?php echo $job_item['date_ent']; ?></td> -->
					        <td><?php
					        	echo ($job_item['price'] + $job_item['bagging'] + $job_item['sweeping']);
					        	$total.=$job_item['price'] + $job_item['bagging'] + $job_item['sweeping']; ?></td>
					        <td><?php echo $job_item['status'] ?></td>
					        <td><a href="<?php echo site_url('custies/view/'.$job_item['cust_id']); ?>"><?php echo $job_item['name']; ?></td>
					        <td><?php echo $job_item['notes']; ?></td>
					    </tr>
					       
					<?php endforeach; ?>
				</table>
			</div>
		</div>		
	</div>
</div>


