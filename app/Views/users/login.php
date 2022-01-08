<div class="py-5" style="min-height: 71vh;">
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
        </div>  
    </div>
</div>
</div>