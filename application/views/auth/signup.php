    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p><a href="<?php echo site_url('auth/login'); ?>">Login</a></p>
                <div class="form-control">
                    <?php 
                       if($error) echo '<p class="error">'. $error .'</p>';
                       echo form_open(); 
                       echo form_label('Email Address', 'email') .'<br />';
                       echo form_input(array('name' => 'email', 'value' => set_value('email'),'class'=>'form-control')) .'<br />';
                       echo form_error('email');
                       echo form_label('Password', 'password') .'<br />';
                       echo form_password(array('name' => 'password', 'value' => set_value('password'),'class'=>'form-control')) .'<br />';
                       echo form_error('password');
                       echo form_label('Confirm Password', 'password_conf') .'<br />';
                       echo form_password(array('name' => 'password_conf', 'value' => set_value('password_conf'),'class'=>'form-control')) .'<br />';
                       echo form_error('password_conf');
                       echo form_submit(array('type' => 'submit', 'value' => 'Sign Up','class'=>'form-control'));
                       echo form_close();
                       ?>
               </div>
            </div>    
        </div>
    </div>
    <!-- /.container -->



</body>
</html>
