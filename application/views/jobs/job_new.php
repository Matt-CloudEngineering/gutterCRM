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
				echo "<p>Add New Job</p>";
				?>

                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>


                <?php echo form_open(); 

					echo "<div class='form-group'>";

                    $today = date("Y-m-d");

					echo "<label>Date Requested:</label><input type='text' name='date_req'  class='form-control' value='".$today."' ><br/>";

					echo "<label>Date Scheduled:</label><input type='text' name='date_sched'  class='form-control' placeholder='YYYY-MM-DD' ><br/>";

                    echo "<label>Price:</label><input type='text' name='price' placeholder='85' class='form-control' ><br/>";

					echo "<label>Bagging:</label><input type='text' name='bagging' placeholder='20'  class='form-control' ><br/>";

                    echo "<label>Sweeping:</label><input type='text' name='sweeping' placeholder='15'  class='form-control' ><br/>";

					echo "<label>Status:</label><select name='status'  class='form-control' title='Job Status'><option selected>todo</option><option>done-paid</option><option>done-owes</option></select><br/>";

                    echo "<label>Note:</label><textarea name='notes'  class='form-control'></textarea><br/>";

    				?>
                    <span class='ftext'>Note: The Date Completed field is updated when the status is changed from 'todo' to 'done-owes' or 'done-paid'</span>
					<br/><br/>
					<input class="btn btn-default" type="submit" name="submit" value="Create Job" />
                    
				</form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->