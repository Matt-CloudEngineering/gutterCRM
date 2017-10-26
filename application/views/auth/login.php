    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p>
                    <a href="<?php echo site_url('auth/signup'); ?>">Sign Up</a> | <a href="<?php echo site_url('auth/forgot'); ?>">Forgot Password?</a>
                </p>
                <div class="form-group">
                    <?php 
                    if($error) echo '<p class="error">'. $error .'</p>';
                    echo form_open(); 
                    echo form_label('Email Address:', 'email') .'<br />';
                    echo form_input(array('name' => 'email', 'value' => set_value('email'),'class'=>'form-control')) .'<br />';
                    echo form_error('email');
                    echo form_label('Password:', 'password') .'<br />';
                    echo form_password(array('name' => 'password', 'value' => set_value('password'),'class'=>'form-control')) .'<br />';
                    echo form_error('password');
                    echo form_submit(array('type' => 'submit', 'value' => 'Login','class'=>'form-control'));
                    echo form_close();
                    ?>
                </div>
            </div>    
        </div>
    </div>
    <!-- /.container -->


