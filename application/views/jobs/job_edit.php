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
				echo "<h4>|| Job Record Editor ||</h4><br/>";
				?>

                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>


                <?php echo form_open(); 

					echo "<div class='form-group'>";

					echo "<label>Date Requested:</label><input type='text' name='date_req'  class='form-control' value='".$job_item['date_req']."' ><br/>";

					echo "<label>Date Scheduled:</label><input type='text' name='date_sch'  class='form-control' value='".$job_item['date_sched']."' ><br/>";

                    echo "<label>Price:</label><input type='text' name='price'  class='form-control' value='".$job_item['price']."' ><br/>";

					echo "<label>Bagging:</label><input type='text' name='bagging'  class='form-control' value='".$job_item['bagging']."' ><br/>";

					echo "<label>Status:</label><select name='status'  class='form-control' title='Job Status'>";

                    if ($job_item['status']==0) //logic to handle status enumerator
                    {
                        echo "<option selected>todo</option><option>done-paid</option><option>done-owes</option></select><br/>";
                    } else if ($job_item['status']==1)    
                    {
                        echo "<option>t0do</option><option selected>done-paid</option><option>done-owes</option></select><br/>";
                    } else 
                    {

                         echo "<option>t0do</option><option>done-paid</option><option selected>done-owes</option></select><br/>";
                    }
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