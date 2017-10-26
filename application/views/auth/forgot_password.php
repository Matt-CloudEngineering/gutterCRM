
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
        		<p><a href="<?php echo site_url('auth/login'); ?>">Login</a></p>

        		<?php 
	        		if($success){
	        			echo '<p>Thank you. We have sent you an email with further instructions on how to reset your password.</p>';
	        		} else {
	        		    echo "<div class='form-group'>";
	        		    echo form_open();             		    
	        		    echo form_label('Email Address', 'email') .'<br />';
	        		    echo form_input(array('name' => 'email', 'value' => set_value('email'), 'class'=>'form-control')) .'<br />';
	        		    echo form_error('email');
	        		    echo form_submit(array('type' => 'submit', 'value' => 'Reset Password','class'=>'form-control'));
	        		    echo form_close("</div");
	        	    }
        	    ?>
            </div>
        </div>
    </div>
    <!-- /.container -->