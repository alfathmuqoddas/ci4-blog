<div class="py-5" style="min-height: 71vh;">
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <h2>Login</h2>
            <form action="<?php echo base_url(); ?>/users/login" method="post">
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" class="form-control" >
                </div>

                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control" >
                </div>
                
                <div class="d-grid">
                     <button type="submit" class="btn btn-success">Signin</button>
                </div>     
            </form>
        </div>  
    </div>
</div>
</div>