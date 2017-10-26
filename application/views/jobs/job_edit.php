    <style>
    .form-control {
    	width:75%;
    }
    label {
    	width:85px;
    	text-align: left;
    }
    .ftext {
        padding-left: 88px;
        font-size: smaller;
        line-height: 14px;
    }
    </style>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <hr/>

				<?php
                    $link = site_url('custies/view/'.$job_item['cust_id']);
                    echo "<a style='line-height:35px;font-size:smaller;' href='$link'>Return to Customer View</a><br/>";
                    echo "<h4>|| Job Record Editor ||</h4><br/>";

				?>

                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>


                <?php echo form_open(); 

					echo "<div class='form-group'>";

                    echo "<input type='hidden' name='cust_id'  class='form-control' value='".$job_item['cust_id']."' ><br/>";

                    echo "<label>Date Requested:</label><input type='text' name='date_req'  class='form-control' value='".$job_item['date_req']."' ><br/>";

					echo "<label>Date Scheduled:</label><input type='text' name='date_sched'  class='form-control' value='".$job_item['date_sched']."' ><br/>";

                    echo "<label>Price:</label><input type='text' name='price'  class='form-control' value='".$job_item['price']."' ><br/>";

					echo "<label>Bagging:</label><input type='text' name='bagging'  class='form-control' value='".$job_item['bagging']."' ><br/>";

                    echo "<label>Sweeping:</label><input type='text' name='sweeping'  class='form-control' value='".$job_item['sweeping']."' ><br/>";

                    $options = array(
                            'todo'         => 'todo',
                            'done-owes'    => 'done-owes',
                            'done-paid'    => 'done-paid'
                    );
                    echo "<label>Status:</label>".form_dropdown('status', $options, $job_item['status'],'class=form-control')."<br/>";

                    echo "<label>Note:</label><textarea name='notes'  class='form-control'>".$job_item['notes']."</textarea><br/>";

    				?>
                    <span class='ftext'>Note: The Date Completed field is updated when the status is changed from 'todo' to 'done-owes' or 'done-paid'</span>
					<br/><br/>
					<input class="btn btn-default" type="submit" name="submit" value="Update Job" />
                    <a class="btn btn-default" href='<?php echo site_url()."/custies/newj/".$custies_item['cust_id']?>'>New Job</a>

				</form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->