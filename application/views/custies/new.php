    <style>
    .form-control {
    	width:75%;
    }
    label {
    	width:65px;
    	text-align: left;
    }
    </style>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

				<?php
				echo "<p>Customer Record Editor</p>";
				?>

				<?php echo validation_errors(); ?>

				<?php echo form_open(); 

					echo "<div class='form-group'>";

					echo "<label>Name:</label><input type='text' name='name'  class='form-control'><br/>";

					echo "<label>Street:</label><input type='text' name='street'  class='form-control'><br/>";

					echo "<label>TownZip:</label><input type='text' name='townzip'  class='form-control'><br/>";

					echo "<label>phone:</label><input type='text' name='phone'  class='form-control'><br/>";
					?>
					<br>
					<input class="btn btn-default" type="submit" name="submit" value="Update Customer" />
					</div>
				</form>

            </div>
        </div>
    </div>
    <!-- /.container -->