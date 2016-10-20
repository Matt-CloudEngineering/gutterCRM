    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            	<div class="form-group">
	                


					<?php
					echo "<p>Customer Record Editor</p>";
					?>

					<?php echo validation_errors(); 
						$data = array(
						    'name' => $this->input->post('name'),
						    'street' => $this->input->post('street'),
						    'phone' => $this->input->post('phone'),
						    'townzip' => $this->input->post('townzip')
						    );
					?>

					<?php echo form_open(base_url().'index.php/custies/search', 'class="form-inline"'); 

						echo "<div class='form-group'>";
						echo "<label for='name'>Name:</label><input type='text' name='name' id='name' class='form-control' value='".$data['name']."'' ></div>";
						echo "<div class='form-group'>";
						echo "<label for='street'>Street:</label><input type='text' name='street' id='street' class='form-control' value='".$data['street']."'' ></div>";
						echo "<div class='form-group'>";
						echo "<label for='townzip'>TownZip:</label><input type='text' name='townzip' id='townzip' class='form-control' value='".$data['townzip']."'' ></div>";
						
						echo "<div class='form-group'>";
						echo "<label for='phone'>phone:</label><input type='text' id='phone' name='phone' class='form-control' value='".$data['phone']."'' ></div>";
						?>
												
						<input class="btn btn-default" type="submit" name="submit" value="Search" />
					</form>
				</div>
            </div>
        </div>
    </div>
    <!-- /.container -->

        <!-- Page Content -->
    <div class="container">
    	<div class="row">
    	    <div class="col-lg-9">
    	    	<div class="table-responsive">
    	    	  	<table class="table">
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