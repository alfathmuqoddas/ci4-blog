<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <h2>Login</h2>
            <?php echo form_open('users/login'); ?>
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" class="form-control" >
                </div>

                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control" >
                </div>
                
                <div class="d-grid">
                     <button type="submit" class="btn btn-success">Signin</button>
                </div>     
            <?php echo form_close(); ?>
            <p>Not a user? <a href="<?php echo base_url(); ?>/users/register">register now!</a>
        </div>  
    </div>
</div>